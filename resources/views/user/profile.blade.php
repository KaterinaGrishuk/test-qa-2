@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-wrap">
                    <div class="profile-header text-center">
                        Profile
                    </div>
                    <div class="box-body">
                        <form method="POST" action="{{ route('profileAction', ['id' => $user->id]) }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-2 offset-md-2">
                                    <label for="firstName">{{ __('auth.firstName') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="firstName" type="text"
                                           class="profile-info form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}"
                                           name="firstName" value="{{ $user->firstName }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2 offset-md-2">
                                    <label for="lastName">{{ __('auth.lastName') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="lastName" type="text"
                                           class="profile-info form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                           name="lastName" value="{{ $user->lastName }}">

                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastName') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2 offset-md-2">
                                    <label for="phone">{{ __('auth.phone') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="profile-info form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                           name="phone" value="{{ $user->phone }}">

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2 offset-md-2">
                                    <label for="email" class="help-inline">Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="email"
                                           class="profile-info form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ $user->email }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2 offset-md-2">
                                    <label for="age">{{ __('auth.age') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="age" type="number"
                                           class="profile-info form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"
                                           name="age" value="{{ $user->age }}">

                                    @if ($errors->has('age'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('age') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <div>{{ __('auth.gender') }}</div>
                                    <div class="radio-gender">
                                        <input id="male" type="radio" name="gender"
                                               value="1" {{ $user->gender == 1 ? 'checked' : '' }}> <label for="male">Male</label>
                                    </div>

                                    <div class="radio-gender">
                                        <input id="female" type="radio" name="gender"
                                               value="2" {{ $user->gender == 2 ? 'checked' : '' }}> <label for="female">Female</label>
                                    </div>

                                    <div class="radio-gender">
                                        <input id="na" type="radio" name="gender"
                                               value="3" {{ $user->gender == 3 ? 'checked' : '' }}> <label
                                                for="na">N/A</label>
                                    </div>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-primary save-profile">
                                        {{ 'Save' }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
