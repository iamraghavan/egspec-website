@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Co-Curricular',
'value_3' => '',
'page_title' => 'Workshops'
])


@php
    $workshops = [
        ['id' => 1, 'name' => 'Mobile Application Development'],
        ['id' => 2, 'name' => 'Doing a Cloud with Eucalyptus'],
        ['id' => 3, 'name' => 'Web Development using Ruby Rails'],
        ['id' => 4, 'name' => 'Web Development using PHP'],
        ['id' => 5, 'name' => 'Next Generation Databases']
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

                            <span style="color: var(--rt-theme);"> EGSPEC </span> is known for his renowance of conduct of Technical Events on its soil towards Students Development, Skill Upgradation and Technology Adaptation

                        </p>

                    </div>
                    <div class="application-deadline">
                        <h3 class="rts-section-title animated fadeIn">Some Familiar Events </h3>
                        <div class="application-deadline__content">
                            <div class="application-deadline__content--table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>S.No</td>
                                                <td>Title of the Workshop</td>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($workshops as $index => $workshop)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $workshop['name'] }}</td>
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
