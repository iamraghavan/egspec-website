@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Mechanical Engineering',
'page_title' => 'Program Educational Outcomes' ])

<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">
               <div class="admission-content-top">
                  <div class="application-deadline">
                     <h5 class="rts-section-title animated fadeIn">Program Educational Outcomes</h5>
                     <div class="application-deadline__content mt-5">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped table-hover table-bordered">
                               <thead class="table-theme">
                                 <tr>
                                    <td>##</td>
                                    <td>Program Educational Outcomes</td>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><strong>PEO1</strong></td>
                                    <td>Preparing the graduates to have successful career in mechanical and associated industries or becoming an entrepreneur or pursuing higher education and research.</td>
                                 </tr>
                                 <tr>
                                    <td><strong>PEO2</strong></td>
                                    <td>Developing ability to apply fundamental technical knowledge and skills to find practical solutions to technological challenges and problems in core and allied areas of mechanical engineering.</td>
                                 </tr>
                                 <tr>
                                    <td><strong>PEO3</strong></td>
                                    <td>Complementing the classroom teaching with live projects, field works, seminars to build self-learning and lifelong learning capability and to develop out-of-the-box thinking. Also developing capability to adapt to evolving technological challenges, communicate effectively, work effectively as individuals and as team members, and adhering to professional ethics.</td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>


               </div>
            </div>

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
                                <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
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
@endsection
