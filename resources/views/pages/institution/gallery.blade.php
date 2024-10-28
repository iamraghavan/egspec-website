@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Gallery',
    'value_3' => '',
    'page_title' => 'Gallery'
])

{{-- opt --}}





<div class="rts-blog v_3 rts-section-padding">
    <div class="container">
        <div class="row justify-content-md-start justify-content-sm-center g-5">
            @foreach($albums as $album)
                <div class="col-sm-10 col-md-6 col-lg-6 col-xl-4">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                @if($album->photos->isNotEmpty())
                                <img src="{{ asset($album->photos->first()->image_url) }}" alt="{{ $album->title }}">
                            @else
                                <img src="{{ asset('default-image.jpg') }}" alt="No Image Available">
                            @endif

                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>{{ $album->created_at->format('d-m-Y') }}</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i></span>
                                        <span>{{ $album->user ? $album->user->name : 'Unknown User' }}</span>
                                    </div>
                                </div>
                                <h5 class="blog__title">
                                    <a href="{{ url('/gallery_photo?album=' . $album->id) }}">{{ $album->title }}</a>
                                </h5>
                                <a href="{{ url('/gallery_photo?album=' . $album->id) }}" class="rts-theme-btn primary with-arrow lh-100">
                                    View <span><i class="fa-thin fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="rts-load-more-btn rt-center mt--60">
            {{ $albums->links() }} <!-- Laravel's pagination links -->
        </div>
    </div>
</div>



@endsection
