<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SessionCleanupReport extends Mailable
{
    use Queueable, SerializesModels;

    public $tableRows;

    public function __construct($tableRows)
    {
        $this->tableRows = $tableRows;
    }

    public function build()
    {
        return $this->view('emails.session_cleanup_report');
    }
}
