@extends('layouts.master')
@section('title', 'Confirmation')
@section('theme')
	 <!-- Section -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <span class="icon icon-xl icon-success"><i class="ti ti-check-box"></i></span>
                        <h1 class="mb-2">Thank you for your order!</h1>
                        <h4 class="text-muted mb-5">You will recieve it soon.</h4>
                        <a href="{{ route('track') }}" class="btn btn-outline-secondary"><span>Track your order</span></a>
                    </div>
                </div>
            </div>
        </section>
@stop