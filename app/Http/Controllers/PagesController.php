<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Http;
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
use App\Models\StudentAchievement;
use App\Models\WomenEmpowermentCellMember;
use Illuminate\Support\Facades\Cache;

// SEO
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

class PagesController extends Controller
{
    public function index()
    {
        $sliderImages = $this->getSliderImages();
        $posterSlider = $this->getPosterSlider();
        $messages = $this->getMarqueeMessages();

        // SEO configuration
        SEOTools::setDescription('Discover E.G.S. Pillay Engineering College, offering B.E. / B.Tech in Mechanical, Civil, Electrical and Electronics, Electronics and Communication, Computer Science, Information Technology, Biomedical Engineering, and AI & Data Science. Advance your career with MCA and MBA programs. Join us for a transformative education in engineering and humanities.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('place:location:latitude', '10.803943701301094');
        SEOTools::opengraph()->addProperty('place:location:longitude', '79.83265215286534');
        SEOTools::opengraph()->addProperty('place:place', 'E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('place:description', 'A premier engineering college in Nagapattinam, offering various undergraduate and postgraduate courses in engineering and technology.');
        SEOTools::twitter()->setType('summary_large_image');
        SEOTools::twitter()->setTitle('E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('A premier engineering college in Nagapattinam, offering various undergraduate and postgraduate courses in engineering and technology.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setSite('@raghavanjeeva'); // Replace with your Twitter handle
        SEOTools::jsonLd()->addImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // Return the view with the necessary data
        return view('pages.index', compact('sliderImages', 'posterSlider', 'messages'));
    }

    private function getSliderImages()
    {
        return Cache::remember('general_slider_images', 120, function () {
            return SliderImage::where('department', 'general')->get();
        });
    }

    private function getPosterSlider()
    {
        return Cache::remember('general_poster_slider', 120, function () {
            return PostSlider::where('page_name', 'general')->get();
        });
    }

    private function getMarqueeMessages()
    {
        // Fetch JSON data from the public directory
        $jsonPath = public_path('data/messages.json');

        // Check if the file exists to avoid errors
        if (file_exists($jsonPath)) {
            return json_decode(file_get_contents($jsonPath), true);
        } else {
            // Return empty array if the file doesn't exist
            return [];
        }
    }



    public function rti()
    {
        SEOTools::setTitle('Right to Information');
        SEOTools::setDescription('Explore the Right to Information (RTI) Act and access vital information at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Right to Information | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Explore the Right to Information (RTI) Act and access vital information at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Right to Information | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Explore the Right to Information (RTI) Act and access vital information at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.right-to-information');
    }

    public function md()
    {
        SEOTools::setTitle('Mandatory Disclosure');
        SEOTools::setDescription('Access the Mandatory Disclosure information for E.G.S. Pillay Engineering College, including policies and guidelines.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Mandatory Disclosure | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Access the Mandatory Disclosure information for E.G.S. Pillay Engineering College, including policies and guidelines.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Mandatory Disclosure | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Access the Mandatory Disclosure information for E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.mandatory-disclosure');
    }

    public function iqac_committe_members()
    {
        SEOTools::setTitle('IQAC Committee Members');
        SEOTools::setDescription('Meet the IQAC Committee members dedicated to enhancing academic quality at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Committee Members | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Meet the IQAC Committee members dedicated to enhancing academic quality at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Committee Members | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Meet the IQAC Committee members at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.committe-members');
    }

    public function iqac_directors_profile()
    {
        SEOTools::setTitle('IQAC Directors Profile');
        SEOTools::setDescription('Learn about the IQAC Directors and their contributions to academic excellence at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Directors Profile | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Learn about the IQAC Directors and their contributions to academic excellence at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Directors Profile | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Learn about the IQAC Directors at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.directors-profile');
    }

    public function iqac_convener_profile()
    {
        SEOTools::setTitle('IQAC Convener Profile');
        SEOTools::setDescription('Learn about the IQAC Convener and their role in the IQAC committee at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Convener Profile | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Learn about the IQAC Convener and their role in the IQAC committee at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Convener Profile | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Learn about the IQAC Convener at E.G.S.Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.convener-profile');
    }

    public function iqac_meeting_minutes()
    {
        SEOTools::setTitle('IQAC Meeting Minutes');
        SEOTools::setDescription('Access the meeting minutes of the IQAC to understand the discussions and decisions made at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Meeting Minutes | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Access the meeting minutes of the IQAC to understand the discussions and decisions made at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Meeting Minutes | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Access the IQAC meeting minutes at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.iqac-meeting-minutes');
    }


    public function iqac_works_plan_and_implementation()
    {
        SEOTools::setTitle('IQAC Works Plan and Implementation');
        SEOTools::setDescription('Learn about the IQAC works plan and implementation at E.G.S. Pillay Engineering College to enhance academic quality.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Works Plan and Implementation | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Learn about the IQAC works plan and implementation at E.G.S. Pillay Engineering College to enhance academic quality.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Works Plan and Implementation | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Learn about the IQAC works plan and implementation at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.works-plan-and-implementation');
    }


    public function iqac_function()
    {
        SEOTools::setTitle('IQAC Function');
        SEOTools::setDescription('Learn about the IQAC function and its responsibilities at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Function | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Learn about the IQAC function and its responsibilities at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Function | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Learn about the IQAC function at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.function');
    }


    public function iqac_events()
    {
        SEOTools::setTitle('IQAC Events');
        SEOTools::setDescription('Discover the IQAC events and activities organized to enhance academic quality at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Events | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Discover the IQAC events and activities organized to enhance academic quality at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Events | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Discover the IQAC events and activities at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.iqac-events');
    }

    public function iqac_yearly_reports()
    {
        SEOTools::setTitle('IQAC Yearly Reports');
        SEOTools::setDescription('Access the IQAC yearly reports at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Yearly Reports | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Access the IQAC yearly reports at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Yearly Reports | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Access the IQAC yearly reports at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.yearly-reports');
    }

    public function iqac_yearly_reports_department_files()
    {
        SEOTools::setTitle('IQAC Yearly Reports - Department Files');
        SEOTools::setDescription('Access the IQAC yearly reports for the departments at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Yearly Reports - Department Files | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Access the IQAC yearly reports for the departments at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Yearly Reports - Department Files | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Access the IQAC yearly reports for the departments at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.department-files');
    }

    public function iqac_yearly_reports_office_files()
    {
        SEOTools::setTitle('IQAC Yearly Reports - Office Files');
        SEOTools::setDescription('Access the IQAC yearly reports for the office at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Yearly Reports - Office Files | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Access the IQAC yearly reports for the office at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Yearly Reports - Office Files | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Access the IQAC yearly reports for the office at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.office-files');
    }


    public function iqac_yearly_reports_general_files()
    {

        SEOTools::setTitle('IQAC Yearly Reports - General Files');
        SEOTools::setDescription('Access the IQAC yearly reports for the general files at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'IQAC Yearly Reports - General Files | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Access the IQAC yearly reports for the general files at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('IQAC Yearly Reports - General Files | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Access the IQAC yearly reports for the general files at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.iqac.general-files');
    }





    public function aicte_approved()
    {
        SEOTools::setTitle('AICTE Approved Programs');
        SEOTools::setDescription('Discover the AICTE approved programs offered at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'AICTE Approved Programs | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Discover the AICTE approved programs offered at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('AICTE Approved Programs | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Discover AICTE approved programs at E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.aicte');
    }

    public function nirf()
    {
        SEOTools::setTitle('NIRF Ranking');
        SEOTools::setDescription('Explore the NIRF rankings and how E.G.S. Pillay Engineering College performs in national assessments.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'NIRF Ranking | E.G.S. Pillay Engineering College');
        SEOTools::opengraph()->addProperty('description', 'Explore the NIRF rankings and how E.G.S. Pillay Engineering College performs in national assessments.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('NIRF Ranking | E.G.S. Pillay Engineering College');
        SEOTools::twitter()->setDescription('Explore the NIRF rankings of E.G.S. Pillay Engineering College.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.national-institutional-ranking-framework');
    }


    /* Skill Development Center */

    public function sdc_pmkk()
    {
        SEOTools::setTitle('Pradhan Mantri Kaushal Kendra | Skill Development Center');
        SEOTools::setDescription('Learn about the Pradhan Mantri Kaushal Kendra initiative aimed at enhancing skill development in India.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Pradhan Mantri Kaushal Kendra | Skill Development Center');
        SEOTools::opengraph()->addProperty('description', 'Learn about the Pradhan Mantri Kaushal Kendra initiative aimed at enhancing skill development in India.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Pradhan Mantri Kaushal Kendra | Skill Development Center');
        SEOTools::twitter()->setDescription('Learn about the Pradhan Mantri Kaushal Kendra initiative for skill enhancement.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.skill-development-center.pradhan-mantri-kaushal-kendra');
    }

    public function sdc_pmkvy()
    {
        SEOTools::setTitle('Pradhan Mantri Kaushal Vikas Yojana | Skill Development Center');
        SEOTools::setDescription('Explore the Pradhan Mantri Kaushal Vikas Yojana aimed at skill development across India.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Pradhan Mantri Kaushal Vikas Yojana | Skill Development Center');
        SEOTools::opengraph()->addProperty('description', 'Explore the Pradhan Mantri Kaushal Vikas Yojana aimed at skill development across India.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Pradhan Mantri Kaushal Vikas Yojana | Skill Development Center');
        SEOTools::twitter()->setDescription('Explore the Pradhan Mantri Kaushal Vikas Yojana for skill enhancement.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.skill-development-center.pradhan-mantri-kaushal-vikas-yojana');
    }

    public function accreditation_status()
    {
        SEOTools::setTitle('Accreditation Status');
        SEOTools::setDescription('Check the accreditation status and standards upheld by the Skill Development Center.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Accreditation Status');
        SEOTools::opengraph()->addProperty('description', 'Check the accreditation status and standards upheld by the Skill Development Center.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Accreditation Status');
        SEOTools::twitter()->setDescription('Find out the accreditation status of the Skill Development Center.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.accreditation-status');
    }

    public function aicte_egspec_video()
    {
        SEOTools::setTitle('AICTE EGSPEC Video');
        SEOTools::setDescription('Watch the AICTE video featuring the Skill Development Center and its initiatives.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'AICTE EGSPEC Video');
        SEOTools::opengraph()->addProperty('description', 'Watch the AICTE video featuring the Skill Development Center and its initiatives.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('AICTE EGSPEC Video');
        SEOTools::twitter()->setDescription('Watch the AICTE video about the Skill Development Center.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.aicte-egspec-video');
    }

    public function governing_body()
    {
        SEOTools::setTitle('Governing Body');
        SEOTools::setDescription('Meet the governing body overseeing the Skill Development Center and its initiatives.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Governing Body');
        SEOTools::opengraph()->addProperty('description', 'Meet the governing body overseeing the Skill Development Center and its initiatives.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Governing Body');
        SEOTools::twitter()->setDescription('Meet the governing body responsible for the Skill Development Center.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.governing-body');
    }



    /* Academics */

    public function department_bachelors()
    {
        $courses = Cache::remember('bachelors_courses', 120, function () {
            return Course::where('course_type', 'bachelors')->get();
        });

        SEOTools::setTitle('Undergraduate Programs');
        SEOTools::setDescription('Explore our undergraduate programs including B.E/B.Tech in various engineering disciplines.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Undergraduate Programs');
        SEOTools::opengraph()->addProperty('description', 'Explore our undergraduate programs including B.E/B.Tech in various engineering disciplines.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Undergraduate Programs');
        SEOTools::twitter()->setDescription('Discover our undergraduate programs in engineering.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.bachelors', ['academics' => $courses]);
    }

    public function department_masters()
    {
        $courses = Cache::remember('masters_courses', 120, function () {
            return Course::where('course_type', 'masters')->get();
        });

        SEOTools::setTitle('Postgraduate Programs');
        SEOTools::setDescription('Discover our postgraduate programs including M.E/M.Tech in various engineering fields.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Postgraduate Programs');
        SEOTools::opengraph()->addProperty('description', 'Discover our postgraduate programs including M.E/M.Tech in various engineering fields.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Postgraduate Programs');
        SEOTools::twitter()->setDescription('Learn about our postgraduate engineering programs.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.masters', ['academics' => $courses]);
    }



    public function industry_academic_partnering()
    {
        $iap = Cache::remember('industry_academic_partnering', 120, function () {
            return IndustryAcademicPartnering::all();
        });

        SEOTools::setTitle('Industry-Academic Partnering | Innovative Learning');
        SEOTools::setDescription('Discover collaborations between industry and academia to enhance educational outcomes.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Industry-Academic Partnering | Innovative Learning');
        SEOTools::opengraph()->addProperty('description', 'Discover collaborations between industry and academia to enhance educational outcomes.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry-Academic Partnering | Innovative Learning');
        SEOTools::twitter()->setDescription('Explore our industry partnerships for enhanced learning.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.industry-academic-partnering', ['iap' => $iap]);
    }

    public function industry_certification_programs()
    {
        $certifications = Cache::remember('industry_certification_programs', 120, function () {
            return Certification::all();
        });

        SEOTools::setTitle('Industry Certification Programs | Professional Development');
        SEOTools::setDescription('Explore various industry-recognized certification programs to enhance your skills.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Industry Certification Programs | Professional Development');
        SEOTools::opengraph()->addProperty('description', 'Explore various industry-recognized certification programs to enhance your skills.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Certification Programs | Professional Development');
        SEOTools::twitter()->setDescription('Discover our certification programs for career growth.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.industry-certification-programs', ['certifications' => $certifications]);
    }

    public function industry_training_programs()
    {
        $training = Cache::remember('industry_training_programs', 120, function () {
            return Certification::all();
        });

        SEOTools::setTitle('Industry Training Programs | Skill Enhancement');
        SEOTools::setDescription('Join our industry training programs designed to boost your professional skills.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Industry Training Programs | Skill Enhancement');
        SEOTools::opengraph()->addProperty('description', 'Join our industry training programs designed to boost your professional skills.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Training Programs | Skill Enhancement');
        SEOTools::twitter()->setDescription('Enhance your skills with our industry training programs.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.industry-training-programs', ['training' => $training]);
    }

    public function advisory_board()
    {
        SEOTools::setTitle('Advisory Board | Expert Guidance');
        SEOTools::setDescription('Meet our advisory board, a group of experts providing guidance for academic excellence.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Advisory Board | Expert Guidance');
        SEOTools::opengraph()->addProperty('description', 'Meet our advisory board, a group of experts providing guidance for academic excellence.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Advisory Board | Expert Guidance');
        SEOTools::twitter()->setDescription('Learn about our advisory board and their role in academic leadership.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.advisory-board');
    }



    /* Admissions */

    public function tnea()
    {
        SEOTools::setTitle('TNEA Admissions | TNEA Code 8208');
        SEOTools::setDescription('Learn about the TNEA admission process for engineering courses and how to apply.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'TNEA Admissions');
        SEOTools::opengraph()->addProperty('description', 'The TNEA code for E.G.S. Pillay Engineering College is 8208. Learn about the TNEA admission process for engineering courses and how to apply.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('TNEA Admissions | TNEA Code 8208');
        SEOTools::twitter()->setDescription('Find out how to navigate the TNEA admission process.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.tnea');
    }

    public function efcc()
    {
        SEOTools::setTitle('Excess Fee Committee Circular');
        SEOTools::setDescription('Excess Fee Committee Circular');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Excess Fee Committee Circular');
        SEOTools::opengraph()->addProperty('description', 'Excess Fee Committee Circular');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Excess Fee Committee Circular');
        SEOTools::twitter()->setDescription('Excess Fee Committee Circular');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.efcc');
    }

    public function courses_intake()
    {
        $ci = Cache::remember('courses_intake', 120, function () {
            return CoursesAndIntakes::all();
        });

        SEOTools::setTitle('Courses Intake');
        SEOTools::setDescription('Find detailed information about course intakes for various programs.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Courses Intake');
        SEOTools::opengraph()->addProperty('description', 'Find detailed information about course intakes for various programs.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Courses Intake');
        SEOTools::twitter()->setDescription('Get information on course intake and how to apply.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.courses-intake', compact('ci'));
    }

    public function why_study_here()
    {
        SEOTools::setTitle('Why Study Here? | Your Future Awaits');
        SEOTools::setDescription('Discover the benefits of studying at our institution and the opportunities available.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Why Study Here? | Your Future Awaits');
        SEOTools::opengraph()->addProperty('description', 'Discover the benefits of studying at our institution and the opportunities available.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Why Study Here? | Your Future Awaits');
        SEOTools::twitter()->setDescription('Learn why you should choose our institution for your studies.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.why-study-here');
    }

    public function faq()
    {
        SEOTools::setTitle('FAQ | Your Questions Answered');
        SEOTools::setDescription('Find answers to frequently asked questions about the admissions process.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'FAQ | Questions Answered');
        SEOTools::opengraph()->addProperty('description', 'Find answers to frequently asked questions about our college.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('FAQ | Questions Answered');
        SEOTools::twitter()->setDescription('Get answers to common admissions-related questions.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.faq');
    }

    public function admission_procedure_undergraduate()
    {
        SEOTools::setTitle('Undergraduate Admission Procedure');
        SEOTools::setDescription('Learn about the admission procedure for undergraduate programs.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Undergraduate Admission Procedure');
        SEOTools::opengraph()->addProperty('description', 'Learn about the admission procedure for undergraduate programs.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Undergraduate Admission Procedure');
        SEOTools::twitter()->setDescription('Discover how to apply for undergraduate courses.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.admission-procedure.undergraduate');
    }

    public function admission_procedure_postgraduate()
    {
        SEOTools::setTitle('Postgraduate Admission Procedure');
        SEOTools::setDescription('Find out about the admission procedure for postgraduate programs.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Postgraduate Admission Procedure');
        SEOTools::opengraph()->addProperty('description', 'Find out about the admission procedure for postgraduate programs.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Postgraduate Admission Procedure');
        SEOTools::twitter()->setDescription('Learn how to apply for postgraduate courses.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.admission-procedure.postgraduate');
    }

    public function admission_procedure_lateral_entry()
    {
        SEOTools::setTitle('Lateral Entry Admission Procedure');
        SEOTools::setDescription('Explore the admission procedure for lateral entry into various programs.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Lateral Entry Admission Procedure');
        SEOTools::opengraph()->addProperty('description', 'Explore the admission procedure for lateral entry into various programs.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Lateral Entry Admission Procedure');
        SEOTools::twitter()->setDescription('Find out how to apply for lateral entry.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.admission-procedure.lateral-entry');
    }

    public function complaint_committee()
    {
        $cc = Cache::remember('complaint_committee', 120, function () {
            return ComplaintCommittee::all();
        });

        SEOTools::setTitle('Complaint Committee | Support and Guidance');
        SEOTools::setDescription('Learn about the complaint committee and how they assist students.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Complaint Committee | Support and Guidance');
        SEOTools::opengraph()->addProperty('description', 'Learn about the complaint committee and how they assist students.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Complaint Committee | Support and Guidance');
        SEOTools::twitter()->setDescription('Understand the role of our complaint committee in supporting students.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.admissions.complaint-committee', compact('cc'));
    }



    /* Facilities */

    public function infrastructure()
    {
        SEOTools::setTitle('Infrastructure Facilities | Quality Learning Environment');
        SEOTools::setDescription('Explore our state-of-the-art infrastructure that supports quality education and student life.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Infrastructure Facilities | Quality Learning Environment');
        SEOTools::opengraph()->addProperty('description', 'Explore our state-of-the-art infrastructure that supports quality education and student life.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Infrastructure Facilities | Quality Learning Environment');
        SEOTools::twitter()->setDescription('Discover our modern infrastructure designed for student success.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.infrastructure');
    }

    public function indoor()
    {
        SEOTools::setTitle('Indoor Stadium | Sports and Fitness Facilities');
        SEOTools::setDescription('Our indoor stadium offers excellent facilities for various sports and fitness activities.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Indoor Stadium | Sports and Fitness Facilities');
        SEOTools::opengraph()->addProperty('description', 'Our indoor stadium offers excellent facilities for various sports and fitness activities.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Indoor Stadium | Sports and Fitness Facilities');
        SEOTools::twitter()->setDescription('Join us in our indoor stadium for sports and fitness activities.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.indoor-stadium');
    }

    public function basketball_court()
    {
        SEOTools::setTitle('Basketball Court | Play and Compete');
        SEOTools::setDescription('Our basketball court is equipped for both practice and competitive play.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Basketball Court | Play and Compete');
        SEOTools::opengraph()->addProperty('description', 'Our basketball court is equipped for both practice and competitive play.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Basketball Court | Play and Compete');
        SEOTools::twitter()->setDescription('Experience basketball at its best on our well-maintained court.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.basketball-court');
    }

    public function laboratries()
    {
        SEOTools::setTitle('Laboratories | Hands-on Learning Experience');
        SEOTools::setDescription('Discover our fully equipped laboratories for practical learning in various fields.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Laboratories | Hands-on Learning Experience');
        SEOTools::opengraph()->addProperty('description', 'Discover our fully equipped laboratories for practical learning in various fields.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Laboratories | Hands-on Learning Experience');
        SEOTools::twitter()->setDescription('Explore our labs designed for practical education and research.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.laboratries');
    }

    public function computer_laboratory()
    {
        SEOTools::setTitle('Computer Laboratory | Technology and Innovation');
        SEOTools::setDescription('Our computer laboratory is equipped with the latest technology for students to innovate and learn.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Computer Laboratory | Technology and Innovation');
        SEOTools::opengraph()->addProperty('description', 'Our computer laboratory is equipped with the latest technology for students to innovate and learn.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Computer Laboratory | Technology and Innovation');
        SEOTools::twitter()->setDescription('Learn and innovate in our state-of-the-art computer lab.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.laboratries.computer-laboratory');
    }

    public function civil_laboratory()
    {
        SEOTools::setTitle('Civil Laboratory | Building the Future');
        SEOTools::setDescription('Our civil laboratory provides practical training in civil engineering with modern tools and equipment.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Civil Laboratory | Building the Future');
        SEOTools::opengraph()->addProperty('description', 'Our civil laboratory provides practical training in civil engineering with modern tools and equipment.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Civil Laboratory | Building the Future');
        SEOTools::twitter()->setDescription('Explore hands-on training opportunities in our civil lab.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.laboratries.civil-laboratory');
    }

    public function electronics_laboratory()
    {
        SEOTools::setTitle('Electronics Laboratory | Innovate and Create');
        SEOTools::setDescription('Our electronics laboratory is equipped for students to experiment and innovate in electronics engineering.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Electronics Laboratory | Innovate and Create');
        SEOTools::opengraph()->addProperty('description', 'Our electronics laboratory is equipped for students to experiment and innovate in electronics engineering.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Electronics Laboratory | Innovate and Create');
        SEOTools::twitter()->setDescription('Dive into hands-on learning in our electronics lab.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.laboratries.electronics-laboratory');
    }

    public function electrical_laboratory()
    {
        SEOTools::setTitle('Electrical Laboratory | Power Your Knowledge');
        SEOTools::setDescription('Experience practical learning in our electrical laboratory with modern equipment.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Electrical Laboratory | Power Your Knowledge');
        SEOTools::opengraph()->addProperty('description', 'Experience practical learning in our electrical laboratory with modern equipment.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Electrical Laboratory | Power Your Knowledge');
        SEOTools::twitter()->setDescription('Learn in our electrical lab equipped for hands-on training.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.laboratries.electrical-laboratory');
    }

    public function hostel()
    {
        SEOTools::setTitle('Hostel Facilities | Comfortable Living Spaces');
        SEOTools::setDescription('Our hostel offers comfortable and safe living accommodations for students.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Hostel Facilities | Comfortable Living Spaces');
        SEOTools::opengraph()->addProperty('description', 'Our hostel offers comfortable and safe living accommodations for students.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Hostel Facilities | Comfortable Living Spaces');
        SEOTools::twitter()->setDescription('Explore our safe and comfortable hostel accommodations.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.hostel');
    }

    public function library()
    {
        SEOTools::setTitle('Library Facilities | Knowledge and Resources');
        SEOTools::setDescription('Our library is equipped with vast resources for student learning and research.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Library Facilities | Knowledge and Resources');
        SEOTools::opengraph()->addProperty('description', 'Our library is equipped with vast resources for student learning and research.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Library Facilities | Knowledge and Resources');
        SEOTools::twitter()->setDescription('Discover extensive resources in our well-stocked library.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.library');
    }

    public function mechanical_laboratory()
    {
        $equipment = Cache::remember('mechanical_laboratory_equipment', 120, function () {
            return Equipment::all();
        });

        SEOTools::setTitle('Mechanical Laboratory | Explore Engineering Concepts');
        SEOTools::setDescription('Our mechanical laboratory is equipped with advanced tools for hands-on learning in engineering.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Mechanical Laboratory | Explore Engineering Concepts');
        SEOTools::opengraph()->addProperty('description', 'Our mechanical laboratory is equipped with advanced tools for hands-on learning in engineering.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Mechanical Laboratory | Explore Engineering Concepts');
        SEOTools::twitter()->setDescription('Get hands-on experience with our modern mechanical equipment.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.laboratries.mechanical-laboratory', ['equipment' => $equipment]);
    }

    public function transport()
    {
        $transport = Cache::remember('transport_routes', 120, function () {
            return Route::all();
        });

        SEOTools::setTitle('Transport Facilities | Convenient Travel Solutions');
        SEOTools::setDescription('Our transport facilities ensure convenient travel solutions for students and staff.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Transport Facilities | Convenient Travel Solutions');
        SEOTools::opengraph()->addProperty('description', 'Our transport facilities ensure convenient travel solutions for students and staff.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Transport Facilities | Convenient Travel Solutions');
        SEOTools::twitter()->setDescription('Learn about our reliable transport options for students.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.facilities.transport', ['transport' => $transport]);
    }

    public function cafeteria()
    {
        SEOTools::setTitle('Cafeteria | Healthy Dining Options');
        SEOTools::setDescription('Our cafeteria offers a variety of healthy and delicious dining options for students.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('title', 'Cafeteria | Healthy Dining Options');
        SEOTools::opengraph()->addProperty('description', 'Our cafeteria offers a variety of healthy and delicious dining options for students.');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Cafeteria | Healthy Dining Options');
        SEOTools::twitter()->setDescription('Enjoy healthy meals in our cafeteria designed for student well-being.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

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

        // SEO Metadata
        SEOTools::setTitle('Sports Activities | Engaging Students Through Sports');
        SEOTools::setDescription('Explore our sports activities and achievements that encourage physical fitness and teamwork among students.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Sports Activities');
        JsonLd::setDescription('Explore our sports activities and achievements that encourage physical fitness and teamwork among students.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'SportsOrganization');
        JsonLd::addValue('url', Url()->current());


        return view('pages.activities.extra-curricular.sports', ['sportsData' => $sportsData, 'A3' => $A3]);
    }

    public function nss_and_red_ribbon_club()
    {
        $NssandRRC = NssAndRRC::all();

        // SEO Metadata
        SEOTools::setTitle('NSS and Red Ribbon Club | Community Service and Awareness');
        SEOTools::setDescription('Learn about our NSS and Red Ribbon Club activities focused on community service and health awareness.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('NSS and Red Ribbon Club');
        JsonLd::setDescription('Community service and health awareness initiatives.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());

        return view('pages.activities.extra-curricular.nss-and-red-ribbon-club', ['NssandRRC' => $NssandRRC]);
    }

    public function workshop()
    {
        // SEO Metadata
        SEOTools::setTitle('Workshops | Skill Development Opportunities');
        SEOTools::setDescription('Participate in our workshops aimed at enhancing your skills and knowledge in various fields.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Skill Development Workshops');
        JsonLd::setDescription('Workshops aimed at skill enhancement and knowledge development.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());

        return view('pages.activities.co-curricular.workshop');
    }

    public function symposium()
    {
        // SEO Metadata
        SEOTools::setTitle('Symposium | Knowledge Sharing Platform');
        SEOTools::setDescription('Engage with experts at our symposium focused on knowledge sharing and innovation.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Knowledge Sharing Symposium');
        JsonLd::setDescription('A platform for sharing knowledge and insights.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Event');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('startDate', '2023-12-01T09:00:00');
        JsonLd::addValue('endDate', '2023-12-01T17:00:00');
        JsonLd::addValue('location', [
            '@type' => 'Place',
            'name' => 'Auditorium',
            'address' => 'Old Nagore Road, Thethi Village, Nagapattinam - Tamil Nadu - 611002'
        ]);
        JsonLd::addValue('organizer', [
            '@type' => 'Organization',
            'name' => 'E.G.S. Pillay Engineering College',
            'url' => 'https://symposiums.egspec.org/',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+91-99425-02245',
                'contactType' => 'Event Coordination'
            ]
        ]);
        JsonLd::addValue('eventAttendanceMode', 'https://symposiums.egspec.org/'); // or OnlineEventAttendanceMode for virtual events
        JsonLd::addValue('eventStatus', 'https://symposiums.egspec.org/'); // or other statuses like EventPostponed

        // Optional: Add offers if there are tickets or registrations
        JsonLd::addValue('offers', [
            '@type' => 'Offer',
            'url' => 'https://symposiums.egspec.org/',
            'price' => '300.00', // Example price
            'priceCurrency' => 'INR',
            'itemOffered' => [
                '@type' => 'Event',
                'name' => 'Knowledge Sharing Symposium',
            ],
        ]);


        return view('pages.activities.co-curricular.symposium');
    }

    public function conference()
    {
        // SEO Metadata
        SEOTools::setTitle('Conference | Sharing Ideas and Innovations');
        SEOTools::setDescription('Join us at our conference to share ideas and innovations with industry leaders.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Conference');
        JsonLd::setDescription('A platform for sharing ideas and innovations.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Event');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('startDate', '2024-01-15T09:00:00');
        JsonLd::addValue('endDate', '2024-01-15T17:00:00');
        JsonLd::addValue('location', [
            '@type' => 'Place',
            'name' => 'Auditorium',
            'address' => 'Old Nagore Road, Thethi Village ,Nagapattinam - Tamil Nadu - 611002'
        ]);

        return view('pages.activities.co-curricular.conference');
    }

    public function entrepreneurship_development_cell()
    {
        $events = Cache::remember('events_data', 120, function () {
            return Event::all();
        });

        // SEO Metadata
        SEOTools::setTitle('Entrepreneurship Development Cell | Fostering Innovation');
        SEOTools::setDescription('Explore our Entrepreneurship Development Cell and its initiatives to foster innovation and business skills.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Entrepreneurship Development Cell');
        JsonLd::setDescription('Fostering innovation and business skills through various initiatives.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());

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

        // SEO Metadata
        SEOTools::setTitle('Women Empowerment Cell | Supporting Women’s Growth');
        SEOTools::setDescription('Discover our Women Empowerment Cell initiatives focused on supporting women’s growth and development.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Women Empowerment Cell');
        JsonLd::setDescription('Supporting women’s growth and development through various initiatives.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());

        return view('pages.activities.cells.women-empowerment-cell', ['wec' => $wec, 'wec_slider' => $wec_slider]);
    }


    public function internal_complaints_committee()
    {
        $icc_slider = Cache::remember('icc_slider', 120, function () {
            return PostSlider::where('page_name', 'icc')->get();
        });

        // SEO Settings
        SEOTools::setTitle('Internal Complaints Committee | Ensuring Student Safety');
        SEOTools::setDescription('Learn about the Internal Complaints Committee and its vital role in ensuring a safe environment for all students.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Internal Complaints Committee');
        JsonLd::setDescription('Ensuring student safety through the Internal Complaints Committee.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Internal Complaints Committee');

        return view('pages.activities.cells.internal-complaints-committee', ['icc_slider' => $icc_slider]);
    }

    public function carrier_guidance()
    {
        // SEO Settings
        SEOTools::setTitle('Career Guidance Services | Helping Students Succeed');
        SEOTools::setDescription('Explore our career guidance services designed to help students succeed in their career paths.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Career Guidance Services');
        JsonLd::setDescription('Helping students succeed with tailored career guidance services.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Service');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('serviceType', 'Career Guidance');

        return view('pages.activities.cells.carrier-guidance');
    }

    public function anti_ragging_committee()
    {
        // SEO Settings
        SEOTools::setTitle('Anti Ragging Committee | Promoting Student Safety');
        SEOTools::setDescription('Learn about the Anti Ragging Committee and its initiatives to promote a safe environment for students.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Anti Ragging Committee');
        JsonLd::setDescription('Promoting student safety through the Anti Ragging Committee initiatives.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Anti Ragging Committee');

        return view('pages.activities.anti-ragging-committee');
    }

    public function iso_coordinators()
    {
        // SEO Settings
        SEOTools::setTitle('ISO Coordinators | Ensuring Quality Standards');
        SEOTools::setDescription('Discover the role of ISO coordinators in maintaining quality standards at our institution.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('ISO Coordinators');
        JsonLd::setDescription('Ensuring quality standards through ISO coordinators.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'ISO Coordinators');

        return view('pages.activities.iso.coordinators');
    }

    public function iso_certificates()
    {
        // SEO Settings
        SEOTools::setTitle('ISO Certificates | Quality Assurance');
        SEOTools::setDescription('View our ISO certificates that demonstrate our commitment to quality assurance.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('ISO Certificates');
        JsonLd::setDescription('Demonstrating commitment to quality assurance with ISO certificates.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'ISO Certificates');

        return view('pages.activities.iso.certificate');
    }

    public function iso_manual()
    {
        // SEO Settings
        SEOTools::setTitle('ISO Manual | Quality Procedures');
        SEOTools::setDescription('Access our ISO manual outlining essential quality procedures and standards.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('ISO Manual');
        JsonLd::setDescription('Outlining essential quality procedures and standards in our ISO manual.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Document');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'ISO Manual');

        return view('pages.activities.iso.manual');
    }

    public function discipline_committee()
    {
        // SEO Settings
        SEOTools::setTitle('Discipline Committee | Student Conduct Oversight');
        SEOTools::setDescription('Learn about the Discipline Committee and its role in overseeing student conduct.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Discipline Committee');
        JsonLd::setDescription('Oversight of student conduct by the Discipline Committee.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Discipline Committee');

        return view('pages.activities.discipline-committee');
    }

    public function ieee()
    {
        // SEO Settings
        SEOTools::setTitle('IEEE | Professional Body for Engineers');
        SEOTools::setDescription('Discover the IEEE and its contributions to the field of engineering and technology.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('IEEE');
        JsonLd::setDescription('Professional body for engineers contributing to the field of technology.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'IEEE');

        return view('pages.activities.professional-bodies.ieee');
    }

    public function iste()
    {
        // SEO Settings
        SEOTools::setTitle('ISTE | Indian Society for Technical Education');
        SEOTools::setDescription('Learn about ISTE and its initiatives in promoting technical education in India.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('ISTE');
        JsonLd::setDescription('Promoting technical education through the Indian Society for Technical Education.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'ISTE');

        return view('pages.activities.professional-bodies.iste');
    }

    public function ictact()
    {
        // SEO Settings
        SEOTools::setTitle('ICTACT | Promoting IT Education and Careers');
        SEOTools::setDescription('Discover ICTACT’s initiatives in promoting IT education and career opportunities.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('ICTACT');
        JsonLd::setDescription('Promoting IT education and career opportunities through ICTACT.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'ICTACT');

        return view('pages.activities.professional-bodies.ictact');
    }

    public function csi()
    {
        // SEO Settings
        SEOTools::setTitle('CSI | Computer Society of India');
        SEOTools::setDescription('Learn about the Computer Society of India and its contributions to computer science.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('CSI');
        JsonLd::setDescription('Contributing to computer science through the Computer Society of India.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'CSI');

        return view('pages.activities.professional-bodies.csi');
    }

    public function iete()
    {
        // SEO Settings
        SEOTools::setTitle('IETE | Institution of Electronics and Telecommunication Engineers');
        SEOTools::setDescription('Discover the IETE and its role in electronics and telecommunication engineering.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('IETE');
        JsonLd::setDescription('Role of the IETE in electronics and telecommunication engineering.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'IETE');

        return view('pages.activities.professional-bodies.iete');
    }

    public function iei()
    {
        // SEO Settings
        SEOTools::setTitle('IEI | Institution of Engineers (India)');
        SEOTools::setDescription('Learn about the Institution of Engineers (India) and its contributions to engineering.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('IEI');
        JsonLd::setDescription('Contributions of the Institution of Engineers (India) to engineering.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'IEI');

        return view('pages.activities.professional-bodies.iei');
    }


    public function newsletter()
    {
        // SEO Settings
        SEOTools::setTitle('Newsletter | Stay Updated');
        SEOTools::setDescription('Stay updated with the latest news and updates from EGSPEC.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');


        // JSON-LD Structured Data
        JsonLd::setTitle('Newsletter');
        JsonLd::setDescription('Stay updated with the latest news and updates from EGSPEC.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Newsletter');
        JsonLd::addValue('description', 'Stay updated with the latest news and updates from EGSPEC.');
        JsonLd::addValue('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        JsonLd::addValue('email', 'enquiry@egspec.com');

        return view('pages.academics.newsletter');
    }




    /* Research */


    public function research_and_development()
    {
        // SEO Settings
        SEOTools::setTitle('Research and Development | Innovating for the Future');
        SEOTools::setDescription('Explore our research and development initiatives aimed at fostering innovation and progress.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Research and Development');
        JsonLd::setDescription('Innovating for the future through research and development initiatives.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Research and Development');

        return view('pages.research.research-and-development');
    }

    public function research_sasd()
    {
        // SEO Settings
        SEOTools::setTitle('Research Supervisor | Guiding Innovative Projects');
        SEOTools::setDescription('Meet our research supervisors dedicated to guiding innovative projects and initiatives.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Research Supervisor');
        JsonLd::setDescription('Guiding innovative projects in research.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Research Supervisor');

        return view('pages.research.research-supervisor');
    }

    public function publication_details()
    {
        // SEO Settings
        SEOTools::setTitle('Publication Details | Showcasing Our Research');
        SEOTools::setDescription('Explore publication details showcasing our research contributions and findings.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Publication Details');
        JsonLd::setDescription('Showcasing our research contributions and findings.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'ScholarlyArticle');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Publication Details');

        return view('pages.research.publication-details');
    }

    public function patent_details()
    {
        // SEO Settings
        SEOTools::setTitle('Patent Details | Protecting Our Innovations');
        SEOTools::setDescription('Learn about our patents and the innovations we protect.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Patent Details');
        JsonLd::setDescription('Protecting our innovations through patents.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Intangible');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Patent Details');

        return view('pages.research.patent-details');
    }

    public function copyrights()
    {
        // SEO Settings
        SEOTools::setTitle('Research Copyrights | Safeguarding Our Work');
        SEOTools::setDescription('Discover how we safeguard our research work through copyrights.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Research Copyrights');
        JsonLd::setDescription('Safeguarding our research work through copyrights.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Intangible');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Research Copyrights');

        return view('pages.research.research-copyright');
    }

    public function r_and_d_policy()
    {
        // SEO Settings
        SEOTools::setTitle('R&D Policy | Guiding Our Research Efforts');
        SEOTools::setDescription('Learn about our R&D policy guiding our research efforts.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('R&D Policy');
        JsonLd::setDescription('Guiding our research efforts through policy.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'R&D Policy');

        return view('pages.research.r-and-d-policy');
    }

    public function r_and_d_circulars()
    {
        // SEO Settings
        SEOTools::setTitle('R&D Circulars | Latest Research Updates');
        SEOTools::setDescription('Stay updated with the latest research circulars and updates from our institution.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');


        // JSON-LD Structured Data
        JsonLd::setTitle('R&D Circulars');
        JsonLd::setDescription('Latest research updates and circulars from our institution.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'NewsArticle');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'R&D Circulars');


        return view('pages.research.r-and-d-circulars');
    }

    public function prj_mechanical_engineering()
    {
        // SEO Settings
        SEOTools::setTitle('Mechanical Engineering Projects | Driving Innovation');
        SEOTools::setDescription('Explore our mechanical engineering projects driving innovation and research.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Mechanical Engineering Projects');
        JsonLd::setDescription('Driving innovation through mechanical engineering projects.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Project');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Mechanical Engineering Projects');

        return view('pages.research.projects.mechanical-engineering');
    }

    public function prj_civil_engineering()
    {
        // SEO Settings
        SEOTools::setTitle('Civil Engineering Projects | Building the Future');
        SEOTools::setDescription('Explore our civil engineering projects building a sustainable future.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Civil Engineering Projects');
        JsonLd::setDescription('Building a sustainable future through civil engineering projects.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Project');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Civil Engineering Projects');

        return view('pages.research.projects.civil-engineering');
    }

    public function prj_electronics_and_communication_engineering()
    {
        // SEO Settings
        SEOTools::setTitle('Electronics and Communication Engineering Projects | Innovating Technology');
        SEOTools::setDescription('Explore our projects in electronics and communication engineering innovating technology.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Electronics and Communication Engineering Projects');
        JsonLd::setDescription('Innovating technology through electronics and communication engineering projects.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Project');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Electronics and Communication Engineering Projects');

        return view('pages.research.projects.electronics-and-communication-engineering');
    }

    public function prj_computer_science_and_engineering()
    {
        // SEO Settings
        SEOTools::setTitle('Computer Science and Engineering Projects | Shaping the Digital Future');
        SEOTools::setDescription('Explore our computer science and engineering projects shaping the digital future.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Computer Science and Engineering Projects');
        JsonLd::setDescription('Shaping the digital future through computer science and engineering projects.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Project');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Computer Science and Engineering Projects');

        return view('pages.research.projects.computer-science-and-engineering');
    }

    public function prj_information_technology()
    {
        // SEO Settings
        SEOTools::setTitle('Information Technology Projects | Driving Digital Transformation');
        SEOTools::setDescription('Explore our information technology projects driving digital transformation.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Information Technology Projects');
        JsonLd::setDescription('Driving digital transformation through information technology projects.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Project');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Information Technology Projects');

        return view('pages.research.projects.information-technology');
    }

    public function prj_electrical_and_electronics_engineering()
    {
        // SEO Settings
        SEOTools::setTitle('Electrical and Electronics Engineering Projects | Powering Innovation');
        SEOTools::setDescription('Explore our electrical and electronics engineering projects powering innovation.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Electrical and Electronics Engineering Projects');
        JsonLd::setDescription('Powering innovation through electrical and electronics engineering projects.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Project');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Electrical and Electronics Engineering Projects');

        return view('pages.research.projects.electrical-and-electronics-engineering');
    }


    /* About us */

    public function our_focus()
    {
        // SEO Settings
        SEOTools::setTitle('Our Focus | Committed to Excellence');
        SEOTools::setDescription('Discover our focus areas and commitment to excellence in education and research.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Our Focus');
        JsonLd::setDescription('Areas of focus for our institution.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Our Focus');

        return view('pages.about.our-focus');
    }

    public function vision_and_mission()
    {
        // SEO Settings
        SEOTools::setTitle('Vision and Mission | Guiding Our Path');
        SEOTools::setDescription('Learn about our vision and mission that guide our educational endeavors.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Vision and Mission');
        JsonLd::setDescription('Our guiding principles and aspirations.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Vision and Mission');

        return view('pages.about.vision-and-mission');
    }

    public function history()
    {
        // SEO Settings
        SEOTools::setTitle('History | Our Journey');
        SEOTools::setDescription('Explore the rich history and milestones of our institution.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('History');
        JsonLd::setDescription('A historical overview of our institution.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'History');

        return view('pages.about.history');
    }

    public function message_from_the_founder_and_chairman()
    {
        // SEO Settings
        SEOTools::setTitle('Message from the Founder and Chairman');
        SEOTools::setDescription('Read the inspiring message from our founder and chairman.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Message from the Founder and Chairman');
        JsonLd::setDescription('An inspiring message from the founder and chairman.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Founder and Chairman');

        return view('pages.about.message-from-the-founder-and-chairman');
    }

    public function message_from_the_secretary()
    {
        // SEO Settings
        SEOTools::setTitle('Message from the Secretary');
        SEOTools::setDescription('A message from the secretary outlining our goals and aspirations.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Message from the Secretary');
        JsonLd::setDescription('Insights from the secretary on our aspirations.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Secretary');

        return view('pages.about.message-from-the-secretary');
    }

    public function message_from_the_principal()
    {
        // SEO Settings
        SEOTools::setTitle('Message from the Principal');
        SEOTools::setDescription('An important message from the principal regarding our educational direction.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Message from the Principal');
        JsonLd::setDescription('A message from the principal on our educational direction.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Principal');

        return view('pages.about.message-from-the-principal');
    }

    public function adminstrative_organization()
    {
        // SEO Settings
        SEOTools::setTitle('Administrative Organization');
        SEOTools::setDescription('Learn about our administrative organization and structure.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Administrative Organization');
        JsonLd::setDescription('Overview of our administrative structure.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Administrative Organization');

        return view('pages.about.adminstrative-organization');
    }

    public function organizational_chart()
    {
        // SEO Settings
        SEOTools::setTitle('Organizational Chart');
        SEOTools::setDescription('View our organizational chart to understand our structure.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Organizational Chart');
        JsonLd::setDescription('Understanding our organizational structure through our chart.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Organizational Chart');

        return view('pages.about.organizational-chart');
    }

    public function milestones()
    {
        // SEO Settings
        SEOTools::setTitle('Milestones | Key Achievements');
        SEOTools::setDescription('Explore the key milestones and achievements of our institution.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Milestones');
        JsonLd::setDescription('Key achievements of our institution over the years.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Milestones');

        return view('pages.about.milestones');
    }

    public function hr_policy()
    {
        // SEO Settings
        SEOTools::setTitle('HR Policy | Our Commitment to Employees');
        SEOTools::setDescription('Learn about our HR policies and commitment to employee welfare.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('HR Policy');
        JsonLd::setDescription('Our commitment to employee welfare and policies.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'HR Policy');

        return view('pages.about.hr-policy');
    }

    public function audit_statement()
    {
        // SEO Settings
        SEOTools::setTitle('Audit Statement | Transparency and Accountability');
        SEOTools::setDescription('Our audit statement reflecting transparency and accountability.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Audit Statement');
        JsonLd::setDescription('Transparency and accountability through our audit statement.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Audit Statement');

        return view('pages.about.audit-statement');
    }

    public function strategic_plan()
    {
        // SEO Settings
        SEOTools::setTitle('Strategic Plan | Our Roadmap');
        SEOTools::setDescription('Discover our strategic plan outlining our future goals.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Strategic Plan');
        JsonLd::setDescription('Our roadmap for future goals and objectives.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Strategic Plan');

        return view('pages.about.strategic-plan');
    }

    public function strategic_plan_meeting_minutes()
    {
        // SEO Settings
        SEOTools::setTitle('Strategic Plan Meeting Minutes');
        SEOTools::setDescription('Review the minutes from our strategic planning meetings.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Strategic Plan Meeting Minutes');
        JsonLd::setDescription('Minutes from strategic planning meetings.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Strategic Plan Meeting Minutes');

        return view('pages.about.strategic-plan-meeting-minutes');
    }

    public function about_dean()
    {
        // SEO Settings
        SEOTools::setTitle('About the Dean');
        SEOTools::setDescription('Learn about the dean and their vision for our institution.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('About the Dean');
        JsonLd::setDescription('Insight into the dean’s vision and role.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Dean');

        return view('pages.about.dean');
    }


    /* Placement */


    public function placement()
    {
        $iap = Cache::remember('industry_academic_partnering', 120, function () {
            return IndustryAcademicPartnering::all();
        });

        $placementStatistics = Cache::remember('placement_statistics', 120, function () {
            return PlacementStatistic::all();
        });

        // SEO Settings
        SEOTools::setTitle('Placement | Bridging Students with Industry');
        SEOTools::setDescription('Explore our placement initiatives and industry partnerships.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Placement');
        JsonLd::setDescription('Our efforts to connect students with industry partners.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Placement');

        return view('pages.placement.placement-team', compact('placementStatistics', 'iap'));
    }

    public function memorandum_of_understanding()
    {
        // SEO Settings
        SEOTools::setTitle('Memorandum of Understanding');
        SEOTools::setDescription('Learn about our Memorandum of Understanding with industry partners.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Memorandum of Understanding');
        JsonLd::setDescription('Details about our Memorandum of Understanding.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Memorandum of Understanding');

        return view('pages.placement.memorandum-of-understanding');
    }

    public function placement_team()
    {
        $placementStatistics = PlacementStatistic::all();

        $posterSlider = Cache::remember('general_poster_slider', 120, function () {
            return PostSlider::where('page_name', 'pls')->get();
        });

        // SEO Settings
        SEOTools::setTitle('Placement Team | Meet Our Experts');
        SEOTools::setDescription('Meet our dedicated placement team and learn about their initiatives.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Placement Team');
        JsonLd::setDescription('Overview of our dedicated placement team.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Placement Team');

        return view('pages.placement.placement-team', compact('placementStatistics', 'posterSlider'));
    }

    public function placement_statistics()
    {
        $placementStatistics = PlacementStatistic::all();

        $posterSlider = Cache::remember('general_poster_slider', 120, function () {
            return PostSlider::where('page_name', 'pls')->get();
        });

        // SEO Settings
        SEOTools::setTitle('Placement Statistics | Track Our Success');
        SEOTools::setDescription('Explore our placement statistics and success stories.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Placement Statistics');
        JsonLd::setDescription('Statistics showcasing our placement success.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Placement Statistics');

        return view('pages.placement.placement-statistics', compact('placementStatistics', 'posterSlider'));
    }

    public function our_top_recruiters()
    {
        // SEO Settings
        SEOTools::setTitle('Our Top Recruiters | Industry Partners');
        SEOTools::setDescription('Discover our top recruiters and industry partners.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Our Top Recruiters');
        JsonLd::setDescription('Overview of our top recruiters and industry partners.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Organization');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Top Recruiters');

        return view('pages.placement.our-top-recruiters');
    }

    public function placement_gallery()
    {
        // SEO Settings
        SEOTools::setTitle('Placement Gallery | Success Stories');
        SEOTools::setDescription('Browse our placement gallery showcasing successful placements.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Placement Gallery');
        JsonLd::setDescription('Gallery of successful placements and events.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'CreativeWork');
        JsonLd::addValue('url', Url()->current());
        JsonLd::addValue('name', 'Placement Gallery');

        return view('pages.placement.placement-gallery');
    }





    // Department -> Undergraduate -> Information Technology


    public function ug_information_technology()
    {
        // SEO Settings
        SEOTools::setTitle('Undergraduate Information Technology');
        SEOTools::setDescription('Explore the undergraduate program in Information Technology at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('url', 'https://egspec.org/academics/departments/undergraduate/information-technology');
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Undergraduate Information Technology');
        JsonLd::setDescription('Information Technology program at E.G.S. Pillay Engineering College.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('name', 'E.G.S. Pillay Engineering College');
        JsonLd::addValue('url', 'https://egspec.org');
        JsonLd::addValue('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        JsonLd::addValue('@context', 'https://schema.org/');
        JsonLd::addValue('@id', 'https://egspec.org/academics/departments/undergraduate/information-technology');
        JsonLd::addValue('@type', 'Course');
        JsonLd::addValue('name', 'B.Tech – Information Technology');
        JsonLd::addValue('description', 'The B.Tech in Information Technology offers a comprehensive education in IT, starting from foundational principles to advanced technologies.');
        JsonLd::addValue('publisher', [
            '@type' => 'Organization',
            'name' => 'E.G.S. Pillay Engineering College',
            'url' => 'https://egspec.org'
        ]);
        JsonLd::addValue('provider', [
            '@type' => 'Organization',
            'name' => 'E.G.S. Pillay Engineering College',
            'url' => 'https://egspec.org'
        ]);
        JsonLd::addValue('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        JsonLd::addValue('aggregateRating', [
            '@type' => 'AggregateRating',
            'ratingValue' => 4,
            'ratingCount' => 1234,
            'reviewCount' => 450
        ]);
        JsonLd::addValue('offers', [[
            '@type' => 'Offer',
            'category' => 'Paid',
            'priceCurrency' => 'INR',
            'price' => 70000  // Replace with actual fee if available
        ]]);
        JsonLd::addValue('totalHistoricalEnrollment', 60);
        JsonLd::addValue('datePublished', '2000-01-01'); // Year the department started
        JsonLd::addValue('educationalLevel', 'Undergraduate');
        JsonLd::addValue('about', ['Information Technology', 'B.Tech']);
        JsonLd::addValue('teaches', [
            'Foundational IT principles',
            'Advanced technologies in IT'
        ]);
        JsonLd::addValue('financialAidEligible', 'Scholarship Available');
        JsonLd::addValue('inLanguage', 'en');
        JsonLd::addValue('availableLanguage', ['en']);
        JsonLd::addValue('syllabusSections', [
            [
                '@type' => 'Syllabus',
                'name' => 'Introduction to Programming',
                'description' => 'Learn the basics of programming in various languages.',
                'timeRequired' => 'PT10H'
            ],
            [
                '@type' => 'Syllabus',
                'name' => 'Data Structures',
                'description' => 'Understanding data organization and manipulation.',
                'timeRequired' => 'PT12H'
            ]
        ]);
        JsonLd::addValue('coursePrerequisites', [
            'Basic understanding of computers and software.',
            'Prior knowledge of programming is beneficial.'
        ]);
        JsonLd::addValue('educationalCredentialAwarded', [[
            '@type' => 'EducationalOccupationalCredential',
            'name' => 'B.Tech Degree',
            'url' => 'https://egspec.org/academics/departments/undergraduate/information-technology',
            'credentialCategory' => 'Degree',
            'offers' => [[
                '@type' => 'Offer',
                'category' => 'Paid',
                'price' => 50000,
                'priceCurrency' => 'INR'
            ]]
        ]]);
        JsonLd::addValue('video', [
            '@type' => 'VideoObject',
            'name' => 'Information Technology Course Overview',
            'description' => 'An overview of the B.Tech Information Technology program.',
            'uploadDate' => '2024-03-28T08:00:00+08:00',
            'contentUrl' => 'https://www.egspec.org/academics/departments/undergraduate/information-technology',
            'thumbnailUrl' => 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp'
        ]);
        JsonLd::addValue('hasCourseInstance', [
            [
                '@type' => 'CourseInstance',
                'courseMode' => 'On-Campus',
                'location' => 'E.G.S. Pillay Engineering College',
                'courseSchedule' => [
                    '@type' => 'Schedule',
                    'duration' => 'PT4Y',
                    'repeatFrequency' => 'Annually',
                    'startDate' => '2000-07-01',
                    'endDate' => '2024-06-30'
                ],
                'instructor' => [[
                    '@type' => 'Person',
                    'name' => 'Dr. S. Manikandan, M.E., Ph.D',
                    'description' => 'Head of the Information Technology Department',
                    'image' => 'https://egspec.blob.core.windows.net/egspec-assets/profile/dr-s-manikandan.webp'
                ]]
            ]
        ]);
        JsonLd::addValue('hasPart', [
            [
                '@type' => 'Course',
                'name' => 'Information Technology',
                'url' => 'https://www.egspec.org/academics/departments/undergraduate/information-technology',
                'description' => 'Learn principles and practices of software engineering.',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'E.G.S. Pillay Engineering College',
                    'url' => 'https://egspec.org'
                ]
            ],
            [
                '@type' => 'Course',
                'name' => 'Information Technology',
                'url' => 'https://www.egspec.org/academics/departments/undergraduate/information-technology',
                'description' => 'Understand the design and management of databases.',
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'E.G.S. Pillay Engineering College',
                    'url' => 'https://egspec.org'
                ]
            ]
        ]);


        return view('pages.academics.departments.undergraduate.information-technology.information-technology');
    }

    public function ug_information_technology_department_highlights()
    {
        // SEO Settings
        SEOTools::setTitle('Department Highlights | Information Technology');
        SEOTools::setDescription('Key highlights of the Information Technology department at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('Department Highlights');
        JsonLd::setDescription('Highlights of the Information Technology department at E.G.S. Pillay Engineering College.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'EducationalOrganization');
        JsonLd::addValue('name', 'Information Technology Department Highlights');

        return view('pages.academics.departments.undergraduate.information-technology.department-highlights');
    }

    public function ug_information_technology_hods_desk()
    {
        // SEO Settings
        SEOTools::setTitle('HOD\'s Desk | Information Technology');
        SEOTools::setDescription('Message from the Head of the Information Technology Department at E.G.S. Pillay Engineering College.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        // JSON-LD Structured Data
        JsonLd::setTitle('HOD\'s Desk');
        JsonLd::setDescription('Message from the Head of the Information Technology Department.');
        JsonLd::addValue('@context', 'https://schema.org');
        JsonLd::addValue('@type', 'Person');
        JsonLd::addValue('name', 'Dr. S. Manikandan');
        JsonLd::addValue('url', 'https://egspec.org/ug-information-technology/hod-desk');

        return view('pages.academics.departments.undergraduate.information-technology.hods-desk');
    }

    public function ug_information_technology_faculty_details()
    {
        // SEO Settings
        SEOTools::setTitle('Faculty Details | Information Technology');
        SEOTools::setDescription('Meet our esteemed faculty in the Information Technology department.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.faculty-details');
    }

    public function ug_information_technology_research_publications()
    {
        // SEO Settings
        SEOTools::setTitle('Research Publications | Information Technology');
        SEOTools::setDescription('Explore the research publications from the Information Technology department.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.research-publications');
    }

    public function ug_information_technology_industry_collabration()
    {
        // SEO Settings
        SEOTools::setTitle('Industry Collaboration | Information Technology');
        SEOTools::setDescription('Industry collaborations of the Information Technology department.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.industry-collabration');
    }

    public function ug_information_technology_infrastructure()
    {
        // SEO Settings
        SEOTools::setTitle('Infrastructure | Information Technology');
        SEOTools::setDescription('Discover the infrastructure of the Information Technology department.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.infrastructure');
    }

    public function ug_information_technology_student_achievements()
    {
        // SEO Settings
        SEOTools::setTitle('Student Achievements | Information Technology');
        SEOTools::setDescription('Celebrating student achievements in the Information Technology department.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.student-achievements');
    }

    public function ug_information_technology_program_outcomes()
    {
        // SEO Settings
        SEOTools::setTitle('Program Outcomes | Information Technology');
        SEOTools::setDescription('Program outcomes for the Information Technology undergraduate program.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.program-outcomes');
    }

    public function ug_information_technology_programme_educational_objectives()
    {
        // SEO Settings
        SEOTools::setTitle('Programme Educational Objectives | Information Technology');
        SEOTools::setDescription('Educational objectives of the Information Technology program.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.programme-educational-objectives');
    }

    public function ug_information_technology_programme_specific_outcomes()
    {
        // SEO Settings
        SEOTools::setTitle('Programme Specific Outcomes | Information Technology');
        SEOTools::setDescription('Specific outcomes for the Information Technology program.');
        SEOTools::opengraph()->addProperty('url', Url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.information-technology.programme-specific-outcomes');
    }




    // Department -> Undergraduate -> Biomedial Engineering

    public function ug_biomedical_engineering()
    {
        SEOTools::setTitle('Biomedical Engineering - Undergraduate Program');
        SEOTools::setDescription('Explore the Biomedical Engineering undergraduate program. Discover faculty details, research publications, program outcomes, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Biomedical Engineering - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Biomedical Engineering undergraduate program. Discover faculty details, research publications, program outcomes, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.biomedical-engineering');
    }

    public function ug_biomedical_engineering_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Biomedical Engineering');
        SEOTools::setDescription('Learn about the highlights of the Biomedical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Learn about the highlights of the Biomedical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.department-highlights');
    }

    public function ug_biomedical_engineering_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - Biomedical Engineering');
        SEOTools::setDescription('Read messages from the Head of the Department of Biomedical Engineering.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Read messages from the Head of the Department of Biomedical Engineering.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.hods-desk');
    }

    public function ug_biomedical_engineering_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Biomedical Engineering');
        SEOTools::setDescription('Meet the esteemed faculty of the Biomedical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Biomedical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.faculty-details');
    }

    public function ug_biomedical_engineering_research_publications()
    {
        SEOTools::setTitle('Research Publications - Biomedical Engineering');
        SEOTools::setDescription('Explore the research publications from the Biomedical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Explore the research publications from the Biomedical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.research-publications');
    }

    public function ug_biomedical_engineering_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Biomedical Engineering');
        SEOTools::setDescription('Understand the program outcomes of the Biomedical Engineering undergraduate program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Biomedical Engineering undergraduate program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.program-outcomes');
    }

    public function ug_biomedical_engineering_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - Biomedical Engineering');
        SEOTools::setDescription('Learn about the educational objectives of the Biomedical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Biomedical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.programme-educational-objectives');
    }

    public function ug_biomedical_engineering_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - Biomedical Engineering');
        SEOTools::setDescription('Explore the specific outcomes of the Biomedical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - Biomedical Engineering');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Biomedical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.biomedical-engineering.programme-specific-outcomes');
    }




    // Department -> Undergraduate -> Electronics and Communication Engineering

    public function ug_electronics_and_communication_engineering()
    {
        SEOTools::setTitle('Electronics and Communication Engineering - Undergraduate Program');
        SEOTools::setDescription('Explore the Electronics and Communication Engineering undergraduate program. Discover faculty details, research publications, program outcomes, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Electronics and Communication Engineering - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Electronics and Communication Engineering undergraduate program. Discover faculty details, research publications, program outcomes, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.electronics-and-communication-engineering');
    }

    public function ug_electronics_and_communication_engineering_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Electronics and Communication Engineering');
        SEOTools::setDescription('Learn about the highlights of the Electronics and Communication Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Learn about the highlights of the Electronics and Communication Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.department-highlights');
    }

    public function ug_electronics_and_communication_engineering_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - Electronics and Communication Engineering');
        SEOTools::setDescription('Read messages from the Head of the Department of Electronics and Communication Engineering.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Read messages from the Head of the Department of Electronics and Communication Engineering.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.hods-desk');
    }

    public function ug_electronics_and_communication_engineering_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Electronics and Communication Engineering');
        SEOTools::setDescription('Meet the esteemed faculty of the Electronics and Communication Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Electronics and Communication Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.faculty-details');
    }

    public function ug_electronics_and_communication_engineering_research_publications()
    {
        SEOTools::setTitle('Research Publications - Electronics and Communication Engineering');
        SEOTools::setDescription('Explore the research publications from the Electronics and Communication Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Explore the research publications from the Electronics and Communication Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.research-publications');
    }

    public function ug_electronics_and_communication_engineering_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Electronics and Communication Engineering');
        SEOTools::setDescription('Understand the program outcomes of the Electronics and Communication Engineering undergraduate program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Electronics and Communication Engineering undergraduate program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.program-outcomes');
    }

    public function ug_electronics_and_communication_engineering_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - Electronics and Communication Engineering');
        SEOTools::setDescription('Learn about the educational objectives of the Electronics and Communication Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Electronics and Communication Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.programme-educational-objectives');
    }

    public function ug_electronics_and_communication_engineering_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - Electronics and Communication Engineering');
        SEOTools::setDescription('Explore the specific outcomes of the Electronics and Communication Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - Electronics and Communication Engineering');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Electronics and Communication Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electronics-and-communication-engineering.programme-specific-outcomes');
    }


    // Department -> Postgraduate -> Masters of Computer Applications

    public function department_mca()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.mca');
    }

    public function department_mca_department_highlights()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.department-highlights');
    }

    public function department_mca_faculty_details()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.faculty-details');
    }

    public function department_mca_hods_desk()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.hods-desk');
    }

    public function department_mca_research_publications()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.research-publications');
    }

    public function department_mca_industry_collabration()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.industry-collabration');
    }

    public function department_mca_student_achievements()
    {
        $mcast14 = Cache::remember('students_achievement_mca', 120, function () {
            return StudentAchievement::where('department', 'MCA')->get();
        });

        return view('pages.academics.departments.postgraduate.master-of-computer-applications.student-achievements', ['mcast14' => $mcast14]);
    }

    public function department_mca_laboratories_and_facilities()
    {

        return view('pages.academics.departments.postgraduate.master-of-computer-applications.laboratories-and-facilities');
    }

    public function department_mca_program_outcomes()
    {
        return view('pages.academics.departments.postgraduate.master-of-computer-applications.program-outcomes');
    }

    public function department_mca_programme_educational_objectives()
    {

        return view('pages.academics.departments.postgraduate.master-of-computer-applications.programme-educational-objectives');
    }

    public function department_mca_programme_specific_outcomes()
    {

        return view('pages.academics.departments.postgraduate.master-of-computer-applications.programme-specific-outcomes');
    }




    // Department -> Postgraduate -> Masters of Business Administration

    public function department_mba()
    {
        SEOTools::setTitle('Master of Business Administration - MBA Program');
        SEOTools::setDescription('Explore the Master of Business Administration (MBA) program. Learn about faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Master of Business Administration - MBA Program');
        SEOTools::twitter()->setDescription('Explore the Master of Business Administration (MBA) program. Learn about faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.mba');
    }

    public function department_mba_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - MBA');
        SEOTools::setDescription('Discover the highlights of the MBA department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - MBA');
        SEOTools::twitter()->setDescription('Discover the highlights of the MBA department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.department-highlights');
    }

    public function department_mba_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - MBA');
        SEOTools::setDescription('Meet the esteemed faculty of the MBA department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - MBA');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the MBA department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.faculty-details');
    }

    public function department_mba_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - MBA');
        SEOTools::setDescription('Read messages from the Head of the MBA department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - MBA');
        SEOTools::twitter()->setDescription('Read messages from the Head of the MBA department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.hods-desk');
    }

    public function department_mba_research_publications()
    {
        SEOTools::setTitle('Research Publications - MBA');
        SEOTools::setDescription('Explore the research publications from the MBA department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - MBA');
        SEOTools::twitter()->setDescription('Explore the research publications from the MBA department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.research-publications');
    }

    public function department_mba_industry_collabration()
    {
        SEOTools::setTitle('Industry Collaboration - MBA');
        SEOTools::setDescription('Learn about industry collaborations in the MBA department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - MBA');
        SEOTools::twitter()->setDescription('Learn about industry collaborations in the MBA department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.industry-collabration');
    }

    public function department_mba_student_achievements()
    {
        $mbaStudentsAchivements = Cache::remember('students_achievement_mba', 120, function () {
            return StudentAchievement::where('department', 'MBA')->get();
        });

        SEOTools::setTitle('Student Achievements - MBA');
        SEOTools::setDescription('Celebrate the achievements of MBA students.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Student Achievements - MBA');
        SEOTools::twitter()->setDescription('Celebrate the achievements of MBA students.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.student-achievements', ['mbaStudentsAchivements' => $mbaStudentsAchivements]);
    }

    public function department_mba_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - MBA');
        SEOTools::setDescription('Understand the program outcomes of the MBA program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - MBA');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the MBA program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.program-outcomes');
    }

    public function department_mba_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - MBA');
        SEOTools::setDescription('Learn about the educational objectives of the MBA program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - MBA');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the MBA program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.programme-educational-objectives');
    }

    public function department_mba_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - MBA');
        SEOTools::setDescription('Explore the specific outcomes of the MBA program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - MBA');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the MBA program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.postgraduate.master-of-business-administration.programme-specific-outcomes');
    }


    // Department -> Undergraduate -> Artificial Intelligence & Data Science

    public function ug_artificial_intelligence_data_science()
    {
        SEOTools::setTitle('Artificial Intelligence and Data Science - Undergraduate Program');
        SEOTools::setDescription('Explore the Artificial Intelligence and Data Science undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Artificial Intelligence and Data Science - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Artificial Intelligence and Data Science undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.artificial-intelligence-data-science');
    }

    public function ug_artificial_intelligence_data_science_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - AI & Data Science');
        SEOTools::setDescription('Discover the highlights of the Artificial Intelligence and Data Science department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - AI & Data Science');
        SEOTools::twitter()->setDescription('Discover the highlights of the Artificial Intelligence and Data Science department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.department-highlights');
    }

    public function ug_artificial_intelligence_data_science_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - AI & Data Science');
        SEOTools::setDescription('Read messages from the Head of the Artificial Intelligence and Data Science department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - AI & Data Science');
        SEOTools::twitter()->setDescription('Read messages from the Head of the Artificial Intelligence and Data Science department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.hods-desk');
    }

    public function ug_artificial_intelligence_data_science_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - AI & Data Science');
        SEOTools::setDescription('Meet the esteemed faculty of the Artificial Intelligence and Data Science department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - AI & Data Science');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Artificial Intelligence and Data Science department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.faculty-details');
    }

    public function ug_artificial_intelligence_data_science_research_publications()
    {
        SEOTools::setTitle('Research Publications - AI & Data Science');
        SEOTools::setDescription('Explore the research publications from the Artificial Intelligence and Data Science department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - AI & Data Science');
        SEOTools::twitter()->setDescription('Explore the research publications from the Artificial Intelligence and Data Science department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.research-publications');
    }

    public function ug_artificial_intelligence_data_science_industry_collabration()
    {
        SEOTools::setTitle('Industry Collaboration - AI & Data Science');
        SEOTools::setDescription('Learn about industry collaborations in the Artificial Intelligence and Data Science department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - AI & Data Science');
        SEOTools::twitter()->setDescription('Learn about industry collaborations in the Artificial Intelligence and Data Science department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.industry-collabration');
    }

    public function ug_artificial_intelligence_data_science_infrastructure()
    {
        SEOTools::setTitle('Infrastructure - AI & Data Science');
        SEOTools::setDescription('Explore the infrastructure available for the Artificial Intelligence and Data Science program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Infrastructure - AI & Data Science');
        SEOTools::twitter()->setDescription('Explore the infrastructure available for the Artificial Intelligence and Data Science program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.infrastructure');
    }

    public function ug_artificial_intelligence_data_science_student_achievements()
    {
        SEOTools::setTitle('Student Achievements - AI & Data Science');
        SEOTools::setDescription('Celebrate the achievements of students in the Artificial Intelligence and Data Science program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Student Achievements - AI & Data Science');
        SEOTools::twitter()->setDescription('Celebrate the achievements of students in the Artificial Intelligence and Data Science program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.student-achievements');
    }

    public function ug_artificial_intelligence_data_science_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - AI & Data Science');
        SEOTools::setDescription('Understand the program outcomes of the Artificial Intelligence and Data Science program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - AI & Data Science');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Artificial Intelligence and Data Science program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.program-outcomes');
    }

    public function ug_artificial_intelligence_data_science_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - AI & Data Science');
        SEOTools::setDescription('Learn about the educational objectives of the Artificial Intelligence and Data Science program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - AI & Data Science');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Artificial Intelligence and Data Science program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.programme-educational-objectives');
    }

    public function ug_artificial_intelligence_data_science_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - AI & Data Science');
        SEOTools::setDescription('Explore the specific outcomes of the Artificial Intelligence and Data Science program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - AI & Data Science');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Artificial Intelligence and Data Science program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-data-science.programme-specific-outcomes');
    }

    public function ug_artificial_intelligence_data_science_faculty_development_programmes()
    {
        SEOTools::setTitle('Faculty Development Programmes - Artificial Intelligence and Data Science');
        SEOTools::setDescription('Discover the faculty development programmes of the Artificial Intelligence and Data Science department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Development Programmes - Artificial Intelligence and Data Science');
        SEOTools::twitter()->setDescription('Discover the faculty development programmes of the Artificial Intelligence and Data Science department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.artificial-intelligence-and-data-science.faculty-development-programmes');
    }






    // Department -> Undergraduate -> Mechnical Engineering

    public function ug_mechanical_engineering()
    {
        SEOTools::setTitle('Mechanical Engineering - Undergraduate Program');
        SEOTools::setDescription('Explore the Mechanical Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Mechanical Engineering - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Mechanical Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.mechanical-engineering');
    }

    public function ug_mechanical_engineering_research_publications()
    {
        SEOTools::setTitle('Research Publications - Mechanical Engineering');
        SEOTools::setDescription('Explore research publications from the Mechanical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Explore research publications from the Mechanical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.research-publications');
    }

    public function ug_mechanical_engineering_industry_collaboration()
    {
        SEOTools::setTitle('Industry Collaboration - Mechanical Engineering');
        SEOTools::setDescription('Learn about industry collaborations in the Mechanical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Learn about industry collaborations in the Mechanical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.industry-collabration');
    }

    public function ug_mechanical_engineering_infrastructure()
    {
        SEOTools::setTitle('Infrastructure - Mechanical Engineering');
        SEOTools::setDescription('Explore the infrastructure available for the Mechanical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Infrastructure - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Explore the infrastructure available for the Mechanical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.infrastructure');
    }

    public function ug_mechanical_engineering_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Mechanical Engineering');
        SEOTools::setDescription('Discover the highlights of the Mechanical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Discover the highlights of the Mechanical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.department-highlights');
    }

    public function ug_mechanical_engineering_student_achievements()
    {
        SEOTools::setTitle('Student Achievements - Mechanical Engineering');
        SEOTools::setDescription('Celebrate the achievements of students in the Mechanical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Student Achievements - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Celebrate the achievements of students in the Mechanical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.student-achievements');
    }

    public function ug_mechanical_engineering_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Mechanical Engineering');
        SEOTools::setDescription('Meet the esteemed faculty of the Mechanical Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Mechanical Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.faculty-details');
    }

    public function ug_mechanical_engineering_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Mechanical Engineering');
        SEOTools::setDescription('Understand the program outcomes of the Mechanical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Mechanical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.program-outcomes');
    }

    public function ug_mechanical_engineering_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - Mechanical Engineering');
        SEOTools::setDescription('Learn about the educational objectives of the Mechanical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Mechanical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.programme-educational-objectives');
    }

    public function ug_mechanical_engineering_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - Mechanical Engineering');
        SEOTools::setDescription('Explore the specific outcomes of the Mechanical Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - Mechanical Engineering');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Mechanical Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.mechanical-engineering.programme-specific-outcomes');
    }

    // Department -> undergraduate -> civil engineering

    public function ug_civil_engineering()
    {
        SEOTools::setTitle('Civil Engineering - Undergraduate Program');
        SEOTools::setDescription('Explore the Civil Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Civil Engineering - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Civil Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.civil-engineering');
    }

    public function ug_civil_engineering_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Civil Engineering');
        SEOTools::setDescription('Meet the esteemed faculty of the Civil Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Civil Engineering');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Civil Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.faculty-details');
    }

    public function ug_civil_engineering_research_publications()
    {
        SEOTools::setTitle('Research Publications - Civil Engineering');
        SEOTools::setDescription('Explore research publications from the Civil Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - Civil Engineering');
        SEOTools::twitter()->setDescription('Explore research publications from the Civil Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.research-publications');
    }

    public function ug_civil_engineering_industry_collaboration()
    {
        SEOTools::setTitle('Industry Collaboration - Civil Engineering');
        SEOTools::setDescription('Learn about industry collaborations in the Civil Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - Civil Engineering');
        SEOTools::twitter()->setDescription('Learn about industry collaborations in the Civil Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.industry-collabration');
    }

    public function ug_civil_engineering_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Civil Engineering');
        SEOTools::setDescription('Understand the program outcomes of the Civil Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Civil Engineering');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Civil Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.program-outcomes');
    }

    public function ug_civil_engineering_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - Civil Engineering');
        SEOTools::setDescription('Learn about the educational objectives of the Civil Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - Civil Engineering');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Civil Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.programme-educational-objectives');
    }

    public function ug_civil_engineering_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - Civil Engineering');
        SEOTools::setDescription('Explore the specific outcomes of the Civil Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - Civil Engineering');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Civil Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.programme-specific-outcomes');
    }

    public function ug_civil_engineering_student_achievements()
    {
        SEOTools::setTitle('Student Achievements - Civil Engineering');
        SEOTools::setDescription('Celebrate the achievements of students in the Civil Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Student Achievements - Civil Engineering');
        SEOTools::twitter()->setDescription('Celebrate the achievements of students in the Civil Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.civil-engineering.student-achievements');
    }
    // Department -> Undergraduate -> Computer Science and Engineering

    public function ug_computer_science_and_engineering()
    {
        SEOTools::setTitle('Computer Science and Engineering - Undergraduate Program');
        SEOTools::setDescription('Explore the Computer Science and Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Computer Science and Engineering - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Computer Science and Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.computer-science-and-engineering');
    }

    public function ug_computer_science_and_engineering_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Computer Science and Engineering');
        SEOTools::setDescription('Discover the highlights of the Computer Science and Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Discover the highlights of the Computer Science and Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.department-highlights');
    }

    public function ug_computer_science_and_engineering_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - Computer Science and Engineering');
        SEOTools::setDescription('Read insights from the Head of Department of Computer Science and Engineering.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Read insights from the Head of Department of Computer Science and Engineering.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.hods-desk');
    }

    public function ug_computer_science_and_engineering_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Computer Science and Engineering');
        SEOTools::setDescription('Meet the esteemed faculty of the Computer Science and Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Computer Science and Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.faculty-details');
    }

    public function ug_computer_science_and_engineering_research_publications()
    {
        SEOTools::setTitle('Research Publications - Computer Science and Engineering');
        SEOTools::setDescription('Explore research publications from the Computer Science and Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Explore research publications from the Computer Science and Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.research-publications');
    }

    public function ug_computer_science_and_engineering_industry_collabration()
    {
        SEOTools::setTitle('Industry Collaboration - Computer Science and Engineering');
        SEOTools::setDescription('Learn about industry collaborations in the Computer Science and Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Learn about industry collaborations in the Computer Science and Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.industry-collabration');
    }

    public function ug_computer_science_and_engineering_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Computer Science and Engineering');
        SEOTools::setDescription('Understand the program outcomes of the Computer Science and Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Computer Science and Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.program-outcomes');
    }

    public function ug_computer_science_and_engineering_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - Computer Science and Engineering');
        SEOTools::setDescription('Learn about the educational objectives of the Computer Science and Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Computer Science and Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.programme-educational-objectives');
    }

    public function ug_computer_science_and_engineering_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - Computer Science and Engineering');
        SEOTools::setDescription('Explore the specific outcomes of the Computer Science and Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Computer Science and Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.programme-specific-outcomes');
    }

    public function ug_computer_science_and_engineering_student_achievements()
    {
        SEOTools::setTitle('Student Achievements - Computer Science and Engineering');
        SEOTools::setDescription('Celebrate the achievements of students in the Computer Science and Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Student Achievements - Computer Science and Engineering');
        SEOTools::twitter()->setDescription('Celebrate the achievements of students in the Computer Science and Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-and-engineering.student-achievements');
    }


    // Department -> Undergraduate -> Department of Electrical and Electronics Engineering

    public function ug_electrical_and_electronics_engineering()
    {
        SEOTools::setTitle('Electrical and Electronics Engineering - Undergraduate Program');
        SEOTools::setDescription('Explore the Electrical and Electronics Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Electrical and Electronics Engineering - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Electrical and Electronics Engineering undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.electrical-and-electronics-engineering');
    }

    public function ug_electrical_and_electronics_engineering_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Electrical and Electronics Engineering');
        SEOTools::setDescription('Discover the highlights of the Electrical and Electronics Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Discover the highlights of the Electrical and Electronics Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.department-highlights');
    }

    public function ug_electrical_and_electronics_engineering_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Electrical and Electronics Engineering');
        SEOTools::setDescription('Meet the esteemed faculty of the Electrical and Electronics Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Meet the esteemed faculty of the Electrical and Electronics Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.faculty-details');
    }

    public function ug_electrical_and_electronics_engineering_research_publications()
    {
        SEOTools::setTitle('Research Publications - Electrical and Electronics Engineering');
        SEOTools::setDescription('Explore research publications from the Electrical and Electronics Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Research Publications - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Explore research publications from the Electrical and Electronics Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.research-publications');
    }

    public function ug_electrical_and_electronics_engineering_industry_collabration()
    {
        SEOTools::setTitle('Industry Collaboration - Electrical and Electronics Engineering');
        SEOTools::setDescription('Learn about industry collaborations in the Electrical and Electronics Engineering department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Learn about industry collaborations in the Electrical and Electronics Engineering department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.industry-collabration');
    }

    public function ug_electrical_and_electronics_engineering_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - Electrical and Electronics Engineering');
        SEOTools::setDescription('Read insights from the Head of Department of Electrical and Electronics Engineering.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Read insights from the Head of Department of Electrical and Electronics Engineering.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.hods-desk');
    }

    public function ug_electrical_and_electronics_engineering_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Electrical and Electronics Engineering');
        SEOTools::setDescription('Understand the program outcomes of the Electrical and Electronics Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Understand the program outcomes of the Electrical and Electronics Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.program-outcomes');
    }

    public function ug_electrical_and_electronics_engineering_programme_educational_objectives()
    {
        SEOTools::setTitle('Programme Educational Objectives - Electrical and Electronics Engineering');
        SEOTools::setDescription('Learn about the educational objectives of the Electrical and Electronics Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Educational Objectives - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Learn about the educational objectives of the Electrical and Electronics Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.programme-educational-objectives');
    }

    public function ug_electrical_and_electronics_engineering_programme_specific_outcomes()
    {
        SEOTools::setTitle('Programme Specific Outcomes - Electrical and Electronics Engineering');
        SEOTools::setDescription('Explore the specific outcomes of the Electrical and Electronics Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Programme Specific Outcomes - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Explore the specific outcomes of the Electrical and Electronics Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.programme-specific-outcomes');
    }

    public function ug_electrical_and_electronics_engineering_student_achievements()
    {
        SEOTools::setTitle('Student Achievements - Electrical and Electronics Engineering');
        SEOTools::setDescription('Celebrate the achievements of students in the Electrical and Electronics Engineering program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Student Achievements - Electrical and Electronics Engineering');
        SEOTools::twitter()->setDescription('Celebrate the achievements of students in the Electrical and Electronics Engineering program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.electrical-and-electronics-engineering.student-achievements');
    }


    // Department -> Undergraduate -> Department of Computer Science & Business Systems

    public function ug_computer_science_and_business_systems()
    {
        SEOTools::setTitle('Computer Science and Business Systems - Undergraduate Program');
        SEOTools::setDescription('Explore the Computer Science and Business Systems undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Computer Science and Business Systems - Undergraduate Program');
        SEOTools::twitter()->setDescription('Explore the Computer Science and Business Systems undergraduate program. Discover faculty details, research publications, and more.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.computer-science-business-systems');
    }

    public function ug_computer_science_and_business_systems_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Computer Science and Business Systems');
        SEOTools::setDescription('Discover the department highlights of the Computer Science and Business Systems department, showcasing research, faculty, and other important information.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Computer Science and Business Systems');
        SEOTools::twitter()->setDescription('Discover the department highlights of the Computer Science and Business Systems department, showcasing research, faculty, and other important information.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.department-highlights');
    }

    public function ug_computer_science_and_business_systems_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Computer Science and Business Systems');
        SEOTools::setDescription('Discover the faculty details of the Computer Science and Business Systems department, including their roles, teaching, and research expertise.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Computer Science and Business Systems');
        SEOTools::twitter()->setDescription('Discover the faculty details of the Computer Science and Business Systems department, including their roles, teaching, and research expertise.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.faculty-details');
    }

    public function ug_computer_science_and_business_systems_program_outcomes()
    {
        SEOTools::setTitle('Program Outcomes - Computer Science and Business Systems');
        SEOTools::setDescription('Learn about the program outcomes of the Computer Science and Business Systems department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Outcomes - Computer Science and Business Systems');
        SEOTools::twitter()->setDescription('Learn about the program outcomes of the Computer Science and Business Systems department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.program-outcomes');
    }

    public function ug_computer_science_and_business_systems_faculty_development_programmes()
    {
        SEOTools::setTitle('Faculty Development Programmes - Computer Science and Business Systems');
        SEOTools::setDescription('Discover the faculty development programmes of the Computer Science and Business Systems department.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Development Programmes - Computer Science and Business Systems');
        SEOTools::twitter()->setDescription('Discover the faculty development programmes of the Computer Science and Business Systems department.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.faculty-development-programmes');
    }

    public function ug_computer_science_and_business_systems_programme_educational_objectives()
    {
        SEOTools::setTitle('Program Educational Objectives - Computer Science and Business Systems');
        SEOTools::setDescription('Explore the educational objectives of the Computer Science and Business Systems program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Educational Objectives - Computer Science and Business Systems');
        SEOTools::twitter()->setDescription('Explore the educational objectives of the Computer Science and Business Systems program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.programme-educational-objectives');
    }

    public function ug_computer_science_and_business_systems_programme_specific_outcomes()
    {
        SEOTools::setTitle('Program Specific Outcomes - Computer Science and Business Systems');
        SEOTools::setDescription('Learn about the specific outcomes of the Computer Science and Business Systems program.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Program Specific Outcomes - Computer Science and Business Systems');
        SEOTools::twitter()->setDescription('Learn about the specific outcomes of the Computer Science and Business Systems program.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.undergraduate.computer-science-business-systems.programme-specific-outcomes');
    }


    // Department -> Department of Science & Humanities

    public function department_science_humanities()
    {
        SEOTools::setTitle('Science and Humanities - Department Overview');
        SEOTools::setDescription('Discover the Science and Humanities department, offering a range of programs and insights into various fields of study.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Science and Humanities - Department Overview');
        SEOTools::twitter()->setDescription('Discover the Science and Humanities department, offering a range of programs and insights into various fields of study.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.science-humanities.science-humanities');
    }

    public function department_science_humanities_department_highlights()
    {
        SEOTools::setTitle('Department Highlights - Science and Humanities');
        SEOTools::setDescription('Explore the highlights of the Science and Humanities department, showcasing achievements and opportunities.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Department Highlights - Science and Humanities');
        SEOTools::twitter()->setDescription('Explore the highlights of the Science and Humanities department, showcasing achievements and opportunities.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.science-humanities.department-highlights');
    }

    public function department_science_humanities_faculty_details()
    {
        SEOTools::setTitle('Faculty Details - Science and Humanities');
        SEOTools::setDescription('Meet the faculty of the Science and Humanities department, dedicated to academic excellence and student success.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Faculty Details - Science and Humanities');
        SEOTools::twitter()->setDescription('Meet the faculty of the Science and Humanities department, dedicated to academic excellence and student success.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.science-humanities.faculty-details');
    }

    public function department_science_humanities_hods_desk()
    {
        SEOTools::setTitle('HOD\'s Desk - Science and Humanities');
        SEOTools::setDescription('A message from the Head of the Department of Science and Humanities.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('HOD\'s Desk - Science and Humanities');
        SEOTools::twitter()->setDescription('A message from the Head of the Department of Science and Humanities.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.science-humanities.hods-desk');
    }

    public function department_science_humanities_industry_collabration()
    {
        SEOTools::setTitle('Industry Collaboration - Science and Humanities');
        SEOTools::setDescription('Learn about the industry collaborations that enhance the Science and Humanities department’s offerings.');
        SEOTools::opengraph()->addProperty('url', url()->current());
        SEOTools::opengraph()->addProperty('image', 'https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');
        SEOTools::twitter()->setTitle('Industry Collaboration - Science and Humanities');
        SEOTools::twitter()->setDescription('Learn about the industry collaborations that enhance the Science and Humanities department’s offerings.');
        SEOTools::twitter()->setImage('https://egspec.blob.core.windows.net/egspec-assets/og_image.webp');

        return view('pages.academics.departments.science-humanities.industry-collabration');
    }
}
