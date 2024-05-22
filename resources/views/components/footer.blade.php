@php
$footerLinks = [
'Quick Links' => [
'EGSPEC Mail' => 'https://mail.google.com/a/egspec.org',
'Student Login' => 'http://example.com/student-login',
'Staff Login' => 'http://example.com/staff-login',
'Contact Us' => 'http://example.com/contact',
'DBS ATM' => 'http://example.com/dbs-atm',
'ERP' => 'http://example.com/erp',
'Pay Fees Online' => 'http://example.com/pay-fees',
'IT Policy' => 'http://example.com/it-policy',
'Careers' => 'http://example.com/careers',
'FAQ' => 'http://example.com/faq',
],
'Placement' => [
'Industry Partnership' => 'http://example.com/industry-partnership',
'MoU' => 'http://example.com/mou',
'Recruiters' => 'http://example.com/recruiters',
'Training Cell' => 'http://example.com/training-cell',
'Placement Team' => 'http://example.com/placement-team',
'Placement Statistics' => 'http://example.com/placement-statistics',
'Our Few of Recruiters' => 'http://example.com/our-recruiters',
],
'Important Links' => [
'AntiRagging' => 'http://example.com/antiragging',
'EGSP Transport' => 'http://example.com/transport',
'Privacy Policy' => 'http://example.com/privacy-policy',
'Terms & Conditions' => 'http://example.com/terms-conditions',
'Downloads' => 'http://example.com/downloads',
'Sitemap' => 'http://example.com/sitemap',
'Blog & Articles' => 'http://example.com/blog',
'Alumni' => 'http://example.com/alumni',
'Gallery & Media' => 'http://example.com/gallery-media',
'Social Media' => 'http://example.com/social-media',
],
'Feedback' => [
'Feedback on Curriculum' => 'http://example.com/feedback-curriculum',
'Students Feedbacks' => 'http://example.com/students-feedback',
'Staff Feedback' => 'http://example.com/staff-feedback',
'Grievance & Redressal' => 'http://example.com/grievance-redressal',
'Admission' => 'http://example.com/admission',
],
];
@endphp

@php
use Illuminate\Support\Facades\Http;

$country = 'Unknown';
$countryCode = '';

try {
    // Get the user's IP address
    $ipResponse = Http::timeout(10)->withoutVerifying()->get('https://api64.ipify.org/?format=json');
    $ipData = $ipResponse->json();
    $ipAddress = $ipData['ip'] ?? null;

    // Retrieve geolocation data based on the IP address
    if ($ipAddress) {
        $locationResponse = Http::timeout(10)->withoutVerifying()->get("http://www.geoplugin.net/json.gp?ip={$ipAddress}");
        $locationData = $locationResponse->json();
        $country = $locationData['geoplugin_countryName'] ?? 'Unknown';
    }

    // Retrieve country code from the geolocation data
    if ($country !== 'Unknown') {
        $countriesResponse = Http::withoutVerifying()->get('https://restcountries.com/v3.1/all');
        $countriesData = $countriesResponse->json();

        foreach ($countriesData as $data) {
            if (isset($data['name']['common']) && $data['name']['common'] === $country) {
                $countryCode = strtolower($data['cca2'] ?? '');
                break;
            }
        }
    } else {
        throw new Exception('Unable to retrieve country information');
    }
} catch (\Throwable $e) {
    // Log or handle the error as needed
    // You can leave it empty if you don't want to display errors to users
    $countryCode = null;
}



@endphp




<style>
    .social-copyright ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .social-copyright ul li {
        display: inline-block;
        margin-right: 10px;
        /* Adjust spacing between icons */
    }

    .social-copyright ul li:last-child {
        margin-right: 0;
        /* Remove margin from the last icon */
    }

    .social-copyright ul li a {
        color: #fff;
        /* Set icon color */
        font-size: 20px;
        /* Adjust icon size */
    }

    /* Adjust individual icon styles as needed */
    .social-copyright ul li a:hover {
        color: #FF0000;
        /* Change icon color on hover */
    }

    .country-copyright {
        margin-top: 3rem !important;
    }

    .country-copyright>.x {
        font-size: 17px !important;
        text-transform: uppercase !important;
    }


    .flag {
        width: auto;
        height: 1.5rem;
        margin-left: 0px;
    }

    .flex-align-center {
        align-items: center;
    }
</style>

<footer class="rts-footer v_1 pt--100 pb--80">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <!-- footer widget -->
                <div class="row gy-5 gy-lg-0">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="rts-footer-widget w-320">
                            <a href="index.html" class="d-block rts-footer-logo mb--40">
                                <img src="{{ asset('/assets/images/logo-white.svg') }}" alt="EGSPEC">
                            </a>

                            <div class="rts-contact-link">
                                <a href="mailto:principal@egspec.org"><i class="fa-sharp fa-light fa-envelope"></i>
                                    principal@egspec.org </a>
                                <a href="callto:121"><i class="fa-thin fa-phone"></i> 04365 251112 | 04365 251114 </a>

                                <div class="social-copyright">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>

                                <div class="country-copyright">

                                    @if($countryCode)
<div class="d-flex align-items-center x">
    <img class="flag" src="https://flagcdn.com/{{ $countryCode }}.svg" alt="{{ $country }} Flag">
    <span class="" style="margin-left: 0.5rem">{{ $country }}</span>
</div>
@else
<div class="d-flex align-items-center x">
    <span style="margin-left: 0.5rem">Sorry, unable to retrieve country information</span>
</div>
@endif

                                </div>

                            </div>
                        </div>
                    </div>

                    @foreach($footerLinks as $title => $links)
                    <div class="col-md-6 col-sm-6 col-lg-2">
                        <div class="rts-footer-widget">
                            <h6 class="rt-semi">{{ $title }}</h6>
                            <div class="rts-footer-menu">
                                <ul>
                                    @foreach($links as $linkTitle => $url)
                                    <li><a href="{{ $url }}" target="_parent">{{ $linkTitle }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-md-12 col-sm-6 col-lg-12">
                        <div class="custom-footer-widget">
                            <div class="custom-footer-menu">
                                <ul class="custom-footer-list">
                                    <li><a href="">RTI</a></li>
                                    <li><a href="">IQAC</a></li>
                                    <li><a href="">PMKK</a></li>
                                    <li><a href="">PMKVY</a></li>
                                    <li><a href="">AICTE</a></li>
                                    <li><a href="">Mandatory Disclosure</a></li>
                                    <li><a href="">NIRF Engineering Ranking</a></li>
                                    <li><a href="">Accreditation Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 col-lg-12">
                        <div class="custom-footer-widget ser">
                            <div class="custom-footer-menu">
                                <ul class="custom-footer-list">
                                    <li><a href="">Internal Complaints Committee</a></li>
                                    <li><a href="">All AICTE Approval Documents</a></li>
                                    <li><a href="">AICTE EGSPEC Video</a></li>
                                    <li><a href="">Governing Body Meeting</a></li>
                                    <li><a href="">Mandatory Disclosure</a></li>
                                    <li><a href="">NIRF Engineering Ranking</a></li>
                                    <li><a href="">Accreditation Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<div class="rts-footer-copy-right v_1">
    <div class="container">
        <div class="row">
            <div class="rt-center">
                <p style="font-weight: 600;" class="--p-xs">Copyright © 2006 - {{ date('Y') }} All
                    Rights Reserved by
                    <a href="https://egspgroup.in/" target="_blank">EGS Pillay Group of Institutions</a> | Developed By
                    <a href=""> Raghavan Jeeva </a>
                </p>
            </div>
        </div>
    </div>
</div>


