@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Civil Engineering',
    'page_title' => 'Student Achievements'
])

<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="row">
         <!-- Main Content Column -->
         <div class="col-lg-8">
            <div class="page-content-top semister-fee">
               <div class="semister-fee__content">
                  <h5 class="rts-section-title">Student Achievements</h5>
                  <div class="rts-fee-chart">
                     <div class="rts-fee-chart__tab">
                        <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              @foreach(['2023-2024', '2022-2023', '2021-2022', '2020-2021', '2019-2020'] as $year)
                                 <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $year }}" data-bs-toggle="tab" data-bs-target="#content-{{ $year }}" type="button" role="tab" aria-controls="content-{{ $year }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $year }}</button>
                              @endforeach
                           </div>
                        </nav>
                     </div>
                     <div class="rts-fee-chart__content" id="nav-tabContent">
                        @foreach(['2023-2024', '2022-2023', '2021-2022', '2020-2021', '2019-2020'] as $year)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="content-{{ $year }}" role="tabpanel" aria-labelledby="tab-{{ $year }}">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead class="table-theme">
                                    <tr>
                                        <th>#</th>
                                        <th>Reg No</th>
                                        <th>Name</th>
                                        <th>Guide Name</th>
                                        <th>Year of Publication</th>
                                        <th>Title</th>
                                        <th>Journal Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($year == '2023-2024')
                                        <tr>
                                            <td>1</td>
                                            <td>E20CER001</td>
                                            <td>Arthi.K</td>
                                            <td>Dr.Ashwini.B</td>
                                            <td>24.04.2024</td>
                                            <td>Effect of Mechanical Properties of Concrete Using Nano Titanium Dioxide and Partial Replacement of Fly Ash in Cementitious Material</td>
                                            <td>International Journal of Research Publication and Reviews</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>E20CEL371</td>
                                            <td>Ramprasath.R</td>
                                            <td>Dr.Ashwini.B</td>
                                            <td>24.04.2024</td>
                                            <td>Effect of Mechanical Properties of Concrete using Nano Silica and Partial Replacement of Fly Ash in Cementitious Material</td>
                                            <td>International Journal of Research Publication and Reviews</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>E20CEL365</td>
                                            <td>S.Gokulanathan</td>
                                            <td>Dr.Agilandeshwari.. N.H</td>
                                            <td>2024</td>
                                            <td>Sustainable Concrete Made with seawater, Metakaolin and flyash</td>
                                            <td>Journal of Emerging Technologies and Innovative Research</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>E20CE028</td>
                                            <td>V.Harshidha</td>
                                            <td></td>
                                            <td>2024</td>
                                            <td>Sustainable Concrete Made with seawater, Metakaolin and flyash</td>
                                            <td>Journal of Emerging Technologies and Innovative Research</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>E20CEL303</td>
                                            <td>M.Arun kumar</td>
                                            <td></td>
                                            <td>2024</td>
                                            <td>Sustainable Concrete Made with seawater, Metakaolin and flyash</td>
                                            <td>Journal of Emerging Technologies and Innovative Research</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>E20CEL318</td>
                                            <td>A.BraveenKumar</td>
                                            <td></td>
                                            <td>2024</td>
                                            <td>Sustainable Concrete Made with seawater, Metakaolin and flyash</td>
                                            <td>Journal of Emerging Technologies and Innovative Research</td>
                                        </tr>
                                    @elseif($year == '2022-2023')
                                        <tr>
                                            <td>1</td>
                                            <td>E20CEL371</td>
                                            <td>Ramprasath.R</td>
                                            <td>Dr.Ashwini.B</td>
                                            <td>18.11.2022</td>
                                            <td>Study On Frp Laminates And Failures In Concrete Columns</td>
                                            <td>Journal of Emerging Technologies and Innovative Research</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>E20CEL374</td>
                                            <td>Syed Bava Fakrudeen</td>
                                            <td></td>
                                            <td>18.11.2022</td>
                                            <td>Study On Frp Laminates And Failures In Concrete Columns</td>
                                            <td>Journal of Emerging Technologies and Innovative Research</td>
                                        </tr>
                                    @elseif($year == '2021-2022')
                                    <tr>
                                        <td>1</td>
                                        <td>E17CER051</td>
                                        <td>Mahmood Anas</td>
                                        <td>Dr.Anand Kumar Varma</td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>E17CER036</td>
                                        <td>Harun Raseed</td>
                                        <td>Harun Raseed M</td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>3</td>
                                        <td>E17CER049</td>
                                        <td>Madhan Kumar R</td>
                                        <td></td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>E17CER066</td>
                                        <td>Nitish Balasubramanian O</td>
                                        <td></td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>5</td>
                                        <td>E20CER001</td>
                                        <td>Arthi K</td>
                                        <td>Mr. Pirakasam</td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>6</td>
                                        <td>E20CER005</td>
                                        <td>Aarthi R</td>
                                        <td></td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>7</td>
                                        <td>E20CER012</td>
                                        <td>Harshidha V</td>
                                        <td></td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>8</td>
                                        <td>E20CER013</td>
                                        <td>Mahalakshmy T M</td>
                                        <td></td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                    @elseif($year == '2020-2021')
                                    <tr>
                                        <td>1</td>
                                        <td>E17CER051</td>
                                        <td>Mahmood Anas</td>
                                        <td>Dr.Anand Kumar Varma</td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>E17CER036</td>
                                        <td>Harun Raseed</td>
                                        <td>Harun Raseed M</td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>3</td>
                                        <td>E17CER049</td>
                                        <td>Madhan Kumar R</td>
                                        <td></td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>E17CER066</td>
                                        <td>Nitish Balasubramanian O</td>
                                        <td></td>
                                        <td>01.10.2021</td>
                                        <td>Determination of air quality index and its impacts on human health in Chennai City</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>5</td>
                                        <td>E20CER001</td>
                                        <td>Arthi K</td>
                                        <td>Mr. Pirakasam</td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>6</td>
                                        <td>E20CER005</td>
                                        <td>Aarthi R</td>
                                        <td></td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>7</td>
                                        <td>E20CER012</td>
                                        <td>Harshidha V</td>
                                        <td></td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                     <tr>
                                        <td>8</td>
                                        <td>E20CER013</td>
                                        <td>Mahalakshmy T M</td>
                                        <td></td>
                                        <td>26.02.2022</td>
                                        <td>Use of Waste Water Tyres and Plastics for Road Constructions</td>
                                        <td>Magna Scientia Advanced Research and Reviews</td>
                                     </tr>
                                    @elseif($year == '2019-2020')
                                    <tr>
                                        <td>1</td>
                                        <td>E18CER015</td>
                                        <td>Hari Haran E</td>
                                        <td>04.09.2019</td>
                                        <td>Winner</td>
                                        <td>Chess Inter-University Match</td>
                                        <td>E.G.S. Pillay Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>E19CER020</td>
                                        <td>A. Irfan Ali</td>
                                        <td>14.09.2019</td>
                                        <td>Winner</td>
                                        <td>Triple Jump Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>3</td>
                                        <td>E19CER020</td>
                                        <td>A. Irfan Ali</td>
                                        <td>14.09.2019</td>
                                        <td>Winner</td>
                                        <td>Long Jump Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>4</td>
                                        <td>820815103057</td>
                                        <td>Nirmal N</td>
                                        <td>18.09.2019</td>
                                        <td>Winner</td>
                                        <td>Badminton Inter-University Match</td>
                                        <td>E.G.S. Pillay Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>5</td>
                                        <td>E18CER034</td>
                                        <td>Priyadharshine S</td>
                                        <td>25.09.2019</td>
                                        <td>III Prize</td>
                                        <td>National Level Technical Symposium</td>
                                        <td>Brick-It Uce, Thirukuvalai</td>
                                     </tr>
                                     <tr>
                                        <td>6</td>
                                        <td>E17CER101</td>
                                        <td>Tamilmani</td>
                                        <td>05.10.2019</td>
                                        <td>Winner</td>
                                        <td>Basketball For Men Inter-University Match</td>
                                        <td>Kings Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>7</td>
                                        <td>E19CER057</td>
                                        <td>Sriram V</td>
                                        <td>05.10.2019</td>
                                        <td>Winner</td>
                                        <td>Basketball For Men Inter-University Match</td>
                                        <td>Kings Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>8</td>
                                        <td>E17CER023</td>
                                        <td>Dhakshna Moorthy A</td>
                                        <td>03.12.2019</td>
                                        <td>Winner</td>
                                        <td>Ball Badminton Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>9</td>
                                        <td>E19CER034</td>
                                        <td>Mariya Martin Jacob A</td>
                                        <td>03.12.2019</td>
                                        <td>Winner</td>
                                        <td>Ball Badminton Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>10</td>
                                        <td>E19CER047</td>
                                        <td>Pradeesh R</td>
                                        <td>03.12.2019</td>
                                        <td>Winner</td>
                                        <td>Ball Badminton Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>11</td>
                                        <td>E19CER064</td>
                                        <td>Sasi Kinsilin E</td>
                                        <td>03.12.2019</td>
                                        <td>Winner</td>
                                        <td>Ball Badminton Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>12</td>
                                        <td>E19CER073</td>
                                        <td>Vengadeshwaran S</td>
                                        <td>03.12.2019</td>
                                        <td>Winner</td>
                                        <td>Ball Badminton Inter-University Match</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>13</td>
                                        <td>E19CEL319</td>
                                        <td>Mohamed Faheem H</td>
                                        <td>24.12.2019</td>
                                        <td>Third</td>
                                        <td>Table Tennis Inter-University Match</td>
                                        <td>Prime College Of Architecture And Planning</td>
                                     </tr>
                                     <tr>
                                        <td>14</td>
                                        <td>E17CEL309</td>
                                        <td>Muhamed Haniff M</td>
                                        <td>05.03.2020</td>
                                        <td>II Prize</td>
                                        <td>Symposium</td>
                                        <td>Cad-It Nit, Pudhucherry</td>
                                     </tr>
                                     <tr>
                                        <td>15</td>
                                        <td>E17CER002</td>
                                        <td>Abarna P</td>
                                        <td>13.03.2020</td>
                                        <td>I Prize</td>
                                        <td>Symposium Code Cracking</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                     <tr>
                                        <td>16</td>
                                        <td>E17CER050</td>
                                        <td>Mahalakshmi R</td>
                                        <td>13.03.2020</td>
                                        <td>I Prize</td>
                                        <td>Symposium Code Cracking</td>
                                        <td>Arasu Engineering College</td>
                                     </tr>
                                    @endif
                                </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Sidebar Column -->
         <div class="col-lg-4">
            <div class="program-sidebar">
               <!-- Quick Links -->
               <div class="program-curriculum">
                  <h6 class="heading-title">Department Quick Links</h6>
                  <div class="program-menu">
                     <ul class="list-unstyled">
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                        <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                        <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                        <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                     </ul>
                  </div>
               </div>
               <!-- Contact Info -->
               <x-dept-contact-info
                  name="Civil Engineering Department"
                  :phones="['123-456-7890']"
                  :emails="['civileng@university.edu']"/>
            </div>
         </div>
      </div>
   </div>
</div>

@include('components.cta')
@endsection
