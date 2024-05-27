@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => '',
'value_3' => '',
'page_title' => 'Message From the Secretary' ])



<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                    <img src="@blob('/secretary.webp')" alt="egspec secretary" class="img-fluid rounded-circle" style="max-width: 200px;">
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="rts-section-description">
                        <div class="profile-info">
                            <h5 class="profile-name">Mr. S. Senthilkumar</h5>
                            <p class="profile-role">Secretary - EGS Pillay Group of Institution, Nagapattinam</p>
                            {{-- <p class="profile-location"></p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title animated fadeIn">Secretary Message</h3>
                    <p class="desc mt-5 text-justify">
                        <span style="color: var(--rt-primary); font-weight:bold;"> E. G. S. Pillay Engineering College </span>, Nagapattinam has been a crucial platform in career building of thousands of students. Reputed for its high standards in Engineering Education, the college is continuously attracting most of the major recruiters in its placement drive. This connect adds a very different bond between students, colleges and industries. The College has a very special place in my heart. The caring faculty, state of art infrastructure and friendly academic environment make the college different and a respectable institution in the field of engineering education. The student centric academic structure aims at overall development of the students and also in developing outstanding professional skills. The co-curricular and extra-curricular activities develop versatile engineers who actively contribute a lot in their professional and social life. The out of box thinking and innovative approaches are important qualities of a genuine engineer. Aiming at developing world class engineers, we would definitely fulfill the demands of the fast paced industries.
                    </p>

                </div>
            </div>
        </div>





    </div>
</section>


@include('components.cta')
@endsection

