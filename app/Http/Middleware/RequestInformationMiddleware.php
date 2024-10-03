<?php

namespace App\Http\Middleware;

use App\Models\OtherSessionsInfo; // Import the OtherSessionsInfo model
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RequestInformationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            $response = Http::get('https://api64.ipify.org/?format=json');
            $ipData = $response->json();
            $ipAddress = $ipData['ip'] ?? null;

            Log::info('IP Address: ' . $ipAddress);

            if ($ipAddress) {
                $existingRecord = OtherSessionsInfo::where('ip_address', $ipAddress)->first();

                if (!$existingRecord) {
                    $geoResponse = Http::get("https://ipinfo.io/{$ipAddress}/json");
                    $geoData = $geoResponse->json();

                    Log::info('Geolocation data: ' . json_encode($geoData));

                    $timezone = $geoData['timezone'] ?? null;
                    $city = $geoData['city'] ?? null;
                    $asn = $geoData['asn'] ?? null;
                    $name = $geoData['org'] ?? null;
                    $ll = $geoData['loc'] ?? null;

                    $requestTimestamp = now()->format('Y-m-d H:i:s');

                    try {
                        OtherSessionsInfo::create([
                            'ip_address' => $ipAddress,
                            'request_timestamp' => $requestTimestamp,
                            'timezone' => $timezone,
                            'city' => $city,
                            'asn' => $asn,
                            'name' => $name,
                            'latitude_longitude' => $ll,
                        ]);
                    } catch (\Exception $e) {
                        Log::error('Error storing session info: ' . $e->getMessage());
                    }
                }
            }
        } catch (\Exception $e) {
            Log::error('Error processing IP information: ' . $e->getMessage());
            return redirect()->route('index'); // Redirect to the route named 'index'
        }

        return $next($request);
    }
}
