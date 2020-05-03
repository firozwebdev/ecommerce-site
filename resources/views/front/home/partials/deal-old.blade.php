<!-- Deal Of Days -->
<div id="shopify-section-1542364570917" class="shopify-section">
    <div id="ps-1542364570917" class="product-slider-section layout-full style-normal" style="background-color: #ffffff;">

        <div class="title-wrapper title-wrapper-deal">
            <h3>Deals of The Day</h3>
            <div class="header-countdown">
                <span class="countdown-title">End in:</span>
                <div class="wrapper-countdown">
                    <div class="countdown-end-in" data-due-date="{{date('Y-m-d',strtotime(" +1 day "))}}"></div>
                </div>
            </div>
            <a href="#">Go to Daily Deals Sections<i class="demo-icon icon-angle-right"></i></a>
        </div>

        <div class="wrap-product-slider">
            <div class="product-slider-content no-padding  owl-center">
                <div class="ps-list ps-list-1542364570917">
                    @foreach($dailyDeals as $dailyDeal)
                    <div class="product-wrapper effect-none  ">

                        <div class="product-head">
                            <div class="product-image">
                                <div class="product-group-vendor-name">
                                    <div class="product-vendor"><a href="{{route('product',$dailyDeal->product->slug)}}" title="Product Titlle">{{$dailyDeal->product->product_title}}</a></div>
                                    <h5 class="product-name">
                                        <a href="{{route('product',$dailyDeal->product->slug)}}">{{$dailyDeal->product->product_name}}</a>
                                    </h5>
                                    <div class="product-review">
                                        <span class="shopify-product-reviews-badge" data-id="1394247860288"></span>
                                    </div>
                                </div>
                                <div class="featured-img lazyload waiting">
                                    <?php $images=collect(json_decode($dailyDeal->product->multiple))->first() ?>
                                    <a href="{{route('product',$dailyDeal->product->slug)}}">
                                        <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images) }}" alt="Product Image" />
                                        <span class="img-back d-none d-lg-block">
                                            <img class="back lazyload" data-src="{{asset('frontEnd/assets/img/products/23.jpg')}}" alt="Black Fashion Example" />
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
                                            <span class=money>${{$dailyDeal->product->special_price}}</span>
                                        </span>
                                        <span class="price-compare">
                                            <span class=money>${{$dailyDeal->product->product_price}}</span>
                                        </span>
                                    </div>
                                    <div class="product-add-cart">
                                      <div class="product-add-cart">

                                          <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product_slug" value="{{$dailyDeal->product->slug}}" />
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
                                </div>
                                <div class="product-button">
                                    <div data-target="#quick-shop-popup" class="quick_shop" data-toggle="modal" title="Quick View">
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
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Deal Of Days -->
