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
            $ipAddress = $this->getIpAddress();
            Log::info('IP Address: ' . $ipAddress);

            if ($ipAddress && !$this->recordExists($ipAddress)) {
                $geoData = $this->getGeoData($ipAddress);
                if ($geoData) {
                    $this->storeSessionInfo($ipAddress, $geoData);
                }
            }
        } catch (\Exception $e) {
            Log::error('Error processing IP information: ' . $e->getMessage());
            // No need to return an error response; just log and continue
        }

        return $next($request);
    }

    private function getIpAddress()
    {
        $response = Http::get('https://api64.ipify.org/?format=json');
        return $response->json('ip');
    }

    private function recordExists($ipAddress)
    {
        return OtherSessionsInfo::where('ip_address', $ipAddress)->exists();
    }

    private function getGeoData($ipAddress)
    {
        $geoResponse = Http::get("https://ipinfo.io/{$ipAddress}/json");
        return $geoResponse->json();
    }

    private function storeSessionInfo($ipAddress, $geoData)
    {
        $requestTimestamp = now()->format('Y-m-d H:i:s');

        try {
            OtherSessionsInfo::create([
                'ip_address' => $ipAddress,
                'request_timestamp' => $requestTimestamp,
                'timezone' => $geoData['timezone'] ?? null,
                'city' => $geoData['city'] ?? null,
                'asn' => $geoData['asn'] ?? null,
                'name' => $geoData['org'] ?? null,
                'latitude_longitude' => $geoData['loc'] ?? null,
            ]);
        } catch (\Exception $e) {
            Log::error('Error storing session info: ' . $e->getMessage());
        }
    }
}
