<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <header>
            @section('header')
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container d-flex justify-content-between">
                        <div class="logo">
                            <img src="{{ asset('images/syberry.png') }}" alt="logo">
                        </div>
                        <div class="mobile">
                            <a class="btn btn-outline-secondary" href="tel:+2-22-222-2222">+1 11 111-1111</a>
                        </div>
                    </div>
                </nav>
            @show
        </header>
        <main role="main">
            @yield('content')
        </main>
    </div>

</body>


    @section('footer')
        <footer class="text-muted d-flex navbar-laravel">
            <div class="container d-flex justify-content-between">
                <div class="footer-text d-flex align-items-center">2017 © All rights reserved. <span>Syberry Corporation</span></div>
                <div class="footer-menu d-flex align-items-center">
                    <div class="menu-list">
                        <ul>
                            <li><a>Contact Us</a></li>
                            <li><a href="/about">About Cours</a></li>
                            <li><a href="{{ route('quality') }}">Why Syberry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    @show
</html>

@section('footer-scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/jquery-ui.min.js') }}"></script>
@show
