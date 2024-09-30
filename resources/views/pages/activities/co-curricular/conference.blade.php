@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Co-Curricular',
'value_3' => '',
'page_title' => 'Conference'
])

@php
    $conferences = [
        ['id' => 1, 'name' => 'National Conference on Engineering, Technolology, Management, Science and Language 2015'],
        ['id' => 2, 'name' => 'International Conference on Research and Development in Information and Communication Technology'],
        ['id' => 3, 'name' => 'International Conference on Mechcanical Engineering and Material Sciences'],
        ['id' => 4, 'name' => 'International Conference on Electrnocis and Electrical Sciences'],
        ['id' => 5, 'name' => 'International Conference on Management Principles and Recent Theories']
    ];
@endphp



<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">Idea</h3>
                        <p class="desc" element-id="420">

                            <span style="color: var(--rt-theme);"> EGSPEC </span>  is known for his renowance of conduct of Technical Events on its soil towards Students Development, Skill Upgradation and Technology Adaptation

                        </p>

                    </div>
                    <div class="application-deadline">
                        <h3 class="rts-section-title animated fadeIn">Recent Events </h3>
                        <div class="application-deadline__content">
                            <div class="application-deadline__content--table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Title of the Conference</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($conferences as $index => $conference)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $conference['name'] }}</td>
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
