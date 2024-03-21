@php
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

try {
// Disable SSL verification (not recommended for production)
$ipResponse = Http::timeout(10)->withoutVerifying()->get('https://api64.ipify.org/?format=json');
$ipData = $ipResponse->json();

// Extract the IP address from the response
$ipAddress = $ipData['ip'];

// Make a request to the geoplugin API to get location information based on IP
$locationResponse = Http::timeout(10)
->withoutVerifying()
->get("http://www.geoplugin.net/json.gp?ip={$ipAddress}");
$locationData = $locationResponse->json();

// Check if the 'geoplugin_countryName' key exists in the response
$country = isset($locationData['geoplugin_countryName']) ? $locationData['geoplugin_countryName'] : 'Unknown';

$countryCode = '';

$countriesResponse = Http::withoutVerifying()->get('https://restcountries.com/v3.1/all');
$countriesData = $countriesResponse->json();

foreach ($countriesData as $data) {
if ($data['name']['common'] == $country) {
$countryCode = strtolower($data['cca2']); // Get the country code
break;
}
}
} catch (ConnectionException $e) {
// Handle connection timeout error
$country = 'Unknown';
$countryCode = '';
}
@endphp

<header id="rt-header" class="header-one header--sticky">
    <div class="header-top-one-wrapper hide-on-mobile rt-primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-one">
                        <div class="left-information">
                            <a href="mailto:someone@example.com" class="email"><i
                                    class="fa-light fa-envelope"></i>enquires@egspec.org</a>
                            <a href="tel:+914365251114" class="email"><i class="fa-light fa-phone"></i>+91 4365 251 114</a>
                        </div>
                        <!-- right area -->
                        <div class="right-information">
                            <ul class="rts-dropdown-menu language-switch">

                               @if ($countryCode)
                                <div class="d-flex align-items-center" style="font-size: 15px !important;">
                                    <img class="flag" src="https://flagcdn.com/{{ $countryCode }}.svg" alt="{{ $country }} Flag">

                                    <span class="" style="margin-left: 0.5rem">{{ $country }}</span>
                                </div>
                                @endif

                            </ul>
                            <ul class="rts-dropdown-menu switcher-currency">
                                <li class="has-child-menu">
                                    <a href="#">
                                        <span class="menu-item">Login</span> | <span class="menu-item">Register</span>

                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-one-wrapper">
                    <div class="left-side-header">
                        <a href="{{ url("/") }}" class="logo-area">
                            <img class="logo" src="{{ asset("/assets/images/logo_tran.png") }}" alt="logo">
                        </a>
                    </div>

                    <div class="main-nav-one">



                        <nav>
                            <ul>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">About</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url("#") }}">Founder Chairperson’s Message</a></li>
                                        <li><a href="{{ url("#") }}">Chairman’s Message</a></li>
                                        <li><a href="{{ url("#") }}">Director’s Message</a></li>
                                        <li><a href="{{ url("#") }}">Principal’s Message</a></li>
                                        <li><a href="{{ url("#") }}">About the Group</a></li>
                                        <li><a href="{{ url("#") }}">About the College</a></li>
                                        <li><a href="{{ url("#") }}">Awards & Achievements</a></li>
                                        <li><a href="{{ url("#") }}">Administration</a></li>
                                        <li><a href="{{ url("#") }}">Tribute to Our Founder</a></li>
                                        <li><a href="{{ url("#") }}">Objectives</a></li>
                                        <li><a href="{{ url("#") }}">Strategic Plan</a></li>
                                        <li><a href="{{ url("#") }}">Affiliation & Approvals</a></li>
                                        <li><a href="{{ url("#") }}">Core Values</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Academics</a>
                                    <ul class="submenu">
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Departments</a>
                                            <ul class="submenu third-lvl base">
                                                <li class="">
                                                    <a href="{{ url("#") }}">B.E / B.Tech</a>
                                                    <ul class="submenu">
                                                        {{--
                                                        <li><a href="{{ url("#") }}">Mechanical Engineering</a></li>
                                                        <li><a href="{{ url("#") }}">Civil Engineering</a></li>
                                                        <li><a href="{{ url("#") }}">Electrical and Electronics
                                                                Engineering</a></li>
                                                        <li><a href="{{ url("#") }}">Electronics and Communication
                                                                Engineering</a></li>
                                                        <li><a href="{{ url("#") }}">Computer Science and Engineering</a>
                                                        </li>
                                                        <li><a href="{{ url("#") }}">Information Technology</a></li>
                                                        <li><a href="{{ url("#") }}">Biomedical Engineering</a></li>
                                                        <li><a href="{{ url("#") }}">Computer Science & Business Systems
                                                                Engineering</a></li>
                                                        --}}
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <a href="{{ url("#") }}">M.E / M.Tech</a>
                                                    <ul class="submenu">
                                                        {{--
                                                        <li><a href="{{ url("#") }}">Manufacturing Engineering</a></li>
                                                        <li><a href="{{ url("#") }}">Computer Science and Engineering</a>
                                                        </li>
                                                        <li><a href="{{ url("#") }}">Power Electronics and Drives</a></li>
                                                        <li><a href="{{ url("#") }}">Communication Systems</a></li>
                                                        <li><a href="{{ url("#") }}">Environmental Engineering</a></li>
                                                        --}}
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url("#") }}">MCA</a></li>
                                                <li><a href="{{ url("#") }}">MBA</a></li>
                                                <li><a href="{{ url("#") }}">Science & Humanities</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Industry Academic Partners</a></li>
                                        <li><a href="{{ url("#") }}">Industry Certification Programmes</a></li>
                                        <li><a href="{{ url("#") }}">Industry Training Programmes</a></li>
                                        <li><a href="{{ url("#") }}">Advisory Board</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Admissions</a>
                                    <ul class="submenu">
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Information Brochure</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">UG Broucher</a></li>
                                                <li><a href="{{ url("#") }}">PG Broucher</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Courses</a></li>
                                        <li><a href="{{ url("#") }}">TNEA 2023 Information</a></li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Admission Procedure</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">UG</a></li>
                                                <li><a href="{{ url("#") }}">PG</a></li>
                                                <li><a href="{{ url("#") }}">Lateral Entry</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Eligibility Criteria</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">UG</a></li>
                                                <li><a href="{{ url("#") }}">PG</a></li>
                                                <li><a href="{{ url("#") }}">Lateral Entry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Sports Quota Admission</a></li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Scholarships</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">Sports Quota Scholarship 2024</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Why Study Here</a></li>
                                        <li><a href="{{ url("#") }}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Facilities</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url("#") }}">Infrastructure</a></li>
                                        <li><a href="{{ url("#") }}">Indoor Stadium</a></li>
                                        <li><a href="{{ url("#") }}">Basketball Court</a></li>
                                        <li><a href="{{ url("#") }}">Laboratries</a></li>
                                        <li><a href="{{ url("#") }}">Hostel</a></li>
                                        <li><a href="{{ url("#") }}">Library</a></li>
                                        <li><a href="{{ url("#") }}">Transport</a></li>
                                        <li><a href="{{ url("#") }}">Cafeteria</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Activities</a>
                                    <ul class="submenu">
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Extra-Curricular</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">Sports</a></li>
                                                <li><a href="{{ url("#") }}">NSS & Red Ribbon Club</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Co-Curricular</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">Workshop</a></li>
                                                <li><a href="{{ url("#") }}">Symposium</a></li>
                                                <li><a href="{{ url("#") }}">Conference</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Cells</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">Entrepreneurship Development Cell</a></li>
                                                <li><a href="{{ url("#") }}">Women Empowerment Cell</a></li>
                                                <li><a href="{{ url("#") }}">Internal Complaints Committee</a></li>
                                                <li><a href="{{ url("#") }}">Career Guidance Cell</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Professional Bodies</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">IEEE</a></li>
                                                <li><a href="{{ url("#") }}">ISTE</a></li>
                                                <li><a href="{{ url("#") }}">ICTACT</a></li>
                                                <li><a href="{{ url("#") }}">CSI</a></li>
                                                <li><a href="{{ url("#") }}">IETE</a></li>
                                                <li><a href="{{ url("#") }}">IEI</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Anti Ragging Committee</a></li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">ISO</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">Coordinators</a></li>
                                                <li><a href="{{ url("#") }}">Certificate</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Discipline Committee</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Placements</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url("#") }}">Industry Partnership & Corporate Affairs (Placement &
                                                Training)</a></li>
                                        <li><a href="{{ url("#") }}">MoU</a></li>
                                        <li><a href="{{ url("#") }}">Recruiters</a></li>
                                        <li><a href="{{ url("#") }}">Training Cell</a></li>
                                        <li><a href="{{ url("#") }}">Placement Team</a></li>
                                        <li><a href="{{ url("#") }}">Placement Statistics</a></li>
                                        <li><a href="{{ url("#") }}">Our Few Of Recruiters</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Research</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url("#") }}">Team Members</a></li>
                                        <li><a href="{{ url("#") }}">Research Supervisor and Scholar</a></li>
                                        <li><a href="{{ url("#") }}">Publications</a></li>
                                        <li class="sub-dropdown">
                                            <a href="{{ url("#") }}">Projects</a>
                                            <ul class="submenu third-lvl base">
                                                <li><a href="{{ url("#") }}">MECH</a></li>
                                                <li><a href="{{ url("#") }}">CIVIL</a></li>
                                                <li><a href="{{ url("#") }}">EEE</a></li>
                                                <li><a href="{{ url("#") }}">ECE</a></li>
                                                <li><a href="{{ url("#") }}">CSE</a></li>
                                                <li><a href="{{ url("#") }}">IT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url("#") }}">Patents</a></li>
                                        <li><a href="{{ url("#") }}">Copy Rights</a></li>
                                        <li><a href="{{ url("#") }}">R & D Policy</a></li>
                                    </ul>
                                </li>
                                {{--
                                <li class="">
                                    <a class="nav-link" href="{{ url("#") }}">Alumni</a>
                                </li>
                                <li class="has-dropdown">
                                    <a class="nav-link" href="{{ url("#") }}">Downloads</a>
                                </li>
                                --}}
                                <li class="has-dropdown">
                                    <a href="{{ url("#") }}">Circular</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url("#") }}">Anna University Circular</a></li>
                                        <li><a href="{{ url("#") }}">UGC Guidelines</a></li>
                                        <li><a href="{{ url("#") }}">Fees Reminder for the Academic Year 2024-25</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>




                    </div>

                    <div class="header-right-area-one">
                        <div class="header-right-content">

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

<style>

    @media screen and (min-width: 992px) {
    .header-right-area-one {
    display: none;
    }
    }

   @media only screen and (max-width: 991px) {
.hide-on-mobile {
display: none !important;
}
}


/* Default logo styles for wide screens */
.logo {
width: 380px; /* Example width for wide screens */
height: auto; /* Adjust height automatically */
/* Add any other styles for wide screens */
}

/* Media query for mobile screens */
@media only screen and (max-width: 767px) {
.logo {
width: 220px; /* Example width for mobile screens */
height: auto; /* Adjust height automatically */
/* Add any other styles for mobile screens */
}
}

.flag {
width: auto;
height: 1.5rem;
margin-left: 5px;
}

.flex-align-center {
align-items: center;
}
</style>
