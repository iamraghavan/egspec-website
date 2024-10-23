@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Electronics And Communication Engineering' ])




<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The Department of Electronics and Communication Engineering was established in 2004 with an initial intake of 30 students. This intake was increased to 60 in 2006, and further to 120 in 2013, the same year the postgraduate program in Communication Systems, with an intake of 18 students, was launched. In 2015, the department was recognized as a Research Center by Anna University, Chennai, and also received permanent affiliation.</p>
                    <p class="rts-section-description mt-3 text-justify">Today, the department is rated as one of the leading departments among various colleges under the university, boasting a NAAC A grade and Autonomous status. Our curriculum is regularly updated to meet the evolving needs of the industry and research community. The laboratories are equipped with the latest technology to keep pace with curriculum changes. In addition to regular labs, we are developing specialized labs in image processing, RF system design, and more. Our alumni are employed in prestigious industries both in India and abroad.</p>
                    <p class="rts-section-description mt-3 text-justify">Our faculty members specialize in areas such as Analog Electronics, Advanced Digital System Design, Digital Signal and Image Processing, Medical Electronics, Embedded Systems, Nanotechnology, VLSI Technology, Wired and Wireless Networking, Analog and Digital Communication, Fuzzy Control and Neural Networks, and software tools like Matlab, LabVIEW, Mentor Graphics, NS2, Keil, SPICE, Circuit Maker, and various open-source software. The department is supported by a dedicated team of qualified faculty members with rich industrial, research, and teaching experience.</p>
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
                                    <p class="amount">To achieve excellence in Electronics and Communication Engineering by imparting contemporary knowledge and skills to students, serving as a valuable resource center for the industry and society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info text-justify">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">1. To provide quality education and training in the field of electronics.</p>
                                    <p class="amount">2. To maintain state-of-the-art learning facilities, enhance the competence of faculty, and evolve as a center of excellence through research and development.</p>
                                    <p class="amount">3. To enable students to acquire effective communication skills, a lifelong learning attitude, teamwork capabilities, and the aspiration for higher education.</p>
                                    <p class="amount">4. To bridge the gap between industry and academia by expanding collaborations and partnerships through MOUs, projects, and consultancy services, thus fulfilling societal needs.</p>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. M. Malathi, M.E., Ph.D"
                            :phones="['+91 9443 101 712']"
                            :emails="['hodece@egspec.org', 'malathi@egspec.org']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@include('components.cta')





@endsection
