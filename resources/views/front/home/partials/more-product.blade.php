<div class="shopify-section boxed-section-design more-product-section">
    <div class="layout-full style-normal">

        <div class="title-wrapper ">
            <h3>More Products</h3>
        </div>

        <div class="wrap-product-slider">
            <div class="product-slider-content no-padding  owl-center">

                <div class="row">
                  @foreach($recommended_products as $recommended_product)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">

                        <div class="product-wrapper effect-none">
                            <div class="product-head">
                                <div class="product-image">
                                    <div class="featured-img lazyload waiting">
                                        <a href="{{route('product',$recommended_product->slug)}}">
                                            <?php $images=collect(json_decode($recommended_product->multiple))->first() ?>
                                            <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images) }}" alt="Product Image" />
                                        </a>
                                    </div>
                                    <div class="product-group-vendor-name">
                                        <!-- <div class="product-vendor">
                                            <a href="{{route('product',$recommended_product->slug)}}" title="Product Title">{{$recommended_product->product_title}}</a>
                                        </div> -->
                                        <h5 class="product-name">
                                          <a href="{{route('product',$recommended_product->slug)}}">{{$recommended_product->product_name}}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="pc-inner">
                                    <div class="price-cart-wrapper">
                                      <div class="product-price">
                                        @if($discountPrice = Helper::checkProductDiscount($recommended_product))
                                        <span class="price-sale">
                                            <span class="money"> {{$discountPrice}} </span>
                                        </span>
                                        <span class="price-compare">
                                            <span class="money"> {{$recommended_product->product_price}} </span>
                                        </span>
                                        @else
                                          <span class="price">
                                              <span class="money"> ${{$recommended_product->product_price}}</span>
                                          </span>
                                        @endif
                                      </div>
                                        <div class="product-add-cart">
                                            <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="quantity" value="1" />
                                                <input type="hidden" name="product_slug" value="{{$recommended_product->slug}}" />
                                                <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                                                <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart">
                                                    <span class="demo-icon icon-electro-add-to-cart-icon"></span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-button">
                                        <div data-target="#quick-shop-popup" data-productDetails="{{json_encode($recommended_product)}}" class="quick_shop" data-toggle="modal" title="Quick View">
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
@section('after-script')
@parent
<script>
    var page = 2;

    $(document).ready(function() {
        // see if we're at the bottom of the page to potentially load more content
        $(window).on('scroll', scrollProducts);

        function scrollProducts() {
            var end = $("#footer-content").offset().top;
            var viewEnd = $(window).scrollTop() + $(window).height();
            var distance = end - viewEnd;

            // when we're almost at the bottom
            if (distance < 300) {
                // unbind to prevent excessive firing
                $(window).off('scroll', scrollProducts);
                // console.log('we reached the bottom');

                $.ajax({
                    type: 'GET',
                    url: siteUrlBase + '/products/recommended?page=' + page,
                    success: function(data) {
                        // console.log("success!");
                        $('.infinite-scroll-container').append(data).fadeIn();
                        // rebind after successful update
                        $(window).on('scroll', scrollProducts);
                        page++;
                    }
                });
            }
        }
    });
</script>
@endsection
