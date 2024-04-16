<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Http;


class AdFormController extends Controller
{


    public function adsubmitForm(Request $request)
    {
        $validatedData = $request->validate([
            'm_name' => 'required|string',
            'whatsapp_number' => 'required|string|min:10|max:12',
        ]);

        $myHeaders = [
            'Content-Type' => 'application/json',
            'authkey' => '409648ACCWWwhe65ec22faP1',
        ];

        $payload = [
            'integrated_number' => '917603809257',
            'content_type' => 'template',
            'payload' => [
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
            ],
        ];


        $client = new Client();

        try {
            $response = $client->request('POST', 'https://api.msg91.com/api/v5/whatsapp/whatsapp-outbound-message/', [
                'headers' => $myHeaders,
                'json' => $payload,
            ]);

            $result = $response->getBody()->getContents();

            // return response()->json(['success' => 'WhatsApp message sent successfully']);

            $a = $validatedData['m_name'];

            return redirect()->back()->with('success', " $a, Thank you for your inquiry our staff will contact you as soon !");
        } catch (\Exception $e) {
            $a = $validatedData['m_name'];
            return redirect()->back()->with('error', "Sorry $a, we are facing some issues. Please try again later.");
            // return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}