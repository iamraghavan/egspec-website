@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Co-Curricular',
'value_3' => '',
'page_title' => 'Symposium'
])

@php
    $symposiums = [
        ['id' => 1, 'name' => 'Student Symposium - KRIDENZ'],
        ['id' => 2, 'name' => 'Student Symposium - CEA'],
        ['id' => 3, 'name' => 'Student Symposium - ZEPRA'],
        ['id' => 4, 'name' => 'Student Symposium - SPARKS'],
        ['id' => 5, 'name' => 'Student Symposium - MECHO']
    ];

@endphp



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <h3 class="rts-section-title animated fadeIn">International Students Symposium
                Humanizing Tech Through Impactful Interventions 2K24 </h3>

                <br>

                <div class="col-lg-6 col-12 my-5">
                    <div class="program-description-area">

                        <div class="program-credit-area">


                            <div class="program-accordion my-5">
                                <div class="accordion" id="rts-accordion">

                                    <div class="accordion-item">

                                        <div>
                                            <div class="accordion-body-content">
                                                <table class="table">

                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-download"> </i><a href="https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Factivities%2Fco-curricular%2Fsymposium%2Fegspec-symposium-magazine-2k24.pdf?alt=media&token=64d760cc-3721-4737-848d-27d3d9fbc53b" target="_blank" type="application/pdf" rel="alternate" media="print">Technical Magazine</a></td>
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


                </div>
                <div class="col-lg-6 col-12 my-5">
                    <div class="program-description-area">

                        <div class="program-credit-area">


                            <div class="program-accordion my-5">
                                <div class="accordion" id="rts-accordion">

                                    <div class="accordion-item">

                                        <div>
                                            <div class="accordion-body-content">
                                                <table class="table">

                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-download"> </i><a href="https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Factivities%2Fco-curricular%2Fsymposium%2Fegspec-symposium-paper-proceedings_2k24.pdf?alt=media&token=6613e97a-5834-48bc-8125-bc01ee87a5ee" target="_blank" type="application/pdf" rel="alternate" media="print">PAPER PRESENTATION PROCEEDINGS</a></td>
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


                </div>

            <div class="col-12">
                <div class="admission-content-top">


                    <div class="application-deadline">
                        <h3 class="rts-section-title animated fadeIn">Some Familiar Events </h3>
                        <div class="application-deadline__content">
                            <div class="application-deadline__content--table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Recent Symposium</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($symposiums as $index => $symposium)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $symposium['name'] }}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="loader">
                                 <p> The content will be updated shortly. Thank you for your patience <span>...</span> </p>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




@include('components.cta')
@endsection
