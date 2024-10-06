

<div class="rts-gallery section-bg rts-section-padding">
    <div class="container all-program-category">
        <div class="row">
            @foreach($cutouts as $cutout)


                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-cat-item">
                        <div class="cat-thumb image-container">
                            <img src="{{ $cutout->is_firebase ? $cutout->image_path : asset('assets/storage/' . $cutout->image_path) }}">
                            <a href="{{ $cutout->is_firebase ? $cutout->image_path : asset('assets/storage/' . $cutout->image_path) }}" class="cat-link-btn">{{ $cutout->department }}</a>

                        </div>

                        <div class="cat-meta">
                            <div class="cat-title">
                                <a href="program-single.html">23/01/2004</a>
                                <a href="program-single.html">Dinamalar</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
