@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Science and Humanities',
'page_title' => 'Department Highlights' ])



<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">


                    <div class="admission-content-top">



                        <div class="application-deadline">

                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Highlights</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Experienced faculty members.</td>
                                            </tr>
                                            <tr>
                                                <td>Highly equipped laboratories to uplift the students’ practical knowledge.</td>
                                            </tr>
                                            <tr>
                                                <td>Advanced Instrumentation Laboratory with state-of-the-art facilities.</td>
                                            </tr>
                                            <tr>
                                                <td>ICT tool enabled smart classroom for interactive learning.</td>
                                            </tr>
                                            <tr>
                                                <td>Providing ample resources and a serene ambience for the readers.</td>
                                            </tr>
                                            <tr>
                                                <td>Enhancing students’ creativity through Project Based Learning.</td>
                                            </tr>
                                            <tr>
                                                <td>Facilitates the students to publish their findings in journals.</td>
                                            </tr>
                                            <tr>
                                                <td>Facilitates the students to win accolades in IELTS, Linguaskill, and GATE by providing special training sessions.</td>
                                            </tr>
                                            <tr>
                                                <td>Motivating the students in participation and winning technical and non-technical events.</td>
                                            </tr>
                                            <tr>
                                                <td>Conducting social-related extension activities like State Level Quiz competitions and motivational programmes for Higher Secondary school students.</td>
                                            </tr>
                                            <tr>
                                                <td>E-Box Industrial based training offered in every semester by experts.</td>
                                            </tr>
                                            <tr>
                                                <td>Yoga is another specific training given to all first-year students by Trainer.</td>
                                            </tr>
                                            <tr>
                                                <td>Japanese Language is introduced in Elective subject choices and around 90 students have benefitted in this academic year.</td>
                                            </tr>
                                            <tr>
                                                <td>To strengthen our college admission process, we give Motivational training sessions to all higher secondary school students.</td>
                                            </tr>
                                            <tr>
                                                <td>Experienced faculty members conduct outreach programs such as public awareness, rallies, brochure distribution, and medical camps.</td>
                                            </tr>
                                            <tr>
                                                <td>Out of 58 faculty members, 24 Ph.D. faculty members are working in Science and Humanities.</td>
                                            </tr>
                                        </tbody>

                                    </table>

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
                                    <li><a href="{{url('/academics/departments/science-humanities')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')




@endsection
