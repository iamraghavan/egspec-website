@extends('layouts.app')
@section('content')
@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => 'Departments',
'value_3' => 'Electronics And Communication Engineering',
'page_title' => 'Faculty Details' ])


@php
    $teachingStaff = [
            ['name' => 'Mr. K. Raju', 'qualification' => 'DECE', 'designation' => 'Service Engineer'],
            ['name' => 'Mr. AR.Vignesh kumar', 'qualification' => 'BE', 'designation' => 'Lab Assistant'],
            ['name' => 'Mrs. M. Jainambu Natchiyar', 'qualification' => 'BE', 'designation' => 'Lab Assistant'],
            ['name' => 'Mrs. R. Ouma', 'qualification' => 'DECE', 'designation' => 'Lab Assistant'],
            ['name' => 'Ms. B. Divya', 'qualification' => 'BE', 'designation' => 'Lab Assistant'],
            ['name' => 'Mr. U. Abinash', 'qualification' => 'ME', 'designation' => 'Lab Assistant'],
            ['name' => 'Mrs. M. R. Anitha', 'qualification' => 'B.COM', 'designation' => 'Office Assistant'],
        ];

@endphp


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
                                        <td>Name</td>
                                        <td>Qualification</td>
                                        <td>Designation</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Malathi M</td>
                                        <td>Ph.D</td>
                                        <td>HOD/Professor</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Rajaram A</td>
                                        <td>Ph.D</td>
                                        <td>Professor</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Sathiya V</td>
                                        <td>Ph.D</td>
                                        <td>Associate Professor</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Irshad Ahamed M</td>
                                        <td>Ph.D</td>
                                        <td>Associate Professor</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Devarajan D</td>
                                        <td>Ph.D</td>
                                        <td>Associate Professor</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Dr. Senthilkumar S</td>
                                        <td>Ph.D</td>
                                        <td>Associate Professor</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>

                                        <td>Dr. Parthasaradi V</td>
                                        <td>Ph.D</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Nuthal Srinivasan M</td>
                                        <td>Ph.D</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Dr. Ramachandran L</td>
                                        <td>Ph.D</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Dr. Mathuvanesan C</td>
                                        <td>Ph.D</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Dr. Koteeshwari R S</td>
                                        <td>Ph.D</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Mr. Parthasarathi K</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Mrs. Keerthika R</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Mrs. Panchali P</td>
                                        <td>M.Tech</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Mr. Ayyappa R</td>
                                        <td>M.Tech</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Mrs. Selvasundhari M</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Ms. Prabhavathy B</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Ms. V. Thilaga</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Mrs. S. Vetriselvi</td>
                                        <td>M.Tech</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Mrs. M. Kavitha</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Ms. V. Lakshmi Praba</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Mrs. K. Vembarasi</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Mr. L. Anbazhagan</td>
                                        <td>M.Tech</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Ms. S. G. Praveena</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Mrs. P. JananiDurga</td>
                                        <td>M.E</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Ms. M. VijayaDurga</td>
                                        <td>M.Tech</td>
                                        <td>Assistant Professor</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- resources/views/teaching-staff/index.blade.php -->

<div class="application-deadline">
    <h5 class="rts-section-title animated fadeIn">Teaching Staff List</h5>
    <div class="application-deadline__content mt-5">
        <div class="application-deadline__content--table">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-theme">
                    <tr>
                        <td>S. No</td>
                        <td>Name</td>
                        <td>Qualification</td>
                        <td>Designation</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachingStaff as $index => $staff)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $staff['name'] }}</td>
                            <td>{{ $staff['qualification'] }}</td>
                            <td>{{ $staff['designation'] }}</td>
                        </tr>
                    @endforeach
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
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                            <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                            <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                            <li><a href="{{url('/academics/departments/undergraduate/electronics-and-communication-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- contact info -->
                  <x-dept-contact-info
                            name="Dr. M. Malathi, M.E., Ph.D"
                            :phones="['+91 9443 101 712']"
                            :emails="['hodece@egspec.org', 'malathi@egspec.org']"
                        />
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('components.cta')
@endsection
