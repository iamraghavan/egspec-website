@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Cells',
'value_3' => '',
'page_title' => 'Carrier Guidance'
])



<section class="rts-about-university pt--100 pb--80">




   <div class="container">
      <div class="row">
         <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
               <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="egspec_d_velavan_director_physical_education_department" class="img-fluid rounded-circle" style="max-width: 200px;">
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
               <div class="rts-section-description">
                  <div class="profile-info">
                     <h5 class="profile-name">S.Manikandan</h5>
                     <p class="profile-role">Head of Department / Information Technology</p>

                  </div>
               </div>
            </div>
         </div>
      </div>








      <div class="row">
        <div class="col-12">

            <div class="admission-content-top">
                <div class="application-deadline">

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped">
                                <thead class="table-theme">
                                    <tr>
                                        <td>S.No</td>
                                        <td>Event Name</td>
                                        <td>Month & Year</td>
                                        <td>Participants</td>
                                        <td>Remarks</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Personality Development</td>
                                        <td>February’2014</td>
                                        <td>75 Students from II and III year</td>
                                        <td>Motivational Talk</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>An Inside on Academic Projects</td>
                                        <td>August’2014</td>
                                        <td>150 Students from IV Year CSE & IT</td>
                                        <td>Guest Lecture</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>GATE – 2015 Awareness Programme</td>
                                        <td>September’2014</td>
                                        <td>100 Students from IV Year CSE & IT</td>
                                        <td>Carrier Guidance Cell</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>HR Conclave</td>
                                        <td>September’2014</td>
                                        <td>Inter and Intra college Students</td>
                                        <td>Industry Interaction</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Un Vazkai Un (Thanambi) Kayil</td>
                                        <td>January’2015</td>
                                        <td>IV IT Students(2011-2015)</td>
                                        <td>Guest Lecture</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Usage of Windows Certification</td>
                                        <td>January’2015</td>
                                        <td>50 Students from III IT</td>
                                        <td>Carrier Guidance</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Higher Studies Inter and Intra India</td>
                                        <td>February’2015</td>
                                        <td>Final year students from All disciplines (2011-2015)</td>
                                        <td>Guest Lecture</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Motivational & How to become a new Leader</td>
                                        <td>March’2015</td>
                                        <td>IV IT Students(2011-2015)</td>
                                        <td>Guest Lecture</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Sharpen Your Pencil</td>
                                        <td>March’2015</td>
                                        <td>Pre-final years</td>
                                        <td>Contest</td>
                                    </tr>
                                </tbody>



                            </table>

                        </div>


                    </div>
                </div>


            </div>
        </div>




    </div>

   </div>
   </div>
</section>






@include('components.cta')
@endsection
