@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Our Focus' ])



<!--====================  About us / Our Focus  ====================-->

<section class="rts-about-university rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-5">
                    <h3 class="rts-section-title animated fadeIn">Our Focus</h3>
                </div>
                <div class="col-lg-8 col-md-7">
                    <p class="rts-section-description">
                        Motivate the students in a creative approach for the application of maximum knowledge and information about engineering and technology and to put forth their best endeavors in pursuit of triumph and engineering excellence. Education is all about creating an environment of academic freedom, where bright minds meet, discover and learn. One would experience top of the world living and learning experience at EGSPEC.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 justify-content-md-center justify-content-start">
            <div class="col-lg-12 col-xl-12 col-md-12">
                <div class="rts-about-section">
                    <img src="{{asset('/assets/images/engineering_college.jpg')}}" alt="About us - EGSPEC">
                </div>
            </div>

        </div>
    </div>
</section>



@include('components.cta')
@endsection

