<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Http\HttpClientOptions;
use Illuminate\Http\Request;

class PushNotificationController extends Controller
{
    public function sendPushNotification(Request $request)
    {

        return response()->json(['message' => 'API was under maintenance. Please try again later.']);
    }
}
