<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AdFormController extends Controller
{
    public function adsubmitForm(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'm_name' => 'required|string',
            'whatsapp_number' => 'required|string|min:10|max:12',
        ]);

        // Prepare the request payload
        $payload = [
            'to' => $validatedData['whatsapp_number'],
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
                                'text' => $validatedData['m_name'],
                            ],
                        ],
                    ],
                ],
            ],
            'messaging_product' => 'whatsapp',
        ];

        // Prepare the request options
        $options = [
            'json' => $payload,
            'headers' => [
                'Content-Type' => 'application/json',
                'authkey' => '409648ACCWWwhe65ec22faP1',
            ],
        ];

        // Create a Guzzle HTTP client instance
        $client = new Client();

        try {
            // Send the HTTP POST request to the WhatsApp API
            $response = $client->post('https://api.msg91.com/api/v5/whatsapp/whatsapp-outbound-message/', $options);

            // Process the response
            $result = json_decode($response->getBody()->getContents(), true);

            // Redirect back with success message
            return redirect()->back()->with('success', "{$validatedData['m_name']}, Thank you for your inquiry! Our staff will contact you soon.");
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', "Sorry {$validatedData['m_name']}, we are facing some issues. Please try again later.");
        }
    }
}
