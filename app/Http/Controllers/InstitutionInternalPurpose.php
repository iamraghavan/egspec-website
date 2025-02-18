<?php

namespace App\Http\Controllers;

use App\Models\TicketConversations;
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
use App\Mail\ContactSubmissionMail; // Import the ContactSubmissionMail class
use App\Mail\AcknowledgmentMail; // Import the AcknowledgmentMail class
use App\Models\Album;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;
use NotificationChannels\WebPush\PushSubscription;

class InstitutionInternalPurpose extends Controller
{
    // Display contact web admin page
    public function contactWebsiteAdmin()
    {
        // Set SEO title and description
        SEOTools::setTitle('Contact Web Admin | Raghavan Jeeva - Website Developer');
        SEOTools::setDescription('Get in touch with Raghavan Jeeva, the Website Developer, for any inquiries regarding the website.');

        // Set Open Graph tags
        SEOTools::opengraph()->setTitle('E.G.S. Pillay Engineering College - Website Admin');
        SEOTools::opengraph()->setDescription('Get in touch with Raghavan Jeeva, the Website Developer, for any inquiries regarding the website.');
        SEOTools::opengraph()->setUrl('https://egspec.org/institution/internal/contact/website/admin'); // Set the URL
        SEOTools::opengraph()->addImage('https://egspec.org/assets/images/og_raghavan_banner.webp'); // Set the image

        // Additional Open Graph profile properties
        SEOTools::opengraph()->addProperty('type', 'profile');
        SEOTools::opengraph()->addProperty('profile:first_name', 'Raghavan');
        SEOTools::opengraph()->addProperty('profile:last_name', 'Jeeva');
        SEOTools::opengraph()->addProperty('profile:username', 'iamraghavan');

        // Set Twitter tags
        SEOTools::twitter()->setTitle('Contact Web Admin | Raghavan Jeeva - Website Developer');
        SEOTools::twitter()->setDescription('Get in touch with Raghavan Jeeva, the Website Developer, for any inquiries regarding the website.');

        // JSON-LD structured data
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
            'https://www.linkedin.com/in/raghvanjeva',
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

            // Generate unique ticket ID and save enquiry data
            $ticketId = $this->generateUniqueTicketId($request->input('department'));
            $enquiry = $this->saveEnquiryData($request, $ticketId);
            $ticketDetails = $this->createTicketDetails($ticketId);

            // Create and store a new ticket conversation
            $this->createTicketConversation($ticketId, $request->input('data_update'), $request->input('staff_email'));

            DB::commit();

            // Dispatch job for sending notifications
            SendNotificationJob::dispatch($enquiry, $ticketDetails, $ticketId);

            // Send notification email
            $this->sendNotificationEmail($enquiry, $ticketDetails, $request->input('staff_email'));

            return redirect()->route('confirmation', ['ticket-id' => $ticketId])
                ->with('success', 'Your submission has been received.')
                ->with('ticket_status', $ticketDetails->ticket_status);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing data: ' . $e->getMessage(), ['request' => $request->all()]);

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    // Create and store a new ticket conversation
    private function createTicketConversation($ticketId, $message, $staffEmail)
    {
        return TicketConversations::create([
            'ticket_id' => $ticketId,
            'sender_type' => 'ticket_creator', // You can change this if needed
            'message' => $message,
            'cc_recipients' => json_encode([$staffEmail]), // Store the staff email in CC
            'last_updated' => now()->format('H:i:s'),
        ]);
    }

    // Send notification email
    private function sendNotificationEmail($enquiry, $ticketDetails, $staffEmail)
    {
        try {
            $ticketStatus = $ticketDetails->ticket_status;
            Mail::to(['web@egspec.org', 'raghavan@egspec.org', 'noreply@egspec.org'])
                ->cc($staffEmail) // CC the staff email
                ->send(new TicketSubmissionMail($enquiry, $ticketStatus));
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
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

    public function social_meida()
    {
        return view('pages.institution.social-media');
    }

    public function contact_us()
    {
        SEOTools::setTitle('Contact Us - E.G.S. Pillay Engineering College');
        SEOTools::setDescription('Get in touch with E.G.S. Pillay Engineering College. Contact us for admissions, inquiries, and support.');
        SEOTools::setCanonical(url()->current());

        // Set Open Graph data
        SEOTools::opengraph()->setTitle('Contact Us - E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->setDescription('Reach out to us for any inquiries or support. We are here to help!');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage('https://egspec.org/assets/images/og_raghavan_banner.webp');
        // Set Twitter Card data
        SEOTools::twitter()->setTitle('Contact Us - E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Connect with us for admissions and other inquiries.');

        // Set JSON-LD structured data
        JsonLd::setType('ContactPage');
        JsonLd::addValue('name', 'Contact Us');
        JsonLd::addValue('description', 'Get in touch with E.G.S. Pillay Engineering College.');
        JsonLd::addValue('url', url()->current());

        return view('pages.institution.contact-us');
    }

    public function contact_submit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'requirement' => 'required|string',
            'department' => 'nullable|string',
            'message' => 'required|string|max:500',
        ]);

        // Define email recipients based on requirement and department
        $emails = [
            'admission_enquiry' => 'raghavan@egspec.org',
            'coe' => 'coe@egspec.org',
            'head_office' => 'headoffice@egspec.org',
            'placement' => 'placement@egspec.org',
            'departments' => [
                'MECH' => 'mech@egspec.org',
                'CIVIL' => 'civil@egspec.org',
                'EEE' => 'eee@egspec.org',
                'ECE' => 'ece@egspec.org',
                'CSE' => 'cse@egspec.org',
                'IT' => 'it@egspec.org',
                'BME' => 'bme@egspec.org',
                'CSBS' => 'csbs@egspec.org',
                'AIDS' => 'raghavan@egspec.org',
            ],
        ];

        // Determine recipient email
        $recipientEmail = null;
        if ($request->requirement === 'departments' && !empty($request->department)) {
            $recipientEmail = $emails['departments'][$request->department] ?? null;
        } else {
            $recipientEmail = $emails[$request->requirement] ?? null;
        }

        // Check if recipient email was found
        if ($recipientEmail) {
            // Clean and log the message content
            $messageContent = trim($request->message);
            Log::info('Contact Form Submission', [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'requirement' => $request->requirement,
                'department' => $request->department,
                'message' => $messageContent,
            ]);

            try {
                $data = [
                    'messages' => trim($request->message),
                ];

                // Send email to the recipient using Mailable
                Mail::to($recipientEmail)->send(new ContactSubmissionMail(
                    $request->name,
                    $request->email,
                    $request->phone,
                    $data,
                    $request->requirement
                ));

                // Send acknowledgment email to the user using Mailable
                Mail::to($request->email)->send(new AcknowledgmentMail($request->name, $request->email));

                session()->flash('success', 'Your message has been sent successfully!');
                return back();
            } catch (\Exception $e) {
                Log::error('Error sending email', ['error' => $e->getMessage()]);
                return response()->json(['message' => 'There was an error sending your message.'], 500);
            }
        }

        return response()->json(['message' => 'Invalid requirement or department.'], 400);
    }


    public function searchq(Request $request)
    {
        $query = $request->input('q');

        // Search for courses
        $courseResults = Course::where('course_name', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->get();

        // Search for events
        $eventResults = Event::where('event_name', 'LIKE', '%' . $query . '%')
            ->orWhere('participant_details', 'LIKE', '%' . $query . '%')
            ->get();

        return view('pages.institution.search-results', compact('query', 'courseResults', 'eventResults'));
    }


    public function gallery_index(Request $request)
    {
        // Get paginated albums
        $albums = Album::with(['photos' => function ($query) {
            $query->inRandomOrder()->limit(1); // Fetch a random image
        }])->paginate(6); // Adjust the number of albums per page

        return view('pages.institution.gallery', compact('albums'));
    }


    public function showAlbum(Request $request)
    {
        $albumId = $request->query('album');

        // Check if the album ID is provided
        if (!$albumId) {
            return redirect()->route('gallery_index')->with('error', 'Album ID is required.');
        }

        // Retrieve the album with its photos, paginated
        $album = Album::with('user')->findOrFail($albumId);
        $photos = $album->photos()->paginate(5); // Adjust the number of photos per page as needed

        return view('pages.institution.photo', compact('album', 'photos'));
    }

    public function stores(Request $request)
    {
        $subscription = $request->input();
        PushSubscription::create([
            'endpoint' => $subscription['endpoint'],
            'public_key' => $subscription['keys']['p256dh'],
            'auth_token' => $subscription['keys']['auth'],
        ]);

        return response()->json(['success' => true], 200);
    }
}
