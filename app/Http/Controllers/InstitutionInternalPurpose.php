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


class InstitutionInternalPurpose extends Controller
{
    // Display contact web admin page
    public function contactWebsiteAdmin()
    {
        return view('pages.institution.contact-web-admin');
    }

    // Handle the form submission
    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        try {
            DB::beginTransaction();

            $ticketId = $this->generateUniqueTicketId($request->input('department'));
            $enquiry = $this->saveEnquiryData($request, $ticketId);
            $ticketDetails = $this->createTicketDetails($ticketId);
            $this->sendNotifications($enquiry, $ticketDetails, $ticketId);

            DB::commit();

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
    private function sendNotifications($enquiry, $ticketDetails, $ticketId)
    {
        $this->sendNotificationEmail($enquiry, $ticketDetails);
        $this->sendTelegramNotification($ticketId, $enquiry, $ticketDetails);
        Notification::send($enquiry, new GoogleChatNotification($enquiry));
    }

    // Send Telegram notification
    private function sendTelegramNotification($ticketId, $enquiry, $ticketDetails)
    {
        $message = "*New Ticket Submitted*\n" .
            "Ticket ID: {$ticketId}\n" .
            "Staff Name: {$enquiry->staff_name}\n" .
            "Department: {$enquiry->department}\n" .
            "Ticket Status: {$ticketDetails->ticket_status}";

        Notification::route('telegram', '2134630336') // Replace with actual chat ID
            ->notify(new TelegramNotification($message));
    }

    // Validate request data
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
}