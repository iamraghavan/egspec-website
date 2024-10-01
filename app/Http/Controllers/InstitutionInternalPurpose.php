<?php

namespace App\Http\Controllers;

use App\Models\WebsiteUpdateEnquiry;
use App\Models\WebsiteTicketDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\GoogleChatNotification;
use App\Mail\TicketSubmissionMail;
use Illuminate\Support\Facades\Config;
use App\Jobs\SendNotificationJob;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\JsonLd;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Route;

class InstitutionInternalPurpose extends Controller
{
    // Display contact web admin page
    public function contactWebsiteAdmin()
    {
        // Set SEO title and description
        SEOTools::setTitle('Contact Web Admin | Raghavan Jeeva - Website Developer');
        SEOTools::setDescription('Get in touch with Raghavan Jeeva, the Website Developer, for any inquiries regarding the website.');

        // Set Open Graph tags
        SEOTools::opengraph()->setTitle('Contact Web Admin | Raghavan Jeeva - Website Developer');
        SEOTools::opengraph()->setDescription('Get in touch with Raghavan Jeeva, the Website Developer, for any inquiries regarding the website.');
        SEOTools::opengraph()->setUrl(request()->fullUrl()); // Set the current URL

        // Set Twitter tags
        SEOTools::twitter()->setTitle('Contact Web Admin | Raghavan Jeeva - Website Developer');
        SEOTools::twitter()->setDescription('Get in touch with Raghavan Jeeva, the Website Developer, for any inquiries regarding the website.');

        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('name', 'Raghavan Jeeva');
        JsonLd::addValue('image', 'https://egspec.blob.core.windows.net/egspec-assets/raghaven.webp');
        JsonLd::addValue('url', 'https://jsraghavan.me/');
        JsonLd::addValue('jobTitle', 'Website Developer');
        JsonLd::addValue('worksFor', [
            '@type' => 'Organization',
            'name' => 'EGS Pillay Group of Institutions',
        ]);
        JsonLd::addValue('address', [
            '@type' => 'PostalAddress',
            'streetAddress' => 'No : 183/2 DHERMER STREET',
            'addressLocality' => 'NAGAPATTINAM',
            'addressRegion' => 'Tamil Nadu',
            'postalCode' => '611003',
            'addressCountry' => 'India',
        ]);
        JsonLd::addValue('sameAs', [
            'https://www.instagram.com/iamragahvan',
            'https://www.facebook.com/iam.raghavan',
            'https://twitter.com/jsraghavan',
            'https://www.linkedin.com/in/raghavanjeeva',
        ]);

        return view('pages.institution.contact-web-admin');
    }

    // Handle the form submission
    public function store(Request $request)
    {
        $request->validate([
            'cf-turnstile-response' => ['required', app(Turnstile::class)],
        ]);

        $validatedData = $this->validateRequest($request);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        try {
            DB::beginTransaction();

            $ticketId = $this->generateUniqueTicketId($request->input('department'));
            $enquiry = $this->saveEnquiryData($request, $ticketId);
            $ticketDetails = $this->createTicketDetails($ticketId);

            DB::commit();

            // Dispatch job for sending notifications
            SendNotificationJob::dispatch($enquiry, $ticketDetails, $ticketId);

            return redirect()->route('confirmation', ['ticket-id' => $ticketId])
                ->with('success', 'Your submission has been received.')
                ->with('ticket_status', $ticketDetails->ticket_status);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing data: ' . $e->getMessage(), ['request' => $request->all()]);

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    // Send notifications


    // Validate request data
    private function validateRequest($request)
    {
        return Validator::make($request->all(), [
            'staff_id' => 'required|alpha_num',
            'staff_name' => 'required|regex:/^[\pL\s]+$/u',
            'staff_email' => 'required|email|regex:/@egspec\.org$/',
            'staff_phone' => 'required|regex:/^\d{5}\s\d{5}$/',
            'department' => 'required',
            'work_type' => 'required',
            'data_update' => 'required',
            'google_drive_urls.*' => 'nullable|url',
            'confirmation' => 'required|accepted',
        ]);
    }

    // Generate unique ticket ID
    private function generateUniqueTicketId($department)
    {
        $currentYear = date('Y');
        $currentMonth = date('m');
        $departmentCode = strtoupper(substr($department, 0, 4));

        do {
            $randomNumber = rand(1000, 9999);
            $ticketId = "EGSPEC/{$currentYear}/{$currentMonth}/{$departmentCode}{$randomNumber}";

            // Cache lookup to avoid repeated DB queries
            $exists = Cache::remember("ticket_id_{$ticketId}", 600, function () use ($ticketId) {
                return WebsiteUpdateEnquiry::where('ticket_id', $ticketId)->exists();
            });
        } while ($exists);

        return $ticketId;
    }

    // Save enquiry data
    private function saveEnquiryData($request, $ticketId)
    {
        return WebsiteUpdateEnquiry::create([
            'staff_id' => $request->input('staff_id'),
            'ticket_id' => $ticketId,
            'staff_name' => strtoupper($request->input('staff_name')),
            'staff_email' => $request->input('staff_email'),
            'staff_phone' => $request->input('staff_phone'),
            'department' => strtoupper($request->input('department')),
            'work_type' => $request->input('work_type'),
            'data_update' => $request->input('data_update'),
            'google_drive_urls' => json_encode($request->input('google_drive_urls')),
            'confirmation' => $request->input('confirmation') === 'on',
        ]);
    }

    // Create ticket details
    private function createTicketDetails($ticketId)
    {
        return WebsiteTicketDetails::create([
            'ticket_id' => $ticketId,
            'ticket_status' => 'New',
            'ticket_work_description' => '',
            'appeal_data' => 'Currently no Appeal Data',
        ]);
    }

    // Send notification email
    private function sendNotificationEmail($enquiry, $ticketDetails)
    {
        try {
            $ticketStatus = $ticketDetails->ticket_status;
            Mail::to(['web@egspec.org', 'raghavan@egspec.org', 'noreply@egspec.org'])
                ->send(new TicketSubmissionMail($enquiry, $ticketStatus));
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }
    }


    public function index()
    {
        // Get all routes
        $routes = Route::getRoutes();

        // Filter GET routes
        $getRoutes = [];
        foreach ($routes as $route) {
            if (in_array('GET', $route->methods())) {
                $getRoutes[] = $route->uri();
            }
        }

        return view('pages.institution.sitemap', compact('getRoutes'));
    }


    public function privacy_policy()
    {
        return view('pages.institution.privacy-policy');
    }

    public function terms_conditions()
    {
        return view('pages.institution.terms-and-conditions');
    }
}
