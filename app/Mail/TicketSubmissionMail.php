<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

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
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->to(['web@egspec.org', 'praveenkumar@egspec.org'])
            ->subject('New Website Update Enquiry Submitted')
            ->markdown('emails.ticket-submission');
    }
}
