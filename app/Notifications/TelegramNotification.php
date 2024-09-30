<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use TelegramNotifications\TelegramChannel;
use TelegramNotifications\Messages\TelegramMessage;
use Illuminate\Support\Facades\Config;


class TelegramNotification extends Notification
{
    use Queueable;

    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via()
    {
        return [TelegramChannel::class];
    }

    public function toTelegram()
    {
        return (new TelegramMessage())
            ->text($this->message);
    }
}