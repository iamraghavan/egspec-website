@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Computer Science and Engineering'])

<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The Department of Computer Science and Engineering was established at Edayathangudy G.S. Pillay Engineering College in the academic year 1995-1996. The department's goal is to meet the demand for Computer Engineers in software companies, banking sectors, and private sectors. The department has been offering the UG program since 1995 and the PG program since 2012. It has a Recognized Research Centre for PhD/M.S. (By Research) and obtained Permanent Affiliation from Anna University in 2014-15. The department was accredited by NBA in 2016 and achieved NBA-Tier 1 accreditation in 2021.</p>
                    <p class="rts-section-description mt-3 text-justify">The department boasts highly qualified and experienced faculty members, and has well-equipped infrastructure including seven laboratories for practical work, an additional lab for hardware and software, and a research lab for research activities. We provide Programming Skill Development Training using tools like E-Box, Skillrack, Terv, Datanerdz, AWS, and Android Development Kit. The department has also received funding from TNSCST under Young Scientist Research Fellowship and Computer Skills for School Students.</p>
                    <p class="rts-section-description mt-3 text-justify">The department has established the Computer Engineers Association (CEA) to promote student talent and development. We organize international and national conferences through the association. Notably, we conducted the ACES-ACM-IIT Delhi India’s Biggest Networking Championship Zonal Level Workshop cum Competition, with winners participating in the final competition in Delhi. The department offers various industry-oriented training courses, value-added courses, and competitive exam training (GATE, GRE, TOEFL, etc.). We also run social programs like Computer Literacy Awareness Programs for government employees, the public, and school students. Our students have excelled in co-curricular and extra-curricular activities, including participation in the Guinness Record for the Biggest Software Development Project at Kaashiv Infotech, Chennai.</p>
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
                                    <p class="amount">To produce globally competent computer professionals capable of adapting to the ever-changing technological trends of industry and society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info text-justify">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">1. To build core competencies desirable for computer professionals, including design, development, testing, and maintenance of software systems for real-world projects.</p>
                                    <p class="amount">2. To train students in emerging technologies to make them preferable to employers.</p>
                                    <p class="amount">3. To provide state-of-the-art learning facilities for effective implementation of learner-centric teaching and learning processes, fostering professional skills, self-learning, and lifelong learning capabilities.</p>
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
                    'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform',
                    'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                    'Employer Survey' => 'https://drive.google.com/open?id=1HEiaH5PgHxLyVgnH7FSEORGARxRvA2iv2FL8gBpnU8Q',
                    'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform',

                ]"/>
                </div>
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. T.Ganesan"
                            :phones="['+91 99407 42877']"
                            :emails="['Ganesan21@gmail.com']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
