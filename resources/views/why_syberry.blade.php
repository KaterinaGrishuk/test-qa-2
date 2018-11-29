@extends('layouts.app')

@section('header')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/syberry.png') }}" alt="logo"></a>
            </div>
            <div class="mobile">
                <a class="btn btn-outline-secondary" href="tel:+2-22-222-2222">+1 11 111-1111</a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container">
        <div class="why-syberry-wrap">
            <img src="{{ asset('images/whySyberry.png') }}" alt="">
        </div>
    </div>
@endsection
