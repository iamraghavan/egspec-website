<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use App\Models\PostSlider;
use App\Models\Course;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $sliderImages = SliderImage::where('department', 'general')->get();
        $posterSlider = PostSlider::where('page_name', 'general')->get();

        return view('pages.index', ['sliderImages' => $sliderImages, 'posterSlider' => $posterSlider]);
    }

    public function department_bachelors()
    {

        $courses = Course::where('course_type', 'bachelors')->get();
        return view('pages.academics.bachelors', ['academics' => $courses]);
    }
}
