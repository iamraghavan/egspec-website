@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Science and Humanities' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">

                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The Department of Science and Humanities is a primal department which consists of Chemistry, Physics, Mathematics and English. All the disciplines in the department exist as an individual division and maintain individual identities. The varied disciplines provide the students with the knowledge of Mathematics, Physics, Chemistry, English and Environmental Science fundamentals. Developing moral behaviour among the students, utilizing human resources and coordinating academic responsibilities are the exclusive potentials of the department.
                        The department accomplishes transforming young aspiring minds into determined freshman engineers through Outcome Based Education. Besides, the department teaches students a positive ethos through Value-Based Education.</p>
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
                                    <p class="amount">Department of Science and Humanities is committed to providing quality education to freshers entering into Engineering stream, enabling them to excel in the fields of basic sciences and technology.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rts-scholarship-description mt-5">

                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>

                                    <p class="amount">To contribute strongly to the academic standing and overall knowledge development of the students.</p>
                                    <p class="amount">To maintain state-of-the-art infrastructure, laboratory facilities, and a modern congenial learning environment.</p>
                                    <p class="amount">To enhance the competence of faculty to high standards by involving in research and development (R&D), eventually leading to centres of excellence and offering consultancy to industries and society.</p>

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
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/science-humanities')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

                                    <li><a href="{{url('/academics/departments/science-humanities/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Dr. Anandaraj P"
                        :phones="['']"
                        :emails="['']"/>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
