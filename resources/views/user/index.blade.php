@extends('layouts.master')
@section('title', 'Royal Catering')
    @section('theme')
    <!-- Section - Main -->
        @include('user.includes.carousel')

        <!-- Section - About -->
        @include('user.includes.about')  

        <!-- Section - Steps -->
        @include('user.includes.features')

        <!-- Section - Menu -->
        @include('user.includes.menu')

        <!-- Section - Offers -->
        @include('user.includes.offers')

        <!-- Section -->
        @include('user.includes.promo')

@stop

    