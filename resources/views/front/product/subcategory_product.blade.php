@extends('front.master')

@section('content')

<div id="body-content">
    <div id="main-content">
        <div class="main-content">

            <div id="shopify-section-collection-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="active">{{$title}}</li>
                        </ul>
                    </div>
                </div>

                <div class="page-cata active-sidebar" data-logic="true">
                    <div class="container">

                        <div class="row">

                            <div id="sidebar" class="left-column-container col-lg-3">
                                @include('front/product/partials/categories_nav')
                                @include('front/product/partials/product-filter')
                                @include('front/product/partials/latest')
                            </div>

                            <div class="col-lg-9 col-md-12">
                                @include('front/product/partials/top')
                                @include('front/product/partials/category-wise-product-list')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
