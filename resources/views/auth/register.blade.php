@extends('front.master')
@section('content')

<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            {{ Session::get('message') }}

            <div class="wrap-breadcrumb bw-color">
                <div id="breadcrumb" class="breadcrumb-holder container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">Create Account</li>
                    </ul>
                </div>
            </div>

            <div id="col-main" class="page-register">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-wrapper no-padding">

                                <h2 class="heading">Create New Account</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div id="register-form">

                                        <div class="control-wrapper">
                                            <label for="name"><span class="req">*</span>{{ __('Name') }}</label>
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="name" id="name" value="{{ old('name') }}" autocapitalize="words" autofocus />
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="control-wrapper">
                                            <label for="email"><span class="req">*</span>{{ __('E-Mail Address') }}</label>
                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" name="email" id="email" />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="control-wrapper">
                                            <label for="email"><span class="req">*</span>{{ __('Home Address') }}</label>
                                            <input type="text" class="form-control{{ $errors->has('home_address') ? ' is-invalid' : '' }}"  value="{{ old('home_address') }}" name="home_address" id="email" />
                                            @error('home_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="control-wrapper">
                                            <label for="email"><span class="req">*</span>{{ __('Delivery Address') }}</label>
                                            <input type="text" class="form-control{{ $errors->has('delivery_address') ? ' is-invalid' : '' }}" value="{{ old('delivery_address') }}" name="delivery_address" id="email" />
                                            @error('delivery_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="control-wrapper">
                                            <label for="email"><span class="req">*</span>{{ __('Phone Number') }}</label>
                                            <input type="number" value="{{ old('phone_number') }}" name="phone_number" id="email" /> @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="control-wrapper">
                                            <label for="password"><span class="req">*</span>{{ __('Password') }}</label>
                                            <input type="password" value="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" id="password" class="password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="control-wrapper">
                                            <label for="password"><span class="req">*</span>{{ __('Confirm Password') }}</label>
                                            <input type="password" value="" autofocus name="password_confirmation" required autocomplete="new-password" />
                                        </div>

                                        <div class="control-wrapper last">
                                            <button class="btn btn-1" name="submit" type="submit">Register</button>
                                        </div>

                                    </div>
                                </form>

                                <h5 class="semi-bold">Sign up today and you'll be able to :</h5>
                                <ul class="list-unstyled list-benefits">
                                    <li><i class="demo-icon icon-ok"></i> Speed your way through the checkout</li>
                                    <li><i class="demo-icon icon-ok"></i> Track your orders easily</li>
                                    <li><i class="demo-icon icon-ok"></i> Keep a record of all your purchases</li>
                                </ul>

                                <div class="not-registered-area">
                                    <span>Already member?</span>
                                    <a href="{{route('login')}}" title="Sign In">Sign In</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <script type="text/javascript">
                if (window.location.hash == '#recover') {
                    showRecoverPasswordForm();
                }

                function showRecoverPasswordForm() {
                    $('#recover-password').fadeIn();
                    $('#customer-login').hide();
                    window.location.hash = '#recover';
                    return false;
                }

                function hideRecoverPasswordForm() {
                    $('#recover-password').hide();
                    $('#customer-login').fadeIn();
                    window.location.hash = '';
                    return false;
                }
            </script>

        </div>
    </div>
</div>
@endsection
