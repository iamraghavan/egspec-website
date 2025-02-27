@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Alumni Feedback Analysis Report'
])




<div class="rts-program rts-section-padding">
    <div class="container">
        <h3 class="rts-section-title animated fadeIn">Alumni Feedback Analysis Report Odd Sem 2024-2025</h3>
        <div class="rts-program-description">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Blade view (resources/views/files.blade.php) -->
                    <div class="program-description-area">
                        <div class="program-credit-area">
                            <div class="program-accordion my-5">
                                <div class="accordion" id="rts-accordion">
                                    <div class="accordion-item">
                                        <div>
                                            <div class="accordion-body-content">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($files as $file)
                                                            <tr>
                                                                <td>
                                                                    <i class="fa fa-download"> </i>
                                                                    <a href="{{ $file['url'] }}" target="_blank" type="application/pdf" rel="alternate" media="print">
                                                                        {{ $file['title'] }}
                                                                    </a>
                                                                </td>
                                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
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
        </div>
    </div>


</div>








@include('components.cta')
@endsection
