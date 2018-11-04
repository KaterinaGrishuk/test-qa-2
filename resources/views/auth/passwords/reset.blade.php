@extends('layouts.app')

@section('header')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="{{ asset('images/syberry.png') }}" alt="logo">
            </div>
        </div>
    </nav>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('message'))
                <div class="alert alert-success success-reset" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body reset">
                <form method="POST" action="{{ route('resetAction') }}">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-7 offset-md-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                            <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary btn-reset">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <footer class="text-muted navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="footer-text d-flex align-items-center">2017 © All rights reserved. Syberry Corporation</div>
            <div class="footer-menu d-flex align-items-center">
                <div class="menu-list">
                    <ul>
                        <li><a>Contact Us</a></li>
                        <li><a href="/about">About Cours</a></li>
                        <li><a href="{{ route('quality') }}">Quality Assurance</a></li>
                        <li><a href="{{ route('whySyberry') }}">Why Syberry</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $('.btn-reset').click(function (e) {
            if ($('#email').val().length == 0) {
                console.error('500 - Internal server error.');
                e.preventDefault();
            }
        });
    </script>
@endsection
