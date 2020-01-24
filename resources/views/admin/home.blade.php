@extends('layouts.app')
@section('title', 'Welcome to Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome <b class="text-muted">{{ Auth::user()->name }}</b>
                </div>
                <div class="card-footer">
                    <a href="{{ route('dishes.create') }}">Add Dish</a>&nbsp;|
                    <a href="{{ route('dishes.index') }}">Dishes</a>&nbsp;|
                    <a href="{{ route('categories.create') }}">Add Category</a>&nbsp;|
                    <a href="{{ route('categories.index') }}">Categories</a>&nbsp;|
                    <a href="{{ route('orders') }}">Orders</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
