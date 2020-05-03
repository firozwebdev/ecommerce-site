@extends('layouts.app')

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
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>

            <div id="col-main" class="page-register">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-wrapper no-padding">

                                <div id="customer-login" class="content">
                                    <h2 class="heading">Login</h2>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="control-wrapper">
                                            <label for="customer_email">Email Address<span class="req">*</span></label>
                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="customer_email" name="email" value="{{ old('email') }}" required autofocus />
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="control-wrapper">
                                            <label for="customer_password">Password<span class="req">*</span></label>
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="customer_password" class="password" required />
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="control-wrapper last">
                                            <div class="action">
                                                <a class="forgot-pass" href="javascript:;" onclick="showRecoverPasswordForm()">Forgotten Password?</a>
                                            </div>
                                            <button class="btn btn-1" type="submit">Login</button>
                                        </div>

                                    </form>

                                    <div class="not-registered-area">
                                        <span>Not a member?</span>
                                        <a href="{{route('register')}}" title="Register">Register</a>
                                    </div>

                                </div>

                                <div id="recover-password" style="display: none;">

                                    <h2 class="heading">Reset Password</h2>
                                    <p class="note">We will send you an email to reset your password.</p>

                                    <form method="post" action="" accept-charset="UTF-8">
                                        <input type="hidden" name="form_type" value="recover_customer_password" />
                                        <input type="hidden" name="utf8" value="✓" />

                                        <div class="control-wrapper">
                                            <label for="recover-email">Email Address<span class="req">*</span></label>
                                            <input type="email" value="" name="customer_email" id="recover-email" />
                                        </div>

                                        <div class="control-wrapper">
                                            <button class="btn btn-1" type="submit">Reset Password</button>
                                            <a class="cancel btn btn-2" href="javascript:;" onclick="hideRecoverPasswordForm();">Cancel</a>
                                        </div>

                                    </form>
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
