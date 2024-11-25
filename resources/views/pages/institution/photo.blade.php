@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Gallery',
    'value_3' => 'Album',
    'page_title' => $album->title
])

<div class="rts-blog v_3 rts-section-padding">


    <div class="container">
        <h5 class="rts-section-title">{{ $album->title }}</h5>
        <div class="program-description-area">

            <div class="program-credit-area">


                <div class="program-accordion my-5">
                    <div class="accordion" id="rts-accordion">

                        <div class="accordion-item">

                            <div>
                                <div class="accordion-body-content">

                                    <table class="table table-striped">
                                        <thead class="table-theme">
                                          <tr>
                                            <th>Created by</th>
                                            <td>Overview Description</td>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>

                                            <td>{{ $album->user ? $album->user->name : 'Unknown User' }}</td>
                                            <td>{{ $album->description }}</td>
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


        <div class="photos">

            <div class="row align-items-stretch">
                @foreach($photos as $photo)
                <div class="col-6 col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up">
                    <a href="{{ str_contains($photo->image_url, 'firebasestorage.googleapis.com') ? $photo->image_url : asset($photo->image_url) }}"
                       class="d-block photo-item custom-fancybox" data-fancybox="custom-gallery">
                        <img src="{{ str_contains($photo->image_url, 'firebasestorage.googleapis.com') ? $photo->image_url : asset($photo->image_url) }}"
                             alt="{{ $photo->caption }}" class="img-fluid">
                        <div class="photo-text-more">
                            <span class="icon icon-search"></span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>


        </div>

        <!-- Pagination Links -->
        <div class="pagination mt-4">
            {{ $photos->links() }} <!-- Laravel's pagination links -->
        </div>
    </div>
</div>



@endsection
