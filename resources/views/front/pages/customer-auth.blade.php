@extends('front.master')
@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div class="wrap-breadcrumb bw-color">
                <div id="breadcrumb" class="breadcrumb-holder container">
                    <ul class="breadcrumb">
                        <li itemscope itemtype="">
                            <a itemprop="url" href="/">
                                <span itemprop="title" class="d-none">Yinimini</span>Home
                            </a>
                        </li>
                        <li class="active">Create Account</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div id="col-main" class="page-register">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12 register-or">
                            <div class="form-wrapper">
                                <h2 class="heading">Create New Account</h2>
                                <p>Create your own Yinimini Account</p>
                                <form method="post" action="" id="create_customer" accept-charset="UTF-8">
                                    <input type="hidden" name="form_type" value="create_customer" />
                                    <input type="hidden" name="utf8" value="✓" />
                                    <div id="register-form">
                                        <div class="control-wrapper">
                                            <label for="last-name"> Name</label>
                                            <input type="text" name="customer_name" id="last-name" autocapitalize="words" autofocus />
                                        </div>
                                        <div class="control-wrapper">
                                            <label for="email">Email Address<span class="req">*</span></label>
                                            <input type="email" value="" name="customer_email" id="email" />
                                        </div>
                                        <div class="control-wrapper">
                                            <label for="password">Password<span class="req">*</span></label>
                                            <input type="password" value="" name="password" id="password" class="password" />
                                        </div>
                                        <div class="control-wrapper last">
                                            <button class="btn btn-1" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
                                <h5 class="semi-bold">Sign up today and you'll be able to :</h5>
                                <ul class="list-unstyled list-benefits">
                                    <li><i class="demo-icon icon-ok"></i> Speed your way through the checkout
                                    </li>
                                    <li><i class="demo-icon icon-ok"></i> Track your orders easily</li>
                                    <li><i class="demo-icon icon-ok"></i> Keep a record of all your purchases
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-wrapper">
                                <div id="customer-login" class="content">
                                    <h2 class="heading">Login</h2>
                                    <p>Welcome back! Sign in to your account</p>
                                    <div class="control-wrapper">
                                        <label for="customer_email">Email Address<span class="req">*</span></label>
                                        <input type="email" required name="customer_email" id="customer_email" />
                                    </div>
                                    <div class="control-wrapper">
                                        <label for="customer_password">Password<span class="req">*</span></label>
                                        <input type="password" required name="password" id="customer_password" class="password" />
                                    </div>
                                    <div class="control-wrapper last">
                                        <div class="action">
                                            <a class="forgot-pass" href="javascript:;" onclick="showRecoverPasswordForm()">Forgotten
                                                                Password?</a>
                                            <a class="return-store" href="">Return to
                                                                Store</a>
                                        </div>
                                        <button class="btn btn-1" type="submit">Login</button>
                                    </div>
                                    </form>
                                </div>
                                <div id="recover-password" style="display: none;">
                                    <h2 class="heading">Reset Password</h2>
                                    <p class="note">We will send you an email to reset your password.</p>
                                    <form method="post" action="/account/recover" accept-charset="UTF-8">
                                        <input type="hidden" name="form_type" value="recover_customer_password" />
                                        <input type="hidden" name="utf8" value="✓" />
                                        <div class="control-wrapper">
                                            <label for="email">Email Address<span class="req">*</span></label>
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
