@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'IQAC',
'value_2' => '',
'value_3' => '',
'page_title' => 'Directors Profile'
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
                                <span class="designation">Director - IQAC</span>
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

{{-- <section class="rts-faculty-details  rts-section-padding">
    <div class="container">
        <div class="row justify-content-sm-center g-5">
            <div class="col-lg-4 col-md-10 col-sm-10">
                <div class="faculty-member">
                    <div class="faculty-member__details rt-center ">
                        <div class="faculty-member__image">
                            <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXf-iWF4W0_5l2OQjVdp1pgbOFDekZaNl_gnNShZmG6jFoyHn9eGA8K6PiZVoBsZ3yontd8OSEFLgj62Syo9myYJaFCmGdMntA4XEmX4XAn9ibbbx27AvoH4Pnq-P9Jqn3xnflRpmWwiZbxXeXUBbIqc8LAB1Sia_QfKWkKryZS9d0ThKpVHEIY?key=jtZZgPH6aTTr32PpmQEN8Hnb" alt="Dr.M.Chinnadurai">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-10 col-sm-10">
                <div class="member-info ">
                    <div class="member-info__details">
                        <div class="short-info">
                            <h4 class="rts-section-title mb--5">Dr.M.Chinnadurai, M.E.,Ph.D,</h4>
                            <span class="designation">Director-IQAC</span>
                            <p class="description">
                                Dr.M.Chinnadurai is working as COE &amp; Professor in CSE has 18
years 4 months experience ,served as Institutional Coordinator of NAAC, NBA, Research
Centre, AICTE approval and Anna University affiliation processes. Guided -15 Ph.Ds and
Ongoing Ph.D. Scholars 11 Nos. Published 50+ Journals in Q1 reputed Journals.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row justify-content-sm-center g-5">
            <div class="col-lg-4 col-md-10 col-sm-10">
                <div class="faculty-member">
                    <div class="faculty-member__details rt-center ">
                        <div class="faculty-member__image">
                            <picture>
                                <source srcset="@blob('profile/dr-j-vanitha.webp')" type="image/webp">
                                <img src="@blob('profile/dr-j-vanitha.webp')" class="img-fluid img-thumbnail" alt="egspec_dr_j_vanitha" style="max-width: 200px;">
                            </picture>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-10 col-sm-10">
                <div class="member-info ">
                    <div class="member-info__details">
                        <div class="short-info">
                            <h4 class="rts-section-title mb--5">Dr.J.Vanitha, M.C.A., M.Phil., Ph.D,</h4>
                            <span class="designation">Director-IQAC</span>
                            <p class="description">
                                Dr. J. Vanitha is working as Associate Professor in MCA department at E.G.S.Pillay engineering college having  25 years of academic experience and  she published good number of papers in reputed journals and acting  as reviewer for Tamilnadu State Board 11th Computer Science Book in the year 2019.

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 --}}







@include('components.cta')
@endsection
