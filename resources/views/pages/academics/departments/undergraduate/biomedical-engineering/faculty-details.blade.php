@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Biomedical Engineering',
'page_title' => 'HOD’s Desk' ])




<div class="rts-program rts-section-padding">
    <div class="container">
       <div class="rts-program-description">
          <div class="row">
             <div class="col-lg-8">
                <div class="admission-content-top">
                   <div class="application-deadline">
                      <h5 class="rts-section-title animated fadeIn">Faculty</h5>
                      <div class="application-deadline__content mt-5">
                         <div class="application-deadline__content--table">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-theme">
                                    <tr>
                                        <td>S.No</td>
                                        <td>Name of the Faculty Member</td>
                                        <td>Designation</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. A. SUNDAR RAJ</td>
                                        <td>Professor and Head</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. S. CHITRA</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. R. VENKATESAN</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mr. S. JIM HAWKINSON</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Mr. K. KALANITHI</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Mrs. K. ROSHINI</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mr. N. VIKRAMAN</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Mrs. K. RAMYA</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Mrs. G. KIRUTHIGA</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Mrs. S. SASIPPRIYA</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Mrs. E. SRITHALADEVI</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Ms. LOUIS ANITHA</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                </tbody>
                            </table>

                         </div>
                      </div>
                   </div>



                   <div class="application-deadline">
                     <h5 class="rts-section-title animated fadeIn">(Faculty Members Details)-Non-Teaching Staffs</h5>
                     <div class="application-deadline__content mt-5">
                        <div class="application-deadline__content--table">
                           <table class="table table-striped table-hover table-bordered">
                              <thead class="table-theme">
                                <tr>
                                    <td>S.No</td>
                                    <td>Name of the Staff Member</td>
                                    <td>Qualification</td>
                                    <td>Designation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ms. M. TAMIZHARASI</td>
                                    <td>B.E (ECE)</td>
                                    <td>Lab Assistant</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mrs. G. VAITHEGI</td>
                                    <td>DEIC</td>
                                    <td>Lab Assistant</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mrs. R. SATHIALAKSHMI</td>
                                    <td>DEIC</td>
                                    <td>Lab Assistant</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mr. S. RAGUL</td>
                                    <td>B.E (BME)</td>
                                    <td>Lab Assistant</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mrs. M. AZISUN BARAKATH</td>
                                    <td>BCA</td>
                                    <td>Office Assistant</td>
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
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                            <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                            <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/information-technology/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
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
