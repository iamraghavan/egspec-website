@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Committe Members'
])




<div class="rts-program rts-section-padding">
    <div class="container">
        <h3 class="rts-section-title animated fadeIn">IQAC - Committe Members</h3>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
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
                                                            <td><i class="fa fa-download"> </i><a href="@blob('iqac/committe-members/committe-members.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>Committe Members</a></td>
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

                    <div class="iframe-div">
                        <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url=@blob('iqac/committe-members/committe-members.pdf')#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="
                    height: 100rem !important;
                "></iframe>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">AQAR</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="@blob('iqac/annual-quality-assurance-report/aqar-2016-17.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>AQAR 2016-2017</a></li>
                                    <li><a href="@blob('iqac/annual-quality-assurance-report/aqar-2017-18.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>AQAR 2017-2018</a></li>
                                    <li><a href="@blob('iqac/annual-quality-assurance-report/aqar-2018-19.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>AQAR 2018-2019</a></li>
                                    <li><a href="@blob('iqac/annual-quality-assurance-report/aqar-2019-20.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>AQAR 2019-2020</a></li>
                                    <li><a href="@blob('iqac/annual-quality-assurance-report/aqar-2020-21.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>AQAR 2021-2022</a></li>

                                </ul>
                            </div>
                            <h6 class="heading-title">IQAC Meeting Minutes</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/iqac/meeting-minutes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Meeting Minutes</a></li>


                                </ul>
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