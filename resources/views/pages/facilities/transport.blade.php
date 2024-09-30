@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Transport'
])





<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Department of Transport</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Route</th>
                                        <th>Operated Via</th>
                                        <th>Starting Time</th>
                                        <th>Total KM</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $counter = 0;
                                @endphp
                                    @foreach($transport as $tps)
                                    <tr>
                                        <td>{{ ++$counter }}</td>
                                        <td>{{$tps->route}}</td>
                                        <td>{{$tps->operated_via}}</td>
                                        <td>{{$tps->starting_time}}</td>
                                        <td>{{$tps->total_km}}</td>
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

    </div>
</section>






@include('components.cta')
@endsection
