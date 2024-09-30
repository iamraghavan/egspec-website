<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class TicketSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;
    public $ticketStatus;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($enquiry, $ticketStatus)
    {
        $this->enquiry = $enquiry;
        $this->ticketStatus = $ticketStatus;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Step 1: Format the date and time
        $currentDateTime = Carbon::now()->format('d/m/Y - h:i A');

        // Step 2: Get department information from the enquiry
        $department = $this->enquiry->department;

        // Step 3: Set a dynamic subject
        $subject = "{$currentDateTime} - {$department} - Website Update Enquiry";

        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->to(['web@egspec.org', 'raghavan@egspec.org', 'noreply@egspec.org'])
            ->subject($subject)
            ->markdown('emails.ticket-submission');
    }
}