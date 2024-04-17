<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendWhatsAppMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name;
    protected $whatsappNumber;

    public function __construct($name, $whatsappNumber)
    {
        $this->name = $name;
        $this->whatsappNumber = $whatsappNumber;
    }

    public function handle()
    {
        $client = new Client();
        $myHeaders = [
            'Content-Type' => 'application/json',
            'authkey' => '409648ACCWWwhe65ec22faP1',
        ];

        $payload = [
            'integrated_number' => '917603809257',
            'content_type' => 'template',
            'payload' => [
                'to' => $this->whatsappNumber,
                'type' => 'template',
                'template' => [
                    'name' => 'egspec_admission_message',
                    'language' => [
                        'code' => 'en',
                        'policy' => 'deterministic',
                    ],
                    'components' => [
                        [
                            'type' => 'header',
                            'parameters' => [
                                [
                                    'type' => 'image',
                                    'image' => [
                                        'link' => 'https://egspec.blob.core.windows.net/egspec-assets/holi_sale_3.jpg',
                                    ],
                                ],
                            ],
                        ],
                        [
                            'type' => 'body',
                            'parameters' => [
                                [
                                    'type' => 'text',
                                    'text' => $this->name,
                                ],
                            ],
                        ],
                    ],
                ],
                'messaging_product' => 'whatsapp',
            ],
        ];

        try {
            $response = $client->request('POST', 'https://api.msg91.com/api/v5/whatsapp/whatsapp-outbound-message/', [
                'headers' => $myHeaders,
                'json' => $payload,
            ]);

            $result = $response->getBody()->getContents();
            // Log successful sending of WhatsApp message
            Log::info("WhatsApp message sent successfully to {$this->whatsappNumber}");
        } catch (\Exception $e) {
            // Log error if WhatsApp message sending fails
            Log::error("Failed to send WhatsApp message to {$this->whatsappNumber}: {$e->getMessage()}");
        }
    }
}