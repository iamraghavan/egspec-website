<?php

namespace App\Http\Controllers;

use App\Models\SliderImage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $sliderImages = SliderImage::where('department', 'general')->get();
        return view('pages.index', ['sliderImages' => $sliderImages]);
    }
}
