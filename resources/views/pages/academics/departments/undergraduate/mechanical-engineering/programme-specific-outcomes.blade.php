@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Mechanical Engineering',
'page_title' => 'Program Specific Outcomes' ])
<div class="rts-program rts-section-padding">

<div class="container">

<div class="rts-program-description">

<div class="row">

<div class="col-lg-8">

  <div class="admission-content-top">

    <div class="application-deadline">

      <h5 class="rts-section-title animated fadeIn">Program Specific Outcomes</h5>

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

                <td><strong>PSO 1</strong></td>

                <td>Design, develop, test, and maintain advanced thermal engineering systems for industrial and other applications.</td>

              </tr>

              <tr>

                <td><strong>PSO 2</strong></td>

                <td>Apply the concepts of modern manufacturing and industrial engineering techniques in industries.</td>

              </tr>

              <tr>

                <td><strong>PSO 3</strong></td>

                <td>Modeling, design, and analysis of mechanical components using Computer Aided Design and Analysis (CAD/CAE) software tools.</td>

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
