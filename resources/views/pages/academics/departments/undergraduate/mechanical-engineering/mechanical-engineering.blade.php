@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => '',
'page_title' => 'Mechanical Engineering' ])


<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">

                <div class="col-lg-12">
                    <h4 class="rts-section-title">About</h4>
                    <p class="rts-section-description mt-5 text-justify">The department of Mechanical Engineering was established in 1995. The department offers undergraduate B.E. (Mechanical Engineering) and postgraduate M.E. (Manufacturing Engineering) programs. It has highly qualified and experienced faculty members. The department boasts well-equipped infrastructural facilities and fully equipped laboratories with modern hardware and software. Faculty members are actively engaged in research and have published papers in reputed journals and conferences. The department has also organized four International Conferences and two Faculty Development Programs.</p>
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
                                    <p class="amount">To foster academic excellence in Mechanical Engineering Education and Research and turn out students into competent professionals to serve the society.</p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rts-scholarship-description mt-5">

                        <div class="repeating-content">
                            <div class="single-information-box rt-secondary-bg">
                                <div class="single-info">
                                    <h4 class="title">Mission</h4>

                                    <p class="amount">To produce successful mechanical engineers through innovative teaching and learning processes and by enhancing the knowledge and skills of faculty members and supporting staff through various training programmes.</p>
                                    <p class="amount">To establish state-of-the-art laboratories and centers of excellence to promote good quality education, research, and consultancy for industrial and societal needs.</p>
                                    <p class="amount">To prepare the students for higher education and successful engineering careers by inculcating leadership and entrepreneurial qualities, teamwork capability, interpersonal skills, lifelong learning, moral, and ethical values.</p>

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
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/mechanical-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="x"
                        :phones="['y']"
                        :emails="['z']"/>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@include('components.cta')
@endsection
