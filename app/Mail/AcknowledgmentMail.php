<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcknowledgmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function build()
    {
        return $this->subject('Acknowledgment of Form Submission | E.G.S. Pillay Engineering College')
            ->view('emails.acknowledgment');
    }
}