@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Research',
'value_2' => '',
'value_3' => '',
'page_title' => 'Research & Development'
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
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/manual/discipline-committee/discipline-committee.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>Discipline committee</a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>


                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/manual/discipline-committee/discipline-committee-1.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'>Discipline committee 1</a></td>
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
