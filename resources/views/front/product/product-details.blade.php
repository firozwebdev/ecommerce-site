@extends('front.master')
@section('content')

<div id="body-content">
    <div id="main-content">
        <div class="main-content">

            <div id="shopify-section-product-extended-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="active">{{$product->product_name}}</li>
                        </ul>
                    </div>
                </div>

                <div id="col-main" class="page-product layout-extended">
                    @include('front/product/partials/product-details-info')
                    @include('front/product/partials/product-description')
                    @include('front/product/partials/product-related-item')
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
