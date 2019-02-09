@extends('store.master')

@push('css')
    <style>

            body{
                background-color: currentColor;
            }
            .radius{
                border: 1px solid lightblue;
                border-radius: 15px;
                box-shadow: 2px 3px 3px cyan;
            }
            .custome-bg{
                background-color: darkslategrey !important;
            }
            .card-radius{
                border-radius: 14px;
            }


    </style>
@endpush

@section('content')
    <article class="row">
        <div class="col-sm-5 m-auto">
            @include('store.error')
        </div>
    </article>

@include('store.header')


<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card card-radius">
                <div class="card-header">
                    <div class="row" >
                        <span class="col-2 ml-auto">{{ __('Register') }}</span>
                        <div class="col-4"></div>
                        <a class="btn btn-primary align-content-center col-2" href="{{route('mylogin')}}">login</a>
                        <a class="btn btn-info align-content-center col-2" href="{{route('myregister')}}">Register</a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
