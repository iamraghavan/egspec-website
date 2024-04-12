@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Admissions',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Complaint Committee'
])

<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Complaint Committee</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <td>S.No</td>
                                        <td>Name</td>
                                        <td>Address</td>
                                        <td>Committee</td>
                                        <td>Contact Details</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $index = 1;
                                @endphp

                                @foreach($cc as $ccs)

                                        <tr>
                                            <td>{{ $index++ }}</td>
                                            <td>{{ $ccs->name }}</td>
                                            <td>{{ $ccs->address }}</td>
                                            <td>{{ $ccs->committee }}</td>
                                            <td>{{ $ccs->contact_details }}</td>
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


@include('components.cta')
@endsection
