@extends('layouts.blank')

@section('content')

<div class="content content-full overflow-hidden">
    <!-- Header -->
    <div class="py-30 text-center">
        <a class="font-w700" href="/">
            <img src="{{ asset('/img/tutr-logo.png') }}" alt="">
        </a>
    </div>
    <!-- END Header -->

    <!-- Sign In Form -->
    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <form  method="POST" action="{{ route('login') }}" class="js-validation-signin" >
        @csrf
        <div class="block block-themed block-rounded block-shadow">
            <div class="block-header bg-gd-dusk">
                <h3 class="block-title">Teacher {{ __('Login') }}</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="form-group row">
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        <!-- <input type="text" class="form-control" id="login-username" name="login-username"> -->
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <!-- <input type="password" class="form-control" id="login-password" name="login-password"> -->
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-sm-6 d-sm-flex align-items-center push">
                        <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <!-- <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me"> -->
                            <label class="custom-control-label" for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-sm-6 text-sm-right push">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="si si-login mr-10"></i> Sign In
                        </button>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="form-group text-center">
                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/register">
                        <i class="fa fa-plus mr-5"></i> Create Account
                    </a>
                    @if (Route::has('password.request'))
                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                        <i class="fa fa-warning mr-5"></i>{{ __('Forgot Password') }}
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <!-- END Sign In Form -->
</div>

@endsection
