@extends('layouts.app')
@section('content')

@include('components.home-slider')
@include('components.logo-slider')

{{-- <x-confetti /> --}}

<section class="rts-about v__1 rt-relative rts-section-padding">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-5 col-xl-5 col-md-10">
                <div class="rts-about-image">
                    <img src="@blob('engineering_college.webp')" alt="EGS Pillay Engineering College">
                </div>
            </div>
            <div class="col-lg-7 col-xl-7 col-md-10">
                <div class="rts-about-content">
                    <div class="rts-about-flex mb--10">
                        <h2 class="section-title w-320">
                            About <span style="color: var(--rt-primary);">EGSP</span><span style="color: var(--rt-theme);">EC</span><span class="rts-line"></span>

                        </h2>

                    </div>
                    <p class="rts-paragraph mb--50">
                        Established in 1995, <span style="color: var(--rt-primary);"> E. G. S. Pillay Engineering College </span> is a renowned institution in Tamil Nadu, known for its
                        exceptional infrastructure and academic excellence. Affiliated with Anna University since 2002, it empowers aspiring
                        engineers and managers through comprehensive programs and activities.
                    </p>
                    <a href="{{ url("/about/history") }}" class="about-btn rts-nbg-btn btn-arrow">EGSPEC Overview <span><i
                                class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    <div class="about-positioned-text ">
                        <h2 class="rt-clip-text">EST. 1995</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="rts-notice rts-section-padding rts-section-padding">
    <div class="container">



        <div class="row gy-5 gy-lg-0 justify-content-md-center">
            <div class="col-md-11 col-lg-7">
                <div class="rts-event-section">
                    <div class="rts-section rt-between pb--25 rts-border-bottom-2">
                    <h4 class="rts-section-title mb--25">Events</h4>
                    <a href="{{ url("#") }}" class="rts-arrow" style="color: var(--rt-theme);">View All <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    </div>

                    <div class="rts-event-section-content">
                        <ul class="list-unstyled rts-counter">
                            <li class="single-event">
                                <div class="single-event-counter">
                                    <div class="count-number rt-clip-text"></div>
                                </div>
                                <a href="https://icrdicct-egspec.onrender.com/" target="_blank">
                                <div class="single-event-content">
                                    <h5 class="event-title">ICRDICCT '2025</h5>
                                    <div class="single-event-content-meta">
                                        <div class="event-date">
                                            <span><i class="fal fa-calendar"></i></span>
                                            <span>April 4th & 5th, 2025</span>
                                        </div>
                                        <div class="event-time">
                                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                            <span>10:30 am</span>
                                        </div>
                                        <div class="event-place">
                                            <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                            <span>E.G.S. Pillay Engineering College</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li class="single-event">
                                <div class="single-event-counter">
                                    <div class="count-number rt-clip-text"></div>
                                </div>
                                <div class="single-event-content">
                                    <h5 class="event-title">Sample Event 02</h5>
                                    <div class="single-event-content-meta">
                                        <div class="event-date">
                                            <span><i class="fal fa-calendar"></i></span>
                                            <span>November 28, 2023</span>
                                        </div>
                                        <div class="event-time">
                                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                            <span>10:30 am</span>
                                        </div>
                                        <div class="event-place">
                                            <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                            <span>Zoom Meet</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="single-event">
                                <div class="single-event-counter">
                                    <div class="count-number rt-clip-text"></div>
                                </div>
                                <div class="single-event-content">
                                    <h5 class="event-title">Sample Event 03</h5>
                                    <div class="single-event-content-meta">
                                        <div class="event-date">
                                            <span><i class="fal fa-calendar"></i></span>
                                            <span>November 28, 2023</span>
                                        </div>
                                        <div class="event-time">
                                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                            <span>10:30 am</span>
                                        </div>
                                        <div class="event-place">
                                            <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                            <span>EGSPEC</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-11 col-lg-5">
                <div class="rts-notice-section ">
                    <div class="rts-section rt-between pb--25 rts-border-bottom-2">
                        <h4 class="rts-section-title">Notice</h4>
                        <a href="{{ url("#") }}" class="rts-arrow" style="color: var(--rt-theme);">View All <span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    </div>
                    <div class="rts-tab">
                        <ul class="nav nav-pills pb--30" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Latest</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">COE</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Principal & Administration</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <ul class="list-unstyled notice-content-box">
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                20
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("/") }}">
                                                        Notice Regarding Upcoming Campus Event: Spring Fling Carnival.
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                22
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Important Notice: Changes to Examination Schedule for Fall
                                                        Semester 2024.
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                24
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Notice Regarding Deadline Extension for Assignment Submission in
                                                        Biology 101.
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                25
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Urgent Notice: Campus Maintenance Work Scheduled for March
                                                        5th-7th.
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                25
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Notice of Guest Lecture: Dr. John Smith on Neuroscience
                                                        Advances.
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <ul class="list-unstyled notice-content-box">
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                20
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Important Notice: Midterm Examination Schedule for Spring
                                                        Semester 2024.
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                21
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Notice Regarding Final Examination Timetable for Fall Semester
                                                        2023
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                22
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Urgent Notice: Changes to Exam Dates for Biology 10
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                23
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Notice of Exam Venue Change for Chemistry 201
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                25
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Reminder Notice: Registration Deadline for Winter Term
                                                        Examinations
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <ul class="list-unstyled notice-content-box">
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                26
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Admission Notice: Applications Now Open for Fall 2024 Intake
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                27
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Important Notice: Admission Criteria and Requirements for
                                                        Undergraduate Programs
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                28
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Urgent Admission Notice: Extended Deadline for Submission of
                                                        Applications
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                29
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Notice of Scholarship Opportunities for Incoming Freshmen
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-notice">
                                        <div class="single-notice-item">
                                            <div class="notice-date">
                                                30
                                                <span>Jan</span>
                                            </div>
                                            <div class="notice-content">
                                                <p>
                                                    <a href="{{ url("notice-details.html") }}">
                                                        Admission Notice: Information Session for Prospective Students
                                                        on 2024
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


@include('components.testimonial')
@include('components.cta')


{{-- @include('components.admision-model') --}}



@endsection

