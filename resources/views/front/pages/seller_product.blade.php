@extends('front.master')

@section('content')

<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="home-main-content" class="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="shopify-section boxed-section-design seller-product-section">
                                <div class="layout-full style-normal">

                                    <div class="seller-product-details-area text-center">
                                        <div class="seller-image">
                                            <img src="{{asset('uploads/documents/Sellerimages/'.$s_info->avatar)}}" alt="">
                                        </div>
                                        <div class="title-wrapper">
                                            <h3>{{$s_info->name}}</h3>
                                        </div>
                                    </div>

                                    <div class="wrap-product-slider">
                                        <div class="product-slider-content no-padding  owl-center">
                                            <div class="row">
                                                @foreach($s_product as $data)

                                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                                                    <div class="product-wrapper effect-none">
                                                        <div class="product-head">
                                                            <div class="product-image">
                                                                <div class="featured-img lazyload waiting">
                                                                  <?php $image=collect(json_decode($data->products->multiple))->first()?>
                                                                    <a href="">
                                                                        <img class="featured-image front lazyload" data-src="{{asset('uploads/documents/productimages/'.$image)}}" alt="Georgeous White Dresses" />
                                                                    </a>
                                                                </div>
                                                                <div class="product-group-vendor-name">
                                                                    <h5 class="product-name">
                                                                        <a href="">{{$data->products->product_name}}</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pc-inner">
                                                                <div class="price-cart-wrapper">
                                                                    <div class="product-price">
                                                                        <span class="price">
                                                                            <span class="money">{{$data->products->product_price}}</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-add-cart">
                                                                        <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="quantity" value="1" />
                                                                            <input type="hidden" name="product_slug" value="{{$data->products->slug}}" />
                                                                            <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                                                                            <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart">
                                                                                <span class="demo-icon icon-electro-add-to-cart-icon"></span>
                                                                            </a>
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
