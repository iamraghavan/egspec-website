<?php



namespace App\Jobs;

use App\Models\WebsiteUpdateEnquiry;
use App\Models\WebsiteTicketDetails;
use App\Notifications\TelegramNotification;
use App\Notifications\GoogleChatNotification;
use App\Mail\TicketSubmissionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendNotificationJob
{
    protected $enquiry;
    protected $ticketDetails;
    protected $ticketId;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(WebsiteUpdateEnquiry $enquiry, WebsiteTicketDetails $ticketDetails, $ticketId)
    {
        $this->enquiry = $enquiry;
        $this->ticketDetails = $ticketDetails;
        $this->ticketId = $ticketId;
    }

    public function handle()
    {
        $this->sendNotificationEmail();
        $this->sendTelegramNotification();
        Notification::send($this->enquiry, new GoogleChatNotification($this->enquiry));
    }

    private function sendNotificationEmail()
    {
        try {
            $ticketStatus = $this->ticketDetails->ticket_status;
            Mail::to(['web@egspec.org', 'raghavan@egspec.org', 'noreply@egspec.org'])
                ->send(new TicketSubmissionMail($this->enquiry, $ticketStatus));
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }
    }

    private function sendTelegramNotification()
    {
        $message = "*New Ticket Submitted*\n" .
            "Ticket ID: {$this->ticketId}\n" .
            "Staff Name: {$this->enquiry->staff_name}\n" .
            "Department: {$this->enquiry->department}\n" .
            "Ticket Status: {$this->ticketDetails->ticket_status}";

        Notification::route('telegram', '2134630336') // Replace with actual chat ID
            ->notify(new TelegramNotification($message));
    }
}