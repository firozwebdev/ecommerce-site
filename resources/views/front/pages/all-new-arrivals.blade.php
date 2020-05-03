@extends('front.master')

@section('content')

<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="home-main-content" class="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="shopify-section boxed-section-design no-background flash-deals-section">
                                <div class="layout-full style-normal">

                                    <div class="title-wrapper ">
                                        <h3>New Arrivals Products </h3>
                                    </div>

                                    <div class="wrap-product-slider">
                                        <div class="product-slider-content no-padding  owl-center">
                                            <div class="row">
                                              
                                           @foreach($new_arrival_product as $product)

                                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                                                    <div class="product-wrapper effect-none">
                                                        <div class="product-head">
                                                            <div class="product-image">
                                                                <div class="featured-img lazyload waiting">
                                                                  <?php  $images=collect(json_decode($product->multiple))->first() ?>
                                                                    <a href="">
                                                                        <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images)}}" alt="Product Image" />
                                                                    </a>
                                                                </div>
                                                                <div class="product-group-vendor-name">
                                                                    <h5 class="product-name">
                                                                        <a href="{{route('product',$product->slug)}}">{{$product->product_name}}</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pc-inner">
                                                                <div class="price-cart-wrapper">
                                                                  <div class="product-price">
                                                                    @if($discountPrice = Helper::checkProductDiscount($product))
                                                                    <span class="price-sale">
                                                                        <span class="money"> {{$discountPrice}} </span>
                                                                    </span>
                                                                    <span class="price-compare">
                                                                        <span class="money"> {{$product->product_price}} </span>
                                                                    </span>
                                                                    @else
                                                                      <span class="price">
                                                                          <span class="money"> ${{$product->product_price}}</span>
                                                                      </span>
                                                                    @endif
                                                                  </div>

                                                                    <div class="product-add-cart">
                                                                        <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="quantity" value="1" />
                                                                            <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                                                                            <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                                                                            <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart">
                                                                                <span class="demo-icon icon-electro-add-to-cart-icon"></span>
                                                                            </a>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="product-button">
                                                                    <div data-target="#quick-shop-popup" data-productDetails="{{json_encode($product)}}" class="quick_shop" data-toggle="modal" title="Quick View">
                                                                        <i class="demo-icon icon-eye-1"></i> Quick View
                                                                    </div>
                                                                    <div class="product-wishlist">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist add-product-wishlist" data-handle-product="georgeous-white-dresses" title="Wishlist">
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
