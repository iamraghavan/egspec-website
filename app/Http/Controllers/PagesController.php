<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use App\Models\PostSlider;
use App\Models\IndustryAcademicPartnering;
use App\Models\Course;
use App\Models\Certification;
use App\Models\CoursesAndIntakes;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $sliderImages = SliderImage::where('department', 'general')->get();
        $posterSlider = PostSlider::where('page_name', 'general')->get();

        return view('pages.index', ['sliderImages' => $sliderImages, 'posterSlider' => $posterSlider]);
    }


    /* Academics */

    public function department_bachelors()
    {

        $courses = Course::where('course_type', 'bachelors')->get();
        return view('pages.academics.bachelors', ['academics' => $courses]);
    }

    public function department_masters()
    {
        $courses = Course::where('course_type', 'masters')->get();
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
        $iap = IndustryAcademicPartnering::all();
        return view('pages.academics.industry-academic-partnering', ['iap' => $iap]);
    }

    public function industry_certification_programs()
    {
        $certifications = Certification::all();
        return view('pages.academics.industry-certification-programs', ['certifications' => $certifications]);
    }

    public function industry_training_programs()
    {
        $training = Certification::all();
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

    public function courses_intake()
    {
        $ci = CoursesAndIntakes::all();
        return view('pages.admissions.courses-intake', ['ci' => $ci]);
    }
}
