@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Home',
'value_2' => '',
'value_3' => '',
'page_title' => 'AICTE EGSPEC Video'
])



<section class="rts-about-university pt--100 pb--80">

    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="program-description-area">

                    <iframe src="https://www.youtube-nocookie.com/embed/dHwlo1uGnag?vq=hd1080&autoplay=1&hl=en-in&color=white&controls=0" width="512" height="auto" title="EGS Pillay Engineering College, Nagapattinam, Tamil Nadu, India" frameborder="0" allowfullscreen=""></iframe>

                </div>


            </div>


        </div>

    </div>
    </div>
 </section>



<style>
.program-description-area{position:relative;width:100%;height:0;padding-bottom:56.25%;overflow:hidden}.program-description-area iframe{position:absolute;top:0;left:0;width:100%;height:100%}
</style>

@include('components.cta')
@endsection
