@foreach($recommended_products as $recommended_product)
<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
    <div class="product-wrapper effect-none">
        <div class="product-head">
            <div class="product-image">
                <div class="product-group-vendor-name">
                    <h5 class="product-name">
                        <a href="">{{$recommended_product->product_name}}</a>
                    </h5>
                    <div class="product-review">
                        <span class="shopify-product-reviews-badge" data-id="1394248679488"></span>
                    </div>
                </div>
                <div class="featured-img lazyload waiting">
                    <a href="">
                        <img class="featured-image front lazyload" data-src="{{$recommended_product->product_image}}" alt="{{$recommended_product->product_name}}" />
                    </a>
                </div>
            </div>
        </div>

        <div class="product-content">
            <div class="pc-inner">
                <div class="price-cart-wrapper">
                    <div class="product-price">
                        <span class="price">
                            <span class="money">$349.99</span>
                        </span>
                    </div>
                    <div class="product-add-cart">
                        <form action="/cart/add" method="post" enctype="multipart/form-data">
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
