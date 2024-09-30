<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\WhatsAppMessage;

use Illuminate\Support\Facades\Http;


class AdFormController extends Controller
{


    public function adsubmitForm(Request $request)
    {
        $validatedData = $request->validate([
            'm_name' => 'required|string',
            'whatsapp_number' => 'required|string|min:10|max:12',
        ]);

        $existingMessage = WhatsAppMessage::where('whatsapp_number', $validatedData['whatsapp_number'])->first();
        if ($existingMessage) {
            // If the number already exists in the database, send the message without storing the number again
            $client = new Client();
            try {
                $response = $client->request('POST', 'https://api.msg91.com/api/v5/whatsapp/whatsapp-outbound-message/', [
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'authkey' => '409648ACCWWwhe65ec22faP1',
                    ],
                    'json' => [
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
                    ],
                ]);
                $result = $response->getBody()->getContents();
                $name = $validatedData['m_name'];
                return redirect()->back()->with('success', "$name, Thank you for your inquiry. Our staff will contact you soon!");
            } catch (\Exception $e) {
                $name = $validatedData['m_name'];
                return redirect()->back()->with('error', "Sorry $name, we are facing some issues. Please try again later.");
            }
        }

        // If the number is not found in the database, proceed to create and send the WhatsApp message
        $message = WhatsAppMessage::create([
            'name' => $validatedData['m_name'],
            'whatsapp_number' => $validatedData['whatsapp_number'],
        ]);

        // Send WhatsApp message code here...
    }
}
