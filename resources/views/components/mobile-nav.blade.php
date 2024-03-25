<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset(" /assets/images/logo_tran.png") }}" alt="studyhub-university">
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
                            <a href="{{ url("#") }}"><i class="fa-brands fa-facebook"></i></a>
                            <a href="{{ url("#") }}"><i class="fa-brands fa-instagram"></i></a>
                            <a href="{{ url("#") }}"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="{{ url("#") }}"><i class="fa-brands fa-youtube"></i></a>
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
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Founder Chairperson’s Message</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Chairman’s Message</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Director’s Message</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Principal’s Message</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">About the Group</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">About the College</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Awards & Achievements</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Administration</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Tribute to Our Founder</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Objectives</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Strategic Plan</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Affiliation & Approvals</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Core Values</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Academics</a>
                    <ul class="submenu mm-collapse">
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Departments</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">B.E / B.Tech</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">M.E / M.Tech</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">MCA</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">MBA</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Science & Humanities</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Industry Academic Partners</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Industry Certification Programmes</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Industry Training Programmes</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Advisory Board</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Admissions</a>
                    <ul class="submenu mm-collapse">
                        <li class="has-droupdown">
                            <a href="{{ url("#") }}">Information Brochure</a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">UG Broucher</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">PG Broucher</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Courses</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">TNEA 2023 Information</a></li>
                        <li class="has-droupdown">
                            <a href="{{ url("#") }}">Admission Procedure</a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">UG</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">PG</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Lateral Entry</a></li>
                            </ul>
                        </li>
                        <li class="has-droupdown">
                            <a href="{{ url("#") }}">Eligibility Criteria</a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">UG</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">PG</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Lateral Entry</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Sports Quota Admission</a></li>
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Scholarships</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Sports Quota Scholarship 2024</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Why Study Here</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">FAQ</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="{{ url("#") }}" class="main">Facilities</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Infrastructure</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Indoor Stadium</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Basketball Court</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Laboratries</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Hostel</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Library</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Transport</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Cafeteria</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Activities</a>
                    <ul class="submenu mm-collapse">
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Extra-Curricular</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Sports</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">NSS & Red Ribbon Club</a></li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Co-Curricular</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Workshop</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Symposium</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Conference</a></li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Cells</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Entrepreneurship Development
                                        Cell</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Women Empowerment Cell</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Internal Complaints Committee</a>
                                </li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Career Guidance Cell</a></li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Professional Bodies</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">IEEE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">ISTE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">ICTACT</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">CSI</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">IETE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">IEI</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Anti Ragging Committee</a></li>
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">ISO</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Coordinators</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">Certificate</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Discipline Committee</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Placements</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Industry Partnership & Corporate Affairs
                                (Placement & Training)</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">MoU</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Recruiters</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Training Cell</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Placement Team</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Placement Statistics</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Our Few Of Recruiters</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Research</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Team Members</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Research Supervisor and Scholar</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Publications</a></li>
                        <li class="sub-dropdown">
                            <a href="{{ url("#") }}">Projects</a>
                            <ul class="submenu third-lvl base">
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">MECH</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">CIVIL</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">EEE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">ECE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">CSE</a></li>
                                <li><a class="mobile-menu-link" href="{{ url("#") }}">IT</a></li>
                            </ul>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Patents</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Copy Rights</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">R & D Policy</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="{{ url("#") }}" class="main">Circular</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Anna University Circular</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">UGC Guidelines</a></li>
                        <li><a class="mobile-menu-link" href="{{ url("#") }}">Fees Reminder for the Academic Year {{ date('Y') }} - {{ substr(date('Y') + 1, -2) }}</a></li>
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
                        <a href="{{ url("#") }}"><i class="fa-brands fa-facebook"></i></a>
                        <a href="{{ url("#") }}"><i class="fa-brands fa-instagram"></i></a>
                        <a href="{{ url("#") }}"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="{{ url("#") }}"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
