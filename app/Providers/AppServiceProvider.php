<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Log; // Ensure to import the Log facade

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Blade::directive('blob', function ($expression) {
            return "<?php
                \$container = env('AZURE_STORAGE_CONTAINER'); // Fetch the container name
                \$url = rtrim(config('filesystems.disks.azure.url'), '/') . '/' .
                         ltrim(\$container, '/') . '/' .
                         ltrim($expression, '/');
                Log::info('Constructed Blob URL: ' . \$url); // Log the constructed URL
                echo \$url;
            ?>";
        });

        Blade::directive('s3url', function ($path) {
            return "<?php echo config('filesystems.disks.s3.url') . '/' . ltrim($path, '/'); ?>";
        });
    }
}
