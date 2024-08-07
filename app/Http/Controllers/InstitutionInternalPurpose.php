<?php

namespace App\Http\Controllers;

use App\Models\WebsiteUpdateEnquiry;
use App\Models\WebsiteTicketDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Mail\TicketSubmissionMail;
use Illuminate\Support\Facades\Mail;


class InstitutionInternalPurpose extends Controller
{
    public function contact_website_admin()
    {
        return view('pages.institution.contact-web-admin');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'staff_id' => 'required|alpha_num',
            'staff_name' => 'required|regex:/^[\pL\s]+$/u',
            'staff_email' => 'required|email|regex:/@egspec\.org$/',
            'staff_phone' => 'required|regex:/^\d{4} \d{3} \d{3}$/',
            'department' => 'required',
            'work_type' => 'required',
            'data_update' => 'required',
            'google_drive_urls.*' => 'nullable|url',
            'confirmation' => 'required|accepted',
        ]);

        try {
            // Generate unique ticket ID
            $ticketId = $this->generateUniqueTicketId($request->input('department'));

            // Create a new WebsiteUpdateEnquiry instance
            $enquiry = WebsiteUpdateEnquiry::create([
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

            // Create a new WebsiteTicketDetails instance
            $ticketDetails = WebsiteTicketDetails::create([
                'ticket_id' => $ticketId,
                'ticket_status' => 'New',
                'ticket_work_description' => '',
                'appeal_data' => 'Currently no Appeal Data',
            ]);

            $ticketStatus = WebsiteTicketDetails::where('ticket_id', $ticketId)->value('ticket_status');

            // Mail::to(['web@egspec.org', 'praveenkumar@egspec.org'])->send(new TicketSubmissionMail($enquiry, $ticketStatus));

            return redirect()->route('confirmation', ['ticket-id' => $ticketId])->with([
                'success' => 'Your submission has been received.',
                'ticket_status' => $ticketStatus
            ]);
        } catch (\Exception $e) {
            // Log the error
            DB::rollBack();

            // Log the detailed error message
            Log::error('Error storing data: ' . $e->getMessage());
            Log::error('Request data: ' . json_encode($request->all()));

            // Return an error message to the user
            return redirect()->back()->with('error', 'An error occurred while processing your submission. Please try again later.');
        }
    }


    private function generateUniqueTicketId($department)
    {
        $currentYear = date('Y');
        $currentMonth = date('m');
        $departmentCode = strtoupper(substr($department, 0, 4)); // Limit to 4 characters for consistency

        do {
            $randomNumber = rand(1000, 9999); // Generate a random 4-digit number
            $ticketId = "#EGSPEC/{$currentYear}/{$currentMonth}/{$departmentCode}{$randomNumber}";

            // Check if the generated ticket ID already exists
            $exists = WebsiteUpdateEnquiry::where('ticket_id', $ticketId)->exists();
        } while ($exists);

        return $ticketId;
    }
}
