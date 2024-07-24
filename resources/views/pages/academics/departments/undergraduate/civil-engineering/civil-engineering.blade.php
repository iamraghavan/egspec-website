@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => '',
    'page_title' => 'Civil Engineering'
])

<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">
                        The Department of Civil Engineering was established in the year 2011 with an intake of 60 students. The intake was increased to 120 students in 2013. The department has well-qualified and experienced teaching faculties and technical staff with state-of-the-art laboratories to meet the quality education required for present challenging societal and industrial needs. The department is involved in Research & Consultancy activities in the areas of Structural Engineering, Environmental Engineering, Geotechnical Engineering, Concrete & Highway Engineering, and Surveying with many national and international publications. The department is actively involved in co-curricular and extra-curricular activities with the association of professional bodies.
                    </p>
                </div>
            </div>
        </div>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
                    <div class="rts-scholarship-description">
                        <div class="repeating-content">
                            <div class="single-information-box rt-theme-bg">
                                <div class="single-info">
                                    <h4 class="title">Vision</h4>
                                    <p class="amount">To evolve as a Centre of excellence by imparting quality technical education and promote research to meet the emerging challenges in the field of Civil Engineering.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">Civil Engineering department is committed to:</p>
                                    <ol class="amount">
                                        <li><p>M1: Provide quality education through innovative teaching and learning practices</p></li>
                                        <li><p>M2: Encourage faculty and students to pursue higher education and carry out socially relevant innovative research thereby establishing centers of excellence in emerging areas of research</p></li>
                                        <li><p>M3: Offer consultancy services using state-of-the-art facilities fulfilling the needs of the industry and society.</p></li>
                                        <li><p>M4: Enable our students and faculty to play leadership roles in a sustainable manner by adopting professional ethics, entrepreneurship activities, interpersonal skills, and lifelong learning attitude.</p></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/infrastructure') }}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Civil Engineering Department"
                        :phones="['+91-1234567890']"
                        :emails="['civilengg@example.com']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
