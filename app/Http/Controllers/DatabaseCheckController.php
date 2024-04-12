<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseCheckController extends Controller
{
    public function checkDatabaseConnection()
    {
        try {
            DB::connection()->getPdo();
            return "Database connection established successfully.";
        } catch (\Exception $e) {
            return "Unable to connect to the database. Error: " . $e->getMessage();
        }
    }
}
