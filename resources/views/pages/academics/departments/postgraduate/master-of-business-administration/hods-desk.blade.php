@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Business Administration',
'page_title' => 'HOD’s Desk' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <section class="rts-about-university pt--100 pb--80">
                        <div class="container">
                            <div class="row">
                                <div class="rts-section">
                                    <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                                        <picture>
                                            <source srcset="@blob('profile/')" type="image/webp">
                                            <img src="@blob('profile/')" class="img-fluid img-thumbnail" alt="egspec_dr_r_karthi" style="max-width: 200px;">
                                        </picture>
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. R. Karthi, MBA., M.Phil., Ph.D</h5>
                                                <p class="profile-role">Professor & Head</p>
                                                <p class="profile-location">Department of Business Administration</p>
                                                <p class="profile-contact">Contact Number: 9842774807</p>
                                                <p class="profile-contact">E-Mail: karthi@egspec.org</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        {{-- <p class="desc text-justify">
                                            The Department of Computer Applications warmly welcomes you to become a part of E.G.S. Pillay Engineering College. It is my pleasure to serve as the Head of the department. Our department is committed to delivering an enriched curriculum and employing effective teaching and learning practices that offer students opportunities to acquire knowledge, gain admissions to prestigious institutions, and engage in research and consultancy. We provide a platform for students to achieve their career goals. Additionally, the department takes the initiative to enhance students' soft skills, analytical capabilities, and verbal communications, preparing them to confidently face the competition in the corporate world.

                                            Since its inception in 2001, we have welcomed scholars and enrolled students who are committed to a passionate pursuit of knowledge with a positive learning attitude. The department provides an outstanding academic environment complemented by excellent teaching faculty and state-of-the-art infrastructure. The comprehensive curriculum covers all topics related to computer science and its applications, with an emphasis on knowledge-based learning and practical exercises.

                                            The Department provides various value-added training programs, activities, placement assistance, and drives to inculcate high technical skills, a culture of teamwork, and leadership qualities for achieving excellence and thereby increasing employability skills. The core values of the department help the students to develop their overall personality and make them worthy technocrats to compete and work at the global level.
                                        </p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
    name="Dr. R. Karthi"
    :phones="['+91 9842774807']"
    :emails="['karthi@egspec.org']"/>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
