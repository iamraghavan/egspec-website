<?php

namespace App\Notifiers;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Queue\Queueable as QueueableContract;
use Illuminate\Bus\Queueable;

class GoogleChatNotifier
{
    use Notifiable, Queueable;

    /**
     * Route notifications for the HTTP channel.
     *
     * @param \Illuminate\Notifications\Notification $notification
     * @return string
     */
    use Notifiable, Queueable;

    public function routeNotificationForGoogleChat()
    {
        return 'https://chat.googleapis.com/v1/spaces/AAAAu8xIbtg/messages?key=AIzaSyDdI0hCZtE6vySjMm-WEfRq3CPzqKqqsHI&token=mRNqzm4B5t-XfqRqFpbXyFWooxSJVR3lViDASXh0WWo';
    }
}