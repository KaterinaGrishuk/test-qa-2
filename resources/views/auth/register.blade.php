@extends('layouts.app')
@section('header')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="{{ asset('images/syberry.pn') }}" alt="logo">
            </div>
            <div class="mobile">
                <a class="btn btn-outline-secondary">+1 11 111-1111</a>
            </div>
        </div>
    </nav>
@endsection
@section('content')
    <section class="menu-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="menu btn btn-outline-secondary" href="{{ route('loginIndex') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>
<section class="description-text-register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid, animi at blanditiis dicta distinctio explicabo id laborum, modi quam quia quod repellat rerum saepe tempora totam ut voluptate voluptatum. Beatae dicta distinctio dolorem ea esse est fugit iusto labore natus similique. Aspernatur consectetur, eaque est illo laboriosam, modi mollitia nam officia quam quod quos repellat saepe tempora? Assumenda, eum.</p>
                <p>Ab cupiditate dolorem natus nihil obcaecati porro suscipit voluptate. Architecto assumenda consequatur culpa dolorum eligendi facere veniam? Doloremque eius fuga minus quod!</p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-body">

                    <div class="hint">
                        <span class="required">*</span> Required Fields
                    </div>
                    <form method="POST" action="{{ route('registerAction') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <label for="firstName"><span class="required">*</span>{{ __('auth.firstName') }}</label>
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}">

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <label for="lastName"><span class="required">*</span>{{ __('auth.lastName') }}</label>
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}">

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="text-center">
                                    <label for="phone" class="text-center"><span class="required">*</span>{{ __('auth.phone') }}</label>
                                </div>

                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <label for="dateOfBirth">{{ __('auth.dateOfBirth') }}</label>
                                <input id="dateOfBirth" type="text" class="form-control{{ $errors->has('dateOfBirth') ? ' is-invalid' : '' }}" name="dateOfBirth" value="{{ old('dateOfBirth') }}">

                                @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <label for="email">*{{ __('auth.email') }}</label>
                                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <label for="password"><span class="required">*</span>{{ __('auth.password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <label for="password-confirm"><span class="required">*</span>{{ __('auth.confirmPassword') }}</label>
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Notify Me By Email') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-check">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ 'Отправить' }}
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
        $("#dateOfBirth").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
    </script>
@endsection
