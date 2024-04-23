@extends('layouts.app')
@section('content')
@include('components.breadcrumb', [
'value_1' => 'Activities',
'value_2' => 'Extra-Curricular',
'value_3' => '',
'page_title' => 'NSS & Red Ribbon Club'
])
<section class="rts-about-university pt--100 pb--80">
   <div class="container">
      <div class="row">
         <div class="rts-section">
            <div class="col-lg-4 col-md-3 col-sm-12 text-center">
               <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="egspec_d_velavan_director_physical_education_department" class="img-fluid rounded-circle" style="max-width: 200px;">
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12">
               <div class="rts-section-description">
                  <div class="profile-info">
                     <h5 class="profile-name">Mr. V. Sivaramakrishnan, M.E., (Ph.D.,) - Professor</h5>
                     <p class="profile-role"> Assistant Professor / Mechanical Engineering</p>
                     {{--
                     <p class="profile-location">EGS Pillay Engineering College, Nagapattinam</p>
                     <p class="profile-contact">Phone: 9942997667 | Email: velavan157@gmail.com</p>
                     --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="container">
            <div class="row">
               <h3 class="rts-section-title animated fadeIn">Vision</h3>
               <p class="desc">
                  The National Service Scheme has a vision of mobilizing available resources to enable targeted young people, to become more educated and better prepared for national issues requiring urgent attention, through national service activities in deprived areas, within reasonable congenial conditions.
               </p>
            </div>
         </div>
      </div>
      <div class="row pt--30">
         <div class="container">
            <div class="row">
               <div class="program-description-area" id="curriculum">
                  <div class="program-about">
                     <h3 class="rts-section-title animated fadeIn">Mission</h3>
                     <p> National Service is committed to deploying young graduates and diplomats of tertiary institutions on national service countrywide to supplement manpower shortfall and to provide re-orientation and entrepreneurial skills for post-national service employment, through Community Development Programmes. This deployment would be done within a better-equipped administrative and institutional framework, towards a more efficient National Service Programme, managed by a well-motivated programme officer, towards increased productivity.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row pt--30">
        <div class="container">
           <div class="row">
            <div class="program-about">
                <h4 class="animated fadeIn">Objective</h4>
                <p>
                    The Scheme’s initial objective includes three major objectives as follows:
                </p>
             </div>
            <div class="rts-scholarship ">
                <div class="container">
                    <div class="rts-scholarship-description">

                        <div class="row justify-content-md-center justify-content-start">

                            <div class="program-description-area">



                                <div class="si">


                                    <div class="si__list">
                                        <ul class="list-unstyled">
                                            <li class="si__list--single">
                                                To provide trained manpower to supplement and improve existing level of manpower mainly in the public sector
                                            </li>
                                            <li class="si__list--single">
                                                To provide personnel for rural development and community action
                                            </li>
                                            <li class="si__list--single">
                                                To provide individual youth with Re-orientation
                                            </li>
                                            <li class="si__list--single">
                                                Introduction to a vigorous work culture
                                            </li>
                                            <li class="si__list--single">
                                                Additional life skills
                                            </li>
                                            <li class="si__list--single">
                                                An awareness of national and social problems requiring attention
                                                dents managing skills, Confidence and earning skills to a sufficient level to become a self entrepreneur.
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
     </div>


     <div class="row pt--30">
        <div class="container">
           <div class="row">
            <div class="program-about">
                <h4 class="animated fadeIn">Red Ribbon Club Activities Include</h4>
                <p>
                    <p class="rt-regular">Our <span style="color: var(--rt-theme);"> #egspian </span> RRC Activities</p>
                </p>
             </div>
            <div class="rts-scholarship ">
                <div class="container">
                    <div class="rts-scholarship-description">

                        <div class="row justify-content-md-center justify-content-start">

                            <div class="program-description-area">



                                <div class="si">


                                    <div class="si__list">
                                        <ul class="list-unstyled">
                                            <li class="si__list--single">
                                                Eye Camp was conducted in every year
                                            </li>
                                            <li class="si__list--single">
                                                Blood Donation Camp Seminar
                                            </li>
                                            <li class="si__list--single">
                                                AIDS Awareness Programme
                                            </li>
                                            <li class="si__list--single">
                                                Tsunami Relief Activities
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
     </div>



   </div>
   </div>
</section>


<div class="semister-fee pb--120 pb__md--80">
    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">Athletes And Achievements</h5>
                <p class="rt-regular"> <span style="color: var(--rt-theme);"> #egspian </span> Athletes And Achievements</p>
                <!-- tab item -->
                <div class="rts-fee-chart">
                    <div class="rts-fee-chart__tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist"> <!-- Updated id attribute -->
                                @php $years = []; @endphp
                                @foreach($NssandRRC as $b)
                                    @unless(in_array($b->year, $years))
                                        <button class="nav-link" id="a-{{$b->year}}-tab" data-bs-toggle="tab" data-bs-target="#a-{{$b->year}}" type="button" role="tab" aria-controls="a-{{ $b->year }}" aria-selected="true">{{ implode(' - ', explode('-', $b->year)) }}</button>
                                        @php $years[] = $b->year; @endphp
                                    @endunless
                                @endforeach
                            </div>
                        </nav>
                    </div>
                    <div class="rts-fee-chart__content" id="nav-tabContent2"> <!-- Updated id attribute -->
                        <div class="tab-content">
                            @foreach($years as $key => $year)
                                <div class="tab-pane fade @if($key === 0) show active @endif" id="a-{{ $year }}" role="tabpanel" aria-labelledby="a-{{ $year }}-tab">
                                    <div class="program-credit-area">
                                        <div class="program-accordion my-5">
                                            <div class="accordion" id="rts-accordion">
                                                <div class="accordion-item">
                                                    <div>
                                                        <div class="accordion-body-content">
                                                            <table class="table">
                                                                <tbody>
                                                                    @foreach($NssandRRC as $b)
                                                                        @if($b->year == $year)
                                                                        <tr>
                                                                            <td><a href="{{ $b->pdf_url }}" target="_blank" type="application/pdf" rel="alternate" media='print'> {{ $b->year }} </a></td>
                                                                            <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                                        </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iframe-div">
                                        @foreach($NssandRRC as $b)
                                            @if($b->year == $year)
                                            <iframe src="https://drive.google.com/viewerng/viewer?embedded=true&amp;url={{ $b->pdf_url }}#toolbar=0&amp;scrollbar=0" frameborder="0" scrolling="auto" height="100%" width="100%" style="height: 100rem !important;"></iframe>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
   // Add JavaScript to handle tab navigation and displaying corresponding data
   document.addEventListener('DOMContentLoaded', function() {
       const tabs = document.querySelectorAll('.nav-link');
       tabs.forEach(tab => {
           tab.addEventListener('click', function() {
               const targetId = this.getAttribute('data-bs-target');
               const tabPane = document.querySelector(targetId);
               const activeTab = document.querySelector('.nav-link.active');
               const activeTabPane = document.querySelector('.tab-pane.active');

               activeTab.classList.remove('active');
               activeTab.setAttribute('aria-selected', 'false');
               activeTabPane.classList.remove('active', 'show');

               this.classList.add('active');
               this.setAttribute('aria-selected', 'true');
               tabPane.classList.add('active', 'show');
           });
       });
   });
</script>
@include('components.cta')
@endsection
