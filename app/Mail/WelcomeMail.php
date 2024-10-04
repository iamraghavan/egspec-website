<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // You can pass data to the template here if needed
    }

    public function build()
    {
        return $this->view('emails.sent-welcome');
    }
}
