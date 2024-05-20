@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Cells',
'value_3' => '',
'page_title' => 'Internal Complaints Committee'
])




<section class="rts-about-university pt--100 pb--80">




   <div class="container">


      <div class="carousel-frame">
        <div class="carousel-slide">
            @foreach ($icc_slider as $index => $slide)
          <img src="{{ asset($slide->desktop_image_url) }}" alt="{{ $slide->alt_name }}" />
          @endforeach
        </div>
        <i class="carousel-prev fas fa-chevron-left"></i>
        <i class="carousel-next fas fa-chevron-right"></i>
        <ol class="carousel-dots">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ol>
      </div>






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
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/ICC-DOCUMENT-23-24.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Internal Complaints Committee Constitution Notice - 28/09/2023 </a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>


                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/ICC-DOCUMENT-2022-23-even-semester-.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> NAME OF THE INSTITUTE LEVEL COMMITTEE: ICC </a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>

                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/dst-handbook.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> DST Handbook </a></td>
                                                <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                            </tr>

                                            <tr>
                                                <td><a href="https://egspec.blob.core.windows.net/egspec-assets/internal-complaints-committee/welcome-to-guidelines-icc.pdf" target="_blank" type="application/pdf" rel="alternate" media='print'> Welcome to GuideLines ICC </a></td>
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
