@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Infrastructure'
])

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="admission-content-top">
                    <h3 class="rts-section-title animated fadeIn">
                        Infrastructure
                    </h3>

                    <div class="admission-big-thumb">
                        <img src="https://egspec.blob.core.windows.net/egspec-assets/egspec_campus_map.webp" alt="egspec_campus_map">
                    </div>

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">E.G.S. Pillay Engineering College has been developed and fully established with 4 Academic Blocks and 2 Workshop Blocks</h3>
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">Main Block (Mech / Civil / S&H Laboratories)</li>
                                <li class="single-requirement">GG Block (CSE / IT / MECH)</li>
                                <li class="single-requirement">SJ Block (ECE / EEE /S&H / Civil)</li>
                                <li class="single-requirement">P.G. Block (MBA / MCA / M.E.)</li>
                                <li class="single-requirement">Electrical & Electronics Block (All Labs for EEE/MECH/ECE)</li>
                                <li class="single-requirement">Two Workshop Blocks</li>
                            </ul>

                        </div>
                    </div>
                    <div class="application-deadline">

                        <div class="application-deadline__content">
                            <div class="application-deadline__content--table">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>The Buildings house fully furnished Laboratories, Class rooms, Drawing halls, Conference halls, Offices for HODs, Staff rooms, Seminar Halls, Department Libraries and other facilities as per ‘AICTE Norms and Standards’.</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Spacious lawns between the entrance and buildings and green trees around provide the serene and right ambience for the Campus. The College has 3 Residential Hostels, separately for Boys and for Girls.
                                                Facilities provided in the hostels include:</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>

                    <div class="requirement-deadline">
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">Study Halls</li>
                                <li class="single-requirement">Recreation Rooms with Television</li>
                                <li class="single-requirement">Common Rooms</li>
                                <li class="single-requirement">Entertainment Hall and Indoor Games</li>
                                <li class="single-requirement">Magazine Section</li>
                                <li class="single-requirement">Health and GYM</li>
                                <li class="single-requirement">Areas for Sports and Indoor Games</li>
                            </ul>
                        </div>
                    </div>

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">Computer Centers</h3>
                        <div class="requirement-deadline__content">
                            <ul>
                                <li class="single-requirement">Fully furnished Computer Laboratories are located in 10 different Centers. These Laboratories cater to the ‘Computer Science and Engineering’ and ‘Information Technology’ needs of students and Faculty.</li>
                                <li class="single-requirement">There are totally 486 Terminals (i3, Quad Core, Core 2 Duo, Dual Core, P IV) with UPS back up service:</li>
                                <li class="single-requirement">WINDOWS 7/Vista/XP/2000/NT/2003</li>
                                <li class="single-requirement">UNIX/LINUX Operating Systems</li>
                                <li class="single-requirement">5 Branded Servers</li>
                            </ul>
                        </div>

                    </div>

                    <div class="requirement-deadline">
                        <h3 class="rts-section-title animated fadeIn">Internet</h3>
                        <div class="requirement-deadline__content">
                            <p class="w-95 mx-0">College has 16 Mbps Internet connectivity through Reliance leased line.Entire campus is Wi-Fi enabled (including Boys & Girls) Hostel.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include('components.cta')
@endsection
