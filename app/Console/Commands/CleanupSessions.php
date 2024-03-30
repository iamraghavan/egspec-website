<?php


namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SessionCleanupReport;

class CleanupSessions extends Command
{
    protected $signature = 'sessions:cleanup';
    protected $description = 'Automatically delete excess sessions data and send cleanup report';

    public function handle()
    {
        // Define the threshold for maximum sessions
        $maxSessions = 20;

        // Count the number of sessions
        $sessionCount = DB::table('sessions')->count();

        // If session count exceeds the threshold, delete excess sessions and send cleanup report
        if ($sessionCount > $maxSessions) {
            $excessSessions = $sessionCount - $maxSessions;

            // Fetch the deleted sessions
            $deletedSessions = DB::table('sessions')
                ->orderBy('last_activity', 'asc')
                ->limit($excessSessions)
                ->get();

            // Delete excess sessions
            DB::table('sessions')
                ->orderBy('last_activity', 'asc')
                ->limit($excessSessions)
                ->delete();

            // Prepare table data for email
            $tableData = $deletedSessions->toArray();
            $tableRows = [];
            foreach ($tableData as $row) {
                // Format each row as needed
                $tableRows[] = [
                    'id' => $row->id,
                    'user_id' => $row->user_id,
                    'ip_address' => $row->ip_address,
                    'user_agent' => $row->user_agent,
                    'last_activity' => $row->last_activity,
                ];
            }

            // Send the cleanup report via email
            Mail::to('raghavanofficials@gmail.com')->send(new SessionCleanupReport($tableRows));

            $this->info('Excess sessions data deleted and cleanup report sent successfully.');
        } else {
            $this->info('No excess sessions data found. No cleanup required.');
        }
    }
}
