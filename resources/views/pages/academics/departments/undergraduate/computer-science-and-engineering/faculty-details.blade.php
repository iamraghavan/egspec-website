@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Computer Science and Engineering',
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
                                    <td>Dr. Chinnadurai M</td>
                                    <td>Professor</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Ganesan T</td>
                                    <td>Professor &amp; Head</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Murali N</td>
                                    <td>Professor</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Balasubramanian K</td>
                                    <td>Associate Professor</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ms. Sowkarthika T</td>
                                    <td>Assistant Professor</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mr. ArulSelvan G</td>
                                    <td>Assistant Professor</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mr. Baskar A</td>
                                    <td>Assistant Professor</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Dr. Praveen Kumar S</td>
                                    <td>Assistant Professor</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Mr. NoorulAmeen J</td>
                                    <td>Assistant Professor</td>
                                </tr>
                                <tr>
                            <td>10</td>
                            <td>Dr. Rajakumaran M</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Ms. Vennila P</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Ms. Pradeepa K</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Ms. Ranjani B</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Ms. Priyadharshini M</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Ms. Bakya G</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Ms. Subashri P</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Ms. Praveena S</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Ms. Rajammal K</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Ms. Rama G</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Ms. Swathi P</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Mr. Kannan N</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Ms. Saranya E</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Dr. Emmanuel Peo Mariadas A</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Dr. Subashree S</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Mr. Sugumaran V R</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Ms. Bavani S</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Ms. Preethi K</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Ms. Anjali K P</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Mr. Kamaraj C</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Ms. Yasotha R</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Ms. Loganayaki B</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Ms. Saranya S</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Ms. Nivedha K</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Mr. Saravanan R</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <!-- Add more faculty members here -->




                            </tbody>
                           </table>
                        </div>
                     </div>
                  </div>





               </div>


               <x-accordion-links :links="[
                'Alumni Survey' => 'https://docs.google.com/forms/d/e/1FAIpQLSfLvoekGAfIMRKnuGyIRTsa-etkQLrESHN7xLEA1HmQ9e9G-Q/viewform',
                'Graduate Exit Survey' => 'https://forms.gle/nPnWvETD5r7ujxdz9',
                'Employer Survey' => 'https://drive.google.com/open?id=1HEiaH5PgHxLyVgnH7FSEORGARxRvA2iv2FL8gBpnU8Q',
                'Student Certificate Submission' => 'https://docs.google.com/forms/d/e/1FAIpQLSdN-uCdn1UesdQ72g8TWAqsJ9Jj2sW9ZDIBUqSxSX8NOUzL3A/viewform',

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
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/computer-science-and-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- contact info -->
                    <x-dept-contact-info
                        name="Dr. T. Ganesan"
                        :phones="['+91 99407 42877']"
                        :emails="['Ganesan21@gmail.com']"
                    />
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
