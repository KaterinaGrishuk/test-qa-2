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
                @if(session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('loginAction') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-7 offset-md-2">
                                <label for="email" class="col-sm-4 col-form-label text-md-left">{{ __('Email') }}</label>
                                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} offset-md-3 text-md-right" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 offset-md-2">
                                <label for="password" class="col-form-label text-md-left">{{ __('Пароль') }}</label>
                                <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}  offset-md-4 text-md-right" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
                                <a href="{{ route('resetAction') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-5">
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
