@extends('layouts.app')

@section('content')




<div class="rts-scholarship rts-section-padding">
    <div class="container">
        <div class="rts-scholarship-description">
            <div class="row justify-content-md-center justify-content-start">
                <div class="col-lg-12 col-md-11">

                    <div class="program-sidebar">
                    <div class="program-curriculum">
                        <h6 class="heading-title">Sitemap</h6>
                        <div class="program-menu">
                            <ul class="list-unstyled">

                                @foreach ($getRoutes as $route)
                                <li><a href="{{ url($route) }}"><span><i class="fa-light fa-arrow-right"></i></span>{{ url($route) }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>


                </div>
                <!-- sidebar -->

            </div>
        </div>
    </div>
</div>


@endsection
