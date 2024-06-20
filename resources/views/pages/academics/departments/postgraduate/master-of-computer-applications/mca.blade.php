@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Postgraduate',
'page_title' => 'Master\'s of Computer Applications' ])


<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About Department</h4>
                    <p class="rts-section-description mt-5 text-justify">The Department of Computer Applications offers a 3-year full-time MCA course to the students. Established in 2001, the course was initially approved by Bharathidasan University Trichirappalli and later recognized and approved by Anna University, Chennai, in 2003. Since 2011, the department has maintained an intake of 60 students per academic year. As our institution is currently autonomous, the curriculum is regularly updated to meet both academic and industrial requirements.</p>
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
                                    <p class="amount">To produce globally competent information technologists and to inculcate values of leadership and research qualities in them.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">To provide high-quality education to the students through competent faculty members, effective teaching-learning processes, and value-added courses.</p>
                                    <p class="amount">To create centers of excellence by interacting with industries for better employability and contributing to society through consultancy and R&D works.</p>
                                    <p class="amount">To enhance the soft skills, interpersonal skills, ethical behavior, and communication skills of students through team works and technical events.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">

                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
<div class="program-menu">
    <ul class="list-unstyled">
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
        <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/industry-collabration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
        <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
        <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
    </ul>
</div>

                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Dr. J. Vanitha"
                        :phones="['+919443728519']"
                        :emails="['vanitha@egspec.org']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
