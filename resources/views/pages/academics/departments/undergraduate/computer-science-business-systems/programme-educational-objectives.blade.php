@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Computer Science & Business Systems',
    'page_title' => 'Programme Educational Objectives'
])

<div class="rts-program rts-section-padding">
    <div class="container">
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
                    <div class="admission-content-top">
                       <div class="application-deadline">
                          <h5 class="rts-section-title animated fadeIn">Program Education Objectives (PEOs)</h5>
                          <div class="application-deadline__content mt-5">
                             <div class="application-deadline__content--table">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="table-theme">
                                       <tr>
                                          <td>##</td>
                                          <td>Program Education Objectives</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td>Graduates will excel as engineering professionals and leaders in electrical engineering or becoming an entrepreneur or pursuing higher education.</td>
                                       </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>Graduates will demonstrate core competence to adapt themselves to the constantly evolving technologies and stay in line with industry advancements.</td>
                                       </tr>
                                       <tr>
                                          <td>3</td>
                                          <td>Graduates will collaborate in multidisciplinary fields both as an individual and as a team member with a strong sense of professionalism and ethics.</td>
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
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-business-systems/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
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
