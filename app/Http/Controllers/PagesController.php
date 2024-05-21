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
        return view('pages.academics.mca');
    }

    public function department_mba()
    {
        return view('pages.academics.mba');
    }

    public function department_science_humanities()
    {
        return view('pages.academics.science-humanities');
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
}
