@extends('front.layouts.master')
@section('title', 'Home Page')

@section('content')
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('front/assets/img/icon/loder.png') }}" alt="loder">
                </div>
            </div>
        </div>
    </div>

    <main>
        @include('front.home.partials.slider')
        @include('front.home.partials.category')
        @include('front.home.partials.trending')
        @include('front.home.partials.testimonials')
        @include('front.home.partials.latest')
        @include('front.home.partials.services')
    </main>


    <div id="back-top">
        <a class="wrapper" title="Go to Top" href="#">
            <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div>
        </a>
    </div>
@endsection