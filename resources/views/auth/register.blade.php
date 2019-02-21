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

    <!-- Sign Up Form -->
    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <form method="POST" action="{{ route('register') }}" class="js-validation-signup">
        @csrf
        <div class="block block-themed block-rounded block-shadow">
            <div class="block-header bg-gd-emerald">
                <h3 class="block-title">Teacher {{ __('Registration') }}</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="form-group row">
                    <div class="col-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="signup-username" name="name" value="{{ old('name') }}" placeholder="eg: john_smith">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="signup-email" name="email" value="{{ old('email') }}" placeholder="eg: john@example.com">
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
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="signup-password" name="password" placeholder="********">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="signup-password-confirm" name="password_confirmation" placeholder="********">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-sm-6 push">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                            <label class="custom-control-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                        </div>
                    </div>
                    <div class="col-sm-6 text-sm-right push">
                        <button type="submit" class="btn btn-alt-success">
                            <i class="fa fa-plus mr-10"></i> Create Account
                        </button>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="form-group text-center">
                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                        <i class="fa fa-book text-muted mr-5"></i> Read Terms
                    </a>
                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/login">
                        <i class="fa fa-user text-muted mr-5"></i> Log In
                    </a>
                </div>
            </div>
        </div>
    </form>
    <!-- END Sign Up Form -->
</div>






@endsection
