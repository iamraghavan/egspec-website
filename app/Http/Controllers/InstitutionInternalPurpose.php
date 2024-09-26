<?php

namespace App\Http\Controllers;

use App\Models\WebsiteUpdateEnquiry;
use App\Models\WebsiteTicketDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Mail\TicketSubmissionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;

class InstitutionInternalPurpose extends Controller
{
    // Display contact web admin page
    public function contact_website_admin()
    {
        return view('pages.institution.contact-web-admin');
    }

    // Handle the form submission
    public function store(Request $request)
    {
        // Step 1: Validate data
        $validatedData = $this->validateRequest($request);

        if (!$validatedData) {
            return redirect()->back()->with('error', 'Validation failed, please check your input.');
        }

        try {
            DB::beginTransaction();  // Start DB Transaction

            // Step 2: Generate unique ticket ID
            $ticketId = $this->generateUniqueTicketId($request->input('department'));

            // Step 3: Save the data into the database
            $enquiry = $this->saveEnquiryData($request, $ticketId);
            $ticketDetails = $this->createTicketDetails($ticketId);

            // Step 4: Send notification email
            $this->sendNotificationEmail($enquiry, $ticketDetails);

            DB::commit(); // Commit the transaction if everything is successful

            return redirect()->route('confirmation', ['ticket-id' => $ticketId])
                ->with('success', 'Your submission has been received.')
                ->with('ticket_status', $ticketDetails->ticket_status);
        } catch (\Exception $e) {
            DB::rollBack();  // Rollback in case of error

            Log::error('Error storing data: ' . $e->getMessage(), ['request' => $request->all()]);

            return redirect()->back()->with('error', 'An error occurred while processing your submission. Please try again later.');
        }
    }

    // Step 1: Validate request data
    private function validateRequest($request)
    {
        return Validator::make($request->all(), [
            'staff_id' => 'required|alpha_num',
            'staff_name' => 'required|regex:/^[\pL\s]+$/u',
            'staff_email' => 'required|email|regex:/@egspec\.org$/',
            'staff_phone' => 'required|regex:/^\d{4} \d{3} \d{3}$/',
            'department' => 'required',
            'work_type' => 'required',
            'data_update' => 'required',
            'google_drive_urls.*' => 'nullable|url',
            'confirmation' => 'required|accepted',
        ])->validate();
    }

    // Step 2: Generate unique ticket ID
    private function generateUniqueTicketId($department)
    {
        $currentYear = date('Y');
        $currentMonth = date('m');
        $departmentCode = strtoupper(substr($department, 0, 4));

        do {
            $randomNumber = rand(1000, 9999);
            $ticketId = "#EGSPEC/{$currentYear}/{$currentMonth}/{$departmentCode}{$randomNumber}";

            // Cache lookup to avoid repeated DB queries
            $exists = Cache::remember("ticket_id_{$ticketId}", 600, function () use ($ticketId) {
                return WebsiteUpdateEnquiry::where('ticket_id', $ticketId)->exists();
            });
        } while ($exists);

        return $ticketId;
    }

    // Step 3: Save enquiry data
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

    // Step 4: Create ticket details
    private function createTicketDetails($ticketId)
    {
        return WebsiteTicketDetails::create([
            'ticket_id' => $ticketId,
            'ticket_status' => 'New',
            'ticket_work_description' => '',
            'appeal_data' => 'Currently no Appeal Data',
        ]);
    }

    // Step 5: Send notification email
    private function sendNotificationEmail($enquiry, $ticketDetails)
    {
        try {
            $ticketStatus = $ticketDetails->ticket_status;
            Mail::to(['web@egspec.org', 'raghavan@egspec.org', 'noreply@egspec.org'])->send(new TicketSubmissionMail($enquiry, $ticketStatus));
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }
    }
}