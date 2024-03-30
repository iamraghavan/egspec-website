<!-- breadcrumb.blade.php -->

<section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
    style="background-image: url(/assets/images/web/rts-breadcrumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <ul class="breadcrumb">

                        @if($value_1)
                        <li style="color: #FFF;" class="breadcrumb-item">{{ $value_1 }}</li>
                        @endif

                        @if($value_2)
                        <li style="color: #FFF;" class="breadcrumb-item">{{ $value_2 }}</li>
                        @endif

                        @if($value_3)
                        <li class="breadcrumb-item active" aria-current="page">{{ $value_3 }}</li>
                        @endif

                    </ul>
                    <h2 class="section-title">{{$page_title}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
