@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Hostel'
])


<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h5 class="rts-section-title animated fadeIn">
                        Hostel & Mess </h5>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <p class="rts-section-description">
                        E.G.S.Pillay Engineering College has established Following Laboratries inorder to implement practical training to Students

Constructed in a calm and healthy location, the hostel for both boys and girls in college provide complete residential facilities to the students. The facilities include a common room, computer room with WiFi Campus facility, reading room along with indoor and outdoor recreational activities..
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="rts-campus-tour rts-section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="section-title h1 rt-center mb--50">Hostel Administration</h2>

            <div class="col-lg-8">
                <div class="rts-video-section-text rt-center mx-3">
                    <p>The hostel administration is carried on by the Secretary with the assistance of Warden and Deputy Wardens. Residential Lecturers are available for guidance and Counseling. A separate mess is functioning inside the hostel providing quality and nutritious food – both Vegetarian and Non-Vegetarian.</p>
                    {{-- <a href="campus-life.html" class="mt--15 about-btn rts-nbg-btn btn-arrow">Visit Campus <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a> --}}
                </div>
            </div>
        </div>
    </div>
</section>


@include('components.cta')
@endsection
