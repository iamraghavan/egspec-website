<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('s3url', function ($path) {
            return "<?php echo config('filesystems.disks.s3.url') . '/' . ltrim($path, '/'); ?>";
        });
    }
}
