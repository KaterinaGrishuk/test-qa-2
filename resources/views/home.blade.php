@extends('layouts.app')

@section('content')
    <div class="content-wrap">
        <section class="menu-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dropdown">
                            <button type="button" class="menu btn btn-outline-secondary" data-toggle="dropdown">
                                Menu
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('loginIndex') }}">Sign in</a>
                                <a class="dropdown-item" href="{{ route('registerIndex') }}">Sign up</a>
                                <a class="dropdown-item" href="{{ route('whySyberry') }}">Why Syberry</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center">
            <div class="container">
                <div class="description-text-header">
                    <h1 class="title-header">Congratulations!</h1>
                    <h1>You are starting your practical test now. If you pass it successfully you will get a chance to study in Syberry Academy and ещ утеук f QA world.</h1>
                </div>
            </div>
        </section>

        <section>

                <div class="description-text-header good-luck">
                    <h1 class="text-right" style="margin-right: 410px;">Good luck!</h1>
                </div>

        </section>

        <div class="btn-home-page">
            <div class="container d-flex justify-content-between">
                <a href="{{ route('loginAction') }}" class="sign-button btn btn-primary">Sing In</a>
                <a href="{{ route('registerAction') }}" class="sign-button menu btn btn-secondary">Sing Up</a>
            </div>
        </div>

    </div>
@endsection
