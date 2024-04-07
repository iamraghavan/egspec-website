@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Admissions',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Course & In-Take'
])

<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Courses &amp; In-Take</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab" data-bs-target="#undergrade-1" type="button" role="tab" aria-controls="undergrade-1" aria-selected="true">Undergraduate (UG) </button>
                                <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-2" type="button" role="tab" aria-controls="grade-tution-2" aria-selected="false">Postgraduate (PG)</button>
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>S.No</th>
                                        <th>
                                            Engineering and Technology (4 Years) </th>
                                        <th> In-Take</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($ci as $index => $cis)
                                    @if($cis->course_type === 'ug')
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{$cis->course_name }}</td>
                                        <td>{{ $cis->intake }}</td>
                                    </tr>
                                    @endif
                                    @endforeach







                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="grade-tution-2" role="tabpanel" aria-labelledby="grade-tution-2-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>S.No</th>
                                        <th>
                                            Engineering and Management </th>
                                        <th> In-Take</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($ci as $cis)
                                    @if($cis->course_type === 'pg')
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $cis->course_name }}</td>
                                            <td>{{ $cis->intake }}</td>
                                        </tr>
                                    @endif
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
@endsection
