@extends('layouts.app')
@section('content')

@include('components.breadcrumb', ['value_1' => 'Placement',
'value_2' => '',
'value_3' => '',
'page_title' => 'Memorandum of Understanding' ])



<!--====================  Start of Industry Academic Partnering page content  ====================-->


<div class="rts-event-speaker mt--40" element-id="358">
    <div class="container" element-id="357">
        <div class="row" element-id="356">
            <div class="rts-section" element-id="355">
                <h3 class="rts-section-title animated fadeIn" element-id="354">
                    MoU'S Signed with MNC's
                    </h3>
            </div>
        </div>
        <!-- event speaker list -->
        <div class="row g-5" element-id="353">
            <!-- single speaker item -->


            @foreach(range(1, 21) as $i)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="">

                                <img class="iaps" src="{{ Storage::disk('azure')->url('memorandum-of-understanding/'.$i.'.webp') }}" alt="Mou Sign with {{ $i }}">

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach






        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="semister-fee__content">
                <h5 class="rts-section-title">MoU's Documents</h5>

                <!-- tab item -->

                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">
                                    <table class="table table-striped table-hover table-bordered table-responsive">
                                        <thead class="table-theme">
                                           <tr>
                                              <th>Academic Year</th>
                                              <th>2021-2022</th>
                                              <th>2020-2021</th>
                                              <th>2019-2020</th>
                                              <th>2018-2019</th>
                                              <th>2017-2018</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                              <th class="table-primary">Number of MoUs</th>
                                              <td>25</td>
                                              <td>16</td>
                                              <td>11</td>
                                              <td>16</td>
                                              <td>14</td>
                                           </tr>
                                           <tr>
                                              <th class="table-success">E-Copies of the MoUs</th>
                                              <td><a href="https://egspcoe.org/naac/cri3/3.7.2_2021_2022.pdf">Link</a></td>
                                              <td><a href="https://egspcoe.org/naac/cri3/3.7.2_2020_2021.pdf">Link</a></td>
                                              <td><a href="https://egspcoe.org/naac/cri3/3.7.2_2019_2020.pdf">Link</a></td>
                                              <td><a href="https://egspcoe.org/naac/cri3/3.7.2_2018_2019.pdf">Link</a></td>
                                              <td><a href="https://egspcoe.org/naac/cri3/3.7.2_2017_2018.pdf">Link</a></td>
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
</div>


<style>
    /* Style for the image */
.iaps {

    max-width: 100% !important;
    height: auto !important;
    FONT-WEIGHT: 200;
    margin: 3rem;
}

/* Style for the heading */
.iap-h3 {
    text-align: center !important;
    font-size: 18px !important;
    margin: 20px 0 !important;
    color: #333 !important;
}

</style>

@include('components.cta')

@endsection
