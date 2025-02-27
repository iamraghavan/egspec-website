@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Formats'
])




<div class="rts-program rts-section-padding">
    <div class="container">
        <h3 class="rts-section-title animated fadeIn">Formats</h3>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blade view (resources/views/files.blade.php) -->
                    <div class="program-description-area">
                        <div class="program-credit-area">
                            <div class="program-accordion my-5">
                                <div class="accordion" id="rts-accordion">
                                    <div class="accordion-item">
                                        <div>
                                            <div class="accordion-body-content">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($files as $file)
                                                            <tr>
                                                                <td>
                                                                    <i class="fa fa-download"> </i>
                                                                    <a href="{{ $file['url'] }}" target="_blank" type="application/pdf" rel="alternate" media="print">
                                                                        {{ $file['title'] }}
                                                                    </a>
                                                                </td>
                                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                            </tr>
                                                        @endforeach
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
                                    <li><a href="@blob('iqac/annual-quality-assurance-report/aqar-2020-21.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>AQAR 2020-2021</a></li>

                                </ul>
                            </div>
                            <h6 class="heading-title">IQAC Meeting Minutes</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/iqac/meeting-minutes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Meeting Minutes</a></li>


                                </ul>
                            </div>

                            <h6 class="heading-title">IQAC Functions</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/iqac/iqac-function')}}"><span><i class="fa-light fa-arrow-right"></i></span>IQAC Functions
                                    </a></li>


                                </ul>
                            </div>

                            <h6 class="heading-title">IQAC Director's Profile</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url("/iqac/directors-profile") }}"><span><i class="fa-light fa-arrow-right"></i></span>Director's Profile</a></li>


                                </ul>
                            </div>

                            {{-- <h6 class="heading-title">IQAC Convener Profile</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url("/iqac/convener-profile") }}"><span><i class="fa-light fa-arrow-right"></i></span>Convener Profile</a></li>


                                </ul>
                            </div> --}}

                            <h6 class="heading-title">IQAC Activities</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{ url("/iqac/iqac-activities") }}"><span><i class="fa-light fa-arrow-right"></i></span>IQAC Activities</a></li>


                                </ul>
                            </div>

                            <h6 class="heading-title">Works Plan & Implementation</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/iqac/works-plan-and-implementation')}}"><span><i class="fa-light fa-arrow-right"></i></span>IQAC Works Plan & Implementation</a></li>


                                </ul>
                            </div>

                            <h6 class="heading-title">Formats</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/iqac/formats')}}"><span><i class="fa-light fa-arrow-right"></i></span>Formats</a></li>


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
