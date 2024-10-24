@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Biomedical Engineering',
'page_title' => 'Programme Educational Objectives' ])




<div class="rts-program rts-section-padding">
    <div class="container">
       <div class="rts-program-description">
          <div class="row">
             <div class="col-lg-8">

                <div class="admission-content-top">
                    <div class="application-deadline">
                        <h5 class="rts-section-title animated fadeIn">Program Educational Objectives (PEOs)</h5>
                        <div class="application-deadline__content mt-5">
                            <div class="application-deadline__content--table">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>##</td>
                                            <td>Program Educational Objectives</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>PEO1</strong></td>
                                            <td>To enable graduates to work in integrative teams involving various engineering disciplines to identify, formulate and solve biomedical engineering problems.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PEO2</strong></td>
                                            <td>To enable graduates to use their multidisciplinary background to foster communication across professional and disciplinary boundaries with the highest professional and ethical standards.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>PEO3</strong></td>
                                            <td>To enable graduates to recognize the limits of their knowledge and initiate self-directed learning opportunities, to identify and create professional opportunities in the field of biomedical engineering.</td>
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
                   <!-- curriculum -->
                   <div class="program-curriculum">
                      <h6 class="heading-title">Department Quick Links</h6>
                      <div class="program-menu">
                        <ul class="list-unstyled">
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                            <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                            <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/biomedical-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                        </ul>
                      </div>
                   </div>
                   <!-- contact info -->
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
