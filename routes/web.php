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



// Route for Admissions

Route::get('/admissions/tnea', [PagesController::class, 'tnea']);
Route::get('/admissions/course-intake', [PagesController::class, 'courses_intake']);
Route::get('/admissions/excess-fee-committee-circular', [PagesController::class, 'efcc']);
Route::get('/admissions/complaint-committee', [PagesController::class, 'complaint_committee']);


// Route for Facilities

Route::get('/facilities/infrastructure', [PagesController::class, 'infrastructure']);
Route::get('/facilities/indoor-stadium', [PagesController::class, 'indoor']);
Route::get('/facilities/basketball-court', [PagesController::class, 'basketball_court']);
Route::get('/facilities/laboratries', [PagesController::class, 'laboratries']);


/*
Laboratries |--> Computer Laboratory
            |--> Mechnical Laboratory
            |--> Civil Laboratory
            |--> Electronics Laboratory
            |--> Electrical Laboratory
*/

Route::get('/facilities/laboratries/computer-laboratory', [PagesController::class, 'computer_laboratory']);
Route::get('/facilities/laboratries/civil-laboratory', [PagesController::class, 'civil_laboratory']);
Route::get('/facilities/laboratries/electronics-laboratory', [PagesController::class, 'electronics_laboratory']);
Route::get('/facilities/laboratries/electrical-laboratory', [PagesController::class, 'electrical_laboratory']);
Route::get('/facilities/laboratries/mechanical-laboratory', [PagesController::class, 'mechanical_laboratory']);

Route::get('/facilities/hostel', [PagesController::class, 'hostel']);
Route::get('/facilities/library', [PagesController::class, 'library']);
Route::get('/facilities/transport', [PagesController::class, 'transport']);
Route::get('/facilities/cafeteria', [PagesController::class, 'cafeteria']);


// Route for Activities

Route::get('/activities/extra-curricular/sports', [PagesController::class, 'sports']);
Route::get('/activities/extra-curricular/nss-and-red-ribbon-club', [PagesController::class, 'nss_and_red_ribbon_club']);

Route::get('/activities/co-curricular/workshop', [PagesController::class, 'workshop']);
Route::get('/activities/co-curricular/symposium', [PagesController::class, 'symposium']);
Route::get('/activities/co-curricular/conference', [PagesController::class, 'conference']);

Route::get('/activities/cells/entrepreneurship-development-cell', [PagesController::class, 'entrepreneurship_development_cell']);
Route::get('/activities/cells/women-empowerment-cell', [PagesController::class, 'women_empowerment_cell']);
Route::get('/activities/cells/internal-complaints-committee', [PagesController::class, 'internal_complaints_committee']);
Route::get('/activities/cells/carrier-guidance', [PagesController::class, 'carrier_guidance']);

Route::get('/activities/anti-ragging-committee', [PagesController::class, 'anti_ragging_committee']);

Route::get('/activities/iso/coordinators', [PagesController::class, 'iso_coordinators']);
Route::get('/activities/iso/iso-certificates', [PagesController::class, 'iso_certificates']);
Route::get('/activities/iso/iso-manual', [PagesController::class, 'iso_manual']);

Route::get('/activities/discipline-committee', [PagesController::class, 'discipline_committee']);


// Route for Research

Route::get('/research/research-and-development', [PagesController::class, 'research_and_development']);
Route::get('/research/research-supervisor-and-scholar-details', [PagesController::class, 'research_sasd']);
Route::get('/research/publication-details', [PagesController::class, 'publication_details']);
Route::get('/research/patent-details', [PagesController::class, 'patent_details']);
