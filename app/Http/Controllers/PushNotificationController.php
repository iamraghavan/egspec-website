<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Http\HttpClientOptions;
use Illuminate\Http\Request;
use NotificationChannels\GoogleChat\GoogleChatMessage;
use NotificationChannels\GoogleChat\GoogleChatChannel;
use App\Notifications\GoogleChatNotification;
use Illuminate\Notifications\Notification;
use App\Notifiers\GoogleChatNotifier;


class PushNotificationController extends Controller
{
    public function sendPushNotification(Request $request)
    {

        return response()->json(['message' => 'API was under maintenance. Please try again later.']);
    }

    public function sendGoogleChat(Request $request)
    {
        $notifiable = new GoogleChatNotifier();
        $notification = new GoogleChatNotification('Hello, Google Chat!');
        $notifiable->notify($notification);

        return response()->json(['message' => 'Notification sent successfully!']);
    }
}