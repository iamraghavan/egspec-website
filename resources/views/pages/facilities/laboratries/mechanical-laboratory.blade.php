@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => 'Laboratries',
    'value_3' => '',
    'page_title' => 'Mechanical Laboratory'
])



<div class="page-content-top semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Engineering Practices Laboratory</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Sno.</th>
                                            <th>List of Equipments</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                        $counter = 0;
                                    @endphp

                                    @foreach($equipment as $eq)
                                        @if($eq->category_id === 1)
                                            <tr>
                                                <td>{{ ++$counter }}</td>
                                                <td>{{ $eq->equipment_name }}</td>

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

{{-- Metrology and Measurement Laboratory --}}

    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Metrology and Measurement Laboratory</h5>

                <!-- tab item -->
                <div class="rts-fee-chart">

                    <div class="rts-fee-chart__content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Sno.</th>
                                            <th>List of Equipments</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                        $counter = 0;
                                    @endphp

                                    @foreach($equipment as $eq)
                                        @if($eq->category_id === 2)
                                            <tr>
                                                <td>{{ ++$counter }}</td>
                                                <td>{{ $eq->equipment_name }}</td>

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



{{-- Thermal Engineering Laboratory – I --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">Thermal Engineering Laboratory – I</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 3)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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

{{-- Thermal Engineering Laboratory – II --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">Thermal Engineering Laboratory – II</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 4)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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

{{-- Manufacturing Technology Lab – I & II --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">Manufacturing Technology Lab – I & II</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 5)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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


{{-- Theory of Machines Laboratory --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">Theory of Machines Laboratory</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 6)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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



{{-- Mechatronics Laboratory --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">Mechatronics Laboratory</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 7)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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



{{-- CAD/CAM Laboratory --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">CAD/CAM Laboratory</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 8)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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


{{-- Research & Development Lab --}}

<div class="container">
    <div class="row">
        <div class="semister-fee__content">
            <h5 class="rts-section-title">Research & Development Lab</h5>

            <!-- tab item -->
            <div class="rts-fee-chart">

                <div class="rts-fee-chart__content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-theme">
                                    <tr>
                                        <th>Sno.</th>
                                        <th>List of Equipments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $counter = 0;
                                @endphp

                                @foreach($equipment as $eq)
                                    @if($eq->category_id === 9)
                                        <tr>
                                            <td>{{ ++$counter }}</td>
                                            <td>{{ $eq->equipment_name }}</td>

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

</div>




@include('components.cta')
@endsection
