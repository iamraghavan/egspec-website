@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Academics',
'value_2' => '',
'value_3' => '',
'page_title' => 'Newsletter' ])



<!--====================  Start of Industry Academic Partnering page content  ====================-->

<div class="rts-blog v_5 rts-section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="program-description-area">

                            <div class="program-credit-area">
                                <h3 class="rts-section-title animated fadeIn" >Newsletter</h5>

                                <div class="program-accordion my-5">
                                    <div class="accordion" id="rts-accordion">

                                        <div class="accordion-item">

                                            <div>
                                                <div class="accordion-body-content">


                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="max-width: 100%;">Newsletter</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td><a href="https://firebasestorage.googleapis.com/v0/b/egspec-website.appspot.com/o/egspec%2Fnewsletter%2F2024%2Fnewsletter-jun-to-sep-2024.pdf?alt=media&token=8530bdf5-271c-45ce-81b7-05101cd17d47" target="_blank" type="application/pdf" rel="alternate" media='print'>
                                                                    Newsletter Jun to Sep 2024
                                                                </a></td>
                                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                            </tr>

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
            <div class="col-lg-4">
                <div class="program-sidebar">
                    <!-- curriculum -->
                    <div class="program-curriculum">
                        <h6 class="heading-title">Department Newsletter</h6>
                        <div class="program-menu">
                            <ul class="list-unstyled">
                                <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Under Construction</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

{{-- resources/views/pages/academic/newsletter.blade.php --}}





@include('components.cta')

@endsection

