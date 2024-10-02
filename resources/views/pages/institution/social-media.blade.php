@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Institution',
    'value_3' => '',
    'page_title' => 'Social Media'
])

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="bg-warning p-5 m-4">
                <h6 class="text-black text-center">
                <strong>Notice!</strong> This page is currently under construction. Please check back later.
            </h6>
            </div>
        </div>
    </div>
</div>
@endsection
