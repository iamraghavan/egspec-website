<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HelpdeskExport;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class HelpdeskNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $fileName = Str::uuid() . '.xlsx';

        return $this->view('emails.helpdesk')
            ->with('data', $this->data)
            ->attachData(Excel::raw(new HelpdeskExport($this->data), \Maatwebsite\Excel\Excel::XLSX), $fileName, [
                'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ]);
    }
}