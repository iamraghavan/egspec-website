<?php

namespace App\Http\Middleware;

use App\Models\other_sessions_info; // Import the OtherSessionsInfo model
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;


class RequestInformationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            // Get the public IP address of the client
            $response = Http::get('https://api64.ipify.org/?format=json');
            $ipData = $response->json();
            $ipAddress = $ipData['ip'] ?? null;

            if ($ipAddress) {
                // Check if the IP address already exists in the OtherSessionsInfo table
                $existingRecord = other_sessions_info::where('ip_address', $ipAddress)->first();

                if (!$existingRecord) {
                    // Fetch detailed geolocation information using a separate API (e.g., IPinfo)
                    $geoResponse = Http::get("https://ipinfo.io/{$ipAddress}/json");
                    $geoData = $geoResponse->json();

                    // Extract relevant information
                    $timezone = $geoData['timezone'] ?? null;
                    $city = $geoData['city'] ?? null;
                    $asn = $geoData['asn'] ?? null;
                    $name = $geoData['org'] ?? null;
                    $ll = $geoData['loc'] ?? null;

                    // Format the current timestamp
                    $requestTimestamp = now()->format('Y-m-d H:i:s');

                    // Store session data in the OtherSessionsInfo table
                    other_sessions_info::create([
                        'ip_address' => $ipAddress,
                        'request_timestamp' => $requestTimestamp,
                        'timezone' => $timezone,
                        'city' => $city,
                        'asn' => $asn,
                        'name' => $name,
                        'latitude_longitude' => $ll,
                    ]);
                }
            }
        } catch (\Exception $e) {
            // Log any exceptions that occur during IP retrieval and storage
            Log::error('Error processing IP information: ' . $e->getMessage());
            return Response::json(['error' => 'An error occurred while processing IP information.']);
        }

        return $next($request);
    }
}
