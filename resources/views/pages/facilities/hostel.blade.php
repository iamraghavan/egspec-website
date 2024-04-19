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
        <div class="row justify-content-center">
            <h4 class="section-title  rt-center mb--50 pt--100">Hostel Administration</h4>

            <div class="col-lg-8">
                <div class="rts-video-section-text rt-center mx-3">
                    <p>The hostel administration is carried on by the Secretary with the assistance of Warden and Deputy Wardens. Residential Lecturers are available for guidance and Counseling. A separate mess is functioning inside the hostel providing quality and nutritious food – both Vegetarian and Non-Vegetarian.</p>

                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <h4 class="section-title  rt-center mb--50 pt--100">Hostel Admission
            </h4>

            <div class="col-lg-8">
                <div class="rts-video-section-text rt-center mx-3">
                    <p>The Application Form for hostel admission can be obtained from the hostel office. The applicant should meet the Warden with his / her Parent / Guardian and has to pay the hostel admission fees as prescribed by the hostel management. Parent / Guardian’s presence is compulsory at the time of hostel admission.</p>

                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <h4 class="section-title  rt-center mb--50 pt--100">Hostel & Mess
            </h4>

            <div class="col-lg-8">
                <div class="rts-video-section-text rt-center mx-3">
                    <p>The college has well furnished hostels for boys & girls. Fine dining facilities, first aid facilities and recreations are provided separately for boys and girls. EGSPEC has 5 deputy wardens for the welfare of the students. Safe drinking water and nutritious foods (Veg as well as Non Veg) are provided. Every effort is being taken for the comfortable stay of the inmates and make them feel at home.</p>
<br>
<p>In order to have a good health care of the college staff and students, a Doctor has been appointed.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <h4 class="section-title  rt-center mb--50 pt--100">Accommodations – Staff Quarters, Guest House:
            </h4>

            <div class="col-lg-8">
                <div class="rts-video-section-text rt-center mx-3">
                    <p>Faculty may stay with their family in the staff quarters. The Guest house is available for visitors.</p>
                </div>
            </div>
        </div>
    </div>
</section>




@include('components.cta')
@endsection
