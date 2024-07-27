@extends('layouts.app')

@section('content')
@include('components.breadcrumb', [
    'value_1' => 'Academics',
    'value_2' => 'Departments',
    'value_3' => 'Civil Engineering',
    'page_title' => 'Research and Publications'
])

<div class="rts-program rts-section-padding">
   <div class="container">
      <div class="rts-program-description">
         <div class="row">
            <div class="col-lg-8">
                <div class="program-description-area">
                    <div class="program-credit-area">
                        <h3 class="rts-section-title animated fadeIn">Research & Publications</h3>
                        <div class="program-accordion my-5">
                            <div class="accordion" id="rts-accordion">
                                <div class="accordion-item">
                                    <div>
                                        <div class="accordion-body-content">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td><a href="@blob('academics/departments/undergraduate/civil-engineering/research-publications/publications-2021-2022.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>Publications 2021-2022</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="@blob('academics/departments/undergraduate/civil-engineering/research-publications/publications-2022-2023.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>Publications 2022-2023</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="@blob('academics/departments/undergraduate/civil-engineering/research-publications/publications-2023-2024.pdf')" target="_blank" type="application/pdf" rel="alternate" media='print'>Publications 2023-2024</a></td>
                                                        <td><i class="fa fa-file-pdf"></i> / PDF File</td>
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

                <div class="page-content-top semister-fee">
                   <div class="row">
                    <div class="semister-fee__content">
                        <h5 class="rts-section-title">Publications</h5>

                        <!-- Tab item -->
                        <div class="rts-fee-chart">
                            <div class="rts-fee-chart__tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach(['2021-2022', '2020-2021', '2019-2020', '2018-2019', '2017-2018'] as $year)
                                            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $year }}" data-bs-toggle="tab" data-bs-target="#content-{{ $year }}" type="button" role="tab" aria-controls="content-{{ $year }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $year }}</button>
                                        @endforeach
                                    </div>
                                </nav>
                            </div>
                            <div class="rts-fee-chart__content" id="nav-tabContent">
                                @foreach(['2021-2022', '2020-2021', '2019-2020', '2018-2019', '2017-2018'] as $year)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="content-{{ $year }}" role="tabpanel" aria-labelledby="tab-{{ $year }}">
                                        {{-- <h5 class="rts-section-title">{{ $year }}</h5> --}}
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name of the Authors</th>
                                                        <th>Title of the paper published</th>
                                                        <th>Journal</th>
                                                        <th>Volume Issue No</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($year == '2021-2022')
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>R.Sivakumar</td>
                                                            <td>Effect of Tungsten Carbide Addition on the Microstructure and Mechanical Behavior of Titanium Matrix Developed by Powder Metallurgy Route</td>
                                                            <td>Advances in Materials Science and Engineering</td>
                                                            <td>Vol.2022</td>
                                                            <td>March 2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>S.Santhoshkumar</td>
                                                            <td>Flexural Performance of Recycled Coarse Beams Made With Recycled Coarse Aggregate Incorporating Alccofine</td>
                                                            <td>Journal of Environmental Protection and Ecology</td>
                                                            <td>Vol.23, No.1, pp.119–129</td>
                                                            <td>February 2022</td>
                                                        </tr>
                                                    @elseif($year == '2020-2021')
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.294">Flexural Improving the performance of
                                                           mortar containing industrial
                                                           wastes
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.289">Effect of steel fibre on fracture
                                                           toughness of concrete
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.279">Experimental investigation of
                                                           sustainable concrete by partial
                                                           replacement of fine aggregate
                                                           with treated waste tyre rubber
                                                           by acidic nature
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.284">Experimental study on effects
                                                           of natural admixture on
                                                           blended mortar
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.293">Natural admixture in blended
                                                           mortar-mechanical properties
                                                           study
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.295">Experimental investigation on
                                                           strength and properties of
                                                           natural fibre reinforced cement
                                                           mortar
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.292">Experimental study on mortar
                                                           as partial replacement using
                                                           sawdust powder and GGBS
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.287">Experimental study of an ecofriendly concrete by inbuilt
                                                           with treated crumb rubber
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.278">Effect of micro silica and ground granulated blast furnace slag on performance of rubberized mortar
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.288">Experimental investigation of
                                                           concrete incorporating HDPE
                                                           plastic waste and metakaolin
                                                           </a>
                                                        </td>
                                                        <td>Materials Today:
                                                           Proceedings
                                                        </td>
                                                        <td>Volume 37
                                                           Part 2
                                                        </td>
                                                        <td>February 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>13</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://solacolu.chim.upb.ro/pg17-24.pdf">Sustainable Characteristics of
                                                           Fly Ash Based Geopolymer
                                                           Concrete Incorporating
                                                           Alccofine, Zeolite and Rubber
                                                           Fibers
                                                           </a>
                                                        </td>
                                                        <td>Romanian Journal
                                                           of Materials
                                                        </td>
                                                        <td>Volume 51
                                                           Issue 1
                                                           pp.17-24
                                                        </td>
                                                        <td>January 2021</td>
                                                     </tr>
                                                     <tr>
                                                        <td>13</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.eti.2020.101158">Prosopisjuliflora fibre
                                                           reinforced green building
                                                           plaster materials – an ecofriendly weed control
                                                           technique by effective
                                                           utilization
                                                           </a>
                                                        </td>
                                                        <td>Environmental
                                                           Technology &amp;
                                                           Innovation
                                                           (Elsevier)
                                                        </td>
                                                        <td>Vol. 20,
                                                           pp. 1-10
                                                        </td>
                                                        <td>November 2020</td>
                                                     </tr>
                                                     <tr>
                                                        <td>13</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://solacolu.chim.upb.ro/pg531-536.pdf">Effect of fly ash and
                                                           metakaolin on the strength and
                                                           stability Characteristics of Self
                                                           Compacting Concrete
                                                           </a>
                                                        </td>
                                                        <td>Romanian Journal
                                                           of Materials
                                                        </td>
                                                        <td>Vol.50 No.04,
                                                           pp. 531-536
                                                        </td>
                                                        <td>October 2020</td>
                                                     </tr>
                                                     <tr>
                                                        <td>13</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://www.proquest.com/docview/2445994136?pq-origsite=gscholar&amp;fromopenview=true">Mutual Effect of Coal Bottom
                                                           Ash and Recycled Fines on
                                                           Reactive Powder Concrete
                                                           </a>
                                                        </td>
                                                        <td>Romanian Journal
                                                           of Materials
                                                        </td>
                                                        <td>Vol. 50,
                                                           pp. 395-402
                                                        </td>
                                                        <td>July 2020</td>
                                                     </tr>
                                                     @elseif($year == '2019-2020')
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://solacolu.chim.upb.ro/pg175-182.pdf">Effect of Elevated
                                                           Temperatures on The
                                                           Properties of Nano Alumina
                                                           Modified Concrete Containing
                                                           Zircon Sand as Fine Aggregate
                                                           </a>
                                                        </td>
                                                        <td>Romanian Journal
                                                           of Materials
                                                        </td>
                                                        <td>Vol. 50,
                                                           pp. 175-182
                                                        </td>
                                                        <td>April 2020</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>N.Sakthieswaran</td>
                                                        <td><a href="https://doi.org/10.1016/j.matpr.2020.06.289">Copper Slag-Silica Fume
                                                           blended fibre Concrete - An
                                                           Eco-friendly Healthy
                                                           alternative for conventional
                                                           Cement Concrete
                                                           </a>
                                                        </td>
                                                        <td>Romanian Journal
                                                           of Materials
                                                        </td>
                                                        <td>Vol. 50,
                                                           pp. 81-89
                                                        </td>
                                                        <td>January 2020</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Adhavanathan, T.Neelaveni, R.</td>
                                                        <td><a href="http://ir.lib.seu.ac.lk/handle/123456789/3921">Experimental study on Fibre
                                                           and Fly Ash based interlocking
                                                           bricks</a>
                                                        </td>
                                                        <td>South Eastern
                                                           University of Sri
                                                           Lanka, University
                                                           Park, Oluvil, Sri
                                                           Lanka
                                                        </td>
                                                        <td>9th
                                                           International
                                                           Symposium
                                                           pp.94-100
                                                        </td>
                                                        <td>November 2019</td>
                                                     </tr>

                                                     @elseif($year == '2018-2019')

                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://www.sciencedirect.com/science/article/abs/pii/S0959652619305086">Waste Shell Powders as
                                                           Valuable Bio- Filler in
                                                           Gypsum Plaster – Efficient
                                                           Waste management Technique
                                                           by Effective Utilization</a>
                                                        </td>
                                                        <td>Journal of Cleaner
                                                           Production
                                                           (Elsevier)
                                                        </td>
                                                        <td>Vol. 220,
                                                           pp. 74-86
                                                        </td>
                                                        <td>May 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://pubmed.ncbi.nlm.nih.gov/31499634/">An approach to study the interrelationship between
                                                           Mechanical and Durability
                                                           properties of Ternary blended
                                                           cement concrete using linear
                                                           Regression Analysis</a>
                                                        </td>
                                                        <td>Mathematical
                                                           Biosciences and
                                                           Engineering
                                                        </td>
                                                        <td>Vol. 16,
                                                           no.5,
                                                           pp. 3734 -
                                                           3752
                                                        </td>
                                                        <td>April 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://www.sciencedirect.com/science/article/abs/pii/S0959652619305086">Waste Shell Powders as
                                                           Valuable Bio- Filler in
                                                           Gypsum Plaster – Efficient
                                                           Waste management Technique
                                                           by Effective Utilization</a>
                                                        </td>
                                                        <td>Journal of Cleaner
                                                           Production
                                                           (Elsevier)
                                                        </td>
                                                        <td>Vol. 220,
                                                           pp. 74-86
                                                        </td>
                                                        <td>May 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://doi.org/10.1016/j.conbuildmat.2019.01.160">Synergistic effect of mineral
                                                           admixture and bio-carbonate
                                                           fillers on the physicomechanical properties of
                                                           gypsum plaster’, Construction
                                                           and Building Materials
                                                           (Elsevier)
                                                           </a>
                                                        </td>
                                                        <td>Materials
                                                           (Elsevier)
                                                        </td>
                                                        <td>Vol. 179,
                                                           pp.419 - 439
                                                        </td>
                                                        <td>April 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://www.mdpi.com/1996-1944/12/4/645">Experimental investigations on
                                                           the properties of epoxy resin
                                                           bonded cement concrete
                                                           containing sea sand as fine
                                                           aggregate</a>
                                                        </td>
                                                        <td>Materials (MDPI)</td>
                                                        <td>Vol.12,
                                                           pp. 1-14
                                                        </td>
                                                        <td>February 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://doi.org/10.3390/ma12030476">Synergistic effect of marble
                                                           powder and green sand on the
                                                           mechanical properties of
                                                           metakaolin-cement concrete</a>
                                                        </td>
                                                        <td>Materials (MDPI)</td>
                                                        <td>Vol.12,
                                                           pp. 1-17
                                                        </td>
                                                        <td>February 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Sakthieswaran.N</td>
                                                        <td><a href="https://doi.org/10.3390/ma12030437">Performance of Nano-Silica Modified Self-Compacting Glass Mortar at Normal and Elevated Temperatures</a></td>
                                                        <td>Journal of Cleaner
                                                           Production
                                                           (Elsevier)
                                                        </td>
                                                        <td>Vol.12,
                                                           pp. 1-15
                                                        </td>
                                                        <td>January 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>V.Sekaran</td>
                                                        <td>Impact of Check Dam in
                                                           Groundwater level and Water
                                                           Quality of Vaigai River
                                                           Madurai District, Tamil Nadu,
                                                           India
                                                        </td>
                                                        <td>Indian Journal of
                                                           Ecology
                                                        </td>
                                                        <td>Vol.46, No1
                                                           pp.29-33
                                                        </td>
                                                        <td>January 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>V.Sekaran</td>
                                                        <td>Assessment of Ground Water
                                                           Quality Based on Socio
                                                           Economical Activities in
                                                           Cauvery River Bed of Tamil
                                                           Nadu
                                                        </td>
                                                        <td>Indian Journal of
                                                           Ecology
                                                        </td>
                                                        <td>Vol.46, No.1
                                                           pp. 23-28
                                                        </td>
                                                        <td>January 2019</td>
                                                     </tr>
                                                     <tr>
                                                        <td>1.</td>
                                                        <td>Dr. R.ELLISS YOGESH</td>
                                                        <td>Compressive Strength of Concrete
                                                           Using Sea Sand as a Partial
                                                           Replacement for Fine Aggregate
                                                        </td>
                                                        <td>IJSART</td>
                                                        <td>Vol. 4 &amp; ISSN
                                                           2395-1052
                                                        </td>
                                                        <td>Oct - 2018</td>
                                                     </tr>

                                                     @elseif($year == '2017-2018')


                                                     <tr>
                                                        <td>1.</td>
                                                        <td>M.GAYATHRI</td>
                                                        <td>Potential Application of Orange Peel
                                                           as an Adsorbent for the Polluted
                                                           Pond Water
                                                        </td>
                                                        <td>IJSRD</td>
                                                        <td>Vol. 5 &amp; ISSN
                                                           2321-0613
                                                        </td>
                                                        <td>Sep - 2017</td>
                                                     </tr>
                                                     <tr>
                                                        <td>2.</td>
                                                        <td>M.SUBITHA
                                                           DEENESHWARI
                                                        </td>
                                                        <td>Vibration control of Rectangular
                                                           Liquid Storage Tank
                                                           Concrete
                                                        </td>
                                                        <td>JETIR</td>
                                                        <td>Vol. 4 &amp; ISSN 2349-5162</td>
                                                        <td>Nov – 2017</td>
                                                     </tr>
                                                     <tr>
                                                        <td>3.</td>
                                                        <td>T.ADHAVANATHAN</td>
                                                        <td>Studies on Properties of coir fiber
                                                           Reinforced Self Compacting
                                                           Concrete
                                                        </td>
                                                        <td>IJSTE</td>
                                                        <td>Vol. 4 &amp; ISSN
                                                           2349-784X
                                                        </td>
                                                        <td>Mar - 2017</td>
                                                     </tr>

                                                    @else
                                                        <tr>
                                                            <td colspan="6">No publications available for this year.</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                   </div>
                </div>

            </div>


            <div class="col-lg-4">
                <div class="program-sidebar">
                    <!-- curriculum -->
                    <div class="program-curriculum">
                        <h6 class="heading-title">Department Quick Links</h6>
                        <div class="program-menu">
                            <ul class="list-unstyled">
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering')}}"><span><i class="fa-light fa-arrow-right"></i></span>About</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/department-highlights')}}"><span><i class="fa-light fa-arrow-right"></i></span>Department Highlights</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/hods-desk')}}"><span><i class="fa-light fa-arrow-right"></i></span>Hod's Desk</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/faculty-details')}}"><span><i class="fa-light fa-arrow-right"></i></span>Faculty Details</a></li>
                                <li><a href="https://coe.egspec.org/" target="_blank"><span><i class="fa-light fa-arrow-right"></i></span>Curriculum</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/research-publications')}}"><span><i class="fa-light fa-arrow-right"></i></span>Research & Publications</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/industry-collaboration')}}"><span><i class="fa-light fa-arrow-right"></i></span>Industry Collaboration</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/infrastructure')}}"><span><i class="fa-light fa-arrow-right"></i></span>Infrastructure</a></li>
                                <li><a href="{{url('/placements/statistics')}}"><span><i class="fa-light fa-arrow-right"></i></span>Placements</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/student-achievements')}}"><span><i class="fa-light fa-arrow-right"></i></span>Student Achievements</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/program-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Program Outcomes</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/programme-educational-objectives')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Educational Objectives</a></li>
                                <li><a href="{{url('/academics/departments/undergraduate/civil-engineering/programme-specific-outcomes')}}"><span><i class="fa-light fa-arrow-right"></i></span>Programme Specific Outcomes</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- contact info -->
                    <x-dept-contact-info
                    name="Civil Engineering Department"
                    :phones="['123-456-7890']"
                    :emails="['civileng@university.edu']"/>
                </div>
            </div>

         </div>
      </div>
   </div>
</div>

@endsection

<style>
    .table-responsive {
        overflow-x: auto;
    }

    @media (max-width: 767.98px) {
        .table-responsive {
            -webkit-overflow-scrolling: touch;
        }
    }
</style>

