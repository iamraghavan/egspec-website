@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Computer Science & Business Systems' ])



<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">

                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The department of B.Tech - Computer Science and Business Systems (CSBS) program aims to enhance the relevance of the computer Science program in India to meet the future demands of the IT industry whose landscape is rapidly changing in the era of Business 4.0. The curriculum is designed to ensure that students should get better exposure to emerging subjects such as Analytics, Deep learning, Machine Learning, Cloud Computing, and Internet of Things and Design thinking and also to develop an equal interest and appreciation towards humanity, value added science and other interrelated topics. The students graduating from this program will be in high demand by the industries and will be productive.</p>
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
                                    <p class="amount">To be a renowned centre of education, research and service in computing and allied domains.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rts-scholarship-description mt-5">

                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>

                                    <p class="amount">To offer computing education programs with the goal that the students become technically competent and develop lifelong learning skill.</p>
                                    <p class="amount">To undertake path-breaking research that creates new computing technologies and solutions for industry and society at large.</p>
                                    <p class="amount">To foster vibrant outreach programs for industry, research organizations, academia and society.</p>

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
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-development-programmes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Development Programme (FDP)</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
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
