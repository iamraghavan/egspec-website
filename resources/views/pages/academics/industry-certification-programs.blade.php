@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'Industry Certification Programs' ])



<!--====================  Start of Industry Academic Partnering page content  ====================-->


<div class="page-content-top pt--120 pt__md--80" element-id="424">
    <div class="container" element-id="423">
        <div class="row" element-id="422">
            <h3 class="rts-section-title animated fadeIn" element-id="421">Idea</h3>
            <p class="desc" element-id="420">The idea of a "gap" between research done in academia and its translation into marketable products certainly is not new. What is new are the steps some academic institutions and companies are taking to bridge that gap.

        </div>
    </div>
</div>





@include('components.cta')

@endsection
