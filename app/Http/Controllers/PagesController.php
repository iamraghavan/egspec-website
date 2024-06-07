<?php

namespace App\Http\Controllers;


use App\Models\SliderImage;
use App\Models\PostSlider;
use App\Models\IndustryAcademicPartnering;
use App\Models\Course;
use App\Models\Certification;
use App\Models\CoursesAndIntakes;
use App\Models\ComplaintCommittee;
use App\Models\Equipment;
use App\Models\NssAndRRC;
use App\Models\Route;
use App\Models\SportAthletesAndAchievements;
use App\Models\SportData;
use App\Models\Event;
use App\Models\PlacementStatistic;
use App\Models\WomenEmpowermentCellMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class PagesController extends Controller
{
    public function index()
    {
        $sliderImages = Cache::remember('general_slider_images', 120, function () {
            return SliderImage::where('department', 'general')->get();
        });

        $posterSlider = Cache::remember('general_poster_slider', 120, function () {
            return PostSlider::where('page_name', 'general')->get();
        });

        return view('pages.index', compact('sliderImages', 'posterSlider'));
    }


    public function rti()
    {
        return view('pages.right-to-information');
    }


    public function md()
    {
        return view('pages.mandatory-disclosure');
    }


    public function iqac_committe_members()
    {
        return view('pages.iqac.committe-members');
    }

    public function iqac_meeting_minutes()
    {
        return view('pages.iqac.iqac-meeting-minutes');
    }

    public function aicte_approved()
    {
        return view('pages.aicte');
    }

    public function nirf()
    {
        return view('pages.national-institutional-ranking-framework');
    }

    /* Skill Development Center */

    public function sdc_pmkk()
    {
        return view('pages.skill-development-center.pradhan-mantri-kaushal-kendra');
    }

    public function sdc_pmkvy()
    {
        return view('pages.skill-development-center.pradhan-mantri-kaushal-vikas-yojana');
    }

    public function accreditation_status()
    {
        return view('pages.accreditation-status');
    }

    public function aicte_egspec_video()
    {
        return view('pages.aicte-egspec-video');
    }


    public function governing_body()
    {
        return view('pages.governing-body');
    }


    /* Academics */

    public function department_bachelors()
    {
        $courses = Cache::remember('bachelors_courses', 120, function () {
            return Course::where('course_type', 'bachelors')->get();
        });

        return view('pages.academics.bachelors', ['academics' => $courses]);
    }

    public function department_masters()
    {
        $courses = Cache::remember('masters_courses', 120, function () {
            return Course::where('course_type', 'masters')->get();
        });

        return view('pages.academics.masters', ['academics' => $courses]);
    }

    public function department_mca()
    {
        return view('pages.academics.departments.mca');
    }

    public function department_mba()
    {
        return view('pages.academics.departments.mba');
    }

    public function department_science_humanities()
    {
        return view('pages.academics.departments.science-humanities');
    }

    public function industry_academic_partnering()
    {
        $iap = Cache::remember('industry_academic_partnering', 120, function () {
            return IndustryAcademicPartnering::all();
        });

        return view('pages.academics.industry-academic-partnering', ['iap' => $iap]);
    }

    public function industry_certification_programs()
    {
        $certifications = Cache::remember('industry_certification_programs', 120, function () {
            return Certification::all();
        });

        return view('pages.academics.industry-certification-programs', ['certifications' => $certifications]);
    }

    public function industry_training_programs()
    {
        $training = Cache::remember('industry_training_programs', 120, function () {
            return Certification::all();
        });

        return view('pages.academics.industry-training-programs', ['training' => $training]);
    }
    public function advisory_board()
    {

        return view('pages.academics.advisory-board');
    }


    /* Admissions */

    public function tnea()
    {
        return view('pages.admissions.tnea');
    }


    public function efcc()
    {
        return view('pages.admissions.efcc');
    }

    public function courses_intake()
    {
        $ci = Cache::remember('courses_intake', 120, function () {
            return CoursesAndIntakes::all();
        });

        return view('pages.admissions.courses-intake', compact('ci'));
    }

    public function complaint_committee()
    {
        $cc = Cache::remember('complaint_committee', 120, function () {
            return ComplaintCommittee::all();
        });

        return view('pages.admissions.complaint-committee', compact('cc'));
    }


    /* Facilities */

    public function infrastructure()
    {
        return view('pages.facilities.infrastructure');
    }

    public function indoor()
    {
        return view('pages.facilities.indoor-stadium');
    }

    public function basketball_court()
    {
        return view('pages.facilities.basketball-court');
    }

    public function laboratries()
    {

        return view('pages.facilities.laboratries');
    }

    public function computer_laboratory()
    {

        return view('pages.facilities.laboratries.computer-laboratory');
    }


    public function civil_laboratory()
    {

        return view('pages.facilities.laboratries.civil-laboratory');
    }

    public function electronics_laboratory()
    {

        return view('pages.facilities.laboratries.electronics-laboratory');
    }

    public function electrical_laboratory()
    {

        return view('pages.facilities.laboratries.electrical-laboratory');
    }


    public function hostel()
    {

        return view('pages.facilities.hostel');
    }


    public function library()
    {

        return view('pages.facilities.library');
    }

    public function mechanical_laboratory()
    {
        $equipment = Cache::remember('mechanical_laboratory_equipment', 120, function () {
            return Equipment::all();
        });
        return view('pages.facilities.laboratries.mechanical-laboratory', ['equipment' => $equipment]);
    }

    public function transport()
    {
        $transport = Cache::remember('transport_routes', 120, function () {
            return Route::all();
        });
        return view('pages.facilities.transport', ['transport' => $transport]);
    }


    public function cafeteria()
    {

        return view('pages.facilities.cafeteria');
    }


    /* Activities */

    public function sports()
    {

        $sportsData = Cache::remember('sports_data', 120, function () {
            return SportData::all();
        });


        $A3 = Cache::remember('athlete_achievements', 120, function () {
            return SportAthletesAndAchievements::all();
        });

        return view('pages.activities.extra-curricular.sports', ['sportsData' => $sportsData, 'A3' => $A3]);
    }

    public function nss_and_red_ribbon_club()
    {

        $NssandRRC = NssAndRRC::all();
        return view('pages.activities.extra-curricular.nss-and-red-ribbon-club', ['NssandRRC' => $NssandRRC]);
    }

    public function workshop()
    {

        return view('pages.activities.co-curricular.workshop');
    }

    public function symposium()
    {

        return view('pages.activities.co-curricular.symposium');
    }

    public function conference()
    {

        return view('pages.activities.co-curricular.conference');
    }

    public function entrepreneurship_development_cell()
    {

        $events = Cache::remember('events_data', 120, function () {
            return Event::all();
        });

        return view('pages.activities.cells.entrepreneurship-development-cell', ['events' => $events]);
    }

    public function women_empowerment_cell()
    {
        $wec = Cache::remember('wec_data', 120, function () {
            return WomenEmpowermentCellMember::all();
        });

        $wec_slider = Cache::remember('wec_slider', 120, function () {
            return PostSlider::where('page_name', 'wec')->get();
        });

        return view('pages.activities.cells.women-empowerment-cell', ['wec' => $wec, 'wec_slider' => $wec_slider]);
    }

    public function internal_complaints_committee()
    {

        $icc_slider = Cache::remember('icc_slider', 120, function () {
            return PostSlider::where('page_name', 'icc')->get();
        });
        return view('pages.activities.cells.internal-complaints-committee', ['icc_slider' => $icc_slider]);
    }


    public function carrier_guidance()
    {
        return view('pages.activities.cells.carrier-guidance');
    }

    public function anti_ragging_committee()
    {

        return view('pages.activities.anti-ragging-committee');
    }

    public function iso_coordinators()
    {

        return view('pages.activities.iso.coordinators');
    }

    public function iso_certificates()
    {

        return view('pages.activities.iso.certificate');
    }

    public function iso_manual()
    {
        return view('pages.activities.iso.manual');
    }

    public function discipline_committee()
    {
        return view('pages.activities.discipline-committee');
    }

    public function ieee()
    {
        return view('pages.activities.professional-bodies.ieee');
    }


    public function iste()
    {

        return view('pages.activities.professional-bodies.iste');
    }

    public function ictact()
    {

        return view('pages.activities.professional-bodies.ictact');
    }


    public function csi()
    {

        return view('pages.activities.professional-bodies.csi');
    }


    public function iete()
    {

        return view('pages.activities.professional-bodies.iete');
    }


    public function iei()
    {
        return view('pages.activities.professional-bodies.iei');
    }



    /* Research */

    public function research_and_development()
    {
        return view('pages.research.research-and-development');
    }

    public function research_sasd()
    {

        return view('pages.research.research-supervisor');
    }

    public function publication_details()
    {
        return view('pages.research.publication-details');
    }

    public function patent_details()
    {
        return view('pages.research.patent-details');
    }

    public function copyrights()
    {
        return view('pages.research.research-copyright');
    }

    public function r_and_d_policy()
    {
        return view('pages.research.r-and-d-policy');
    }

    public function prj_mechanical_engineering()
    {

        return view('pages.research.projects.mechanical-engineering');
    }

    public function prj_civil_engineering()
    {

        return view('pages.research.projects.civil-engineering');
    }

    public function prj_electronics_and_communication_engineering()
    {

        return view('pages.research.projects.electronics-and-communication-engineering');
    }

    public function prj_computer_science_and_engineering()
    {

        return view('pages.research.projects.computer-science-and-engineering');
    }

    public function prj_information_technology()
    {

        return view('pages.research.projects.information-technology');
    }


    public function prj_electrical_and_electronics_engineering()
    {

        return view('pages.research.projects.electrical-and-electronics-engineering');
    }

    /* About us */

    public function our_focus()
    {
        return view('pages.about.our-focus');
    }

    public function vision_and_mission()
    {

        return view('pages.about.vision-and-mission');
    }

    public function history()
    {

        return view('pages.about.history');
    }

    public function message_from_the_founder_and_chairman()
    {

        return view('pages.about.message-from-the-founder-and-chairman');
    }


    public function message_from_the_secretary()
    {

        return view('pages.about.message-from-the-secretary');
    }

    public function message_from_the_principal()
    {

        return view('pages.about.message-from-the-principal');
    }

    public function adminstrative_organization()
    {

        return view('pages.about.adminstrative-organization');
    }

    public function organizational_chart()
    {

        return view('pages.about.organizational-chart');
    }

    public function milestones()
    {

        return view('pages.about.milestones');
    }


    public function hr_policy()
    {

        return view('pages.about.hr-policy');
    }

    public function audit_statement()
    {

        return view('pages.about.audit-statement');
    }

    public function strategic_plan()
    {

        return view('pages.about.strategic-plan');
    }

    public function strategic_plan_meeting_minutes()
    {

        return view('pages.about.strategic-plan-meeting-minutes');
    }


    /* Placement */

    public function memorandum_of_understanding()
    {

        return view('pages.placement.memorandum-of-understanding');
    }

    public function placement_team()
    {

        return view('pages.placement.placement-team');
    }

    public function placement_statistics()
    {
        $placementStatistics = PlacementStatistic::all();

        $posterSlider = Cache::remember('general_poster_slider', 120, function () {
            return PostSlider::where('page_name', 'pls')->get();
        });
        return view('pages.placement.placement-statistics', compact('placementStatistics', 'posterSlider'));
    }

    public function our_top_recruiters()
    {

        return view('pages.placement.our-top-recruiters');
    }

    public function placement_gallery()
    {

        return view('pages.placement.placement-gallery');
    }

    // Department -> Undergraduate -> Mechnical Engineering

    public function ug_mechnical_engineering()
    {
        return view('pages.academics.departments.undergraduate.mechanical-engineering.mechanical-engineering');
    }




    // Department -> Undergraduate -> Information Technology

    public function ug_information_technology()
    {
        return view('pages.academics.departments.undergraduate.information-technology.information-technology');
    }

    public function ug_information_technology_department_highlights()
    {
        return view('pages.academics.departments.undergraduate.information-technology.department-highlights');
    }

    public function ug_information_technology_hods_desk()
    {
        return view('pages.academics.departments.undergraduate.information-technology.hods-desk');
    }

    public function ug_information_technology_faculty_details()
    {
        return view('pages.academics.departments.undergraduate.information-technology.faculty-details');
    }

    public function ug_information_technology_research_publications()
    {
        return view('pages.academics.departments.undergraduate.information-technology.research-publications');
    }

    public function ug_information_technology_industry_collabration()
    {
        return view('pages.academics.departments.undergraduate.information-technology.industry-collabration');
    }

    public function ug_information_technology_infrastructure()
    {
        return view('pages.academics.departments.undergraduate.information-technology.infrastructure');
    }

    public function ug_information_technology_student_achievements()
    {
        return view('pages.academics.departments.undergraduate.information-technology.student-achievements');
    }

    public function ug_information_technology_program_outcomes()
    {
        return view('pages.academics.departments.undergraduate.information-technology.program-outcomes');
    }

    public function ug_information_technology_programme_educational_objectives()
    {
        return view('pages.academics.departments.undergraduate.information-technology.programme-educational-objectives');
    }

    public function ug_information_technology_programme_specific_outcomes()
    {

        return view('pages.academics.departments.undergraduate.information-technology.programme-specific-outcomes');
    }
}
