@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Information Technology',
'page_title' => 'Infrastructure' ])


<style>

.single-info > p {

    color: #fff !important;

}

.single-info > ul >li {

    color: #fff !important;

}

</style>


<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">

                <div class="page-content-top semister-fee pb--120 pb__md--80">
                    <div class="container">
                        <div class="row">
                            <div class="semister-fee__content">
                                <h5 class="rts-section-title">Computing Center - 3</h5>

                                <!-- tab item -->
                                <div class="rts-fee-chart">
                                    <div class="rts-fee-chart__tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab" data-bs-target="#undergrade-1" type="button" role="tab" aria-controls="undergrade-1" aria-selected="true">Open Source Lab </button>
                                                <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-2" type="button" role="tab" aria-controls="grade-tution-2" aria-selected="false">Networks Lab</button>
                                                <button class="nav-link" id="grade-tution-3-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-3" type="button" role="tab" aria-controls="grade-tution-3" aria-selected="true">Data Science Lab </button>
                                                <button class="nav-link" id="grade-tution-4-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-4" type="button" role="tab" aria-controls="grade-tution-4" aria-selected="false">Programming Lab</button>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="rts-fee-chart__content" id="nav-tabContent">
                                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <!-- Open Source Lab -->
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Laboratory:</strong> Open Source Lab</p>
                                                            <p class="feature-description"><strong>No of students per setup:</strong> 33</p>
                                                            <p class="feature-description"><strong>Name of the Important equipment:</strong> Dell optiplex 3080-Intel i5 Processor, 8GB, DDR4RAM, 1 UTBHDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</p>
                                                            <p class="feature-description"><strong>Weekly utilization status:</strong></p>
                                                            <ul>
                                                                <li>1702IT404 & 1902IT453 - Operating Systems Lab - 4hrs</li>
                                                                <li>1702IT753 & 1902IT701 - Cloud Computing Lab - 4hrs</li>
                                                                <li>1702IT651 & 1902IT651 - Mobile Application Development – 6hrs</li>
                                                            </ul>
                                                            <p class="feature-description"><strong>Name of the technical staff:</strong> Mr.P.Muthunayakam</p>
                                                            <p class="feature-description"><strong>Designation:</strong> Technical Assistant</p>
                                                            <p class="feature-description"><strong>Qualification:</strong> DIT</p>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="grade-tution-2" role="tabpanel" aria-labelledby="grade-tution-2-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <!-- Networks Lab -->
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Laboratory:</strong> Networks Lab</p>
                                                            <p class="feature-description"><strong>No of students per setup:</strong> 33</p>
                                                            <p class="feature-description"><strong>Name of the Important equipment:</strong> Dell optiplex 3080-Intel i5 Processor, 8GB, DDR4RAM, 1 UTBHDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</p>
                                                            <p class="feature-description"><strong>Weekly utilization status:</strong></p>
                                                            <ul>
                                                                <li>1702IT451 & 1902IT451 - Networks Lab - 4hrs</li>
                                                                <li>1702IT402 & 1902IT452 - Java Lab - 4hrs</li>
                                                                <li>1702IT403 & 1902IT504 - IoT - 4hrs</li>
                                                                <li>Total Hours: 12hrs</li>
                                                            </ul>
                                                            <p class="feature-description"><strong>Name of the technical staff:</strong> Mr.P.Muthunayakam</p>
                                                            <p class="feature-description"><strong>Designation:</strong> Technical Assistant</p>
                                                            <p class="feature-description"><strong>Qualification:</strong> DIT</p>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="grade-tution-3" role="tabpanel" aria-labelledby="grade-tution-3-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                     <!-- Data Science Lab -->
                                                     <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Laboratory:</strong> Data Science Lab</p>
                                                            <p class="feature-description"><strong>No of students per setup:</strong> 33</p>
                                                            <p class="feature-description"><strong>Name of the Important equipment:</strong> Dell optiplex 3080-Intel i5 Processor, 8GB, DDR4RAM, 1 UTBHDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</p>
                                                            <p class="feature-description"><strong>Weekly utilization status:</strong></p>
                                                            <ul>
                                                                <li>17CSX52 & 1902IT451 - DBMS Lab – 4hrs</li>
                                                                <li>1702IT603 & 1902IT651 - Data Mining – 4hrs</li>
                                                                <li>1702IT401 - Data Analytics - 4hrs</li>
                                                                <li>Total Hours: 12hrs</li>
                                                            </ul>
                                                            <p class="feature-description"><strong>Name of the technical staff:</strong> Mr.R.Balaji</p>
                                                            <p class="feature-description"><strong>Designation:</strong> Technical Assistant</p>
                                                            <p class="feature-description"><strong>Qualification:</strong> M.Sc</p>
                                                        </div>
                                                    </div>






                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="grade-tution-4" role="tabpanel" aria-labelledby="grade-tution-4-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                     <!-- Programming Lab -->
                                                     <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Laboratory:</strong> Programming Lab</p>
                                                            <p class="feature-description"><strong>No of students per setup:</strong> 33</p>
                                                            <p class="feature-description"><strong>Name of the Important equipment:</strong> Dell optiplex 3080-Intel i5 Processor, 8GB, DDR4RAM, 1 UTBHDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</p>
                                                            <p class="feature-description"><strong>Weekly utilization status:</strong></p>
                                                            <ul>
                                                                <li>1702IT301 & 1902IT351 - Data Structure and Algorithms Lab - 4hrs</li>
                                                                <li>1902IT352 - Python Programming Lab – 4hrs</li>
                                                                <li>1702IT504 & 1902IT502 - Web Programming Lab – 4hrs</li>
                                                                <li>1702IT551 & 1902IT551 - CASE Tools – 6hrs</li>
                                                                <li>Total Hours: 18hrs</li>
                                                            </ul>
                                                            <p class="feature-description"><strong>Name of the technical staff:</strong> Mr.R.Balaji</p>
                                                            <p class="feature-description"><strong>Designation:</strong> Technical Assistant</p>
                                                            <p class="feature-description"><strong>Qualification:</strong> M.Sc</p>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="semister-fee__content mt-5">
                                <h5 class="rts-section-title">Additional facilities created for improving the quality of learning experience in laboratories</h5>

                                <!-- tab item -->
                                <div class="rts-fee-chart">
                                    <div class="rts-fee-chart__tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="undergrade-11-tab" data-bs-toggle="tab" data-bs-target="#undergrade-11" type="button" role="tab" aria-controls="undergrade-11" aria-selected="true">Open Source Lab</button>
                                                <button class="nav-link" id="grade-tution-12-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-12" type="button" role="tab" aria-controls="grade-tution-12" aria-selected="false">Intranet File Sharing</button>
                                                <button class="nav-link" id="grade-tution-13-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-13" type="button" role="tab" aria-controls="grade-tution-13" aria-selected="false">Oracle Academy</button>
                                                <button class="nav-link" id="grade-tution-14-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-14" type="button" role="tab" aria-controls="grade-tution-14" aria-selected="false">VMWare IT Academy</button>
                                                <button class="nav-link" id="grade-tution-5-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-5" type="button" role="tab" aria-controls="grade-tution-5" aria-selected="false">Palo Alto</button>
                                                <button class="nav-link" id="grade-tution-6-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-6" type="button" role="tab" aria-controls="grade-tution-6" aria-selected="false">Dell EMC Data Analytics</button>
                                                <button class="nav-link" id="grade-tution-7-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-7" type="button" role="tab" aria-controls="grade-tution-7" aria-selected="false">Amazon Web Services</button>
                                                <button class="nav-link" id="grade-tution-8-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-8" type="button" role="tab" aria-controls="grade-tution-8" aria-selected="false">Mobile App Lab</button>
                                                <button class="nav-link" id="grade-tution-9-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-9" type="button" role="tab" aria-controls="grade-tution-9" aria-selected="false">Redhat Academy</button>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="rts-fee-chart__content" id="nav-tabContent">
                                        <!-- Open Source Lab -->
                                        <div class="tab-pane fade active show" id="undergrade-11" role="tabpanel" aria-labelledby="undergrade-11-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Laboratory:</strong> Open Source Lab</p>
                                                            <p class="feature-description"><strong>No of students per setup:</strong> 33</p>
                                                            <p class="feature-description"><strong>Name of the Important equipment:</strong> Dell optiplex 3080-Intel i5 Processor, 8GB, DDR4RAM, 1 UTBHDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</p>
                                                            <p class="feature-description"><strong>Weekly utilization status:</strong></p>
                                                            <ul>
                                                                <li>1702IT404 & 1902IT453 - Operating Systems Lab - 4hrs</li>
                                                                <li>1702IT753 & 1902IT701 - Cloud Computing Lab - 4hrs</li>
                                                                <li>1702IT651 & 1902IT651 - Mobile Application Development – 6hrs</li>
                                                            </ul>
                                                            <p class="feature-description"><strong>Name of the technical staff:</strong> Mr.P.Muthunayakam</p>
                                                            <p class="feature-description"><strong>Designation:</strong> Technical Assistant</p>
                                                            <p class="feature-description"><strong>Qualification:</strong> DIT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Intranet File Sharing -->
                                        <div class="tab-pane fade" id="grade-tution-12" role="tabpanel" aria-labelledby="grade-tution-12-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> Intranet File Sharing</p>
                                                            <p class="feature-description"><strong>Details:</strong> Intranet File sharing</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> Sharing materials, lab manuals, documents etc via Intranet</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Networking Case Study</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO6, PO8 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Oracle Academy -->
                                        <div class="tab-pane fade" id="grade-tution-13" role="tabpanel" aria-labelledby="grade-tution-13-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> Oracle Academy</p>
                                                            <p class="feature-description"><strong>Details:</strong> Java, PL/SQL</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> Oracle iLearning Platforms</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students training and certification</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Self-Learning</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO6, PO8, PO12 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- VMWare IT Academy -->
                                        <div class="tab-pane fade" id="grade-tution-14" role="tabpanel" aria-labelledby="grade-tution-14-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> VMWare IT Academy</p>
                                                            <p class="feature-description"><strong>Details:</strong> Cloud Computing, Data Centre Virtualization</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> VMWare Platform for developing and simulating cloud and virtualization environments</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students for Laboratory Experiments, Projects, Simulation</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Working Environment</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO8, PO9, PO11, PO12 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Palo Alto -->
                                        <div class="tab-pane fade" id="grade-tution-5" role="tabpanel" aria-labelledby="grade-tution-5-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> Palo Alto</p>
                                                            <p class="feature-description"><strong>Details:</strong> Cyber Security, Cryptography and Network security</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> Learning cyber forensic courses</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students training and certification</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Self-Learning</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO6, PO8, PO12 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dell EMC Data Analytics -->
                                        <div class="tab-pane fade" id="grade-tution-6" role="tabpanel" aria-labelledby="grade-tution-6-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> Dell EMC Data Analytics</p>
                                                            <p class="feature-description"><strong>Details:</strong> Big Data Analytics</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> Online Platform for developing and simulating Big Data environments</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students for Laboratory Experiments, Projects, Simulation</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Working Environment</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO8, PO9, PO11, PO12 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Amazon Web Services -->
                                        <div class="tab-pane fade" id="grade-tution-7" role="tabpanel" aria-labelledby="grade-tution-7-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> Amazon Web Services</p>
                                                            <p class="feature-description"><strong>Details:</strong> Cloud Platform for developing and deploying applications</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> AWS Academy</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students for Cloud based projects</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Self Learning</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO6, PO8, PO12 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Mobile App Lab -->
                                        <div class="tab-pane fade" id="grade-tution-8" role="tabpanel" aria-labelledby="grade-tution-8-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Laboratory:</strong> Mobile App Lab</p>
                                                            <p class="feature-description"><strong>No of students per setup:</strong> 33</p>
                                                            <p class="feature-description"><strong>Name of the Important equipment:</strong> Dell optiplex 3080-Intel i5 Processor, 8GB, DDR4RAM, 1 UTBHDD, 19” LED Monitor, USB Keyboard and Mouse, D-link 24 port switch, 120 column TVS dot matrix printer.</p>
                                                            <p class="feature-description"><strong>Weekly utilization status:</strong></p>
                                                            <ul>
                                                                <li>1702IT404 & 1902IT453 - Operating Systems Lab - 4hrs</li>
                                                                <li>1702IT753 & 1902IT701 - Cloud Computing Lab - 4hrs</li>
                                                                <li>1702IT651 & 1902IT651 - Mobile Application Development – 6hrs</li>
                                                            </ul>
                                                            <p class="feature-description"><strong>Name of the technical staff:</strong> Mr.P.Muthunayakam</p>
                                                            <p class="feature-description"><strong>Designation:</strong> Technical Assistant</p>
                                                            <p class="feature-description"><strong>Qualification:</strong> DIT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Redhat Academy -->
                                        <div class="tab-pane fade" id="grade-tution-9" role="tabpanel" aria-labelledby="grade-tution-9-tab">
                                            <div class="event-details">
                                                <div class="event-details__content">
                                                    <div class="event-details__content--feature">
                                                        <div class="single-feature">
                                                            <p class="feature-heading"><strong>Name of the Facility:</strong> Redhat Academy</p>
                                                            <p class="feature-description"><strong>Details:</strong> Open Source Lab</p>
                                                            <p class="feature-description"><strong>Reason(s) for creating facility:</strong> Training the students with Open Source technologies</p>
                                                            <p class="feature-description"><strong>Utilization:</strong> Staff and Students training and certification</p>
                                                            <p class="feature-description"><strong>Areas in which students are expected to have enhanced learning:</strong> Self Learning</p>
                                                            <p class="feature-description"><strong>Relevance to POs/PSOs:</strong> PO5, PO6, PO8, PO12 / PSO1,2,3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
                           <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
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
                     name="Dr. G. Arul Selvan"
                     :phones="['+91 88706 41821']"
                     :emails="['hodit@egspec.org']"
                     />
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
