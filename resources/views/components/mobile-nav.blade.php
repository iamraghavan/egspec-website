<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset("/assets/images/logo_tran.png") }}" alt="EGSPEC">
        </div>
        <div class="inner-content">

            <!-- offcanvase banner -->
            {{-- <div class="offcanvase__banner mt--50">
                <div class="offcanvase__banner--content">
                    <img src="{{ asset(" /assets/images/offcanvase.jpg") }}" alt="offcanvase">
                    <a href="{{ url("admission.html") }}" class="rts-theme-btn">Apply Now</a>
                </div>
            </div> --}}
            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <a href="{{ url("callto:+61485826710") }}"><span><i
                                class="fa-sharp fa-light fa-phone"></i></span>04356 251114</a>
                    <a href="{{ url("#") }}"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>{{$localAddress = env('LOCAL_ADDRESS');}}</a>
                    <div class="offcanvase__info--content--social">
                        <p class="title">Follow Us:</p>
                        <div class="social__links">
                            <a href="https://www.facebook.com/EGSPGOI/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/egspillay_group_of_institution/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/egspgoi/"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/@E.G.S.PillayGroupofInstitution"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">

        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">About</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url('/about/our-focus') }}">Our Focus</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/vision-and-mission') }}">Vision & Mission</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/history') }}">History</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/message-from-the-founder-and-chairman') }}">Message From the Chairman</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/message-from-the-secretary') }}">Message From the Secretary</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/message-from-the-principal') }}">Message From the Principal</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/adminstrative-organization') }}">Administrative Organization</a></li>
<li><a class="mobile-menu-link" href="{{ url("/about/dean") }}">Dean</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/organizational-chart') }}">Organizational Chart</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/milestones') }}">Milestones</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/hr-policy') }}">HR Policy</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/audit-statement') }}">Audit Statement</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/strategic-plan') }}">Strategic Plan</a></li>
<li><a class="mobile-menu-link" href="{{ url('/about/strategic-plan-meeting-minutes') }}">Strategic Plan Meeting Minutes</a></li>


                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Academics</a>
                    <ul class="submenu mm-collapse">
                        <li class="has-droupdown sa">
                            <a href="{{ url("#") }}">Departments</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url("/academics/departments/bachelors") }}">B.E / B.Tech</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("/academics/departments/masters") }}">M.E / M.Tech</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/academics/departments/postgraduate/master-of-computer-applications') }}">MCA</a></li>
<li><a class="mobile-menu-link" href="{{ url('/academics/departments/postgraduate/master-of-business-administration') }}">MBA</a></li>
<li><a class="mobile-menu-link" href="{{ url('/academics/departments/science-humanities') }}">Science & Humanities</a></li>

                            </ul>
                        </li>

                        <li><a class="mobile-menu-link" href="{{ url('/academics/industry-academic-partnering') }}">Academic Partners</a></li>
{{-- <li><a class="mobile-menu-link" href="{{ url('/academics/industry-certification-programs') }}">Industry Certification Programmes</a></li> --}}
<li><a class="mobile-menu-link" href="{{ url('/academics/industry-training-programs') }}">Industry Training Programmes</a></li>
<li><a class="mobile-menu-link" href="{{ url('/academics/advisory-board') }}">Advisory Board</a></li>

                    </ul>
                </li>

                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Admissions</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url('#') }}">Information Brochure</a></li>

   <li><a class="mobile-menu-link" href="{{ url('/admissions/course-intake') }}">Courses & Intake</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/admissions/tnea') }}">TNEA {{ date('Y') }} - {{ date('Y') + 1 }}</a></li>

                        <li class="has-droupdown sa">
                            <a href="{{ url("#") }}">Admission Procedure</a>
                            <ul class="submenu mm-collapse s">
                            <li><a class="mobile-menu-link" href="{{ url('/admission/admission-procedure/undergraduate') }}">UG</a></li>
                            <li><a class="mobile-menu-link" href="{{ url('/admission/admission-procedure/postgraduate') }}">PG</a></li>
                            <li><a class="mobile-menu-link" href="{{ url('/admission/admission-procedure/lateral-entry') }}">Lateral Entry</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url('/admissions/excess-fee-committee-circular') }}">Excess Fee Committee Circular</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/admissions/complaint-committee') }}">Complaint Committee</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/admissions/why-study-here') }}">Why Study Here</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/admissions/faq') }}">FAQ</a></li>

                    </ul>
                </li>





                <li class="has-droupdown">
                    <a href="{{ url('#') }}" class="main">Facilities</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/infrastructure') }}">Infrastructure</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/indoor-stadium') }}">Indoor Stadium</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/basketball-court') }}">Basketball Court</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/laboratries') }}">Laboratries</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/hostel') }}">Hostel</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/library') }}">Library</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/transport') }}">Transport</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/facilities/cafeteria') }}">Cafeteria</a></li>
                    </ul>
                </li>


                <li class="has-droupdown">
                    <a href="{{ url('#') }}" class="main">Activities</a>
                    <ul class="submenu mm-collapse">
                        <li class="has-droupdown sa">
                            <a href="{{ url('#') }}">Extra-Curricular</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url('/activities/extra-curricular/sports') }}">Sports</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/extra-curricular/nss-and-red-ribbon-club') }}">NSS & Red Ribbon Club</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown sa">
                            <a href="{{ url('#') }}">Co-Curricular</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url('/activities/co-curricular/workshop') }}">Workshop</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/co-curricular/symposium') }}">Symposium</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/co-curricular/conference') }}">Conference</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown sa">
                            <a href="{{ url('#') }}">Cells</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url('/activities/cells/entrepreneurship-development-cell') }}">Entrepreneurship Development Cell</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/cells/women-empowerment-cell') }}">Women Empowerment Cell</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/cells/internal-complaints-committee') }}">Internal Complaints Committee</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/cells/carrier-guidance') }}">Career Guidance Cell</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown sa">
                            <a href="{{ url('#') }}">Professional Bodies</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url('/activities/professional-bodies/ieee') }}">IEEE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/professional-bodies/iste') }}">ISTE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/professional-bodies/ictact') }}">ICTACT</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/professional-bodies/csi') }}">CSI</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/professional-bodies/iete') }}">IETE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/professional-bodies/iei') }}">IEI</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url('/activities/anti-ragging-committee') }}">Anti Ragging Committee</a></li>
                        <li class="has-droupdown sa">
                            <a href="{{ url('#') }}">ISO</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url('/activities/iso/coordinators') }}">Coordinators</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/iso/iso-certificates') }}">Certificate</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/activities/iso/iso-manual') }}">Manual</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url('/activities/discipline-committee') }}">Discipline Committee</a></li>
                    </ul>
                </li>



                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Placements</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url('/placements#industry-academic-partnering') }}">Industry Partnership & Corporate Affairs (Placement & Training)</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/placements#memorandum-of-understanding') }}">MoU</a></li>
                        {{-- <li><a class="mobile-menu-link" href="{{ url('#') }}">Recruiters</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('#') }}">Training Cell</a></li> --}}
                        <li><a class="mobile-menu-link" href="{{ url('/placements#placementTeam') }}">Placement Team</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/placements#statistics') }}">Placement Statistics</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/placements#our-top-recruiters') }}">Our Top Of Recruiters</a></li>
                    </ul>
                </li>

                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Research</a>
                    <ul class="submenu mm-collapse">

                        <li><a class="mobile-menu-link" href="{{ url('/research/research-and-development') }}">Team Members</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/research/research-supervisor-and-scholar-details') }}">Research Supervisor Details</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/research/publication-details') }}">Publications</a></li>

                        <li><a class="mobile-menu-link" href="{{ url('/research/patent-details') }}">Industry Collaboration</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/research/copyrights') }}">Copyrights</a></li>
                        <li><a class="mobile-menu-link" href="{{ url('/research/r-and-d-policy') }}">R &amp; D Policy</a></li>

                        <li class="has-droupdown sa">
                            <a href="{{ url("#") }}">Projects</a>
                            <ul class="submenu mm-collapse s">
                                <li><a class="mobile-menu-link" href="{{ url('/research/projects/mechanical-engineering') }}">MECH</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/research/projects/civil-engineering') }}">CIVIL</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/resources/projects/electrical-and-electronics-engineering') }}">EEE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/research/projects/electronics-and-communication-engineering') }}">ECE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/resources/projects/computer-science-and-engineering') }}">CSE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url('/resources/projects/information-technology') }}">IT</a></li>

                            </ul>
                        </li>



                    </ul>
                </li>



                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Alumni</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url("") }}">Alumni Interaction</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("") }}">Alumni Survey</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("") }}">Alumni Magazine</a></li>

                    </ul>
                </li>
                <li class="has-droupdown">
                    <a class="main" href="https://coe.egspec.org/" target="_blank" referrerpolicy="origin-when-cross-origin" rel="noopener noreferrer">COE</a>
                    {{-- <a class="main" href="{{ url("#") }}">Downloads</a> --}}
                </li>

                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">IQAC</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/directors-profile") }}">Director's Profile</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/convener-profile") }}">Convener Profile</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/committe-members") }}">Members</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/meeting-minutes") }}">IQAC Meeting Minutes</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/works-plan-and-implementation") }}">Works Plan & Implementation</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/iqac-function") }}">IQAC Functions</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("/iqac/iqac-events") }}">IQAC Events</a></li>





                    </ul>
                </li>
                <li class="has-droupdown">
                    <a class="main" href="{{route('gallery_index')}}">Gallery</a>
                    {{-- <a class="main" href="{{ url("#") }}">Downloads</a> --}}
                </li>

                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Quick Links</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{url('/right-to-information')}}">RTI</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/iqac/committe-members')}}">IQAC</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/skill-development-center/pradhan-mantri-kaushal-kendra')}}">PMKK</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/skill-development-center/pradhan-mantri-kaushal-vikas-yojana')}}">PMKVY</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/affiliation/approved/aicte')}}">AICTE</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/mandatory-disclosure')}}">Mandatory Disclosure</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/national-institutional-ranking-framework')}}">NIRF Engineering Ranking</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/affiliation/approved/accreditation-status')}}">Accreditation Status</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/activities/cells/internal-complaints-committee')}}">Internal Complaints Committee</a></li>
                        <li><a class="mobile-menu-link" href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FM_AiCTE_Approval.pdf?alt=media&token=20146981-a33f-4b95-bd49-3567ac5c207d" target="_blank" rel="noopener noreferrer">All AICTE Approval Documents</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/affiliation/aicte-egspec-video')}}">AICTE EGSPEC Video</a></li>
                        <li><a class="mobile-menu-link" href="{{url('/meeting-minutes/governing-body')}}">Governing Body Meeting</a></li>

                    </ul>
                </li>
            </ul>
        </nav>

        <div class="rts-social-style-one pl--20 mt--40">
           <div class="offcanvase__info--content">
                <a href="{{ url("callto:+61485826710") }}"><span><i class="fa-sharp fa-light fa-phone"></i></span>04356 251114</a>
                <a href="{{ url("#") }}"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>{{$localAddress = env('LOCAL_ADDRESS');}}</a>
                <div class="offcanvase__info--content--social">
                    <p class="title">Follow Us:</p>
                    <div class="social__links">
                        <a href="https://www.facebook.com/EGSPGOI/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/egspillay_group_of_institution/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/egspgoi/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/@E.G.S.PillayGroupofInstitution"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="offcanvase__banner mt--50">
                <div class="offcanvase__banner--content">
                    <img src="{{ asset("/assets/images/holi_sale_3.webp") }}" alt="offcanvase">
                    {{-- <a href="{{ url("admission.html") }}" class="rts-theme-btn">Apply Now</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
