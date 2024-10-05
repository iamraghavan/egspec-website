@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'About us',
'value_2' => 'Dean - (Technical Affairs, Research and Branding)',
'value_3' => 'E. G. S. Pillay Engineering College',
'page_title' => 'Dean' ])



<!--====================  About us / Our Focus  ====================-->


<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12 text-center">
                    {{-- <img src="@blob('')" alt="egspec secretary" class="img-fluid rounded-circle" style="max-width: 200px;"> --}}
                    <picture>
                        <source srcset="@blob('profile/dr-s-manikandan.webp')" type="image/webp">
                        <img src="@blob('profile/dr-s-manikandan.webp')" class="img-fluid rounded" alt="egspec_dr_s_manikandan" style="max-width: 200px;">
                    </picture>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="rts-section-description">
                        <div class="profile-info">
                            <h5 class="profile-name">Dr. S. MANIKANDAN, M.E.,Ph.D, Post Doc</h5>
                            <p class="profile-role">Dean - (Technical Affairs, Research and Branding) / E. G. S. Pillay Engineering College</p>
                            <p class="profile-role">+91-9047902685, +91-9500707894</p>
                            <p class="profile-role">manikandan@egspec.org, profmaninvp@gmail.com</p>
                            {{-- <p class="profile-location"></p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title animated fadeIn">Dean Message</h3>
                    <p class="desc mt-5 text-justify">
                        I am  <span style="color: var(--rt-primary); font-weight:bold;"> Manikandan.S </span> as Dean (Technical Affairs, Research and Branding) & Associate Professor of Information Technology in E.G.S. Pillay Engineering College (Autonomous), Nagapattinam. I completed Ph.D from Anna University in the year of 2020, M.E(CSE) with University Rank Holder and Distinction from Annamalai University in the year of 2012 and B.Tech (IT) with Distinction from E.G.S. Pillay Engineering College in Nagapattinam in the year of 2010. Also member in IEEE, ACM, MIE, CSTA,IAENG, CSI and ISTE. Currently I am doing research in Artificial Intelligence, Deep Learning and Data Analytics. Recognized Supervisor (Ref. No.:4040100) from Anna University.
                    </p>

                </div>
            </div>
        </div>



 <div class="program-description-area">

                                <div class="program-credit-area">

                                    <div class="program-accordion ">
                                        <div class="accordion" id="rts-accordion">

                                            <div class="accordion-item">

                                                <div>
                                                    <div class="accordion-body-content">
                                                        <table class="table">

                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="https://www.linkedin.com/in/manikandan-sridharan-6b303778/" target="_blank" type="application/pdf" rel="alternate" media='print'> LinkedIn Profile </a></td>
                                                                    <td><i class="fab fa-linkedin-in"></i> / LinkedIn</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a href="https://scholar.google.co.in/citations?user=VnCEqLgAAAAJ&hl=en" target="_blank" type="application/pdf" rel="alternate" media='print'> Google Scholar Citation </a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><a href="https://www.researchgate.net/profile/Manikandan-Sridharan" target="_blank" type="application/pdf" rel="alternate" media='print'> Research Gate </a></td>
                                                                    <td><i class="fa fa-graduation-cap" aria-hidden="true"></i> / Publications</td>
                                                                </tr>

                                                                  <tr>
                                                                    <td><a href="https://sites.google.com/site/profmaniit" target="_blank" type="application/pdf" rel="alternate" media='print'> Website </a></td>
                                                                    <td><i class="fa fa-global" aria-hidden="true"></i> / Website </td>
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
</section>


@include('components.cta')
@endsection
