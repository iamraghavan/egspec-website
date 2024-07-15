@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Master\'s of Computer Applications',
'page_title' => 'Research and Publications' ])
<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">
               <div class="program-description-area">
                  <div class="program-credit-area">
                     <h3 class="rts-section-title animated fadeIn" >Research &amp; Publications</h3>
                     <div class="program-accordion my-5">
                        <div class="accordion" id="rts-accordion">
                           <div class="accordion-item">
                              <div>
                                 <div class="accordion-body-content">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td><a href="@blob('academics/departments/postgraduate/master-of-computer-applications/research-publications/r-d-consultancy-2019-2022.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'> R&D / Consultancy 2019-2022 </a></td>
                                             <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iframe-div">
                  <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('academics/departments/postgraduate/master-of-computer-applications/research-publications/r-d-consultancy-2019-2022.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                     height: 100rem !important;
                     "></iframe>
               </div>
               <div class="page-content-top semister-fee">
                  <div class="semister-fee__content mt-5">
                     <h5 class="rts-section-title">List of Consultancy Projects Undertaken</h5>
                     <!-- tab item -->
                     <div class="rts-fee-chart">
                        <div class="rts-fee-chart__tab">
                           <nav>
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <button class="nav-link active" id="year-2014-2015-tab" data-bs-toggle="tab" data-bs-target="#year-2014-2015" type="button" role="tab" aria-controls="year-2014-2015" aria-selected="true">2014-2015</button>
                                 <button class="nav-link" id="year-2013-2014-tab" data-bs-toggle="tab" data-bs-target="#year-2013-2014" type="button" role="tab" aria-controls="year-2013-2014" aria-selected="false">2013-2014</button>
                                 <button class="nav-link" id="year-2012-2013-tab" data-bs-toggle="tab" data-bs-target="#year-2012-2013" type="button" role="tab" aria-controls="year-2012-2013" aria-selected="false">2012-2013</button>
                              </div>
                           </nav>
                        </div>
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                           <div class="tab-pane fade active show" id="year-2014-2015" role="tabpanel" aria-labelledby="year-2014-2015-tab">
                              <table class="table">
                                 <thead class="table-theme">
                                    <tr>
                                       <th>S.No</th>
                                       <th>Name of the Project</th>
                                       <th>Staff Name</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Travel Management System</td>
                                       <td>Mrs.J.Vanitha, Ms.K.LakshmiPriya</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>College Transport System</td>
                                       <td>Mrs.S.Visalatchy, Mr.S.Selvaganapathy</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>Electrical Shop Management</td>
                                       <td>Mrs.C.Mallika, Mrs.A.Hema</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>Vinayaka Textiles Management</td>
                                       <td>Ms.N.Ilakkiya</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>Information distributed in dynamic message service</td>
                                       <td>Mrs.J.Vanitha, Mrs.S.Visalatchy, Ms.K.LakshmiPriya</td>
                                    </tr>
                                    <tr>
                                       <td>6</td>
                                       <td>Intra Mailing System</td>
                                       <td>Mrs.C.Mallika, Mrs.A.Hema, Mr.S.Selvaganapathy, Ms.N.Ilakkiya</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="tab-pane fade" id="year-2013-2014" role="tabpanel" aria-labelledby="year-2013-2014-tab">
                              <table class="table">
                                 <thead class="table-theme">
                                    <tr>
                                       <th>S.No</th>
                                       <th>Name of the Project</th>
                                       <th>Staff Name</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Students Attendance Management System</td>
                                       <td>Mrs.J.Vanitha, Ms.K.LakshmiPriya</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>School Management System</td>
                                       <td>Mrs.S.Visalatchy, Mr.S.Selvaganapathy</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>Ticket Reservation System</td>
                                       <td>Mrs.C.Mallika, Mrs.A.Hema</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>Application for Diagnostic Centre</td>
                                       <td>Mrs.J.Vanitha, Mrs.S.Visalatchy, Mr.S.Selvaganapathy</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="tab-pane fade" id="year-2012-2013" role="tabpanel" aria-labelledby="year-2012-2013-tab">
                              <table class="table">
                                 <thead class="table-theme">
                                    <tr>
                                       <th>S.No</th>
                                       <th>Name of the Project</th>
                                       <th>Staff Name</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>SMS alert for Employee Attendance</td>
                                       <td>Mrs.J.Vanitha, Ms.K.LakshmiPriya</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Online Application for Social welfare Association</td>
                                       <td>Mrs.S.Visalatchy, Mr.S.Selvaganapathy</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>Managing the marriage hall reservation and accounting system with online facility</td>
                                       <td>Mrs.C.Mallika, Mrs.A.Hema</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>Secure mining of association rule in horizontally distributed database for Electricity department</td>
                                       <td>Mrs.J.Vanitha, Mrs.A.Hema, Ms.K.LakshmiPriya</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>LAN-Video Stream</td>
                                       <td>Mrs.C.Mallika, Mrs.S.Visalatchy, Mr.S.Selvaganapathy</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
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
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                           <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/industry-collabration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/laboratories-and-facilities') }}"><span><i class="fa-light fa-arrow-right"></i></span>Laboratories and Facilities</a></li>
                           <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                           <li><a href="{{ url('/academics/departments/postgraduate/master-of-computer-applications/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- contact info -->
                  <x-dept-contact-info
                     name="Dr. J. Vanitha"
                     :phones="['+919443728519']"
                     :emails="['vanitha@egspec.org']"/>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
