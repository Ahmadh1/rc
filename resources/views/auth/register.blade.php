@extends('layouts.master')
@section('title', 'Register')
    @section('theme')
    <!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Register</h1>
                        <h4 class="text-muted mb-0">New with us Register from here</h4>
                    </div>
                </div>
            </div>
        </div>
          <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 push-md-3">
                        <form action="{{ route('register') }}" method="POST" class="validate-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input name="name" id="name" 
                                type="text" 
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                required autofocus 
                                value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input name="email" type="email" 
                                id="email" 
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input name="password" type="password" 
                                id="password" 
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confrim">{{ __('Confrim Password') }}</label>
                                <input 
                                name="password_confirmation" 
                                type="password" 
                                id="password-confrim" 
                                class="form-control" required>
                            </div>
                            <div class="form-group form-submit">
                                <button type="submit" class="btn btn-outline-secondary btn-block"><span>{{ __('Register') }}</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop