@php
$footerLinks = [
'Quick Links' => [
'EGSPEC Mail' => 'https://mail.google.com/a/egspec.org',
'Student Login' => '#',
'Staff Login' => '#',
'Contact Us' => url('/support/contact-us'),
'ERP' => 'http://edu.egspgroup.in/ERP',
'Pay Fees Online' => '#',
'IT Policy' => '#',
'Careers' => '#',
'FAQ' => url('/admissions/faq'),
],




'Placement' => [
'Industry Partnership' => url('/academics/industry-training-programs'),
'MoU' => url('/placements#memorandum-of-understanding'),
'Recruiters' => url('/placements#our-top-recruiters'),
'Training Cell' => '#',
'Placement Gallery' => url('/placements#placement-gallery'),
'Placement Team' => url('/placements#placementTeam'),
'Placement Statistics' => url('/placements#statistics'),
],
'Important Links' => [
'AntiRagging' => url('/activities/anti-ragging-committee'),
'NewsLetter' => url('/academics/newsletter'),
'EGSPGOI Transport' => ('/facilities/transport'),
// 'Downloads' => 'http://example.com/downloads',
'Blog & Articles' => 'http://example.com/blog',
'Alumni' => 'http://example.com/alumni',
'Gallery & Media' => 'http://example.com/gallery-media',
'Social Media' => url('/institution/social-media'),
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




<footer class="rts-footer v_1 pt--100 pb--80">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <!-- footer widget -->
                <div class="row gy-5 gy-lg-0">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="rts-footer-widget w-320">
                            <a href="index.html" class="d-block rts-footer-logo mb--40">
                                <picture>
                                    <source srcset="{{ asset('/assets/images/logo-white.svg') }}" type="image/svg">
                                    <img src="{{ asset('/assets/images/logo-white.svg') }}" alt="EGSPEC" class="img-fluid">
                                </picture>

                            </a>

                            <div class="rts-contact-link">
                                <a href="mailto:principal@egspec.org"><i class="fa-sharp fa-light fa-envelope"></i>
                                    principal@egspec.org </a>
                                <a href="callto:8680954537"><i class="fa-thin fa-phone"></i> 7373 067 032 | 8680 954 537 </a>

                                <div class="social-copyright">
                                    <ul>
                                        <li><a href="https://www.facebook.com/EGSPGOI/" aria-label="Facebook Page"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/egspillay_group_of_institution/?hl=en" aria-label="Instagram Profile"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="https://in.linkedin.com/company/egspgoi" aria-label="LinkedIn Page"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="https://www.whatsapp.com/channel/0029VaoAlde2Jl8HS9im7X2G" aria-label="WhatsApp Channel"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        <li><a href="https://www.youtube.com/@E.G.S.PillayGroupofInstitution" aria-label="YouTube Channel"><i class="fa-brands fa-youtube"></i></a></li>

                                    </ul>
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
                                    <li><a href="{{url('/right-to-information')}}">RTI</a></li>
                                    <li><a href="{{url('/iqac/committe-members')}}">IQAC</a></li>
                                    <li><a href="{{url('/skill-development-center/pradhan-mantri-kaushal-kendra')}}">PMKK</a></li>
                                    <li><a href="{{url('/skill-development-center/pradhan-mantri-kaushal-vikas-yojana')}}">PMKVY</a></li>
                                    <li><a href="{{url('/affiliation/approved/aicte')}}">AICTE</a></li>
                                    <li><a href="{{url('/mandatory-disclosure')}}">Mandatory Disclosure</a></li>
                                    <li><a href="{{url('/national-institutional-ranking-framework')}}">NIRF Engineering Ranking</a></li>
                                    <li><a href="{{url('/affiliation/approved/accreditation-status')}}">Accreditation Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 col-lg-12">
                        <div class="custom-footer-widget ser">
                            <div class="custom-footer-menu">
                                <ul class="custom-footer-list">
                                    <li><a href="{{url('/activities/cells/internal-complaints-committee')}}">Internal Complaints Committee</a></li>
                                    <li><a href="https://firebasestorage.googleapis.com/v0/b/egspj-bumblebees.appspot.com/o/egspec-assets%2Fpdf%2FM_AiCTE_Approval.pdf?alt=media&token=20146981-a33f-4b95-bd49-3567ac5c207d" target="_blank" rel="noopener noreferrer">All AICTE Approval Documents</a></li>
                                    <li><a href="{{url('/affiliation/aicte-egspec-video')}}">AICTE EGSPEC Video</a></li>
                                    <li><a href="{{url('/meeting-minutes/governing-body')}}">Governing Body Meeting</a></li>


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
        <div class="row justify-content-between">
            <div class="col-md-6">
                <p style="font-weight: 600;" class="--p-xs">Copyright © 2006 - {{ date('Y') }} All
                    Rights Reserved by
                    <a href="https://egspgroup.in/" target="_blank">EGS Pillay Group of Institutions</a> <br> Developed By
                    <a href="https://jsraghavan.me/" target="_blank" @readonly(true) referrerpolicy="no-referrer"> Raghavan Jeeva </a> | <a href="https://egspec.statuspage.io/" target="_blank" @readonly(true) referrerpolicy="no-referrer">Status Page</a>
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <p style="font-weight: 600;" class="--p-xs">
                    <a href="{{route('sitemap.index')}}">Sitemap</a> |
                    <a href="{{route('privacy_policy')}}">Privacy Policy</a> |
                    <a href="{{route('terms_conditions')}}">Terms &amp; Conditions</a> |
                    <a href="{{route('contact_website_admin')}}">Contact Web Admin</a>
                    <br>
                    <a href=""> Website last updated on: <span style="color: #a19f9d;"> {{ getLastCommitDate() }} </span></a>

                </p>
            </div>
        </div>
    </div>
</div>


{{-- <div class="rts-footer-copy-right v_1">
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
</div> --}}




