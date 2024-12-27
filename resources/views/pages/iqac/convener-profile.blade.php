@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Convener Profile'
])



<section class="rts-faculty-details  rts-section-padding">
    <div class="container">
        <div class="row justify-content-sm-center g-5">
            <div class="col-lg-12 col-md-10 col-sm-10">

                <div class="col-lg-4 col-md-10 col-sm-10">
                    <div class="faculty-member">
                        <div class="faculty-member__details rt-center ">
                            <div class="faculty-member__image">
                                <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXcMAMxa8klqhoqmiAqEZPrBYtjOoEuUYtFCivQAee2eWmO5C4tspSssYYIq-gnyFBNrVaY0XBea6Iuko6-5DFL8O-O9Y04FUG571ANK7U-EhlXf7ZiuFGRrD3kBR9kn3Dq4i6-ek0gLaHcRUuCIzgmEem6bwt00qfZ3FgZt3WI6SYN1gQTNOA?key=jtZZgPH6aTTr32PpmQEN8Hnb" alt="Dr. D.Devarajan">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="member-info ">
                        <div class="member-info__details">
                            <div class="short-info">
                                <h4 class="rts-section-title mb--5">Dr. D.Devarajan,M.E.,Ph.D, </h4>
                                <span class="designation">Convener-IQAC</span>
                                <p class="description">
                                    Dr. D.Devarajan working as Associate professor in ECE having 12+ Years Experience in Teaching field .Published 12+ Journal Papers in reputed journals with Electronic circuits book. Currently Serving Reviewer in7 Journals.
                                </p>
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
