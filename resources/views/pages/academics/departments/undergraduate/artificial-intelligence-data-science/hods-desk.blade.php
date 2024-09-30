@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Artificial Intelligence and Data Science',
    'page_title' => 'HOD’s Desk'
])

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
                                            <source srcset="@blob('profile/dr_s_palani_murugan.webp')" type="image/webp">
                                            <img src="@blob('profile/dr_s_palani_murugan.webp')" class="img-fluid rounded" alt="egspec_dr_s_palani_murugan" style="max-width: 200px;">
                                        </picture>
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="rts-section-description">
                                            <div class="profile-info">
                                                <h5 class="profile-name">Dr. S. Palani Murugan</h5>
                                                <p class="profile-role">Associate Professor & Head</p>
                                                <p class="profile-contact">Department of Artificial Intelligence and Data Science</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <p class="desc text-justify">
                                            The B.Tech in Artificial Intelligence and Data Science (AI&DS) is an undergraduate program that offers advanced learning solutions in machine learning, deep learning, and artificial intelligence. AI&DS is an interdisciplinary field that creates a comprehensive ecosystem utilized across various sectors in the technical industry, academia, and research. Our department is committed to providing the best professional opportunities for our students and fostering their bright futures.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="program-description-area">
                                <div class="program-credit-area">
                                    <div class="program-accordion ">
                                        <div class="accordion" id="rts-accordion">
                                            <div class="accordion-item">
                                                <div>
                                                    <div class="accordion-body-content">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="https://www.linkedin.com/in/dr-palani-murugan-s-a6184b143/" target="_blank"> LinkedIn Profile </a></td>
                                                                    <td><i class="fab fa-linkedin-in"></i> / LinkedIn</td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td><a href="https://scholar.google.com/citations?user=XXXXXX" target="_blank"> Google Scholar Citation </a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="https://www.researchgate.net/profile/Palani-Murugan" target="_blank"> Research Gate </a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr> --}}
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/artificial-intelligence-and-data-science/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
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
