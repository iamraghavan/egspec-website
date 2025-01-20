@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => '',
    'page_title' => 'Artificial Intelligence and Data Science'
])

<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">
                        The Artificial Intelligence & Data Science (AI & DS) Department was established in 2022 with an initial intake of 60 students. Currently, the department offers a B.Tech program with an intake of 120 students. The primary objective of this program is to equip students with the knowledge and skills needed to become industry-ready professionals. Graduates will be prepared for careers as data analysts and data scientists, capable of addressing significant challenges in machine learning, statistics, information discovery, and data visualization. They may find career opportunities in diverse fields such as healthcare, business, e-commerce, social networking, climatology, biotechnology, genetics, and more.
                        Artificial Intelligence and Data Science encompass the core principles of data science, including the ethical acquisition, engineering, analysis, and visualization of data. This course aims to teach foundational technologies such as artificial intelligence, data mining, cloud architecture, as well as advanced topics like machine learning, robotics, generative AI, Power BI, big data analytics, and a comprehensive understanding of data science processes, including data wrangling, exploration, visualization, and hypothesis building. Through this course, students will acquire cross-disciplinary skills integrating elements from mathematics, engineering, and technology. Enrolling in the AI&DS course not only enhances career prospects and creates global job opportunities but also offers extensive research opportunities to address societal and industrial challenges.
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
                                    <p class="amount">The Department of Artificial Intelligence & Data Science will excel and lead in education, research and innovation; contributing to the advancement of design, development and management of data, algorithms to provide meaningfulness in the decision-making process further the emergence of quality artificial intelligence-based solutions to enhance the quality of life for humanity in a sustainable way.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info text-justify">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">M1: To create an outstanding learning experience through rigorous curriculum of theory and practice that develops students’ technical and professional skills to succeed in a wide range of careers.</p>
                                    <p class="amount">M2: To continually advance research through a culture of discovery, creativity, and innovation to benefit humankind.</p>
                                    <p class="amount">M3: To serve as highly capable resources to society and the profession through professional organizations, consultancy, and continuing education.</p>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-development-programmes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Development Programme (FDP)</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/newsletter/query?d_id=2')}}"><span><i class="fa-light fa-arrow-right"></i></span>Newsletters</a></li>
                                </ul>
                            </div>
                        </div>

                        <x-dept-contact-info
                            name="Dr. S. Palani Murugan"
                            :phones="['']"
                            :emails="['palanimurugan@egspec.org']"
                        />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
