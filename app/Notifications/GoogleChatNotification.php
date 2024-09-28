<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\GoogleChat\GoogleChatMessage;
use NotificationChannels\GoogleChat\GoogleChatChannel;
use NotificationChannels\GoogleChat\Card;
use NotificationChannels\GoogleChat\Section;
use NotificationChannels\GoogleChat\Widgets\KeyValue;
use NotificationChannels\GoogleChat\Enums\Icon;
use NotificationChannels\GoogleChat\Components\Button\TextButton;

class GoogleChatNotification extends Notification
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return [GoogleChatChannel::class];
    }

    public function toGoogleChat($notifiable)
    {
        $ticketId = $notifiable->ticket_id; // Now this should refer to the enquiry
        $header = 'EGS Pillay Engineering College - Website Update Notification';
        $footerMessage = 'Thank you for your submission!';

        return GoogleChatMessage::create()
            ->card(
                Card::create()
                    ->header($header)
                    ->section(
                        Section::create()
                            ->widget(
                                KeyValue::create(
                                    'Ticket ID',
                                    $ticketId,
                                    $footerMessage
                                )
                                    ->icon(Icon::DOLLAR) // Adjust icon if needed
                            )
                    )
            );
    }
}