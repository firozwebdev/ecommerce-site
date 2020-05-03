<!-- Top Bar 2 Start -->
<div class="top-bar d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-row">
                    <div class="top-bar-left">
                        <ul class="list-inline">
                            <li class="phone lazyload waiting">
                                <a href="tel:(+800) 123 456 7890">
                                    <i class="demo-icon icon-phone"></i>
                                    <span>(+800) 123 456 7890</span>
                                </a>
                            </li>
                            <li class="email lazyload waiting">
                                <a href="mailto:yinimini@gmail.com">
                                    <i class="demo-icon icon-mail"></i>
                                    <span>yinimini@gmail.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="top-bar-right">
                        <ul class="list-inline">
                            <li class="language-list-wrapper lazyload waiting">
                                <div class="language-list">
                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownLanguageLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>EN</span>
                                            <span class="expand"><i class="demo-icon icon-angle-down"></i></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguageLink">
                                            <a class="dropdown-item" href="#">EN</a>
                                            <a class="dropdown-item" href="#">BN</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="download-app lazyload waiting">
                                <a href="#" title="Download App">
                                    <i class="demo-icon icon-mobile-2"></i>
                                    Download App
                                </a>
                            </li>
                            @if(Auth::check())
                            <li class="order">
                                <a href="{{url('/customer/orders')}}" class="lazyload waiting">
                                    <i class="demo-icon icon-truck-1"> </i>
                                    <span>Your Orders</span>
                                </a>
                            </li>
                            <li class="customer-account my-account-wrapper lazyload waiting">
                                <div class="btn-group">
                                    <button type="button" class="my-account-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="my-account-image">
                                            @if(Auth::user()->image)
                                            <img class="lazyload" src="{{asset('uploads/userimages/'.Auth::user()->image)}}" alt="{{Auth::user()->name}}" />
                                            @else
                                            <img class="lazyload" src="{{asset('frontEnd/assets/img/avatar_blog.png')}}" alt="{{Auth::user()->name}}" />
                                            @endif
                                        </span>
                                        <span class="my-account">{{Auth::user()->name}}</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{url('/customer/dashboard')}}" title="Dashboard">Dashboard</a>
                                        <a href="{{url('/signout')}}" title="Log Out">Log Out</a>
                                    </div>
                                </div>
                            </li>

                            @else

                            <li class="customer-account lazyload waiting">
                                <a href="{{route('register')}}" title="Register">
                                    <i class="demo-icon icon-electro-user-icon"></i>
                                    Register
                                </a>
                                <span class="customer-or">or</span>
                                <a href="{{route('login')}}" title="Sign in">Sign in</a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar 2 End -->
