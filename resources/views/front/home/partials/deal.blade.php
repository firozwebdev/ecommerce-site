@if($dailyDeals->count() > 0)
<!-- Deal Of Days -->
<div class="shopify-section colored-deal-section" style="background-image:url('{{ asset('frontEnd/assets/img/deal-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider-section layout-full style-normal">
                    <div class="title-wrapper-deal colored-deal-section-title">
                        <div class="ticker-deal">
                        	<div class="innerWrap">
                                <div class="vticker">
                                	<ul>
                                        <li>Deals of The Day</li>
                                		<li>50% Cashback</li>
                                	</ul>
                                </div>
                        	</div>
                        </div>

                        <div class="header-countdown colored-deal-section-countdown">
                            <span class="countdown-title">Ends in:</span>
                            <div class="wrapper-countdown">
                                <div class="countdown-end-in" data-due-date="{{date('Y-m-d',strtotime(" +1 day "))}}"></div>
                            </div>
                        </div>

                        <div class="deals-header-separator">
                            <span class="bar"></span>
                            <span class="icon"><span class="icon-fire"></span></span>
                            <span class="bar"></span>

                        </div>

                    </div>

                    <div class="wrap-product-slider">
                        <div class="product-slider-content no-padding  owl-center">
                            <div class="ps-list-deal">
                                <div class="row">
                                    @foreach($dailyDeals as $dailyDeal)
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="product-wrapper effect-none  ">

                                            <div class="product-head">
                                                <div class="product-image">
                                                    <div class="featured-img lazyload waiting">
                                                        <?php $images=collect(json_decode($dailyDeal->product->multiple))->first() ?>
                                                        <a href="{{route('product',$dailyDeal->product->slug)}}">
                                                            <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images) }}" alt="Product Image" />
                                                            <span class="product-label">
                                                                <span class="label-sale">
                                                                    <span class="sale-text">Sale</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="product-group-vendor-name">
                                                        <!-- <div class="product-vendor">
                                                            <a href="{{route('product',$dailyDeal->product->slug)}}" title="Product Titlle">{{$dailyDeal->product->product_title}}</a>
                                                        </div> -->
                                                        <h5 class="product-name">
                                                            <a href="{{route('product',$dailyDeal->product->slug)}}">{{$dailyDeal->product->product_name}}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-content">
                                                <div class="pc-inner">
                                                    <div class="price-cart-wrapper">
                                                        <div class="product-price">
                                                            <span class="price-sale">
                                                                <span class="money">${{$dailyDeal->product->special_price}}</span>
                                                            </span>
                                                            <span class="price-compare">
                                                                <span class="money">${{$dailyDeal->product->product_price}}</span>
                                                            </span>
                                                        </div>
                                                        <div class="product-add-cart">
                                                          <div class="product-add-cart">

                                                                <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="quantity" value="1" />
                                                                    <input type="hidden" name="product_slug" value="{{$dailyDeal->product->slug}}" />
                                                                    <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                                                                    <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart">
                                                                        <span class="demo-icon icon-electro-add-to-cart-icon"></span>
                                                                    </a>
                                                                </form>

                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">
                                                        <div data-target="#quick-shop-popup" data-productDetails="{{json_encode($dailyDeal->product)}}" class="quick_shop" data-toggle="modal" title="Quick View">
                                                            <i class="demo-icon icon-eye-1"></i> Quick View
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
<!-- Deal Of Days -->
@endif
