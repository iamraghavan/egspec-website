@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Placement',
'value_2' => '',
'value_3' => '',
'page_title' => 'Placement Team' ])




<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                    <img src="" alt="egspec_dr_s_chandrasekar" class="img-fluid rounded-circle" style="max-width: 200px;">
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="rts-section-description">
                        <div class="profile-info">
                            <h5 class="profile-name">Dr. S. Chandrasekar,</h5>
                            <p class="profile-role"><b>Vice Principal & Chief Executive Officer</b>,</p>
                            <p class="profile-location">EGS Pillay Engineering College, Nagapattinam</p>
                            <p class="profile-contact"><b>Phone:</b> (+91) 989 470 7007 / (+91) 975 139 9077 | <b>Email:</b> placement@egspec.org</p>
                        </div>
                    </div>
                </div>
            </div>




            <div class="admission-content-top">



                <div class="application-deadline">

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped">
                                <thead class="table-theme">
                                    <tr>
                                        <td>The Placement and Training Cell at EGSPEC College plays a pivotal role within our institution, embodying a student-centric approach to align students with the demands of the corporate world. Throughout the academic year, our training activities are meticulously planned and executed to equip our students with the necessary skills and knowledge required for successful campus placements.</td>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>The placement records of EGSPEC College have consistently set new benchmarks in the history of our placement wing. Year after year, numerous organizations visit our campus to recruit our talented candidates. Our recruiting partners have consistently praised the outstanding performance of our alumni across various sectors, including product-based, service-based, and core industries.</td>

                                    </tr>



                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>

                <div class="application-deadline mt-5">

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped table-bordered"  style="border: 1px solid var(--rt-line);">
                                <thead class="table-theme">
                                    <tr>
                                        <td>Vision</td>
                                        <td>Mission</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>To bridge the gap between candidate skills and industry requirements, we aim to cultivate competent resources at EGSPEC College. Our focus is on equipping students with comprehensive training in personality development, professional etiquette, and campus recruitment preparation. Our goal is to empower our students with the skills and attributes necessary to excel in their careers and meet the demands of the industry effectively.</td>
                                        <td>Our aim is to achieve a 100% placement rate by engaging recruitment teams from diverse corporations. We conduct a variety of Training Programs, Workshops, Seminars, and industry interactions to enhance the skills of our students. Additionally, we organize industry visits to provide practical exposure. Faculty development programs are also a priority, focusing on enhancing student performance through comprehensive skill development initiatives for our faculty members.</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>



                    </div>
                </div>



                <div class="application-deadline mt-5">

                        <h3 class="rts-section-title animated fadeIn">Placement Coordinators</h3>

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-theme">
                                   <tr>
                                      <td>Name</td>
                                      <td>Designation</td>
                                   </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                      <td>Dr.S.Chandrasekar</td>
                                      <td>CEO/Director</td>
                                   </tr>
                                   <tr>
                                      <td>Mr.S.Mohamed Naina Maricar</td>
                                      <td>Soft skill Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Mr.G.Kalidhasan</td>
                                      <td>Soft skill Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Ms.S.Ishwarya Lakshmi</td>
                                      <td>Soft skill Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Ms.R.Ramya</td>
                                      <td>Verbal Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Ms.R.Karthikayini</td>
                                      <td>Verbal Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Mr.M.Kumarashan</td>
                                      <td>Verbal Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Mr.I.Arulprakash</td>
                                      <td>Aptitude Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Mr.S.Rakesh</td>
                                      <td>Aptitude Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Mr.I.Manoj</td>
                                      <td>Technical Trainer</td>
                                   </tr>
                                   <tr>
                                      <td>Ms.P.Hellan Chandra</td>
                                      <td>Technical Trainer</td>
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
