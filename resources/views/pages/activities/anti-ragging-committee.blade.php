@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => '',
'value_3' => '',
'page_title' => 'Anti Ragging Committee'
])




<section class="rts-about-university pt--100 pb--80">
   <div class="container">
      <div class="row">
        <div class="program-description-area mt-4">

            <div class="program-credit-area">
                <h5 class=" animated fadeIn" >PDF File / View &amp; Download</h5>

                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">
                                    <table class="table">

                                        <tbody>
                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/anti-ragging-committee/anti-ragging-23-24.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>UGC Helpdesk</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>


                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/anti-ragging-committee/university-grant-commission.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>Anti-Ragging Committee & MoM</a></td>
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
</section>






@include('components.cta')
@endsection
