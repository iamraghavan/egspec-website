@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Organizational Chart' ])



<!--====================  About us / Our Focus  ====================-->

<section class="rts-about-university rts-section-padding">
    <div class="container">

        <div class="row g-5 justify-content-md-center justify-content-start">
            <div class="col-lg-12 col-xl-12 col-md-12">
                <div class="rts-about-section">

                    <a href="@blob('organizational-chart.webp')" target="_blank">
                        <img src="https://egspec.blob.core.windows.net/egspec-assets/organizational-chart.webp" alt="About us - EGSPEC" style="height: 100%; max-width: 100%; object-fit: contain;">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>



@include('components.cta')
@endsection

