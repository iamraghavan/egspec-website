<div class="rts-campus-section rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="rts-section rt-center mb--35">
                <h3 class="rts-section-title animated fadeIn">Latest News</h3>
            </div>
        </div>
        <div class="row g-5">
            <!-- Iterate over the latest 3 cutouts -->
            @foreach($cutouts->take(3) as $cutout)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">

                                <img src="{{ $cutout->is_firebase ? $cutout->image_path : asset('assets/storage/' . $cutout->image_path) }}" alt="{{ $loop->iteration }} \ item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="{{ $cutout->is_firebase ? $cutout->image_path : asset('assets/storage/' . $cutout->image_path) }}">{{$cutout->newspaper_name}}</a></h5>
                                <p class="item-description">{{$cutout->description}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            @endforeach
        </div>
        <div class="rts-load-more-btn rt-center mt--60">
            <a href="#" class="rts-theme-btn primary primary lh-100">View More</a>
        </div>
    </div>
</div>
