<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdFormController;

// Other Backend Operation Routes
Route::post('/admission-submit-form', [AdFormController::class, 'adsubmitForm'])->name('adsubmitForm');

Route::get('/', [PagesController::class, 'index']);
Route::get('/right-to-information', [PagesController::class, 'rti']);
Route::get('/mandatory-disclosure', [PagesController::class, 'md']);




// Route::get('/', [PagesController::class, 'index']);
// Route::get('/right-to-information', [PagesController::class, 'rti']);
// Route::get('/mandatory-disclosure', [PagesController::class, 'md']);

// Skill Development Center

Route::get('/skill-development-center/pradhan-mantri-kaushal-kendra', [PagesController::class, 'sdc_pmkk']);
Route::get('/skill-development-center/pradhan-mantri-kaushal-vikas-yojana', [PagesController::class, 'sdc_pmkvy']);

// iqac
Route::get('/iqac/committe-members', [PagesController::class, 'iqac_committe_members']);
Route::get('/iqac/meeting-minutes', [PagesController::class, 'iqac_meeting_minutes']);

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

// Route::get('/placements/memorandum-of-understanding', [PagesController::class, 'memorandum_of_understanding']);
// Route::get('/placements/placement-team', [PagesController::class, 'placement_team']);
// Route::get('/placements/statistics', [PagesController::class, 'placement_statistics']);
// Route::get('/placement/our-top-recruiters', [PagesController::class, 'our_top_recruiters']);
// Route::get('/placement/placement-gallery', [PagesController::class, 'placement_gallery']);



// Route for Academics -> Departments

// Department -> Undergraduate -> Mechnical Engineering
Route::get('/academics/departments/undergraduate/mechanical-engineering', [PagesController::class, 'ug_mechnical_engineering']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/research-publications', [PagesController::class, 'ug_mechnical_engineering_research_publications']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/industry-collaboration', [PagesController::class, 'ug_mechnical_engineering_industry_collabration']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/infrastructure', [PagesController::class, 'ug_mechnical_engineering_infrastructure']);
Route::get('/academics/departments/undergraduate/mechanical-engineering/student-achievements', [PagesController::class, 'ug_mechanical_engineering_student_achievements']);



// Route::get('/academics/departments/undergraduate/mechanical-engineering', [PagesController::class, 'ug_mechanical_engineering']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/department-highlights', [PagesController::class, 'ug_mechanical_engineering_department_highlights']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/hods-desk', [PagesController::class, 'ug_mechanical_engineering_hods_desk']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/faculty-details', [PagesController::class, 'ug_mechanical_engineering_faculty_details']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/research-publications', [PagesController::class, 'ug_mechanical_engineering_research_publications']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/industry-collaboration', [PagesController::class, 'ug_mechanical_engineering_industry_collabration']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/infrastructure', [PagesController::class, 'ug_mechanical_engineering_infrastructure']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/student-achievements', [PagesController::class, 'ug_mechanical_engineering_student_achievements']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/program-outcomes', [PagesController::class, 'ug_mechanical_engineering_program_outcomes']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/programme-educational-objectives', [PagesController::class, 'ug_mechanical_engineering_programme_educational_objectives']);
// Route::get('/academics/departments/undergraduate/mechanical-engineering/programme-specific-outcomes', [PagesController::class, 'ug_mechanical_engineering_programme_specific_outcomes']);



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
