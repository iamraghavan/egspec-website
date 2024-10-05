@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Adminstrative Organization' ])



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


            <div class="semister-fee__content mt-5">
                <h5 class="rts-section-title">Decentralization in working and grievance redressal mechanism</h5>

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
                                        <td>1</td>
                                        <td>Academic Affairs</td>
                                        <td>Dr. V. Mohan, Director (Academics)</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Admission, DOTE</td>
                                        <td>Prof. G. Hari Nariyanan (Mech)</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AU Affiliation & AICTE Approval</td>
                                        <td>Dr. M. Chinnadurai (CSE)</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>ISO MR</td>
                                        <td>Dr. R. Karthi (MBA)</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>NBA Accreditation & QIC Nodal Centre</td>
                                        <td>Dr. M. Chinnadurai (CSE)</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Library Advisory Committee</td>
                                        <td>Dr. B. Shanmugam (Lib)</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Disciplinary Committee</td>
                                        <td>Prof. A. Rajesh (CSBS) / Prof. V.R. Sugumaran</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Students Grievance Redressal</td>
                                        <td>Dr. S. Ponsadai Lakshmi (S&H)</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>R&D</td>
                                        <td>Dr. S. Ramabalan (Principal)</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Exam Cell</td>
                                        <td>Dr. B. Shanmugam (Lib)</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Press & Stationary Store</td>
                                        <td>Dr. M. Chinnadurai (CSE)</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Events Manager</td>
                                        <td>Mr. V. Gokulakrishanan</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Public Relations & Media Coordination</td>
                                        <td>Dr. P. Anandraj (CSBS)</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Intercom/P.A. Systems/Projectors/OHPs</td>
                                        <td>Mr. R. Ayyapa (ECE)</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Domain Mail</td>
                                        <td>Dr. S.Palani Murugan (AIDS)</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Estate / Building Maintenance / Landscaping</td>
                                        <td>Mr. V. Senthilkumar</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Website & Web Application</td>
                                        <td>Dr. S. Praveen Kumar (CSE) & Mr. J.S Raghavan</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Transport Facilities</td>
                                        <td>Mr. K. Venkatesh</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>ISTE Staff & Student Chapters</td>
                                        <td>Dr. S. Senthilkumar (ECE)</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>IEEE Student’s Chapter</td>
                                        <td>Prof. K. Gokulraj (EEE)</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>CSI Student’s Chapter</td>
                                        <td>Dr. K. Balasubramanian (CSE)</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>ICTACT Coordinator</td>
                                        <td>Dr. S. Chandrasekar (CEO)</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>IETE Student’s Chapter</td>
                                        <td>Dr. D. Devarajan (ECE)</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>IE Student’s Chapter</td>
                                        <td>Dr. G. Sundaravadivel (Mech)</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Renewable Energy Club</td>
                                        <td>Dr. P.J. Suresh Babu (EEE)</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Grievance & Redressal Cell</td>
                                        <td>Dr. S. Ponsadai Lakshmi (S&H)</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Programmers Paradise Club</td>
                                        <td>Prof J. Noorul Ameen (CSE)</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Designers Domain Club</td>
                                        <td>Prof G. Arulselvan (CSE)</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Ladies Hostel Deputy Warden</td>
                                        <td>Ms. Sharmila Banu</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Gents Hostel Deputy Warden</td>
                                        <td>Mr. K. Kalaiselvan</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>EDC</td>
                                        <td>Prof. S. Selvaganapathy (MCA)</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>Training & Placement Cell</td>
                                        <td>Dr. S. Chendrasekar (CEO)</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>Alumni Association</td>
                                        <td>Dr. V. Sivaramakrishan (MECH)</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>Sports/Athletics</td>
                                        <td>Mr. D. Velavan (PED)</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>NSS Programme</td>
                                        <td>Prof. V. Sivaramakrishnan (Mech)</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Youth Red Cross Society</td>
                                        <td>Prof. Naveen Antony (EEE)</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Citizen Consumer Club</td>
                                        <td>Dr. V. Sivaramakrishnan (Mech)</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Red Ribbon Club</td>
                                        <td>Dr. V. Sivaramakrishnan (Mech)</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>Women Empowerment Cell</td>
                                        <td>Dr. A.R. Deepa (S&H)</td>
                                    </tr>
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

