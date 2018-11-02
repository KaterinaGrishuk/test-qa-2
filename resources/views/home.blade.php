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
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center">
            <div class="container">
                <div class="description">
                    <h1 class="jumbotron-heading">
                        “Congratulations! You are starting your practical test now. If you pass it successfully you will get a chance to study in Syberry Academy and ещ утеук f QA world. <br> Good luck!».
                    </h1>
                    <p class="lead text-muted">
                        Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('loginAction') }}" class="sign-button btn btn-primary">Sign In</a>
                    <a href="{{ route('registerAction') }}" class="sign-button menu btn btn-secondary">Sign Up</a>
                </div>

            </div>
        </section>
    </div>
@endsection
