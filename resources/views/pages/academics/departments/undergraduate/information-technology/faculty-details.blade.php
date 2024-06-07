@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Information Technology',
'page_title' => 'Faculty Details' ])





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
                                 <td>S.No</td>
                                 <td>Name of the Faculty Member</td>
                                 <td>Designation</td>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Dr. MANIKANDAN S</td>
                                    <td>Associate Professor &amp; HoD</td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Dr. VIJAYALAKSHMI P</td>
                                    <td>Professor</td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Dr. MANIKANDA KUMARAN K</td>
                                    <td>Associate Professor</td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Dr. AMBIKA S</td>
                                    <td>Associate Professor</td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Dr. RAJU K</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>Dr. LAVANYA R</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>7</td>
                                    <td>Ms. NAGALAKSHMI K</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>8</td>
                                    <td>Ms. GOKILA R G</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>9</td>
                                    <td>Ms. PREETHI S</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>10</td>
                                    <td>Mr. VIGNESH K</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>11</td>
                                    <td>Ms. SURYA V</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>12</td>
                                    <td>Ms. VIJAYAVANI E</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>13</td>
                                    <td>Ms. SRILEKHA K</td>
                                    <td>Assistant Professor</td>
                                 </tr>
                                 <tr>
                                    <td>14</td>
                                    <td>Mr. PRADEEPAN S</td>
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
                                <td>S.No</td>
                                <td>Name of the Faculty Member</td>
                                <td>Designation</td>
                                </tr>
                             </thead>
                             <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mr.P.Muthunayakam</td>
                                    <td>Lab Assistant</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ms.Anees Fathima</td>
                                    <td>Administrative Assistant</td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                    </div>
                 </div>

               </div>

               <x-accordion-links :links="[

                'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform?usp=sf_link',
                'Students Feedback' => 'https://docs.google.com/forms/d/e/1FAIpQLSdhWwmjf965CW6NkNSVwzZ41IlceBgTRAAaaxswqQb2p6WW-Q/viewform?usp=sf_link',
                'Grievances' => 'https://docs.google.com/forms/d/e/1FAIpQLScQ3xc3O8iAswJs9MChu5Kd_nunV5wBmS7a6T0YKEPA8NnS3w/viewform?usp=sf_link',
                'Employer Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSd_lJlYkKDrivGp9rYsqyLVcmWV-2F86-VaclLOiIhHvPyAQQ/viewform?usp=sf_link',
                'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform?usp=sf_link',
                'Department Forms' => 'https://sites.google.com/site/profmaniit/department?authuser=0'

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
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                           <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                           <li><a href="{{url('/academics/departments/undergraduate/information-technology/industry-collabration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
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
                     name="Dr. S. Manikandan, M.E., Ph.D"
                     :phones="['+919047902685', '+919500707894']"
                     :emails="['manikandan@egspec.org', 'profmaninvp@gmail.com']"
                     />
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
