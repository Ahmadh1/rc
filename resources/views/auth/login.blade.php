@extends('layouts.master')
@section('title')
@section('theme')
    <!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Login</h1>
                        <h4 class="text-muted mb-0">Login from here</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 push-md-3">
                        <form action="{{ route('login') }}" method="POST" class="validate-form">
                            @csrf
                            <div class="form-group">
                                <label for="email">Your e-mail</label>
                                <input name="email" id="email" 
                                type="email" 
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                required autofocus 
                                value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" 
                                id="password" 
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-submit">
                                <button type="submit" class="btn btn-outline-secondary btn-block"><span>{{ __('Login') }}</span></button>
                            </div>
</form>
                    </div>
                </div>
            </div>
        </div>
@stop
