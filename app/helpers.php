<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;



if (!function_exists('getLastCommitDate')) {
    function getLastCommitDate()
    {
        $repository = 'iamraghavan/egspec-website'; // Replace with your GitHub repo name
        $tag = 'v2.5'; // Replace with your desired tag or branch
        $url = "https://api.github.com/repos/{$repository}/commits/{$tag}";

        try {
            $response = Http::get($url);

            if ($response->successful()) {
                $data = $response->json();
                $commitDate = $data['commit']['committer']['date'] ?? null;

                if ($commitDate) {
                    // Format the date as 'Y-m-d h:i:s A'
                    return date('Y-m-d h:i:s A', strtotime($commitDate));
                }
            }

            return 'Unknown';
        } catch (\Exception $e) {
            // Log the error if needed for debugging
            Log::error('Failed to fetch the last commit date: ' . $e->getMessage());
            return 'Unknown';
        }
    }
}
