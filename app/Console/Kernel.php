<?php

// app/Console/Kernel.php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SessionCleanupReport;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        // Run the cleanup task daily at midnight
        $schedule->command('sessions:cleanup')->daily();
    }

    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');
    }
}
