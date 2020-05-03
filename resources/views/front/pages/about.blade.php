@extends('front.master')

@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">

            <div id="shopify-section-page-about-template" class="shopify-section">
                <div id="col-main" class="page-content page-about-us">

                    <div class="type-banner">

                        <div class="banner-wrapper" style="background-image:url({{asset('frontEnd/assets/img/about-bg.jpg')}}); width: auto;">
                            <div class="container">
                                <div class="banner-text">
                                    <h3>About us</h3>
                                    <p>Passion may be a friendly or eager interest in or admiration for a proposal, cause, discovery, or activity or love to a feeling of unusual excitement.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="type-image-text">
                        <div class="container image-text">
                            <div class="row">

                                <div class="item col-md-4 col-sm-12">

                                    <div class="image">
                                        <img src="{{asset('frontEnd/assets/img/column1.jpg')}}" alt="Image" />
                                    </div>

                                    <div class="text-box">
                                        <h4 class="text">What we really do?</h4>
                                        <p>Donec libero dolor, tincidunt id laoreet vitae,ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.</p>
                                    </div>
                                </div>

                                <div class="item col-md-4 col-sm-12">

                                    <div class="image">
                                        <img src="{{asset('frontEnd/assets/img/column2.jpg')}}" alt="Image" />
                                    </div>

                                    <div class="text-box">
                                        <h4 class="text">What we really wanna do?</h4>
                                        <p>Donec libero dolor, tincidunt id laoreet vitae,ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.</p>
                                    </div>
                                </div>

                                <div class="item col-md-4 col-sm-12">

                                    <div class="image">
                                        <img src="{{asset('frontEnd/assets/img/column3.jpg')}}" alt="Image" />
                                    </div>

                                    <div class="text-box">
                                        <h4 class="text">What we really do?</h4>
                                        <p>Donec libero dolor, tincidunt id laoreet vitae,ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="type-our-team" style="background-color: #f5f5f5">
                        <div class="container our-team">

                            <div class="row-table">
                                <div class="row">

                                    <div class="wrap-item col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="item">

                                            <img src="{{asset('frontEnd/assets/img/team-member/1.jpg')}}" alt="Image" />

                                            <span class="name">Thomas Snow</span>
                                            <span class="major">Ceo Founder</span>

                                        </div>
                                    </div>

                                    <div class="wrap-item col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="item">

                                            <img src="{{asset('frontEnd/assets/img/team-member/2.jpg')}}" alt="Image" />

                                            <span class="name">Anna Baranov</span>
                                            <span class="major">Client Care</span>

                                        </div>
                                    </div>

                                    <div class="wrap-item col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="item">

                                            <img src="{{asset('frontEnd/assets/img/team-member/3.jpg')}}" alt="Image" />

                                            <span class="name">Andrei Kowalsy</span>
                                            <span class="major">Support Boss</span>

                                        </div>
                                    </div>

                                    <div class="wrap-item col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="item">

                                            <img src="{{asset('frontEnd/assets/img/team-member/4.jpg')}}" alt="Image" />

                                            <span class="name">Pamela Doe</span>
                                            <span class="major">Delivery Driver</span>

                                        </div>
                                    </div>

                                    <div class="wrap-item col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="item">

                                            <img src="{{asset('frontEnd/assets/img/team-member/5.jpg')}}" alt="Image" />

                                            <span class="name">Susan McCain</span>
                                            <span class="major">Packaking Girl</span>

                                        </div>
                                    </div>

                                    <div class="wrap-item col-lg-2 col-md-3 col-sm-4 col-6">
                                        <div class="item">

                                            <div class="item-inner" style="background-color: #fed700">
                                                <div class="wrap-team">
                                                    <span class="text-1">We are</span>
                                                    <span class="text-2">Hiring!</span>
                                                </div>
                                            </div>

                                            <a href="/pages/contact-us">See Details</a>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="type-text-box">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-md-7 col-sm-12">
                                    <div class="text-box-left">

                                        <div class="tbl-item">
                                            <h4>What we really do?</h4>
                                            <p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.
                                            </p>
                                        </div>

                                        <div class="tbl-item">
                                            <h4>Our vision</h4>
                                            <p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.
                                            </p>
                                        </div>

                                        <div class="tbl-item">
                                            <h4>History of the Company</h4>
                                            <p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.
                                            </p>
                                        </div>

                                        <div class="tbl-item">
                                            <h4>Cooperate with Us!</h4>
                                            <p>Donec libero dolor, tincidunt id laoreet vitae, ullamcorper eu tortor. Maecenas pellentesque, dui vitae iaculis mattis, tortor nisi faucibus magna, vitae ultrices lacus purus vitae metus.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <div class="text-box-right">

                                        <h5>Support 24/7</h5>

                                        <h5>Best Quanlity</h5>

                                        <h5>Fastest Delivery</h5>

                                        <h5>Customer Care</h5>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
