@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Information Technology' ])




<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">

                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The department of Information technology stared in the year of 2000, offered B.Tech – Information Technology with intake of 60, approved by AICTE and Permanently Affiliated to Anna University. The B.Tech – Information Technology programme Accredited by NBA (Tier-1)(2022–2025) And (2019-2022).The department has well qualified and experienced staff and it continually updates it's laboratories with modern facilities. As per university norms, semester system is being followed. Currently department follows EGSPEC Regulation 2019 & 2023. The department conducts various seminars and workshop periodically. Various associations are formed related to the department. The students are given different mini- projects .in the pre-final year so that their individual ideas can be implemented. The staff and students are encouraged to present papers at various colleges and many have won prizes in the face of stiff competitions. The Department has faculty members specialized in Data mining, Computer Networks, Soft Computing, Evolutionary Computing, Network Security, Cyber Security, Digital Signal Processing, Big Data Analytics, Artificial Intelligence, Image Processing, Cloud Computing and Mobile Computing. The department prepares the students to be ready on day one in the industry. The curriculum is well rounded and well defined to cater to the requirements of both industry deployment and research activities. The department have very good industry institute linkage with Top Freshers, Ampisoft, DataNerdz.AI, ICT Academy, Oracle Academy, Linxpert Systems, IBM, EMC Corporation, VMWare IT Acdemy, Palo Alto Networks, CISCO Academy, Sales Force, DellEMC and provide various value added & certification course.</p>
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
                                    <p class="amount">To produce globally competent information technologist and to inculcate values of leadership and research qualities in them.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rts-scholarship-description mt-5">

                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>

                                    <p class="amount">To provide high quality Education to the students by our competent faculty members, effective teaching learning process and value added courses.</p>
                                    <p class="amount">To create centres of excellence by interacting with industries for better employability and to contribute to the society through consultancy and R&D works.</p>
                                    <p class="amount">To improve the soft skill, interpersonal skill, ethical behavior and communication skill of students by involving them in team works and technical events.</p>

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
                    <x-accordion-links :links="[

                'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform?usp=sf_link',
                'Students Feedback' => 'https://docs.google.com/forms/d/e/1FAIpQLSdhWwmjf965CW6NkNSVwzZ41IlceBgTRAAaaxswqQb2p6WW-Q/viewform?usp=sf_link',
                'Grievances' => 'https://docs.google.com/forms/d/e/1FAIpQLScQ3xc3O8iAswJs9MChu5Kd_nunV5wBmS7a6T0YKEPA8NnS3w/viewform?usp=sf_link',
                'Employer Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSd_lJlYkKDrivGp9rYsqyLVcmWV-2F86-VaclLOiIhHvPyAQQ/viewform?usp=sf_link',
                'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform?usp=sf_link',
                'Department Forms' => 'https://sites.google.com/site/profmaniit/department?authuser=0'

               ]"/>

                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collabration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

<li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Dr. S. Manikandan, M.E., Ph.D"
                        :phones="['+919047902685', '+919500707894']"
                        :emails="['manikandan@egspec.org', 'profmaninvp@gmail.com']"/>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
