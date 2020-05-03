@extends('front.master')

@section('content')

<div id="body-content">
    <div id="main-content">
        <div class="main-content">

            <div id="shopify-section-collection-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">

                        <ul class="breadcrumb">
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a itemprop="url" href="{{url('/')}}">
                                    <span itemprop="title" class="d-none"></span>Home
                                </a>
                            </li>

                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="d-none">
                                <a href="" itemprop="url">
                                    <span itemprop="title">{{ $title }}</span>
                                </a>
                            </li>
                            <li class="active">{{ $title }}</li>

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

                                <div class="wrap-cata-title">
                                    <h2> {{ $title }} Products</h2>
                                </div>

                                <div class="cata-toolbar">
                                    <div class="group-toolbar">

                                        <div class="filter-icon mobile-filter-icon drawer d-lg-none"><i class="demo-icon icon-sliders"></i>Filter</div>

                                        <div class="grid-list">
                                            <span class="text">View</span>
                                            <span class="grid grid-4 active" title="Small"><i class="demo-icon icon-electro-grid-view"></i></span>
                                            <span class="grid grid-3" title="Medium"><i class="demo-icon icon-electro-large-list-view"></i></span>
                                            <span class="grid grid-2" title="Large"><i class="demo-icon icon-electro-list-view"></i></span>
                                            <span class="grid grid-1" title="Huge"><i class="demo-icon icon-electro-small-list-view"></i></span>
                                        </div>

                                        <div class="sort-by bc-toggle">
                                            <div class="sort-by-inner">

                                                <label class="d-none d-md-block">Sort by</label>

                                                <div id="cata_sort_by">
                                                    <button id="sort_by_button">
                                                        <span class="name"></span>
                                                        <i class="demo-icon icon-down-dir"></i>
                                                    </button>
                                                </div>

                                                <ul id="sort_by_box" class="bc-dropdown">
                                                    <li class="sort-action title-ascending" data-sort="title-ascending"><a href="javascript:;">Name, A-Z</a></li>
                                                    <li class="sort-action title-descending" data-sort="title-descending"><a href="javascript:;">Name, Z-A</a></li>
                                                    <li class="sort-action manual" data-sort="manual"><a href="javascript:;">Featured</a></li>
                                                    <li class="sort-action price-ascending" data-sort="price-ascending"><a href="javascript:;">Price, Low To High</a></li>
                                                    <li class="sort-action price-descending" data-sort="price-descending"><a href="javascript:;">Price, High To Low</a></li>
                                                    <li class="sort-action created-ascending" data-sort="created-ascending"><a href="javascript:;">Date, Old To New</a></li>
                                                    <li class="sort-action created-descending" data-sort="created-descending"><a href="javascript:;">Date, New To Old</a></li>
                                                    <li class="sort-action best-selling" data-sort="best-selling"><a href="javascript:;">Be Selling</a></li>
                                                </ul>

                                            </div>

                                        </div>

                                        <div class="pagination-showing">
                                            <div class="showing">

                                                Showing 1 - 16 of 27 Items

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="col-main">

                                    <div class="cata-product cp-grid">

                                        @foreach($products as $product)
                                        <div class="product-grid-item mode-view-item">
                                            <div class="product-wrapper effect-none">
                                                <div class="product-head">
                                                    <div class="product-image">

                                                        <div class="product-group-vendor-name">
                                                            <div class="product-vendor">
                                                                <a href="{{route('product',$product->slug)}}" title="{{$product->title}}">{{$product->title}}</a>
                                                            </div>

                                                            <h5 class="product-name">
                                                                <a href="{{route('product',$product->slug)}}">{{$product->product_name}} </a>
                                                            </h5>

                                                            <div class="product-review">
                                                                <span class="shopify-product-reviews-badge"></span>
                                                            </div>

                                                        </div>

                                                        <div class="featured-img lazyload waiting">
                                                            <?php $images=collect(json_decode($product->multiple))->first() ?>

                                                            <a href="{{route('product',$product->slug)}}">
                                                                <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images) }}" alt="{{$product->product_name}}" />

                                                                <span class="img-back d-none d-lg-block">
                                                                    <img class="back lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images) }}" alt="{{$product->product_name}}" />
                                                                </span>

                                                                <span class="product-label">
                                                                    <span class="label-sale">
                                                                        <span class="sale-text">Sale</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="product-content">
                                                    <div class="pc-inner">

                                                        <div class="price-cart-wrapper">

                                                            <div class="product-price">
                                                                <span class="price-sale">
                                                                    <span class="money">$ {{$product->product_price}}</span>
                                                                </span>
                                                                <span class="price-compare">
                                                                    <span class="money"> $ {{$product->special_price}}</span>
                                                                </span>
                                                            </div>

                                                            <div class="product-add-cart">

                                                              <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" name="quantity" value="1" />
                                                                <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                                                                <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                                                                  <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart"><span
                                                                                  class="demo-icon icon-electro-add-to-cart-icon"></span></a>
                                                                  <select class="d-none" name="id">

                                                                      <option value="12669002580032">
                                                                          Default Title</option>

                                                                  </select>
                                                              </form>

                                                            </div>
                                                        </div>

                                                        <div class="product-button">

                                                            <div data-target="#quick-shop-popup" class="quick_shop" data-toggle="modal" title="Quick View">
                                                                <i class="demo-icon icon-eye-1"></i> Quick View
                                                            </div>

                                                            <div class="product-wishlist">
                                                                <a href="javascript:void(0)" class="add-to-wishlist add-product-wishlist" title="Wishlist">
                                                                    <i class="demo-icon icon-electro-wishlist-icon"></i> Wishlist
                                                                </a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        @endforeach

                                    </div>

                                </div>

                                <div class="pagination-holder">
                                    <ul class="pagination">
                                        <li>
                                            <a class="prev disabled" href="javascript:;">Previous</a>
                                        </li>

                                          {{$products->links()}}
                                      

                                        <li>
                                            <a href="" title="Next" class="next">Next</a>
                                        </li>
                                    </ul>
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
