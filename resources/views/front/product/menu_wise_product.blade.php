@extends('front.master')
 @section('content')

<!-- Deal Of Days -->
<div id="shopify-section-1542364570917" class="shopify-section">

    <div id="ps-1542364570917" class="product-slider-section layout-full style-normal" style="background-color: #ffffff;">

        <div class="title-wrapper title-wrapper-deal">
            <h3>Deals of The Day</h3>
            <div class="header-countdown">
                <span class="countdown-title">End in:</span>
                <div class="wrapper-countdown">
                    <div class="countdown-end-in" data-due-date="2020-4-30"></div>
                </div>
            </div>
            <a href="#">Go to Daily Deals Sections<i class="demo-icon icon-angle-right"></i></a>
        </div>

        <div class="wrap-product-slider">

            <div class="product-slider-content no-padding  owl-center">
                <div class="ps-list ps-list-1542364570917">
                    @foreach($menu_wise_products as $product)

                    <div class="product-wrapper effect-none  ">

                        <div class="product-head">
                            <div class="product-image">

                                <div class="product-group-vendor-name">
                                    <div class="product-vendor"><a href="{{route('product',$product->slug)}}" title="Armani">{{$product->product_title}}</a></div>

                                    <h5 class="product-name"><a
                                                        href="{{route('product',$product->slug)}}">{{$product->product_name}}</a></h5>

                                    <div class="product-review">
                                        <span class="shopify-product-reviews-badge" data-id="1394247860288"></span>
                                    </div>

                                </div>

                                <div class="featured-img lazyload waiting">
                                    <?php $images=collect(json_decode($product->multiple))->first() ?>

                                        <a href="{{route('product',$product->slug)}}">
                                            <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images) }}" alt="Black Fashion Example" />

                                            <span class="img-back d-none d-lg-block">
                                                        <img class="back lazyload"
                                                            data-src="assets/img/products/23.jpg"
                                                            alt="Black Fashion Example" />
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

                                        <span class="price-sale"><span
                                                            class=money>${{$product->special_price}}</span></span>
                                        <span class="price-compare"><span
                                                            class=money>${{$product->product_price}}</span></span>

                                    </div>

                                    <div class="product-add-cart">

                                        <form action="/cart/add" method="post" enctype="multipart/form-data">
                                            <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart"><span
                                                                class="demo-icon icon-electro-add-to-cart-icon"></span></a>
                                            <select class="d-none" name="id">

                                                <option value="12672451543104">Default Title
                                                </option>

                                            </select>
                                        </form>

                                    </div>
                                </div>

                                <div class="product-button">

                                    <div data-target="#quick-shop-popup" class="quick_shop" data-toggle="modal" title="Quick View">
                                        <i class="demo-icon icon-eye-1"></i> Quick View
                                        <span class="json hide"></span>
                                    </div>

                                    <div class="product-wishlist">
                                        <a href="javascript:void(0)" class="add-to-wishlist add-product-wishlist" data-handle-product="black-fashion-zapda-shoes" title="Wishlist">
                                            <i class="demo-icon icon-electro-wishlist-icon"></i> Wishlist
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- --------------- PRODUCT QUICK VIEW POPUP START --------------- -->

                    <div id="quick-shop-popup" class="modal fade" role="dialog" aria-hidden="true" tabindex="-1">
                        <div class="modal-dialog fadeIn animated">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <span class="close" title="Close" data-dismiss="modal" aria-hidden="true"></span>
                                </div>

                                <div class="modal-body">

                                    <div class="product-image">
                                        <div id="qs-product-image" class="product-image-inner">
                                            <div id="gallery-qs-image" class="gallery-thumb-img owl-carousel">
                                                <div class="single-qs-product-image">
                                                    <img class="zoom-image" src="assets/img/products/1.jpg" alt="">
                                                </div>
                                                <div class="single-qs-product-image">
                                                    <img class="zoom-image" src="assets/img/products/2.jpg" alt="">
                                                </div>
                                                <div class="single-qs-product-image">
                                                    <img class="zoom-image" src="assets/img/products/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-info">

                                        <div id="qs-product-author">
                                            <a href=""></a>
                                        </div>

                                        <h2 id="qs-product-title">
                                                    <a href=""></a>
                                                </h2>

                                        <div id="qs-rating">
                                            <div class="rateit" data-rateit-value="4.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                            <span class="spr-badge-caption">1 review</span>
                                        </div>
                                        <div id="qs-product-price" class="detail-price">
                                            <span class="price-sale">
                                                        <span class="money">$150.00</span>
                                            </span>
                                            <del class="price-compare">
                                                        <span class="money">$229.00</span>
                                                    </del>
                                        </div>

                                        <div id="qs-action-wrapper">
                                            <form action="" method="post" class="variants" id="qs-product-action" enctype="multipart/form-data">

                                                <div id="qs-product-variants" class="variants-wrapper"></div>

                                                <div id="qs-description">
                                                    <ul>
                                                        <li>4.5 inch HD Screen</li>
                                                        <li>Android 4.4 KitKat OS</li>
                                                        <li>1.4 GHz Quad Core™ Processor</li>
                                                        <li>20 MP front Camera</li>
                                                    </ul>
                                                </div>

                                                <div class="quantity-product qs-quantity-product">
                                                    <label>Quantity</label>
                                                    <div class="quantity qs-quantity">
                                                        <input type="number" id="qs-quantity" class="condimentum-turpisitem-quantity" name="quantity" value="1">
                                                        <span class="qty-wrapper">
                                                                    <span class="qty-inner qs-qty-inner">
                                                                        <span class="qty-up" title="Increase" data-src="#qs-quantity">
                                                                            <i class="fa fa-angle-up"></i>
                                                                        </span>
                                                        <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                                                                            <i class="fa fa-angle-down"></i>
                                                                        </span>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="qs-product-button">
                                                    <div class="qs-action">
                                                        <button id="qs-add-cart" class="btn btn-1 add-to-cart" type="submit" name="add">
                                                            <span class="demo-icon icon-electro-add-to-cart-icon"></span> Add to cart
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>

        </div>

    </div>
    <!-- Deal Of Days -->
@endsection
