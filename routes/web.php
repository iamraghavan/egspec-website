<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index']);



// Route for Academics
Route::get('/academics/departments/bachelors', [PagesController::class, 'department_bachelors']);
Route::get('/academics/departments/masters', [PagesController::class, 'department_masters']);
Route::get('/academics/departments/mca', [PagesController::class, 'department_mca']);
