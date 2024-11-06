<style>
    @media (max-width: 768px) {

/* Hide the side images and other elements on mobile screens */
.header-side-image {
    display: none !important;
}

.custom-footer-widget > s,
.header-right-logos,
.hide-on-mobile {
    display: none !important;
}
}
.dlogo{
    max-width: 65%;
    margin-left: 2rem;
}

</style>

<header id="rt-header" class="header-one header--sticky">
    <!-- Top Header -->
    <div class="header-top-one-wrapper rt-primary-bg hide-on-mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one">
                        <div class="left-information">
                            <a href="mailto:principal@egspec.org" class="email"><i class="fa-light fa-envelope"></i>principal@egspec.org</a>
                            <a href="tel:7373067032" class="email"><i class="fa-light fa-phone"></i>7373 067 032 | 8680 954 537</a>
                        </div>
                        <!-- right area -->
                        <div class="right-information">
                            <ul class="rts-dropdown-menu language-switch">
                                <li class="has-child-menu">
                                    <a href="#">
                                        <span class="menu-item">Feedback</span>
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <span class="menu-item">Student Feedback</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-item">Staff Feedback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="rts-dropdown-menu switcher-currency">
                                <li class="has-child-menu">
                                    <a href="#">
                                        <span class="menu-item">Register &amp; Login</span>
                                        <i class="fa-regular fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <span class="menu-item">Student Login</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="menu-item">Staff Login</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Header -->
    <div class="header-middle-wrapper my-3 py-2">




        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">

                {{-- <div class="col-lg-1 d-flex align-items-center">
                    <picture>
                        <source srcset="{{ asset('/assets/images/29_years_of_excellance.webp') }}" type="image/webp">
                        <img style="" src="{{asset('assets/images/29_years_of_excellance.webp')}}" alt="Left Image" class="header-side-image">
                    </picture>
                </div> --}}


                <div class="col-lg-7 d-flex align-items-center">
                    <a href="{{ url('/') }}" class="logo-area">
                        <picture>
                            <!-- For desktop and big screens -->
                            <source srcset="{{ asset('/assets/images/EGSLOGO_2.webp') }}" media="(min-width: 768px)" type="image/webp">
                            <!-- For mobile screens -->
                            <img src="{{ asset('/assets/images/logo_tran.svg') }}" alt="logo" class="logo dlogo">
                        </picture>

                    </a>
                    <div class="menu-bar ml-auto d-lg-none" id="menu-btn">
                        <picture>
                            <source srcset="{{ asset('/assets/images/icon/bar.svg') }}" type="image/svg+xml">
                            <img src="{{ asset('/assets/images/icon/bar.svg') }}" alt="menu-bar">
                        </picture>
                    </div>
                </div>


                {{-- <div class="col-lg-2 d-flex align-items-center">
                    <a href="{{ url('/') }}" class="logo-area">
                        <picture>
                            <!-- For desktop and big screens -->
                            <source srcset="{{ asset('/assets/op.webp') }}" media="(min-width: 768px)" type="image/webp">
                            <!-- For mobile screens -->
                            <img src="{{ asset('/assets/op.webp') }}" alt="logo" class="logo dlogo">
                        </picture>

                    </a>

                </div> --}}



                <div class="col-lg-5 text-right">
                    <div class="header-right-logos d-flex justify-content-end">
                        <picture>
                            <source srcset="https://www.citchennai.edu.in/wp-content/uploads/2023/12/nba-logo.svg" type="image/svg">
                            <img src="https://www.citchennai.edu.in/wp-content/uploads/2023/12/nba-logo.svg" alt="Logo 1" class="square-logo" loading="lazy">
                        </picture>
                        <picture>
                            <source srcset="https://upload.wikimedia.org/wikipedia/en/e/eb/All_India_Council_for_Technical_Education_logo.png" type="image/png">
                            <img src="https://upload.wikimedia.org/wikipedia/en/e/eb/All_India_Council_for_Technical_Education_logo.png" alt="Logo 2" class="square-logo" loading="lazy">
                        </picture>
                        <picture>
                            <source srcset="https://upload.wikimedia.org/wikipedia/en/4/49/Anna_University_Logo.svg" type="image/svg+xml">
                            <img src="https://upload.wikimedia.org/wikipedia/en/4/49/Anna_University_Logo.svg" alt="Logo 3" class="square-logo" loading="lazy">
                        </picture>
                        <picture>
                            <source srcset="https://upload.wikimedia.org/wikipedia/en/1/1d/NAAC_LOGO.png" type="image/png">
                            <img src="https://upload.wikimedia.org/wikipedia/en/1/1d/NAAC_LOGO.png" alt="Logo 4" class="square-logo" loading="lazy">
                        </picture>
                        <picture>
                            <source srcset="{{ asset('assets/nirf.webp') }}" type="image/png">
                            <img src="{{ asset('assets/nirf.webp') }}" alt="Logo 5" class="square-logo" loading="lazy">
                        </picture>
                        <picture>
                            <source srcset="{{ asset('assets/images/counseling_code.gif') }}" type="image/gif">
                            <img src="{{ asset('assets/images/counseling_code.gif') }}" alt="Logo 6" class="square-logo" loading="lazy">
                        </picture>
                    </div>
                </div>

                {{-- <div class="col-lg-1 text-right">
                    <div class="header-right-logos d-flex justify-content-end">
                        <picture>
                            <img style="

                        " src="{{asset('assets/images/ayya_amma.svg')}}" alt="Right Image" class="header-side-image">
                        </picture>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>




    <!-- Separator Line -->
    <div class="header-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="separator-line"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .header-one-wrapper {
    display: flex !important;
    justify-content: center !important; /* Center horizontally */
    align-items: center !important; /* Center vertically */
}


    </style>

    <!-- Bottom Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-one-wrapper">
                <div class="main-nav-one">
                    <div class="nav-container">
                        <nav>
                            <ul>
                                <li class="dropdownss">
                                    <a class="nav-link" href="{{route('index')}}">Home</a>
                                 </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">About</a>
                                   <ul class="submenu">
                                      <li><a href="{{ url("/about/our-focus") }}">Our Focus</a></li>
                                      <li><a href="{{ url("/about/vision-and-mission") }}">Vision & Mission</a></li>
                                      <li><a href="{{ url("/about/history") }}">History</a></li>
                                      <li><a href="{{ url("/about/message-from-the-founder-and-chairman") }}">Message From the Chairman</a></li>
                                      <li><a href="{{ url("/about/message-from-the-secretary") }}">Message From the Secretary</a></li>
                                      <li><a href="{{ url("/about/message-from-the-principal") }}">Message From the Principal</a></li>
                                      <li><a href="{{ url("/about/adminstrative-organization") }}">Administrative Organization</a></li>
                                      <li><a href="{{ url("/about/dean") }}">Dean</a></li>
                                      <li><a href="{{ url("/about/organizational-chart") }}">Organizational Chart</a></li>
                                      <li><a href="{{ url("/about/milestones") }}">Milestones</a></li>
                                      <li><a href="{{ url("/about/hr-policy") }}">HR Policy</a></li>
                                      <li><a href="{{ url("/about/audit-statement") }}">Audit Statement</a></li>
                                      <li><a href="{{ url("/about/strategic-plan") }}">Strategic Plan</a></li>
                                      <li><a href="{{ url("/about/strategic-plan-meeting-minutes") }}">Strategic Plan Meeting Minutes</a></li>
                                   </ul>
                                </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Academics</a>
                                   <ul class="submenu">
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Departments</a>
                                         <ul class="submenu third-lvl base">
                                            <li class="">
                                               <a href="{{ url("/academics/departments/bachelors") }}">B.E / B.Tech</a>
                                            </li>
                                            <li class="">
                                               <a href="{{ url("/academics/departments/masters") }}">M.E / M.Tech</a>
                                            </li>
                                            <li><a href="{{ url("/academics/departments/postgraduate/master-of-computer-applications") }}">MCA</a></li>
                                            <li><a href="{{ url("/academics/departments/postgraduate/master-of-business-administration") }}">MBA</a></li>
                                            <li><a href="{{ url("/academics/departments/science-humanities") }}">Science & Humanities</a></li>
                                         </ul>
                                      </li>
                                      <li><a href="{{ url("/academics/industry-academic-partnering") }}">Academic Partners</a></li>
                                      {{-- <li><a href="{{ url("/academics/industry-certification-programs") }}">Industry Certification Programmes</a></li> --}}
                                      <li><a href="{{ url("/academics/industry-training-programs") }}">Industry Training Programmes</a></li>
                                      <li><a href="{{ url("/academics/advisory-board") }}">Advisory Board</a></li>
                                   </ul>
                                </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Admissions</a>
                                   <ul class="submenu">
                                    <li><a href="{{ url("/admissions/course-intake") }}">Information Brochure</a></li>

                                      <li><a href="{{ url("/admissions/course-intake") }}">Courses & Intake</a></li>
                                      <li><a href="{{ url("/admissions/tnea") }}">TNEA {{ date('Y')}} - {{ date('Y') +1 }}</a></li>
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Admission Procedure</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/admission/admission-procedure/undergraduate") }}">UG</a></li>
                                            <li><a href="{{ url("/admission/admission-procedure/postgraduate") }}">PG</a></li>
                                            <li><a href="{{ url("/admission/admission-procedure/lateral-entry") }}">Lateral Entry</a></li>
                                         </ul>
                                      </li>
                                      <li><a href="{{ url("/admissions/excess-fee-committee-circular") }}">Excess Fee Committee Circular</a></li>
                                      <li><a href="{{ url("/admissions/complaint-committee") }}">Complaint Committee</a></li>
                                      <li><a href="{{ url("/admissions/why-study-here") }}">Why Study Here</a></li>
                                      <li><a href="{{ url("/admissions/faq") }}">FAQ</a></li>
                                   </ul>
                                </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Facilities</a>
                                   <ul class="submenu">
                                      <li><a href="{{ url("/facilities/infrastructure") }}">Infrastructure</a></li>
                                      <li><a href="{{ url("/facilities/indoor-stadium") }}">Indoor Stadium</a></li>
                                      <li><a href="{{ url("/facilities/basketball-court") }}">Basketball Court</a></li>
                                      <li><a href="{{ url("/facilities/laboratries") }}">Laboratries</a></li>
                                      <li><a href="{{ url("/facilities/hostel") }}">Hostel</a></li>
                                      <li><a href="{{ url("/facilities/library") }}">Library</a></li>
                                      <li><a href="{{ url("/facilities/transport") }}">Transport</a></li>
                                      <li><a href="{{ url("/facilities/cafeteria") }}">Cafeteria</a></li>
                                   </ul>
                                </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Activities</a>
                                   <ul class="submenu">
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Extra-Curricular</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/activities/extra-curricular/sports") }}">Sports</a></li>
                                            <li><a href="{{ url("/activities/extra-curricular/nss-and-red-ribbon-club") }}">NSS & Red Ribbon Club</a></li>
                                         </ul>
                                      </li>
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Co-Curricular</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/activities/co-curricular/workshop") }}">Workshop</a></li>
                                            <li><a href="{{ url("/activities/co-curricular/symposium") }}">Symposium</a></li>
                                            <li><a href="{{ url("/activities/co-curricular/conference") }}">Conference</a></li>
                                         </ul>
                                      </li>
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Cells</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/activities/cells/entrepreneurship-development-cell") }}">Entrepreneurship Development Cell</a></li>
                                            <li><a href="{{ url("/activities/cells/women-empowerment-cell") }}">Women Empowerment Cell</a></li>
                                            <li><a href="{{ url("/activities/cells/internal-complaints-committee") }}">Internal Complaints Committee</a></li>
                                            <li><a href="{{ url("/activities/cells/carrier-guidance") }}">Career Guidance Cell</a></li>
                                         </ul>
                                      </li>
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Professional Bodies</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/activities/professional-bodies/ieee") }}">IEEE</a></li>
                                            <li><a href="{{ url("/activities/professional-bodies/iste") }}">ISTE</a></li>
                                            <li><a href="{{ url("/activities/professional-bodies/ictact") }}">ICTACT</a></li>
                                            <li><a href="{{ url("/activities/professional-bodies/csi") }}">CSI</a></li>
                                            <li><a href="{{ url("/activities/professional-bodies/iete") }}">IETE</a></li>
                                            <li><a href="{{ url("/activities/professional-bodies/iei") }}">IEI</a></li>
                                         </ul>
                                      </li>
                                      <li><a href="{{ url("/activities/anti-ragging-committee") }}">Anti Ragging Committee</a></li>
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">ISO</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/activities/iso/coordinators") }}">Coordinators</a></li>
                                            <li><a href="{{ url("/activities/iso/iso-certificates") }}">Certificate</a></li>
                                            <li><a href="{{ url("/activities/iso/iso-manual") }}">Manual</a></li>
                                         </ul>
                                      </li>
                                      <li><a href="{{ url("/activities/discipline-committee") }}">Discipline Committee</a></li>
                                   </ul>
                                </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Placements</a>
                                   <ul class="submenu">
                                      <li><a href="{{ url('/placements#placementTeam') }}">Placement Team</a></li>
                                      <li><a href="{{ url('/placements#statistics') }}">Placement Statistics</a></li>
                                      <li><a href="{{ url("/placements#industry-academic-partnering") }}">Industry Partnership & Corporate Affairs (Placement & Training)</a></li>
                                      <li><a href="{{ url("/placements#memorandum-of-understanding") }}">MoU</a></li>
                                      {{--
                                      <li><a href="{{ url("#") }}">Recruiters</a></li>
                                      <li><a href="{{ url("#") }}">Training Cell</a></li>
                                      --}}
                                      <li><a href="{{ url("/placements#our-top-recruiters") }}">Our Top Of Recruiters</a></li>
                                      <li><a href="{{ url("/placements#placement-gallery") }}">Placement Gallery</a></li>
                                   </ul>
                                </li>
                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Research</a>
                                   <ul class="submenu">
                                      <li><a href="{{ url("/research/research-and-development") }}">Team Members</a></li>
                                      <li><a href="{{ url("/research/research-supervisor-and-scholar-details") }}">Research Supervisor and Scholar</a></li>
                                      <li><a href="{{ url("/research/publication-details") }}">Publications</a></li>
                                      <li class="sub-dropdown">
                                         <a href="{{ url("#") }}">Projects</a>
                                         <ul class="submenu third-lvl base">
                                            <li><a href="{{ url("/research/projects/mechanical-engineering") }}">MECH</a></li>
                                            <li><a href="{{ url("/research/projects/civil-engineering") }}">CIVIL</a></li>
                                            <li><a href="{{ url("/resources/projects/electrical-and-electronics-engineering") }}">EEE</a></li>
                                            <li><a href="{{ url("/research/projects/electronics-and-communication-engineering") }}">ECE</a></li>
                                            <li><a href="{{ url("/resources/projects/computer-science-and-engineering") }}">CSE</a></li>
                                            <li><a href="{{ url("/resources/projects/information-technology") }}">IT</a></li>
                                         </ul>
                                      </li>
                                      <li><a href="{{ url("/research/patent-details") }}">Industry Collabration</a></li>
                                      <li><a href="{{ url("/research/copyrights") }}">Copyrights</a></li>
                                      <li><a href="{{ url("/research/r-and-d-policy") }}">R &amp; D Policy</a></li>
                                   </ul>
                                </li>

                                <li class="has-dropdown">
                                   <a class="nav-link" href="{{ url("#") }}">Alumni</a>

                                   <ul class="submenu">

                                    <li><a href="{{ url("") }}">Alumni Interaction</a></li>
                                    <li><a href="{{ url("") }}">Alumni Survey</a></li>
                                    <li><a href="{{ url("") }}">Alumni Magazine</a></li>

                                 </ul>
                                </li>
                                <li class="dropdownss">
                                   <a class="nav-link" href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin-when-cross-origin" rel="noopener noreferrer">COE</a>
                                </li>

                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">IQAC</a>

                                    <ul class="submenu">

                                        <li><a href="{{ url("/iqac/committe-members") }}">Members</a></li>
                                        <li><a href="{{ url("/iqac/meeting-minutes") }}">IQAC Meeting Minutes</a></li>


                                     </ul>
                                 </li>
                                 <li class="dropdownss">
                                    <a class="nav-link" href="{{route('gallery_index')}}">Gallery</a>
                                 </li>
                                 <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Quick Links</a>

                                    <ul class="submenu">

                                        <li><a href="{{url('/right-to-information')}}">RTI</a></li>
                                        <li><a href="{{url('/iqac/committe-members')}}">IQAC</a></li>
                                        <li><a href="{{url('/skill-development-center/pradhan-mantri-kaushal-kendra')}}">PMKK</a></li>
                                        <li><a href="{{url('/skill-development-center/pradhan-mantri-kaushal-vikas-yojana')}}">PMKVY</a></li>
                                        <li><a href="{{url('/affiliation/approved/aicte')}}">AICTE</a></li>
                                        <li><a href="{{url('/mandatory-disclosure')}}">Mandatory Disclosure</a></li>
                                        <li><a href="{{url('/national-institutional-ranking-framework')}}">NIRF Engineering Ranking</a></li>
                                        <li><a href="{{url('/affiliation/approved/accreditation-status')}}">Accreditation Status</a></li>
                                        <li><a href="{{url('/activities/cells/internal-complaints-committee')}}">Internal Complaints Committee</a></li>
                                        <li><a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FM_AiCTE_Approval.pdf?alt=media&token=20146981-a33f-4b95-bd49-3567ac5c207d" target="_blank" rel="noopener noreferrer">All AICTE Approval Documents</a></li>
                                        <li><a href="{{url('/affiliation/aicte-egspec-video')}}">AICTE EGSPEC Video</a></li>
                                        <li><a href="{{url('/meeting-minutes/governing-body')}}">Governing Body Meeting</a></li>


                                  </ul>
                                 </li>
                             </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right-area-one">
                    <div class="header-right-content d-none d-lg-block">
                        <div class="menu-bar" id="menu-btn">
                            <img src="{{ asset("/assets/images/icon/bar.svg") }}" alt="menu-bar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

{{-- Header Update --}}
