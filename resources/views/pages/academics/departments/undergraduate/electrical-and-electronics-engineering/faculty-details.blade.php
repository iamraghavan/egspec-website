@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Electrical and Electronics Engineering',
    'page_title' => 'Faculty Details'
])

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
                                         <td>Designation</td>
                                      </tr>
                                   </thead>
                                   <tbody>
                                      <tr>
                                         <td>1</td>
                                         <td>Dr. Mohan . V</td>
                                         <td>Professor</td>
                                      </tr>
                                      <tr>
                                         <td>2</td>
                                         <td>Dr. Suresh Padmanabhan. T</td>
                                         <td>Professor</td>
                                      </tr>
                                      <tr>
                                         <td>3</td>
                                         <td>Dr. Vinothkumar .M</td>
                                         <td>Associate Professor</td>
                                      </tr>
                                      <tr>
                                         <td>4</td>
                                         <td>Dr. Suresh Babu. P.J</td>
                                         <td>Head / Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>5</td>
                                         <td>Dr. Sivamani. S</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>6</td>
                                         <td>Mrs. Latha. S</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>7</td>
                                         <td>Dr. Krishnaram. K</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>8</td>
                                         <td>Mr. Nandakumar. K</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>9</td>
                                         <td>Mr. Amalore Naveen Antony. B</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>10</td>
                                         <td>Mr. Yokeswaran. V</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>11</td>
                                         <td>Mr. Senthilkumar. D</td>
                                         <td>Assistant Professor</td>
                                      </tr>

                                      <tr>
                                         <td>12</td>
                                         <td>Mr. Gokul Raj. K</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>13</td>
                                         <td>Mr. Jhagannath. K</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>14</td>
                                         <td>Mr. P. G. Raghavendra</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>15</td>
                                         <td>Mr. Ramanan. R</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                      <tr>
                                         <td>16</td>
                                         <td>Ms. Keerthika. A</td>
                                         <td>Assistant Professor</td>
                                      </tr>
                                   </tbody>
                                </table>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>

                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>HoD's Desk</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{url('/academics/departments/undergraduate/electrical-and-electronics-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <x-dept-contact-info
                            name="Dr. P. J. Suresh babu"
                            :phones="['+91 9585 160 544']"
                            :emails="['sureshbabu@egspec.org']"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
