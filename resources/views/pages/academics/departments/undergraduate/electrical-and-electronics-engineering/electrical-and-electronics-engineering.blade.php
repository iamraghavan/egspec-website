@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Electrical And Electronics Engineering' ])

<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">
                        The department of Electrical and Electronics Engineering was started in the year 2000 with an intake of 40 students in the B.E - EEE programme. The intake was revised to 60 in the year 2001. The PG programme M.E - Power Electronics and Drives was added in the year 2013. The department has well-established laboratories and well-experienced teaching faculty.
                    </p>
                    <p class="rts-section-description mt-3 text-justify">
                        The department has got permanent affiliation from Anna University - Chennai in the year 2014 and has got Research Center recognition for doing Ph.D. and M.S (By research) programmes. The B.E (EEE) programme was accredited by NBA in the year 2016.
                    </p>
                    <p class="rts-section-description mt-3 text-justify">
                        The department aims at producing globally competent electrical and electronics engineers. It conducts technical and non-technical events every year to improve the interpersonal skills of the students.
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
                                <div class="single-info text-justify">
                                    <h4 class="title">Vision</h4>
                                    <p class="amount">
                                        The department is envisioned to produce globally competent electrical and electronics engineers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info text-justify">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">
                                        1. To impart the contemporary knowledge in the field of electrical and electronics engineering with high human values.
                                    </p>
                                    <p class="amount">
                                        2. To offer state-of-the-art facilities for conducive learning and conducting research.
                                    </p>
                                    <p class="amount">
                                        3. To train the students for a professional career and higher education by imparting self-learning and interpersonal skills.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="academic-picture mt-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://egspec.blob.core.windows.net/egspec-assets/engineering_college.webp" class="d-block" alt="Academic 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://egspec.blob.core.windows.net/egspec-assets/cat_img.webp" class="d-block" alt="Academic 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://egspec.blob.core.windows.net/egspec-assets/engineering_college.webp" class="d-block" alt="Academic 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. P. J. Suresh babu"
                            :phones="['+91 9585 160 544']"
                            :emails="['sureshbabu@egspec.org']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
