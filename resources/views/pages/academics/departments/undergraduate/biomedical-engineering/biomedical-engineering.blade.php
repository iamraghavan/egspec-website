@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Biomedical Engineering' ])




<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The department of Biomedical Engineering was established in the year 2019. The importance of education lies in translating opportunities into experiences of empowerment, in transcending 'what is' to 'what can be' and transforming limitations into limitless learning. The department aims to bridge the gap between engineering and medical sciences to improve healthcare delivery. With well-qualified and experienced staff, the department continually updates its laboratories with modern facilities. As per university norms, a semester system is being followed. The department follows the latest EGSPEC Regulation to ensure a comprehensive education. Various seminars and workshops are conducted periodically to enhance learning. The department also fosters associations related to the field, encouraging students to work on mini-projects in their pre-final year to implement their ideas practically. Faculty members specialize in areas such as Medical Imaging, Biomechanics, Biomaterials, and Medical Instrumentation, preparing students for industry and research. The department maintains strong industry links with renowned organizations, offering value-added and certification courses to enhance student skills.</p>
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
                                    <p class="amount">To achieve excellence in Biomedical engineering education and serve as a valuable resource Centre to the industry and the society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-scholarship-description mt-5">
                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info text-justify">
                                    <h4 class="title">Mission</h4>
                                    <p class="amount">To produce competent Biomedical Engineers through quality education and training.</p>
                                    <p class="amount">To maintain state-of-the-art learning facilities, enhance the competence of faculty and evolve as a centre of excellence through R & D.</p>
                                    <p class="amount">To develop skilled professionals with academic reliability, good communication, attitude towards lifelong learning, ability to be team players.</p>
                                    <p class="amount">To bridge the gap between the industry and academia with expanding collaboration and partnerships with industry through MOUs, projects, and consultancy fulfilling societal needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="academic-picture mt-5">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/egspec-symposium.appspot.com/o/two-days-fdp-on-revolutionizing-healthcare-the-intersection.webp?alt=media&token=750db4da-52b1-4153-8874-1679ce1e3ecd" class="d-block" alt="two-days-fdp-on-revolutionizing-healthcare-the-intersection">
                                </div>
                                {{-- <div class="swiper-slide">
                                    <img src="https://egspec.blob.core.windows.net/egspec-assets/cat_img.webp" class="d-block" alt="Academic 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://egspec.blob.core.windows.net/egspec-assets/engineering_college.webp" class="d-block" alt="Academic 3">
                                </div> --}}
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
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>


                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>

                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                        name="Dr. A. SUNDAR RAJ, M.E., Ph.D"
                        :phones="['+91 75986 90233', '+91 98651 73406']"
                        :emails="['hodbme@egspec.org','jimhawkinson@egspec.org']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
