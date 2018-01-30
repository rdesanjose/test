@extends('layouts.app')
@section('title', 'Home')
@section('content')
        <div class="home">
            <div class="owl-carousel" data-slider-id="1">
                <div><img src="{{ asset('images/home/slide1.jpg') }}" alt=""></div>
                <div><img src="{{ asset('images/home/slide1.jpg') }}" alt=""></div>
                <div><img src="{{ asset('images/home/slide1.jpg') }}" alt=""></div>
            </div>
        </div>
@endsection
@section('homejs')
    <script src="{{ asset('js/home.js') }}"></script>
@stop