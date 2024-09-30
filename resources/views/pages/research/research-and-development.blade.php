@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => '',
'value_3' => '',
'page_title' => 'Research & Development'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">

       <div class="row">
         <div class="col-12">
            <div class="requirement-deadline">
                <h4 class="animated fadeIn text-center"><u>Research & Development</u></h4>
                <h6 class="text-center" element-id="420">
As the outome of the college R&D Steering committee meeting convened on <b> 05/02/2016 </b>, a new R&D cell is formed for the year 2016 .
The Steering Committe identified R&D members from all the departments.
                </h6>

            </div>


             <div class="admission-content-top">
                 <div class="application-deadline">

                     <div class="application-deadline__content">
                         <div class="application-deadline__content--table">
                             <table class="table table-striped">
                                 <thead class="table-theme">
                                    <tr>
                                        <td>S.No</td>
                                        <td>Name</td>
                                        <td>Designation</td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                        <td colspan="3"><strong>Composition of Research & Development Cell</strong></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr.Edward Anand.E</td>
                                        <td>Director - R&D, EGSPGOI</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr.M.Irshad Ahamed</td>
                                        <td>Convenor EGSPEC</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"><strong>Members</strong></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr.V.Mohan</td>
                                        <td>Director- Academics, EGSGOI</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr.S.Ramabalan</td>
                                        <td>Principal, EGSPEC</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr.Manoj Kumar Mishra</td>
                                        <td>Head, IPR Cell, EGSPGOI</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Dr.V.Sivaraman</td>
                                        <td>Director – Industry-Institute Partnership Cell</td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"><strong>Department Co-ordinators</strong></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Dr.A.S.Anakath</td>
                                        <td>CSBS Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Mrs.B.Ashwini</td>
                                        <td>CIVIL Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ms.K.Nagalaksmi</td>
                                        <td>IT Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Dr.C.Mallika</td>
                                        <td>MCA Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Dr.A.Charles</td>
                                        <td>S&H Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Dr.M.Vijayakumar</td>
                                        <td>EEE Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Dr.M.Priya</td>
                                        <td>CSE Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Dr.B.Asha Daisy</td>
                                        <td>MBA Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Dr.M.Malathi</td>
                                        <td>BME Dept.</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Mrs.Kavitha</td>
                                        <td>ECE Dept.</td>
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
