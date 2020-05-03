<div class="product-details-info-area">
    <div class="container">

        <div class="product">
            <div class="product-content-wrapper">
                <div class="row">

                    <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                        <div id="product-image" class="product-image">
                            <div class="product-image-inner">

                                <div class="slider-main-image">
                                    <div class="slider-for-03">
                                        <?php $multiple_images=json_decode($product->multiple)?>
                                            @if($multiple_images)
                                                @foreach($multiple_images as $data)
                                                <div class="slick-item slick-zoom">
                                                    <a class="prod-zoom" data-fancybox="gallery" href="{{ asset('uploads/documents/productimages/'.$data) }}">
                                                        <img class="image-zoom" src="{{ asset('uploads/documents/productimages/'.$data) }}" alt="">
                                                    </a>
                                                </div>
                                                @endforeach
                                            @endif

                                    </div>

                                    <div class="slick-btn-03">
                                        <span class="btn-prev"><i class="demo-icon icon-left-1"></i></span>
                                        <span class="btn-next"><i class="demo-icon icon-right-1"></i></span>
                                    </div>

                                </div>

                                <div class="slider-thumbs-03">
                                    <?php $images=json_decode($product->multiple) ?>
                                        @if($images)
                                         @foreach($images as $image)
                                        <div class="slick-item">
                                            <img src="{{ asset('uploads/documents/productimages/'.$image) }}" alt="" />
                                        </div>
                                        @endforeach
                                        @endif
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-content">

                            <div class="product-vendor">{{$product->title}}</div>

                            <h1 class="page-heading">{{$product->product_name}} </h1>

                            <div class="rating-links">
                                <div class="shopify-product-reviews-badge"></div>
                                <a href="#tab_review">Add Your Review</a>
                            </div>

                            <div class="share-links social-sharing" data-permalink="https://arena-electro.myshopify.com/products/hot-com-product-sample">

                                <ul class="list-inline">

                                    <li>
                                        <a class="facebook" target="_blank" rel="noopener" href="//www.facebook.com/sharer.php?u=https://arena-electro.myshopify.com/products/hot-com-product-sample" title="Facebook">
                                            <i class="demo-icon icon-facebook"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="twitter" target="_blank" rel="noopener" href="//twitter.com/share?url=https://arena-electro.myshopify.com/products/hot-com-product-sample&amp;text=hot-com-product-sample" title="Twitter">
                                            <i class="demo-icon icon-twitter"></i>
                                            <span>Tweet</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="google" target="_blank" rel="noopener" href="//plus.google.com/share?url=https://arena-electro.myshopify.com/products/hot-com-product-sample" title="Google">
                                            <i class="demo-icon icon-google"></i>
                                            <span>Google+</span>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                            <div class="short-description">
                                <ul class="product-sku-collection">
                                    <li class="category">
                                        <span class="name">Product SKU</span>
                                        <span class="divider-colon">:</span>
                                        <span class="bold">{{$product->sku}}</span>
                                    </li>

                                    <li class="category">
                                        <span class="name">Category</span>
                                        <span class="divider-colon">:</span>
                                        <span class="bold">{{$product->sku}}</span>
                                    </li>

                                    <li class="category">
                                        <span class="name">Available Quantity</span>
                                        <span class="divider-colon">:</span>
                                        <span class="bold">{{$product->product_quantity}}</span>
                                    </li>

                                    <?php $colors=json_decode($product->color,true) ?>
                                    @if($colors==!null)
                                    <li class="category">
                                        <span class="name">Available Color</span>
                                        <span class="divider-colon">:</span>
                                        <span>
                                            @foreach($colors as $color)
                                                <span class="bold box">{{$color}}</span>
                                            @endforeach
                                        </span>
                                    </li>
                                    @endif

                                    <?php $sizes=json_decode($product->size,true) ?>
                                    @if($sizes==!null)
                                    <li class="category">
                                        <span class="name">Available Size</span>
                                        <span class="divider-colon">:</span>
                                        <span>
                                            @foreach($sizes as $size)
                                                <span class="bold box">{{$size}}</span>
                                            @endforeach
                                        </span>
                                    </li>
                                    @endif
                                </ul>
                            </div>

                            <div class="people-in-cart">
                                <div class="img-user">
                                    <img src="{{asset('frontEnd/assets/img/in_cart.png')}}" alt="Image" />
                                </div>
                                <div class="people-block-text">
                                    <span>Other people want this.</span> 6 people have this in their carts right now.
                                </div>
                            </div>

                            <ul class="shipping-time" data-deliverytime="2" data-deadline="14">

                                <li class="delivery-time"></li>

                                <li class="deadline">
                                    <span class="text">Order within</span>
                                    <div class="countdown_deadline"></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    @include('front/product/partials/cart')

                </div>
            </div>
        </div>

    </div>
</div>
