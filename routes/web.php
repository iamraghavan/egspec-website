<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdFormController;


// Other Backend Operation Routes
Route::post('/admission-submit-form', [AdFormController::class, 'adsubmitForm'])->name('adsubmitForm');


Route::get('/', [PagesController::class, 'index']);


// Route for Academics
Route::get('/academics/departments/bachelors', [PagesController::class, 'department_bachelors']);
Route::get('/academics/departments/masters', [PagesController::class, 'department_masters']);
Route::get('/academics/departments/mca', [PagesController::class, 'department_mca']);
Route::get('/academics/departments/mba', [PagesController::class, 'department_mba']);
Route::get('/academics/departments/science-humanities', [PagesController::class, 'department_science_humanities']);
Route::get('/academics/industry-academic-partnering', [PagesController::class, 'industry_academic_partnering']);
Route::get('/academics/industry-certification-programs', [PagesController::class, 'industry_certification_programs']);
Route::get('/academics/industry-training-programs', [PagesController::class, 'industry_training_programs']);
Route::get('/academics/advisory-board', [PagesController::class, 'advisory_board']);
