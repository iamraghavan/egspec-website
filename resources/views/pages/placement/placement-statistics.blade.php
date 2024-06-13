@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Placement',
'value_2' => '',
'value_3' => '',
'page_title' => 'Statistics' ])






<div class="rts-program pt--80 pb--40">
    <div class="container">
        <div class="rts-program-single-header">
            <div class="row g-3">
                <div class="col-lg-6">
                   <img src="https://skcet.ac.in/wp-content/uploads/2024/03/COMPANY-VISITED.jpg" alt="" srcset="">
                </div>
                <div class="col-lg-6">
                    <img src="https://skcet.ac.in/wp-content/uploads/2024/03/MAX-SALARYLPA.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="rts-about-university pt--10 pb--40">
    <div class="container">
        <div class="row">
            <div class="admission-content-top">
                <div class="application-deadline mt-5">

                        <h3 class="rts-section-title animated fadeIn">Placement Statistics</h3>

                    <div class="application-deadline__content">
                        <div class="application-deadline__content--table">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-theme">
                                    <tr>
                                        <td>Department</td>
                                        <td>2019-20</td>
                                        <td>2020-21</td>
                                        <td>2021-22</td>
                                        <td>2022-23</td>
                                        <td>2023-24</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($placementStatistics as $stat)
                                    <tr>
                                        <td>{{ $stat->department }}</td>
                                        <td>{{ $stat->year_2019_20 ?? '-' }}</td>
                                        <td>{{ $stat->year_2020_21 ?? '-' }}</td>
                                        <td>{{ $stat->year_2021_22 ?? '-' }}</td>
                                        <td>{{ $stat->year_2022_23 ?? '-' }}</td>
                                        <td>{{ $stat->year_2023_24 ?? '-' }}</td>
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
</section>





@include('components.cta')
@endsection
