@extends('front.master')
@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="shopify-section-cart-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">Your Shopping Cart</li>
                        </ul>
                    </div>
                </div>

                @include('front/cart/cart-item-list')
                @include('front/cart/cart-bottom')
                
            </div>
        </div>
    </div>
</div>
@endsection
