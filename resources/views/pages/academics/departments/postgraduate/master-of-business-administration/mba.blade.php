@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Postgraduate',
'page_title' => 'Master\'s of Business Administration' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About the Department</h4>
                    <p class="rts-section-description mt-5 text-justify">
                        The Department of Management Studies, established in 2001, is dedicated to nurturing future business leaders. Our department boasts a team of highly qualified faculty members and a separate departmental library stocked with an extensive collection of textbooks, reference books, and national and international journals as prescribed in the university syllabus. The MBA department is equipped with a modern computer lab to support the technological needs of our students.
                    </p>
                    <p class="rts-section-description mt-5 text-justify">
                        We regularly invite distinguished personalities from the corporate sector to share insights on the evolving business landscape. Our department consistently organizes guest lectures and workshops aimed at enhancing student knowledge and skills. We also offer smart classroom facilities and provide training sessions focused on aptitude and attitude development.
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
                                 <p class="amount">To promote a centre of excellence by inspiring and cultivating socially responsible leaders, equipped with the management knowledge, skills, and confidence to shape a better future.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                           <div class="single-information-box rt-secondary-bg">
                              <div class="single-info">
                                 <h4 class="title">Mission</h4>
                                 <p class="amount">M1: To create a vibrant academic environment for better employment opportunities and entrepreneurship for students towards successful careers in management-related areas.</p>
                                 <p class="amount">M2: To provide high-quality education to the students through efficient faculty members and make them social and ethical leaders for a transformative impact on society.</p>
                                 <p class="amount">M3: To offer a research-oriented environment for enhancing the analytical skills, knowledge, and talents needed for the business world.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                    <div class="academic-picture mt-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/nipm-egsp-student-chapter-installation.webp?alt=media&token=e029f082-8083-4618-a3c0-f88c227aba3e" class="d-block" alt="NIPM EGSP Student Chapter Installation">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/mba_img-1.webp?alt=media&token=63871770-c422-46ef-b44b-e22f05c01a9f" class="d-block" alt="Academic 1">
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
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
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
