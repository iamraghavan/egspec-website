<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Http;


class AdFormController extends Controller
{


    public function adsubmitForm(Request $request)
    {

        // dd($request->all());

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
                'to' => $request->whatsapp_number,
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
            echo $result; // Output the result
        } catch (\Exception $e) {
            echo $e->getMessage(); // Handle any exceptions
        }
        return redirect()->back()->with('success', 'WhatsApp message sent successfully.');
    }
}
