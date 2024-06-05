@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Home',
'value_2' => '',
'value_3' => '',
'page_title' => 'Governing Body Meeting Minutes'
])



<section class="rts-about-university pt--100 pb--80">

    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <div class="program-credit-area">
                        {{-- <h3 class="rts-section-title animated fadeIn" >ISO Manual</h3> --}}

                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">

                                <div class="accordion-item">

                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-42.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 42</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-43.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 43</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-44.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 44</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-45.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 45</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-46.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 46</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-47.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 47</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-download"></i> <a href="@blob('governing-body/gb-48.pdf')" target="_blank" type="application/pdf" rel="alternate" media="print">GB Meeting 48</a></td>
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
    </div>
 </section>





@include('components.cta')
@endsection
