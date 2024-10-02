<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $data; // This will hold the message as an array
    public $requirement;

    public function __construct($name, $email, $phone, array $data, $requirement)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->data = $data; // Assigning the array to the property
        $this->requirement = $requirement;
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->subject('Contact Form Submission | E.G.S. Pillay Engineering College')
            ->from($this->email);
    }
}