@extends('layouts.app')
@section('header')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="{{ asset('images/syberry.png') }}" alt="logo">
            </div>
            <div class="mobile">
                <a class="btn btn-outline-secondary" href="tel:+1-11-111-1111">+1 11 111-1111</a>
            </div>
        </div>
    </nav>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class=" login-wrap col-md-12">
                <h1 class="text-center">Login</h1>
                @if(session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('loginAction') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="email" class="col-form-label text-md-right">{{ __('Email') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-md-right" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-md-right" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-8 offset-md-3">
                                <a href="{{ route('resetAction') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-3">
                                <button type="submit" class="btn btn-primary login-submit">
                                    {{ __('Отправить') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer') @endsection
