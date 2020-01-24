@extends('layouts.master')
@section('title', 'Gallery')
@section('theme')
		 <!-- Page Title -->
        <div class="page-title border-top dark bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 push-lg-4">
                        <h1 class="mb-0">Gallery</h1>
                        <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <section id="gallery" class="section section-gallery cover">
        
            <!-- Gallery Carousel -->
            <div class="gallery-carousel inner-controls">
                <div class="slide"><div class="bg-image bg-parallax"><img src="{{ asset('theme/img/gallery/gallery01.jpg') }}" alt=""></div></div>
                <div class="slide"><div class="bg-image bg-parallax"><img src="{{ asset('theme/img/gallery/gallery02.jpg') }}" alt=""></div></div>
                <div class="slide"><div class="bg-image bg-parallax"><img src="{{ asset('theme/img/gallery/gallery03.jpg') }}" alt=""></div></div>
                <div class="slide"><div class="bg-image bg-parallax"><img src="{{ asset('theme/img/gallery/gallery04.jpg') }}" alt=""></div></div>
                <div class="slide"><div class="bg-image bg-parallax"><img src="{{ asset('theme/img/gallery/gallery05.jpg') }}" alt=""></div></div>
            </div>

            <!-- Gallery Carousel Nav -->
            <div class="gallery-nav">
                <img src="{{ asset('theme/img/gallery/gallery01-min.jpg') }}" alt="">
                <img src="{{ asset('theme/img/gallery/gallery02-min.jpg') }}" alt="">
                <img src="{{ asset('theme/img/gallery/gallery03-min.jpg') }}" alt="">
                <img src="{{ asset('theme/img/gallery/gallery04-min.jpg') }}" alt="">
                <img src="{{ asset('theme/img/gallery/gallery05-min.jpg') }}" alt="">
            </div>

            <div class="set-fullscreen">
                <a href="#gallery"><i class="ti ti-fullscreen"></i></a>
            </div>

        </section>
@stop