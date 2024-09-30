<?php

return [
    'space' => env('GOOGLECHAT_WEBHOOK_URL', null), // Default webhook
    'spaces' => [
        'default' => env('GOOGLECHAT_WEBHOOK_URL', null), // Add your default space here
    ],
];