@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Meeting Minutes'
])

<div class="rts-program rts-section-padding">
    <div class="container">

        <div class="rts-program-description">
            <div class="row">

                <!-- sidebar -->
                <div class="col-lg-12">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">IQAC - Meeting Minutes</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="@blob('iqac/iqac-meeting-minutes/iqac-2022-23.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>2022-2023</a></li>
                                    <li><a href="@blob('iqac/iqac-meeting-minutes/iqac-2021-22.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>2021-2022</a></li>
                                    <li><a href="@blob('iqac/iqac-meeting-minutes/iqac-2020-21.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>2020-2021</a></li>
                                    <li><a href="@blob('iqac/iqac-meeting-minutes/iqac-2019-20.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>2019-2020</a></li>
                                    <li><a href="@blob('iqac/iqac-meeting-minutes/iqac-2018-19.pdf')" target="_parent" rel="noopener noreferrer"><span><i class="fa-light fa-arrow-right"></i></span>2018-2019</a></li>

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
