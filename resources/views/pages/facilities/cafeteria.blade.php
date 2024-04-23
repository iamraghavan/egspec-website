@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Facilities',
    'value_2' => '',
    'value_3' => '',
    'page_title' => 'Cafeteria'
])


<section class="rts-about-university pt--100 pb--80">
    <div class="container">
        <div class="row">
            <div class="rts-section">
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h5 class="rts-section-title animated fadeIn">Cafeteria</h5>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <p class="rts-section-description">
                        If more of us have a cherished food and animated around their buddy and mesmerized songs under the amass of tower, it would be a merrier world. Of course, it is a breathing pace for young minds amusement moments. Our cafeteria besides with scrumptious assortment like spanking new juices, sinuous hot dishes, ice cream, myriad display around the food court . E.G.S.Pillay Engineering College has spacious Canteen dishing with out set of choices that are outstandingly well-liked by students. Immense heed is taken by the kitchen staff to bring together a Well-balanced nourishing and flavorsome chow that in turn will fuel the students for their quest towards the success. For youngsters and professors in a similar way to walk the canteen is a welcome break from their humdrum of lessons. The homely atmosphere and aroma of delicious food permeates the air as they eat, drink and chat. It remains a focal place of the students for rest and refreshment.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="academic-picture text-center">
                    <img src="https://egspec.blob.core.windows.net/egspec-assets/egspec_cafe.webp" alt="egspec_cafeteria" class="mx-auto">
                </div>
            </div>
        </div>

    </div>
</section>


@include('components.cta')
@endsection
