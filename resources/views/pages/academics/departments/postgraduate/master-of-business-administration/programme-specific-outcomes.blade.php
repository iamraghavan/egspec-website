@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Business Administration',
'page_title' => 'Program Specific Outcomes' ])


<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">

                    <div class="admission-content-top">
                        <div class="application-deadline">
                           <h5 class="rts-section-title animated fadeIn">Program Specific Outcomes (PSOs)</h5>
                           <div class="application-deadline__content mt-5">
                              <div class="application-deadline__content--table">
                                 <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                       <tr>
                                          <td>##</td>
                                          <td>Program Specific Outcomes</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td><strong>PSO1</strong></td>
                                          <td>To design, develop and test software solutions for real world applications using modern computational tools and techniques.</td>
                                       </tr>
                                       <tr>
                                          <td><strong>PSO2</strong></td>
                                          <td>To manage and analyze huge volumes of data in real-world applications and analyze with the aid of modern computing platforms, techniques and tools.</td>
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
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/postgraduate/master-of-business-administration/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
    name="Dr. R. Karthi"
    :phones="['+91 9842774807']"
    :emails="['karthi@egspec.org']"/>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('components.cta')





@endsection
