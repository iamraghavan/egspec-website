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
Route::get('/activities/professional-bodies/ieee', [PagesController::class, 'ieee']);
Route::get('/activities/professional-bodies/iste', [PagesController::class, 'iste']);
Route::get('/activities/professional-bodies/ictact', [PagesController::class, 'ictact']);
Route::get('/activities/professional-bodies/csi', [PagesController::class, 'csi']);
Route::get('/activities/professional-bodies/iete', [PagesController::class, 'iete']);



// Route for Research

Route::get('/research/research-and-development', [PagesController::class, 'research_and_development']);
Route::get('/research/research-supervisor-and-scholar-details', [PagesController::class, 'research_sasd']);
Route::get('/research/publication-details', [PagesController::class, 'publication_details']);
Route::get('/research/patent-details', [PagesController::class, 'patent_details']);
Route::get('/research/copyrights', [PagesController::class, 'copyrights']);
Route::get('/research/r-and-d-policy', [PagesController::class, 'r_and_d_policy']);


// Route for About us

Route::get('/about/our-focus', [PagesController::class, 'our_focus']);
Route::get('/about/vision-and-mission', [PagesController::class, 'vision_and_mission']);
Route::get('/about/history', [PagesController::class, 'history']);
Route::get('/about/message-from-the-founder-and-chairman', [PagesController::class, 'message_from_the_founder_and_chairman']);
Route::get('/about/message-from-the-secretary', [PagesController::class, 'message_from_the_secretary']);
Route::get('/about/message-from-the-principal', [PagesController::class, 'message_from_the_principal']);
Route::get('/about/adminstrative-organization', [PagesController::class, 'adminstrative_organization']);
Route::get('/about/organizational-chart', [PagesController::class, 'organizational_chart']);
Route::get('/about/milestones', [PagesController::class, 'milestones']);
Route::get('/about/hr-policy', [PagesController::class, 'hr_policy']);
Route::get('/about/audit-statement', [PagesController::class, 'audit_statement']);
Route::get('/about/strategic-plan', [PagesController::class, 'strategic_plan']);
Route::get('/about/strategic-plan-meeting-minutes', [PagesController::class, 'strategic_plan_meeting_minutes']);



// Route for Placements

Route::get('/placements/memorandum-of-understanding', [PagesController::class, 'memorandum_of_understanding']);
Route::get('/placements/placement-team', [PagesController::class, 'placement_team']);
Route::get('/placements/statistics', [PagesController::class, 'placement_statistics']);
Route::get('/placement/our-top-recruiters', [PagesController::class, 'our_top_recruiters']);
Route::get('/placement/placement-gallery', [PagesController::class, 'placement_gallery']);