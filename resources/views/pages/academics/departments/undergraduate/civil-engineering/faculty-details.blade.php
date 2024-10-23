@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => '',
    'page_title' => 'Civil Engineering'
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
                                          <td>S.No</td>
                                          <td>Name of the Faculty Member</td>
                                          <td>Designation</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td>Dr. S. Anand Kumar Varma</td>
                                          <td>Professor</td>
                                       </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>Dr. R. Sivakumar</td>
                                          <td>Professor</td>
                                       </tr>
                                       <tr>
                                          <td>3</td>
                                          <td>Dr. N.H. Agilandeswari</td>
                                          <td>Assistant Professor / Head</td>
                                       </tr>
                                       <tr>
                                          <td>4</td>
                                          <td>Dr. B. Vinodhkumar</td>
                                          <td>Associate Professor</td>
                                       </tr>
                                       <tr>
                                          <td>5</td>
                                          <td>Mr. V. Balasubramani</td>
                                          <td>Associate Professor</td>
                                       </tr>
                                       <tr>
                                          <td>6</td>
                                          <td>Mr. A. Arjunan</td>
                                          <td>Associate Professor</td>
                                       </tr>
                                       <tr>
                                          <td>7</td>
                                          <td>Mr. G. Prakash</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>8</td>
                                          <td>Mrs. M. Subita Deeneshwari</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>9</td>
                                          <td>Ms. N. Karthika</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>10</td>
                                          <td>Mrs. K. Kamalarani</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>11</td>
                                          <td>Mr. S. Shyam Sundar</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>12</td>
                                          <td>Mr. E. Venkatesan</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>13</td>
                                          <td>Mr. K. Senthamil Maran</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>14</td>
                                          <td>Mr. V. Srinivasan</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>15</td>
                                          <td>Mr. A. Pirakasam</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>16</td>
                                          <td>Mr. V. C. Keerthi</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>17</td>
                                          <td>Ms. K. Shakila</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>18</td>
                                          <td>Dr. B. Ashwini</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>19</td>
                                          <td>Mr. Rajmohan R</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>20</td>
                                          <td>Mr. P. S. Sreethalababu</td>
                                          <td>Assistant Professor</td>
                                       </tr>
                                       <tr>
                                          <td>21</td>
                                          <td>Ms. S. Aarthika</td>
                                          <td>Assistant Professor</td>
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
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">Department Quick Links</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering') }}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/department-highlights') }}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/hods-desk') }}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/faculty-details') }}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                    <li><a href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/research-publications') }}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/industry-collaboration') }}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/infrastructure') }}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                    <li><a href="{{ url('/placements/statistics') }}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/student-achievements') }}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/program-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/programme-educational-objectives') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                    <li><a href="{{ url('/academics/departments/undergraduate/civil-engineering/programme-specific-outcomes') }}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <x-dept-contact-info
                        name="Civil Engineering Department"
                        :phones="['+91-1234567890']"
                        :emails="['civilengg@example.com']"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.cta')

@endsection
