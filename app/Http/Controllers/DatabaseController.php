<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;

class DatabaseController extends Controller
{
    public function testConnection()
    {
        try {
            $pdo = new PDO(
                'mysql:host=' . env('DB_HOST') . ';dbname=' . env('DB_DATABASE'),
                env('DB_USERNAME'),
                env('DB_PASSWORD')
            );

            // Do something with the PDO connection
            $statement = $pdo->query('SELECT * FROM your_table');
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Output results
            dd($results);
        } catch (PDOException $e) {
            // Handle connection errors
            dd("Connection failed: " . $e->getMessage());
        }
    }
}