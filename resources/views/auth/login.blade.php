@extends('layouts.app')
@section('header')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="{{ asset('images/syberry.png') }}" alt="logo">
            </div>
            <div class="mobile">
                <a class="btn btn-outline-secondary" href="tel:+3-33-333-3333">+1 11 111-1111</a>
            </div>
        </div>
    </nav>
@endsection
@section('content')
    <section class="description-text-login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid, animi at blanditiis
                        dicta distinctio explicabo id laborum, modi quam quia quod repellat rerum saepe tempora totam ut
                        voluptate voluptatum. Beatae dicta distinctio dolorem ea esse est fugit iusto labore natus
                        similique. Aspernatur consectetur, eaque est illo laboriosam, modi mollitia nam officia quam
                        quod quos repellat saepe tempora? Assumenda, eum.</p>
                    <p>Ab cupiditate dolorem natus nihil obcaecati porro suscipit voluptate. Architecto assumenda
                        consequatur culpa dolorum eligendi facere veniam? Doloremque eius fuga minus quod!</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card-body">
                    <form method="POST" action="{{ route('loginAction') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email"
                                   class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-5">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-5">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('resetAction') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer') @endsection
