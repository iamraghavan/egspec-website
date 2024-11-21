<?php

use App\Http\Controllers\ApiController;
use App\Mail\WelcomeMail;
use App\Models\TicketConversations;
use App\Models\WebsiteUpdateEnquiry;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdFormController;
use App\Http\Controllers\InstitutionInternalPurpose;
use App\Http\Controllers\PushNotificationController;
use App\Http\Controllers\TemplateSearchReturn;
use App\Http\Middleware\RequestInformationMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\WebsiteTicketDetails;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\GoogleChatNotification;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

// Match all departments under undergraduate specifically for hods-desk
Route::get('/academics/departments/undergraduate/{department}/hods-desk', function ($department) {
    return view('under-construction', ['department' => $department]);
});

Route::get('/academics/departments/postgraduate/{department}/hods-desk', function ($department) {
    return view('under-construction', ['department' => $department]);
});

Route::get('/academics/departments/{department}/hods-desk', function ($department) {
    return view('under-construction', ['department' => $department]);
});


Route::get('/search', [InstitutionInternalPurpose::class, 'searchq']);

Route::get('/gallery', [InstitutionInternalPurpose::class, 'gallery_index'])->name('gallery_index');
Route::get('/gallery_photo', [InstitutionInternalPurpose::class, 'showAlbum'])->name('showAlbum');






Route::post('/sent/mail', function () {
    $recipients = ['all@egspec.org', 'raghavan@egspec.org'];
    $errors = [];

    foreach ($recipients as $recipient) {
        try {
            Mail::to($recipient)->send(new WelcomeMail());
        } catch (\Exception $e) {
            $errors[] = "Failed to send email to $recipient: " . $e->getMessage();
        }
    }

    if (!empty($errors)) {
        return response()->json(['message' => 'Some emails failed to send.', 'errors' => $errors], 500);
    }

    return response()->json(['message' => 'Emails sent successfully!']);
});



// Other Backend Operation Routes
Route::post('/admission-submit-form', [AdFormController::class, 'adsubmitForm'])->name('adsubmitForm');
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/right-to-information', [PagesController::class, 'rti']);
Route::get('/mandatory-disclosure', [PagesController::class, 'md']);




// Route::get('/', [PagesController::class, 'index']);
// Route::get('/right-to-information', [PagesController::class, 'rti']);
// Route::get('/mandatory-disclosure', [PagesController::class, 'md']);

// Skill Development Center

Route::get('/skill-development-center/pradhan-mantri-kaushal-kendra', [PagesController::class, 'sdc_pmkk']);
Route::get('/skill-development-center/pradhan-mantri-kaushal-vikas-yojana', [PagesController::class, 'sdc_pmkvy']);

// iqac
Route::get('/iqac/directors-profile', [PagesController::class, 'iqac_directors_profile']);
Route::get('/iqac/convener-profile', [PagesController::class, 'iqac_convener_profile']);
Route::get('/iqac/committe-members', [PagesController::class, 'iqac_committe_members']);
Route::get('/iqac/meeting-minutes', [PagesController::class, 'iqac_meeting_minutes']);
Route::get('/iqac/works-plan-and-implementation', [PagesController::class, 'iqac_works_plan_and_implementation']);
Route::get('/iqac/iqac-function', [PagesController::class, 'iqac_function']);
Route::get('/iqac/iqac-events', [PagesController::class, 'iqac_events']);

// aicte
Route::get('/affiliation/approved/aicte', [PagesController::class, 'aicte_approved']);

// nirf
Route::get('/national-institutional-ranking-framework', [PagesController::class, 'nirf']);

// accreditation status
Route::get('/affiliation/approved/accreditation-status', [PagesController::class, 'accreditation_status']);

// AICTE EGSPEC Video
Route::get('/affiliation/aicte-egspec-video', [PagesController::class, 'aicte_egspec_video']);

// Governing Body
Route::get('/meeting-minutes/governing-body', [PagesController::class, 'governing_body']);



// Route for Academics
Route::get('/academics/departments/bachelors', [PagesController::class, 'department_bachelors']);
Route::get('/academics/departments/masters', [PagesController::class, 'department_masters']);
Route::get('/academics/industry-academic-partnering', [PagesController::class, 'industry_academic_partnering']);
Route::get('/academics/industry-certification-programs', [PagesController::class, 'industry_certification_programs']);
Route::get('/academics/industry-training-programs', [PagesController::class, 'industry_training_programs']);
Route::get('/academics/advisory-board', [PagesController::class, 'advisory_board']);
Route::get('/academics/newsletter', [PagesController::class, 'newsletter']);




// Route for Admissions

Route::get('/admissions/tnea', [PagesController::class, 'tnea']);
Route::get('/admissions/course-intake', [PagesController::class, 'courses_intake']);
Route::get('/admissions/excess-fee-committee-circular', [PagesController::class, 'efcc']);
Route::get('/admissions/complaint-committee', [PagesController::class, 'complaint_committee']);
Route::get('/admissions/why-study-here', [PagesController::class, 'why_study_here']);
Route::get('/admissions/faq', [PagesController::class, 'faq']);

Route::get('/admission/admission-procedure/undergraduate', [PagesController::class, 'admission_procedure_undergraduate']);
Route::get('/admission/admission-procedure/postgraduate', [PagesController::class, 'admission_procedure_postgraduate']);
Route::get('/admission/admission-procedure/lateral-entry', [PagesController::class, 'admission_procedure_lateral_entry']);



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
Route::get('/activities/professional-bodies/iei', [PagesController::class, 'iei']);





// Route for Research

Route::get('/research/research-and-development', [PagesController::class, 'research_and_development']);
Route::get('/research/research-supervisor-and-scholar-details', [PagesController::class, 'research_sasd']);
Route::get('/research/publication-details', [PagesController::class, 'publication_details']);
Route::get('/research/patent-details', [PagesController::class, 'patent_details']);
Route::get('/research/copyrights', [PagesController::class, 'copyrights']);
Route::get('/research/r-and-d-policy', [PagesController::class, 'r_and_d_policy']);


Route::get('/research/projects/mechanical-engineering', [PagesController::class, 'prj_mechanical_engineering']);
Route::get('/research/projects/civil-engineering', [PagesController::class, 'prj_civil_engineering']);
Route::get('/research/projects/electronics-and-communication-engineering', [PagesController::class, 'prj_electronics_and_communication_engineering']);
Route::get('/resources/projects/computer-science-and-engineering', [PagesController::class, 'prj_computer_science_and_engineering']);
Route::get('/resources/projects/information-technology', [PagesController::class, 'prj_information_technology']);
Route::get('/resources/projects/electrical-and-electronics-engineering', [PagesController::class, 'prj_electrical_and_electronics_engineering']);

Route::get('/research/publication-details/consultancy', [TemplateSearchReturn::class, 'showConsultancyDetails']);
Route::get('/research/publication-details/research', [TemplateSearchReturn::class, 'showResearchDetails']);
Route::get('/students-achievements', [TemplateSearchReturn::class, 'showStudentsDetails']);

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

// Dean About Content
Route::get('/about/dean', [PagesController::class, 'about_dean']);



// Route for Placements

Route::get('/placements', [PagesController::class, 'placement'])->name('placements');

Route::get('/placements/memorandum-of-understanding', [PagesController::class, 'memorandum_of_understanding']);
Route::get('/placements/placement-team', [PagesController::class, 'placement_team']);
Route::get('/placements/statistics', [PagesController::class, 'placement_statistics']);
Route::get('/placement/our-top-recruiters', [PagesController::class, 'our_top_recruiters']);
Route::get('/placement/placement-gallery', [PagesController::class, 'placement_gallery'])->name('placement_gallery');



// Route for Academics -> Departments

// Department -> Undergraduate -> Mechnical Engineering
Route::get('/academics/departments/undergraduate/mechanical-engineering', [PagesController::class, 'ug_mechanical_engineering']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/research-publications', [PagesController::class, 'ug_mechanical_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/industry-collaboration', [PagesController::class, 'ug_mechanical_engineering_industry_collaboration']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/infrastructure', [PagesController::class, 'ug_mechanical_engineering_infrastructure']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/student-achievements', [PagesController::class, 'ug_mechanical_engineering_student_achievements']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/department-highlights', [PagesController::class, 'ug_mechanical_engineering_department_highlights']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/faculty-details', [PagesController::class, 'ug_mechanical_engineering_faculty_details']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/program-outcomes', [PagesController::class, 'ug_mechanical_engineering_program_outcomes']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/programme-educational-objectives', [PagesController::class, 'ug_mechanical_engineering_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/programme-specific-outcomes', [PagesController::class, 'ug_mechanical_engineering_programme_specific_outcomes']);





// Department -> Undergraduate -> Information Technology
Route::get('/academics/departments/undergraduate/information-technology', [PagesController::class, 'ug_information_technology']);
Route::get('/academics/departments/undergraduate/information-technology/department-highlights', [PagesController::class, 'ug_information_technology_department_highlights']);
Route::get('/academics/departments/undergraduate/information-technology/hods-desk', [PagesController::class, 'ug_information_technology_hods_desk']);
Route::get('/academics/departments/undergraduate/information-technology/faculty-details', [PagesController::class, 'ug_information_technology_faculty_details']);
Route::get('/academics/departments/undergraduate/information-technology/research-publications', [PagesController::class, 'ug_information_technology_research_publications']);
Route::get('/academics/departments/undergraduate/information-technology/industry-collaboration', [PagesController::class, 'ug_information_technology_industry_collabration']);
Route::get('/academics/departments/undergraduate/information-technology/infrastructure', [PagesController::class, 'ug_information_technology_infrastructure']);
Route::get('/academics/departments/undergraduate/information-technology/student-achievements', [PagesController::class, 'ug_information_technology_student_achievements']);
Route::get('/academics/departments/undergraduate/information-technology/program-outcomes', [PagesController::class, 'ug_information_technology_program_outcomes']);
Route::get('/academics/departments/undergraduate/information-technology/programme-educational-objectives', [PagesController::class, 'ug_information_technology_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/information-technology/programme-specific-outcomes', [PagesController::class, 'ug_information_technology_programme_specific_outcomes']);

// Department -> Undergraduate -> Biomedical Engineering
Route::get('/academics/departments/undergraduate/biomedical-engineering', [PagesController::class, 'ug_biomedical_engineering']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/department-highlights', [PagesController::class, 'ug_biomedical_engineering_department_highlights']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/hods-desk', [PagesController::class, 'ug_biomedical_engineering_hods_desk']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/faculty-details', [PagesController::class, 'ug_biomedical_engineering_faculty_details']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/research-publications', [PagesController::class, 'ug_biomedical_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/program-outcomes', [PagesController::class, 'ug_biomedical_engineering_program_outcomes']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/programme-educational-objectives', [PagesController::class, 'ug_biomedical_engineering_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/biomedical-engineering/programme-specific-outcomes', [PagesController::class, 'ug_biomedical_engineering_programme_specific_outcomes']);


// Department -> Undergraduate -> Electronics and Communication Engineering
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering', [PagesController::class, 'ug_electronics_and_communication_engineering']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/department-highlights', [PagesController::class, 'ug_electronics_and_communication_engineering_department_highlights']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/hods-desk', [PagesController::class, 'ug_electronics_and_communication_engineering_hods_desk']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/faculty-details', [PagesController::class, 'ug_electronics_and_communication_engineering_faculty_details']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/research-publications', [PagesController::class, 'ug_electronics_and_communication_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/program-outcomes', [PagesController::class, 'ug_electronics_and_communication_engineering_program_outcomes']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-educational-objectives', [PagesController::class, 'ug_electronics_and_communication_engineering_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-specific-outcomes', [PagesController::class, 'ug_electronics_and_communication_engineering_programme_specific_outcomes']);



// Department -> Undergraduate -> Artificial Intelligence & Data Science

Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science', [PagesController::class, 'ug_artificial_intelligence_data_science']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights', [PagesController::class, 'ug_artificial_intelligence_data_science_department_highlights']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk', [PagesController::class, 'ug_artificial_intelligence_data_science_hods_desk']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details', [PagesController::class, 'ug_artificial_intelligence_data_science_faculty_details']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications', [PagesController::class, 'ug_artificial_intelligence_data_science_research_publications']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/industry-collaboration', [PagesController::class, 'ug_artificial_intelligence_data_science_industry_collabration']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/infrastructure', [PagesController::class, 'ug_artificial_intelligence_data_science_infrastructure']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/student-achievements', [PagesController::class, 'ug_artificial_intelligence_data_science_student_achievements']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes', [PagesController::class, 'ug_artificial_intelligence_data_science_program_outcomes']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives', [PagesController::class, 'ug_artificial_intelligence_data_science_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes', [PagesController::class, 'ug_artificial_intelligence_data_science_programme_specific_outcomes']);





// Department -> Undergraduate -> Civil Engineering

Route::get('/academics/departments/undergraduate/civil-engineering', [PagesController::class, 'ug_civil_engineering']);
// Route::get('/academics/departments/undergraduate/civil-engineering/department-highlights', [PagesController::class, 'ug_civil_engineering_department_highlights']);
// Route::get('/academics/departments/undergraduate/civil-engineering/hods-desk', [PagesController::class, 'ug_civil_engineering_hods_desk']);
Route::get('/academics/departments/undergraduate/civil-engineering/faculty-details', [PagesController::class, 'ug_civil_engineering_faculty_details']);
Route::get('/academics/departments/undergraduate/civil-engineering/research-publications', [PagesController::class, 'ug_civil_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/civil-engineering/industry-collaboration', [PagesController::class, 'ug_civil_engineering_industry_collabration']);
Route::get('/academics/departments/undergraduate/civil-engineering/student-achievements', [PagesController::class, 'ug_civil_engineering_science_student_achievements']);
// Route::get('/academics/departments/undergraduate/civil-engineering/infrastructure', [PagesController::class, 'ug_civil_engineering_infrastructure']);
Route::get('/academics/departments/undergraduate/civil-engineering/program-outcomes', [PagesController::class, 'ug_civil_engineering_program_outcomes']);
Route::get('/academics/departments/undergraduate/civil-engineering/programme-educational-objectives', [PagesController::class, 'ug_civil_engineering_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/civil-engineering/programme-specific-outcomes', [PagesController::class, 'ug_civil_engineering_programme_specific_outcomes']);



// Department -> Undergraduate -> Department of Computer Science and Engineering


Route::get('/academics/departments/undergraduate/computer-science-and-engineering', [PagesController::class, 'ug_computer_science_and_engineering']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/department-highlights', [PagesController::class, 'ug_computer_science_and_engineering_department_highlights']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/hods-desk', [PagesController::class, 'ug_computer_science_and_engineering_hods_desk']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/faculty-details', [PagesController::class, 'ug_computer_science_and_engineering_faculty_details']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/research-publications', [PagesController::class, 'ug_computer_science_and_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/industry-collaboration', [PagesController::class, 'ug_computer_science_and_engineering_industry_collabration']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/student-achievements', [PagesController::class, 'ug_computer_science_and_engineering_student_achievements']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/infrastructure', [PagesController::class, 'ug_computer_science_and_engineering_infrastructure']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/program-outcomes', [PagesController::class, 'ug_computer_science_and_engineering_program_outcomes']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/programme-educational-objectives', [PagesController::class, 'ug_computer_science_and_engineering_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/computer-science-and-engineering/programme-specific-outcomes', [PagesController::class, 'ug_computer_science_and_engineering_programme_specific_outcomes']);



// Department -> Undergraduate -> Department of Electrical and Electronics Engineering


Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering', [PagesController::class, 'ug_electrical_and_electronics_engineering']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/department-highlights', [PagesController::class, 'ug_electrical_and_electronics_engineering_department_highlights']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/hods-desk', [PagesController::class, 'ug_electrical_and_electronics_engineering_hods_desk']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/faculty-details', [PagesController::class, 'ug_electrical_and_electronics_engineering_faculty_details']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/research-publications', [PagesController::class, 'ug_electrical_and_electronics_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/industry-collaboration', [PagesController::class, 'ug_electrical_and_electronics_engineering_industry_collabration']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/student-achievements', [PagesController::class, 'ug_electrical_and_electronics_engineering_student_achievements']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/infrastructure', [PagesController::class, 'ug_electrical_and_electronics_engineering_infrastructure']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/program-outcomes', [PagesController::class, 'ug_electrical_and_electronics_engineering_program_outcomes']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-educational-objectives', [PagesController::class, 'ug_electrical_and_electronics_engineering_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-specific-outcomes', [PagesController::class, 'ug_electrical_and_electronics_engineering_programme_specific_outcomes']);


// Department -> Undergraduate -> Department of Computer Science & Business Systems

Route::get('/academics/departments/undergraduate/computer-science-and-business-systems', [PagesController::class, 'ug_computer_science_and_business_systems']);
Route::get('/academics/departments/undergraduate/computer-science-and-business-systems/department-highlights', [PagesController::class, 'ug_computer_science_and_business_systems_department_highlights']);
Route::get('/academics/departments/undergraduate/computer-science-and-business-systems/hods-desk', [PagesController::class, 'ug_computer_science_and_business_systems_hods_desk']);
Route::get('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-details', [PagesController::class, 'ug_computer_science_and_business_systems_faculty_details']);
Route::get('/academics/departments/undergraduate/computer-science-and-business-systems/program-outcomes', [PagesController::class, 'ug_computer_science_and_business_systems_program_outcomes']);
Route::get('/academics/departments/undergraduate/computer-science-and-business-systems/programme-educational-objectives', [PagesController::class, 'ug_computer_science_and_business_systems_programme_educational_objectives']);
Route::get('/academics/departments/undergraduate/computer-science-and-business-systems/programme-specific-outcomes', [PagesController::class, 'ug_computer_science_and_business_systems_programme_specific_outcomes']);


// Department -> Department of Science & Humanities

Route::get('/academics/departments/science-humanities', [PagesController::class, 'department_science_humanities']);



// Department -> Postgraduate -> Master of Computer Application

Route::get('/academics/departments/postgraduate/master-of-computer-applications', [PagesController::class, 'department_mca']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/department-highlights', [PagesController::class, 'department_mca_department_highlights']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/hods-desk', [PagesController::class, 'department_mca_hods_desk']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/faculty-details', [PagesController::class, 'department_mca_faculty_details']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/research-publications', [PagesController::class, 'department_mca_research_publications']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/industry-collaboration', [PagesController::class, 'department_mca_industry_collabration']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/student-achievements', [PagesController::class, 'department_mca_student_achievements']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/laboratories-and-facilities', [PagesController::class, 'department_mca_laboratories_and_facilities']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/program-outcomes', [PagesController::class, 'department_mca_program_outcomes']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/programme-educational-objectives', [PagesController::class, 'department_mca_programme_educational_objectives']);
Route::get('/academics/departments/postgraduate/master-of-computer-applications/programme-specific-outcomes', [PagesController::class, 'department_mca_programme_specific_outcomes']);


// Department -> Postgraduate -> Master of Business Administration

Route::get('/academics/departments/postgraduate/master-of-business-administration', [PagesController::class, 'department_mba']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/department-highlights', [PagesController::class, 'department_mba_department_highlights']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/hods-desk', [PagesController::class, 'department_mba_hods_desk']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/faculty-details', [PagesController::class, 'department_mba_faculty_details']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/research-publications', [PagesController::class, 'department_mba_research_publications']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/industry-collaboration', [PagesController::class, 'department_mba_industry_collabration']);
// Route::get('/academics/departments/postgraduate/master-of-business-administration/laboratories-and-facilities',[PagesController::class,'department_mba_laboratories_and_facilities']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/student-achievements', [PagesController::class, 'department_mba_student_achievements']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/program-outcomes', [PagesController::class, 'department_mba_program_outcomes']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/programme-educational-objectives', [PagesController::class, 'department_mba_programme_educational_objectives']);
Route::get('/academics/departments/postgraduate/master-of-business-administration/programme-specific-outcomes', [PagesController::class, 'department_mba_programme_specific_outcomes']);



Route::get('/academics/departments/science-humanities', [PagesController::class, 'department_science_humanities']);
Route::get('/academics/departments/science-humanities/department-highlights', [PagesController::class, 'department_science_humanities_department_highlights']);
Route::get('/academics/departments/science-humanities/hods-desk', [PagesController::class, 'department_science_humanities_hods_desk']);
Route::get('/academics/departments/science-humanities/faculty-details', [PagesController::class, 'department_science_humanities_faculty_details']);
// Route::get('/academics/departments/science-humanities/research-publications', [PagesController::class, 'department_science_humanities_research_publications']);
Route::get('/academics/departments/science-humanities/industry-collaboration', [PagesController::class, 'department_science_humanities_industry_collabration']);
// Route::get('/academics/departments/science-humanities/student-achievements', [PagesController::class, 'department_science_humanities_student_achievements']);
Route::get('/academics/departments/science-humanities/program-outcomes', [PagesController::class, 'department_science_humanities_program_outcomes']);
Route::get('/academics/departments/science-humanities/programme-educational-objectives', [PagesController::class, 'department_science_humanities_programme_educational_objectives']);
Route::get('/academics/departments/science-humanities/programme-specific-outcomes', [PagesController::class, 'department_science_humanities_programme_specific_outcomes']);




// Contact Website Admin

// Route::get('/institution/internal/contact/website/admin', [InstitutionInternalPurpose::class, 'contact_website_admin'])->name('contact_website_admin');
// Route::post('/form-submit', [AdFormController::class, 'submit'])->name('form.submit');

Route::get('/institution/internal/contact/website/admin', [InstitutionInternalPurpose::class, 'contactWebsiteAdmin'])->name('contact_website_admin');
Route::post('/api/institution/store/egspec/', [InstitutionInternalPurpose::class, 'store'])->name('form.submit');
Route::get('/institution/internal/contact/website/admin/confirmation', function (Request $request) {
    $ticketId = $request->query('ticket-id');

    // Fetch ticket details first
    $ticketDetails = WebsiteTicketDetails::where('ticket_id', $ticketId)->first();


    $FirstTicketDetails = WebsiteUpdateEnquiry::where('ticket_id', $ticketId)->first();


    // Fetch all conversations for the ticket
    $conversations = TicketConversations::where('ticket_id', $ticketId)->orderBy('created_at', 'asc')->get();

    // Set SEO title and description
    SEOTools::setTitle("Ticket ID: $ticketId | Our team is working on this ticket. Kindly wait patiently.");
    SEOTools::setDescription("Confirmation for ticket ID: $ticketId. View your ticket details and status.");
    SEOTools::opengraph()->setTitle("Ticket ID: $ticketId");
    SEOTools::opengraph()->setDescription("Confirmation for ticket ID: $ticketId. View your ticket details and status.");
    SEOTools::twitter()->setTitle("Ticket ID: $ticketId");
    SEOTools::twitter()->setDescription("Confirmation for ticket ID: $ticketId. View your ticket details and status.");

    return view('components.templates.confirmation', [
        'ticket_id' => $ticketId,
        'ticket_status' => session('ticket_status'),
        'ticket_details' => $ticketDetails,
        'conversations' => $conversations,
        'first_ticket' => $FirstTicketDetails,
    ]);
})->name('confirmation');



Route::post('/institution/internal/contact/website/admin/send-message', function (Request $request) {
    // Validate the incoming request data
    $validated = $request->validate([
        'ticket_id' => 'required|string',
        'message' => 'required|string',
        'sender_type' => 'required|in:ticket_creator,web_master',
        'last_updated' => 'required|date_format:H:i:s', // Ensure last_updated is required
    ]);

    // Convert the last updated time into a Carbon instance
    $validated['last_updated'] = Carbon::createFromFormat('H:i:s', $validated['last_updated'])->toTimeString();

    // Create a new TicketConversation entry
    TicketConversations::create($validated);

    // Update the WebsiteTicketDetails table based on ticket_id
    $ticket = WebsiteTicketDetails::where('ticket_id', $validated['ticket_id'])->first();

    if ($ticket) {
        $ticket->update([
            'ticket_status' => 'open',
            'ticket_work_description' => 'We are working on your ticket, please wait patiently.',
            'appeal_data' => 'yes',
        ]);
    }

    // Redirect to the confirmation route after storing the message
    return redirect()->route('confirmation', ['ticket-id' => $validated['ticket_id']]);
})->name('website-send-message');

Route::get('/institution/social-media', [InstitutionInternalPurpose::class, 'social_meida'])->name('social_media');
Route::get('/institution/sitemap', [InstitutionInternalPurpose::class, 'index'])->name('sitemap.index');
Route::get('/legal/privacy-policy', [InstitutionInternalPurpose::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/legal/terms-and-conditions', [InstitutionInternalPurpose::class, 'terms_conditions'])->name('terms_conditions');


Route::get('/support/contact-us', [InstitutionInternalPurpose::class, 'contact_us'])->name('contact_us'); // web.php
Route::post('/support/contact-submit', [InstitutionInternalPurpose::class, 'contact_submit'])->name('contact.submit');
