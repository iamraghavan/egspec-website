@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Adminstrative Organization' ])

<style>
    .semister-fee .rts-fee-chart__content .table tbody tr td{
        text-align: left;
    }
</style>

<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university pt--100 pb--80">

<div class="page-content-top semister-fee">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Governing Council</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                   <tr>
                                      <td>S.No</td>
                                      <td>Name of the Member</td>
                                      <td>Designation</td>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td>1.</td>
                                      <td>Mrs. Jothimani G.S. Pillay</td>
                                      <td>Chairman</td>
                                   </tr>
                                   <tr>
                                      <td>2.</td>
                                      <td>Shri. S. Senthil Kumar, B.Sc.,</td>
                                      <td>Secretary</td>
                                   </tr>
                                   <tr>
                                      <td>3.</td>
                                      <td>Shri. S. Arulprakasam</td>
                                      <td>Member – Trust</td>
                                   </tr>
                                   <tr>
                                      <td>4.</td>
                                      <td>Shri. S. Govindasamy</td>
                                      <td>Member – Trust</td>
                                   </tr>
                                   <tr>
                                      <td>5.</td>
                                      <td>Shri. S. Paramesvaran</td>
                                      <td>Member – Trust</td>
                                   </tr>
                                   <tr>
                                      <td>6.</td>
                                      <td>Shri. S. Sankarganesh</td>
                                      <td>Member – Trust</td>
                                   </tr>
                                   <tr>
                                      <td>7.</td>
                                      <td>Dr. K. Raghukandan, M.E.,Ph.D.,</td>
                                      <td>Member – Academic</td>
                                   </tr>
                                   <tr>
                                      <td>8.</td>
                                      <td>Shri. Sekhar MAARG Port</td>
                                      <td>Karaikal Member - Industrialist</td>
                                   </tr>
                                   <tr>
                                      <td>9.</td>
                                      <td>Shri. S. Kumaravelu</td>
                                      <td>Member – Auditor</td>
                                   </tr>
                                   <tr>
                                      <td>10.</td>
                                      <td>Shri. G. Vijayasundaram</td>
                                      <td>Member – Legal</td>
                                   </tr>
                                   <tr>
                                      <td>11.</td>
                                      <td>Shri. V. Balamurugan</td>
                                      <td>Member – Legal</td>
                                   </tr>
                                   <tr>
                                      <td>12.</td>
                                      <td>Shri. P. Sundaravelu</td>
                                      <td>Member - Construction</td>
                                   </tr>
                                   <tr>
                                      <td>13.</td>
                                      <td>AICTE Regional Officer</td>
                                      <td>Member</td>
                                   </tr>
                                   <tr>
                                      <td>14.</td>
                                      <td>State Government Nominee</td>
                                      <td>Member</td>
                                   </tr>
                                   <tr>
                                      <td>15.</td>
                                      <td>University Nominee</td>
                                      <td>Member</td>
                                   </tr>
                                   <tr>
                                      <td>16.</td>
                                      <td>Dr. S. Ramabalan, M.E.,Ph.D.,</td>
                                      <td>Member - Secretary</td>
                                   </tr>
                                   <tr>
                                      <td>17.</td>
                                      <td>Dr. S. Krishnamohan, M.E.,Ph.D.</td>
                                      <td>Member - Faculty</td>
                                   </tr>
                                   <tr>
                                      <td>18.</td>
                                      <td>Prof.Dr. M. Chinnadurai, M.E.,Ph.D.,</td>
                                      <td>Member - Faculty</td>
                                   </tr>
                                </tbody>
                             </table>
                        </div>

                    </div>
                </div>
            </div>

            @php
                $members = [
    [
        'designation' => 'Academic Affairs',
        'name' => 'Dr. V. Mohan, Director (Academics)',
        'phone' => '123-456-7890',
        'email' => 'mohan@example.com',
        'photo' => 'url_to_photo_mohan.jpg'
    ],
    [
        'designation' => 'Admission, DOTE',
        'name' => 'Prof. G. Hari Nariyanan (Mech)',
        'phone' => '123-456-7891',
        'email' => 'hari@example.com',
        'photo' => 'url_to_photo_hari.jpg'
    ],
    [
        'designation' => 'AU Affiliation & AICTE Approval',
        'name' => 'Dr. M. Chinnadurai (CSE)',
        'phone' => '123-456-7892',
        'email' => 'chinnadurai@example.com',
        'photo' => 'url_to_photo_chinnadurai.jpg'
    ],
    [
        'designation' => 'ISO MR',
        'name' => 'Dr. R. Karthi (MBA)',
        'phone' => '123-456-7893',
        'email' => 'karthi@example.com',
        'photo' => 'url_to_photo_karthi.jpg'
    ],
    [
        'designation' => 'NBA Accreditation & QIC Nodal Centre',
        'name' => 'Dr. M. Chinnadurai (CSE)',
        'phone' => '123-456-7894',
        'email' => 'chinnadurai2@example.com',
        'photo' => 'url_to_photo_chinnadurai2.jpg'
    ],
    [
        'designation' => 'Library Advisory Committee',
        'name' => 'Dr. B. Shanmugam (Lib)',
        'phone' => '123-456-7895',
        'email' => 'shanmugam@example.com',
        'photo' => 'url_to_photo_shanmugam.jpg'
    ],
    [
        'designation' => 'Disciplinary Committee',
        'name' => 'Prof. A. Rajesh (CSBS) / Prof. V.R. Sugumaran',
        'phone' => '123-456-7896',
        'email' => 'rajesh@example.com',
        'photo' => 'url_to_photo_rajesh.jpg'
    ],
    [
        'designation' => 'Students Grievance Redressal',
        'name' => 'Dr. S. Ponsadai Lakshmi (S&H)',
        'phone' => '123-456-7897',
        'email' => 'ponsadai@example.com',
        'photo' => 'url_to_photo_ponsadai.jpg'
    ],
    [
        'designation' => 'R&D',
        'name' => 'Dr. S. Ramabalan (Principal)',
        'phone' => '123-456-7898',
        'email' => 'ramabalan@example.com',
        'photo' => 'url_to_photo_ramabalan.jpg'
    ],
    [
        'designation' => 'Exam Cell',
        'name' => 'Dr. B. Shanmugam (Lib)',
        'phone' => '123-456-7899',
        'email' => 'shanmugam2@example.com',
        'photo' => 'url_to_photo_shanmugam2.jpg'
    ],
    [
        'designation' => 'Press & Stationary Store',
        'name' => 'Dr. M. Chinnadurai (CSE)',
        'phone' => '123-456-7900',
        'email' => 'chinnadurai3@example.com',
        'photo' => 'url_to_photo_chinnadurai3.jpg'
    ],
    [
        'designation' => 'Events Manager',
        'name' => 'Mr. V. Gokulakrishanan',
        'phone' => '123-456-7901',
        'email' => 'gokul@example.com',
        'photo' => 'url_to_photo_gokul.jpg'
    ],
    [
        'designation' => 'Public Relations & Media Coordination',
        'name' => 'Dr. P. Anandraj (CSBS)',
        'phone' => '123-456-7902',
        'email' => 'anandraj@example.com',
        'photo' => 'url_to_photo_anandraj.jpg'
    ],
    [
        'designation' => 'Maintenance Division',
        'name' => 'Mr. R. Ayyappan (ECE)',
        'phone' => '123-456-7903',
        'email' => 'ayyappan@example.com',
        'photo' => 'url_to_photo_ayyappan.jpg'
    ],
    [
        'designation' => 'Domain Mail',
        'name' => 'Dr. S. Palani Murugan (AIDS)',
        'phone' => '123-456-7904',
        'email' => 'palani@example.com',
        'photo' => 'url_to_photo_palani.jpg'
    ],
    [
        'designation' => 'Estate / Landscaping Maintenance',
        'name' => 'Mr. V. Senthilkumar',
        'phone' => '123-456-7905',
        'email' => 'senthilkumar@example.com',
        'photo' => 'url_to_photo_senthilkumar.jpg'
    ],
    [
        'designation' => 'Website & Web Application',
        'name' => 'Dr. S. Praveen Kumar (CSE) & Mr. J.S Raghavan',
        'phone' => '80988 99666',
        'email' => 'web@egspec.org',
        'photo' => 'https://firebasestorage.googleapis.com/v0/b/egsppc-ac-in.appspot.com/o/dr_s_praveen_kumar.webp?alt=media&token=562bcc59-d888-41ba-8921-c531c05dc90e'
    ],
    [
        'designation' => 'System Administrator',
        'name' => 'M. Mayakannan',
        'phone' => '123-456-7929',
        'email' => 'mayakannan@example.com',
        'photo' => 'url_to_photo_mayakannan.jpg'
    ],
    [
        'designation' => 'ERP Co-ordinator',
        'name' => 'A. Amsaram',
        'phone' => '97919 97191',
        'email' => 'amsaram@example.com',
        'photo' => 'https://firebasestorage.googleapis.com/v0/b/egsppc-ac-in.appspot.com/o/a_amsaram.webp?alt=media&token=ea6b7330-22e1-4a42-90ed-08076e4a1992'
    ],
    [
        'designation' => 'Transport Facilities',
        'name' => 'Mr. K. Venkatesh',
        'phone' => '123-456-7907',
        'email' => 'venkatesh@example.com',
        'photo' => 'url_to_photo_venkatesh.jpg'
    ],
    [
        'designation' => 'ISTE Staff & Student Chapters',
        'name' => 'Dr. S. Senthilkumar (ECE)',
        'phone' => '123-456-7908',
        'email' => 'senthilkumar2@example.com',
        'photo' => 'url_to_photo_senthilkumar2.jpg'
    ],
    [
        'designation' => 'IEEE Student’s Chapter',
        'name' => 'Prof. K. Gokulraj (EEE)',
        'phone' => '123-456-7909',
        'email' => 'gokulraj@example.com',
        'photo' => 'url_to_photo_gokulraj.jpg'
    ],
    [
        'designation' => 'CSI Student’s Chapter',
        'name' => 'Dr. K. Balasubramanian (CSE)',
        'phone' => '123-456-7910',
        'email' => 'balasubramanian@example.com',
        'photo' => 'url_to_photo_balasubramanian.jpg'
    ],
    [
        'designation' => 'ICTACT Coordinator',
        'name' => 'Dr. S. Chandrasekar (CEO)',
        'phone' => '123-456-7911',
        'email' => 'chandrasekar@example.com',
        'photo' => 'url_to_photo_chandrasekar.jpg'
    ],
    [
        'designation' => 'IETE Student’s Chapter',
        'name' => 'Dr. D. Devarajan (ECE)',
        'phone' => '123-456-7912',
        'email' => 'devarajan@example.com',
        'photo' => 'url_to_photo_devarajan.jpg'
    ],
    [
        'designation' => 'IE Student’s Chapter',
        'name' => 'Dr. G. Sundaravadivel (Mech)',
        'phone' => '123-456-7913',
        'email' => 'sundaravadivel@example.com',
        'photo' => 'url_to_photo_sundaravadivel.jpg'
    ],
    [
        'designation' => 'Renewable Energy Club',
        'name' => 'Dr. P.J. Suresh Babu (EEE)',
        'phone' => '123-456-7914',
        'email' => 'sureshbabu@example.com',
        'photo' => 'url_to_photo_sureshbabu.jpg'
    ],
    [
        'designation' => 'Grievance & Redressal Cell',
        'name' => 'Dr. S. Ponsadai Lakshmi (S&H)',
        'phone' => '123-456-7915',
        'email' => 'ponsadai2@example.com',
        'photo' => 'url_to_photo_ponsadai2.jpg'
    ],
    [
        'designation' => 'Programmers Paradise Club',
        'name' => 'Prof J. Noorul Ameen (CSE)',
        'phone' => '123-456-7916',
        'email' => 'noorul@example.com',
        'photo' => 'url_to_photo_noorul.jpg'
    ],
    [
        'designation' => 'Designers Domain Club',
        'name' => 'Prof G. Arulselvan (CSE)',
        'phone' => '123-456-7917',
        'email' => 'arulselvan@example.com',
        'photo' => 'url_to_photo_arulselvan.jpg'
    ],
    [
        'designation' => 'Ladies Hostel Deputy Warden',
        'name' => 'Ms. Sharmila Banu',
        'phone' => '123-456-7918',
        'email' => 'sharmila@example.com',
        'photo' => 'url_to_photo_sharmila.jpg'
    ],
    [
        'designation' => 'Gents Hostel Deputy Warden',
        'name' => 'Mr. K. Kalaiselvan',
        'phone' => '123-456-7919',
        'email' => 'kalaiselvan@example.com',
        'photo' => 'url_to_photo_kalaiselvan.jpg'
    ],
    [
        'designation' => 'EDC',
        'name' => 'Prof. S. Selvaganapathy (MCA)',
        'phone' => '123-456-7920',
        'email' => 'selvaganapathy@example.com',
        'photo' => 'url_to_photo_selvaganapathy.jpg'
    ],
    [
        'designation' => 'Training & Placement Cell',
        'name' => 'Dr. S. Chendrasekar (CEO)',
        'phone' => '123-456-7921',
        'email' => 'chendrasekar2@example.com',
        'photo' => 'url_to_photo_chendrasekar2.jpg'
    ],
    [
        'designation' => 'Alumni Association',
        'name' => 'Dr. V. Sivaramakrishan (MECH)',
        'phone' => '123-456-7922',
        'email' => 'sivaramakrishan@example.com',
        'photo' => 'url_to_photo_sivaramakrishan.jpg'
    ],
    [
        'designation' => 'Sports/Athletics',
        'name' => 'Mr. D. Velavan (PED)',
        'phone' => '123-456-7923',
        'email' => 'velavan@example.com',
        'photo' => 'url_to_photo_velavan.jpg'
    ],
    [
        'designation' => 'NSS Programme',
        'name' => 'Prof. V. Sivaramakrishnan (Mech)',
        'phone' => '123-456-7924',
        'email' => 'sivaramakrishnan2@example.com',
        'photo' => 'url_to_photo_sivaramakrishnan2.jpg'
    ],
    [
        'designation' => 'Youth Red Cross Society',
        'name' => 'Prof. Naveen Antony (EEE)',
        'phone' => '123-456-7925',
        'email' => 'naveen@example.com',
        'photo' => 'url_to_photo_naveen.jpg'
    ],
    [
        'designation' => 'Citizen Consumer Club',
        'name' => 'Dr. V. Sivaramakrishnan (Mech)',
        'phone' => '123-456-7926',
        'email' => 'sivaramakrishnan3@example.com',
        'photo' => 'url_to_photo_sivaramakrishnan3.jpg'
    ],
    [
        'designation' => 'Red Ribbon Club',
        'name' => 'Dr. V. Sivaramakrishnan (Mech)',
        'phone' => '123-456-7927',
        'email' => 'sivaramakrishnan4@example.com',
        'photo' => 'url_to_photo_sivaramakrishnan4.jpg'
    ],
    [
        'designation' => 'Women Empowerment Cell',
        'name' => 'Dr. A.R. Deepa (S&H)',
        'phone' => '123-456-7928',
        'email' => 'deepa@example.com',
        'photo' => 'url_to_photo_deepa.jpg'
    ],

];

            @endphp

            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Decentralization in working and grievance redressal mechanism</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td>S.No</td>
                                        <td>Designation</td>
                                        <td>Name of the Member</td>
                                        <td>Photo</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sNo = 1; @endphp
                                    @foreach($members as $member)
                                    <tr>
                                        <td>{{ $sNo++ }}</td>
                                        <td>{{ $member['designation'] }}</td>
                                        <td>{{ $member['name'] }}<br>{{ $member['phone']}} | {{ $member['email']}}</td>
                                        <td style="text-align: center !important;"><img style="width: 50%" src="{{ $member['photo']}}" alt="{{ $member['name'] }}" srcset=""></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-md-12 mt-5">
                <div class="event-details">
                    <div class="event-details__content">

                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">Mechanism and Composition of Grievance redressal System</h4>

                            </div>
                        </div>
                        <div class="event-details__content--feature">
                            <!-- single feature -->
                            <div class="single-feature">
                                <p class="feature-heading">The institution has a system to register grievances from students, staff and parents. Suggestion boxes are kept in all the building’s entrance.</p>

                            </div>
                                <br>

                            <div class="single-feature">
                                <p class="feature-heading">Students and Staff members can register their grievances in GR cell. Grievances are communicated to the grievance redressal cell by the students, staff and parents through oral communications and in written forms (if necessary).</p>

                            </div>
                                <br>
                            <div class="single-feature">
                                <p class="feature-heading">For all grievances, the corrective action will be taken and communicated to the concerned as soon as possible. Gender issue related problems associated with girl students and female staff members are addressed by Internal Compliance Committee (Anti-Sexual Harassment cell).</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Internal Compliance Committee</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" >



<table class="table">
   <thead class="table-theme">
      <tr>
         <td>Convener:</td>
         <td>Coordinator:</td>
         <td>Member:</td>
         <td>Girl Student Members:</td>
         <td>Frequency of Meeting:</td>
      </tr>
   </thead>
   <tbody>
     <tr>
        <td>Prof. J. Vanitha ASP/(MCA)</td>
        <td>One faculty member from all Dept.</td>
        <td>One lady advocate</td>
        <td>Two Girl Student members</td>
        <td>Semester Once</td>
     </tr>
   </tbody>
</table>

                    </div>
                </div>
            </div>

            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Anti-Ragging & Discipline Committee</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" >


                        <table class="table">
                            <thead class="table-theme">
                               <tr>
                                  <td>Convener:</td>
                                  <td>Coordinator:</td>
                                  <td>Member:</td>
                                  <td>Frequency of Meeting:</td>
                               </tr>
                            </thead>
                            <tbody>
                              <tr>
                                 <td>Prof. S. Krishnamohan Professor/Mech</td>
                                 <td>One Faculty from each Department</td>
                                 <td>Nagore Police Inspector, Tasildar, NGO Official, Parents, 2 Students, Non teaching staff</td>
                                 <td>Semester Once</td>
                              </tr>
                            </tbody>
                         </table>

                    </div>
                </div>
            </div>


            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Prohibition of Alcoholism Cell</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" >


                        <table class="table">
                            <thead class="table-theme">
                               <tr>
                                  <td>Convener:</td>
                                  <td>Coordinator:</td>
                                  <td>Member:</td>
                                  <td>Frequency of Meeting:</td>
                               </tr>
                            </thead>
                            <tbody>
                              <tr>
                                 <td>Prof. G. Ganesan (EEE)</td>
                                 <td>One Faculty from each Department</td>
                                 <td>Parents, 2 Students, Faculty and Student Volunteers</td>
                                 <td>Semester Once</td>
                              </tr>
                            </tbody>
                         </table>

                    </div>
                </div>
            </div>


            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Library</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" >


                        <table class="table">
                            <thead class="table-theme">
                               <tr>
                                  <td>Service</td>
                                  <td>Availability</td>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                  <td>Library services</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Carpet area of library (in sqft)</td>
                                  <td>10520 sqft</td>
                               </tr>
                               <tr>
                                  <td>Reading space (in sqft)</td>
                                  <td>1800 sqft</td>
                               </tr>
                               <tr>
                                  <td>Number of seats in reading space</td>
                                  <td>150</td>
                               </tr>
                               <tr>
                                  <td>Number of users (issue book) per day</td>
                                  <td>250</td>
                               </tr>
                               <tr>
                                  <td>Number of users (reading space) per day</td>
                                  <td>200</td>
                               </tr>
                               <tr>
                                  <td>Timings</td>
                                  <td>During working day, weekend : 8.00 am to 6.00 pm</td>
                               </tr>
                               <tr>
                                  <td>Number of library staff</td>
                                  <td>06</td>
                               </tr>
                               <tr>
                                  <td>Number of library staff with degree in library</td>
                                  <td>05</td>
                               </tr>
                               <tr>
                                  <td>Bar code system availability (issue/return)</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Library services (internet/intranet)</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Library searching, indexing, news clipping</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Digital Library Services</td>
                                  <td>Yes</td>
                               </tr>
                            </tbody>
                         </table>

                    </div>
                </div>
            </div>


            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Internet</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" >


                        <table class="table">
                            <thead class="table-theme">
                               <tr>
                                  <th>Service</th>
                                  <th>Availability</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                  <td>Internet Services</td>
                                  <td>Yes, WiFi Campus</td>
                               </tr>
                               <tr>
                                  <td>Name of the Internet Provider</td>
                                  <td>Clapsy Networks - Fiber optic leased line 1:1</td>
                               </tr>
                               <tr>
                                  <td>Available bandwidth</td>
                                  <td>1Gbps</td>
                               </tr>
                               <tr>
                                  <td>Access Speed</td>
                                  <td>Very Good</td>
                               </tr>
                               <tr>
                                  <td>Availability of Internet in an Exclusive Lab</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Availability in most computing labs</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Availability in departments and other units</td>
                                  <td>Yes (Hostels, Labs, Workshops and etc.)</td>
                               </tr>
                               <tr>
                                  <td>Availability in Faculty rooms</td>
                                  <td>Yes</td>
                               </tr>
                               <tr>
                                  <td>Faculty/students</td>
                                  <td>Yes, belongs to EGSPEC</td>
                               </tr>
                               <tr>
                                  <td>Security/privacy to email/internet users</td>
                                  <td>Yes, includes SOPHOS Firewall</td>
                               </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
</section>


@include('components.cta')
@endsection

