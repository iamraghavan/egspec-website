@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Science and Humanities',
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
                            <tr>
                                <td>S. No</td>
                                <td>Name of the Faculty Member</td>
                                <td>Designation</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. Edward Anand E</td>
                                <td>Professor</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. Manoj Kumar Mishra</td>
                                <td>Associate Professor</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. Ponsadai Lakshmi S</td>
                                <td>Professor</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dr. Deepa R</td>
                                <td>Associate Professor</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. Deepa R</td>
                                <td>Associate Professor & Head</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dr. Gopi C</td>
                                <td>Professor</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dr. Vijjayasundaram V</td>
                                <td>Professor</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Dr. Moorthy N</td>
                                <td>Professor</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dr. Prabhavathi M</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dr. Kavitha T</td>
                                <td>Associate Professor</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. Kamalanathan S</td>
                                <td>Associate Professor</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. Sathish Kumar R</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Senthilarasan</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Dr. Adwin Jose P</td>
                                <td>Associate Professor</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Dr. Manju K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Dr. Tharani S</td>
                                <td>Associate Professor</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Dr. Ithaya Priya B</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Dr. Mohamed Ali P</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Dr. Sumadhy P</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Dr. Sudha V</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Dr. Stella Mary M</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Dr. Kannaki K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Dr. Mekala R</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Dr. Karthikeyan V</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Mr. John Paul V</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Mrs. Usha K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Ms. Seetha R</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Mrs. Srividhya S</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Mrs. Ananthi D</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Mrs. Bhuvana G</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Mrs. Geetha K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Mr. Dhanasekaran R</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Mrs. Malathi S</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Mrs. Santhi K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Mrs. Suganya K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Mr. Raguraman V</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Mr. Ilayaraja K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Mr. Premkumar K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Mrs. Kaviyarasi J</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Mr. Gopinath S</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Mr. Karthik G</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Mr. Gunalan M</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Mrs. Anitha V</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Mr. Sathish Kumar N</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Mr. Rakesh S</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Mrs. Shanmugapriya P</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Mr. Sathyamoorthy B</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Ms. Visalakshi C</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Mr. Prabaharan M</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Ms. Narchonai I</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Mrs. Sowmiya S</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>Ms. Saranya R</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>Mrs. Fathima Sulthan Begam M</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>Mr. Sakthivel K</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>55</td>
                                <td>Mr. Muthukumar P</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>56</td>
                                <td>Mr. Kalanithi S A</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>57</td>
                                <td>Mr. Giritharavasan D</td>
                                <td>Assistant Professor</td>
                            </tr>
                            <tr>
                                <td>58</td>
                                <td>Mr. Gunanithi M G</td>
                                <td>Assistant Professor</td>
                            </tr>
                        </tbody>
                    </table>


                    <table class="table table-striped table-hover table-bordered">
                        <thead class="table-theme">
                            <tr>
                                <td>S. No</td>
                                <td>Name of the Faculty Member</td>
                                <td>Designation</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mr. S. Vijayasankar</td>
                                <td>Non-Teaching - Physics Lab</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ms. Anjali</td>
                                <td>Non-Teaching - Chemistry Lab</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ms. Anulakshmi</td>
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
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/science-humanities')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                   <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>

                                    <li><a href="{{url('/academics/departments/science-humanities/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collabration</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>

                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/science-humanities/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
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
</div>




@include('components.cta')




@endsection
