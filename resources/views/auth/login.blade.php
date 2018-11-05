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
                <div class="col-md-12 text-center">
                    <p>Software testers play a critical role in application deve|opment. <span>They are quality assurance experts who put applications through the wringer to root out bugs, poor performance, functional, scalability, user acceptance – at different stages of the software life cycle.</span> Because s</p>
                </div>
                <div class="part-2 col-md-12 text-left">
                    <p>oftware testing is so emportant to the quality and usability of the final produuuct, testers are brought in at the planning and design stage, and often remain involved throughout post-re-lease support.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="description-img-login">
        <img src="{{ asset('images/login-1.jpg') }}" alt="logo">
    </section>
    <section class="description-text-login">
        <div class="container">
            <div class="row">
                <div class="part-3 col-md-5 offset-md-7">
                    <p class="text-center"><span>The software tester is an unsung hero для most development projects. </span>They save end usErs from working with highly buggy soft</p>
                </div>
                <p class="text-right">ware or applications that just don't work well&, greatly reducing tech support calls from frustrated customers. They also make the development team and the software vendor looк good in the eyes of customers.</p>
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

                        <div class="form-group row mb-2">
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
