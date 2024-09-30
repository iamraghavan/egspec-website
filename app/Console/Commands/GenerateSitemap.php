<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Exception;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        try {
            // Create a new sitemap instance
            $sitemap = Sitemap::create();

            // Get all routes
            $routes = Route::getRoutes();

            // Initialize an array to classify routes
            $classifiedRoutes = [];

            // Classify each route
            foreach ($routes as $route) {
                if (in_array('GET', $route->methods())) {
                    $uri = $route->uri();
                    $segments = explode('/', trim($uri, '/')); // Split URI into segments

                    // Ensure there are enough segments
                    if (count($segments) >= 2) {
                        $mainCategory = $segments[0];
                        $subCategory = $segments[1];
                        $remainingPath = implode('/', array_slice($segments, 2)); // Get remaining path segments

                        // Initialize array if it doesn't exist
                        if (!isset($classifiedRoutes[$mainCategory])) {
                            $classifiedRoutes[$mainCategory] = [];
                        }
                        if (!isset($classifiedRoutes[$mainCategory][$subCategory])) {
                            $classifiedRoutes[$mainCategory][$subCategory] = [];
                        }
                        // Add the complete URL to the classified routes
                        $classifiedRoutes[$mainCategory][$subCategory][] = config('app.url') . '/' . $uri;
                    }
                }
            }

            // Add classified routes to the sitemap
            foreach ($classifiedRoutes as $mainCategory => $subCategories) {
                foreach ($subCategories as $subCategory => $urls) {
                    foreach ($urls as $url) {
                        $sitemap->add($url);
                    }
                }
            }

            // Write to file
            $sitemap->writeToFile(public_path('sitemap.xml'));

            // Inform the user of success
            $this->info('Sitemap has been generated successfully!');

            return 0; // Success
        } catch (Exception $e) {
            // Inform the user of the error
            $this->error('An error occurred while generating the sitemap: ' . $e->getMessage());
            return 1; // Failure
        }
    }
}
