@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => '',
'value_3' => '',
'page_title' => 'Research Supervisor'
])



<section class="rts-about-university pt--100 pb--80">
    <div class="container">

       <div class="row">
         <div class="col-12">
            <div class="requirement-deadline">
                <h4 class="animated fadeIn text-center"><u>Research Supervisor Details</u></h4>


            </div>



         </div>




     </div>

    </div>
    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        {{-- <h3 class="rts-section-title animated fadeIn" >ISO Manual</h3> --}}

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-download"> </i><a href="https://firebasestorage.googleapis.com/v0/b/egspec-symposium.appspot.com/o/ACFrOgBA8yXfvdE0cFrjDg_ZUCc3QcqYFuJd2GxPXhW9mlgFSojfGBOHXvpeb_gTnSQeK3tFRzIAxZmC_plHI4oNI1aEML3_qMJvUJMmywu-QrcPtbsoVRPb264yx6bhiF1soKiJ1E76shZlwOAI.pdf?alt=media&token=f935eff8-dc42-4a31-9605-d6f7d654c489" target="_blank" type="application/pdf" rel="alternate" media='print'> Recognized Research Supervisor List &amp; Scholar Details</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
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
<div class="semister-fee">
    <div class="semister-fee__content">


        <div class="rts-fee-chart">
            <div class="rts-fee-chart__tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="cse-tab" data-bs-toggle="tab" data-bs-target="#cse" type="button" role="tab" aria-controls="cse" aria-selected="true">Computer Science and Engineering</button>
                        <button class="nav-link" id="it-tab" data-bs-toggle="tab" data-bs-target="#it" type="button" role="tab" aria-controls="it" aria-selected="false">Information Technology</button>
                        <button class="nav-link" id="mech-tab" data-bs-toggle="tab" data-bs-target="#mech" type="button" role="tab" aria-controls="mech" aria-selected="false">Mechanical Engineering</button>
                        <button class="nav-link" id="eee-tab" data-bs-toggle="tab" data-bs-target="#eee" type="button" role="tab" aria-controls="eee" aria-selected="false">Electrical and Electronics Engineering</button>
                        <button class="nav-link" id="ece-tab" data-bs-toggle="tab" data-bs-target="#ece" type="button" role="tab" aria-controls="ece" aria-selected="false">Electronics and Communication Engineering</button>
                        <button class="nav-link" id="civil-tab" data-bs-toggle="tab" data-bs-target="#civil" type="button" role="tab" aria-controls="civil" aria-selected="false">Civil Engineering</button>
                        <button class="nav-link" id="physics-tab" data-bs-toggle="tab" data-bs-target="#physics" type="button" role="tab" aria-controls="physics" aria-selected="false">Physics</button>
                    </div>
                </nav>
            </div>
            <div class="rts-fee-chart__content" id="nav-tabContent">
                <!-- Computer Science and Engineering -->
                <div class="tab-pane fade active show" id="cse" role="tabpanel" aria-labelledby="cse-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. M. CHINNADURAI</td>
                                <td>2840126</td>
                                <td>15</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Dr. K. BALASUBRAMANIAN</td>
                                <td>4240018</td>
                                <td>0</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Information Technology -->
                <div class="tab-pane fade" id="it" role="tabpanel" aria-labelledby="it-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. S. MANIKANDAN</td>
                                <td>4040100</td>
                                <td>0</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Dr. K. MANIKANDA KUMARAN</td>
                                <td>4140007</td>
                                <td>0</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mechanical Engineering -->
                <div class="tab-pane fade" id="mech" role="tabpanel" aria-labelledby="mech-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. S. RAMABALAN</td>
                                <td>2520085</td>
                                <td>10</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Dr. S. KRISHNA MOHAN</td>
                                <td>2920037</td>
                                <td>3</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Dr. V. NAVANEETHAKRISHNAN</td>
                                <td>3320090</td>
                                <td>0</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Dr. G. SUNDARA VADIVEL</td>
                                <td>4320006</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Electrical and Electronics Engineering -->
                <div class="tab-pane fade" id="eee" role="tabpanel" aria-labelledby="eee-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. V. MOHAN</td>
                                <td>2830072</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Dr. T. SURESH PADMANABHAN</td>
                                <td>2930027</td>
                                <td>4</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Dr. S. SIVAMANI</td>
                                <td>4430006</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Dr. K. KRISHNARAM</td>
                                <td>4430017</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Electronics and Communication Engineering -->
                <div class="tab-pane fade" id="ece" role="tabpanel" aria-labelledby="ece-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. A. RAJARAM</td>
                                <td>2340070</td>
                                <td>12</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>Dr. M. MALATHI</td>
                                <td>4190004</td>
                                <td>0</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Dr. M. IRSHAD AHAMED</td>
                                <td>3850002</td>
                                <td>0</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Dr. S. SENTHILKUMAR</td>
                                <td>4190081</td>
                                <td>0</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Dr. L. RAMACHANDRAN</td>
                                <td>4340034</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Civil Engineering -->
                <div class="tab-pane fade" id="civil" role="tabpanel" aria-labelledby="civil-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. R. SIVAKUMAR</td>
                                <td>2910018</td>
                                <td>0</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Physics -->
                <div class="tab-pane fade" id="physics" role="tabpanel" aria-labelledby="physics-tab">
                    <table class="table">
                        <thead class="table-theme">
                            <tr>
                                <th>Name of the Faculty</th>
                                <th>Reference Number</th>
                                <th>Number of Scholars Produced</th>
                                <th>Number of Scholars Pursuing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. E. EDWARD ANAND</td>
                                <td>2670077</td>
                                <td>0</td>
                                <td>0</td>
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
    </div>
 </section>





@include('components.cta')
@endsection
