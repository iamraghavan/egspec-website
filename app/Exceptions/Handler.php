<?php

namespace App\Exceptions;

use App\Notifications\GoogleChatNotification;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        Log::error($exception);

        $message = sprintf(
            "Error: %s in %s:%d\nStack Trace: %s",
            $exception->getMessage(),
            $exception->getFile(),
            $exception->getLine(),
            $exception->getTraceAsString()
        );

        Log::info('Preparing to send Google Chat notification', ['message' => $message]);

        // Check if webhook URL is set
        $webhookUrl = config('services.googlechat.webhook_url');
        Log::info('Google Chat webhook URL', ['url' => $webhookUrl]);

        // Send notification to Google Chat
        Notification::route('http', $webhookUrl)
            ->notify(new GoogleChatNotification($message));

        return parent::render($request, $exception);
    }
}