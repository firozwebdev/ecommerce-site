<!-- --------------- SCROLL TO TOP START --------------- -->
<div id="scroll-to-top" title="Back To Top">
    <a href="javascript:;"></a>
</div>
<!-- --------------- SCROLL TO TOP END --------------- -->

<!-- --------------- MOBILE LAYOUT START --------------- -->
<div class="mobile-layout-bar d-lg-none">
    <ul class="m-block-icons list-inline">
        <li class="m-customer-account">
            <a href="#" title="My Account" class="lazyload waiting">
                <i class="demo-icon icon-electro-user-icon"></i>
            </a>
        </li>

        <li class="search-button searchbox" data-toggle="modal" data-target="#searchModal">
            <a href="javascript:;" class="lazyload waiting">
                <i class="demo-icon icon-electro-search-icon"></i>
            </a>
        </li>

        <li class="currency uppercase currency-block">
            <a class="currency_wrapper" href="javascript:;">
                <span class="currency_code">USD</span>
                <span class="expand"><i class="demo-icon icon-angle-down"></i></span>
            </a>

            <ul class="currencies">
                <li class="currency-USD active">
                    <a href="javascript:;"><i class="flag-usd"></i><span>USD</span></a>
                    <input type="hidden" value="USD" />
                </li>

                <li class="currency-EUR">
                    <a href="javascript:;"><i class="flag-eur"></i><span>EUR</span></a>
                    <input type="hidden" value="EUR" />
                </li>

                <li class="currency-GBP">
                    <a href="javascript:;"><i class="flag-gbp"></i><span>GBP</span></a>
                    <input type="hidden" value="GBP" />
                </li>

                <li class="currency-CAD">
                    <a href="javascript:;"><i class="flag-cad"></i><span>CAD</span></a>
                    <input type="hidden" value="CAD" />
                </li>

                <li class="currency-AUD">
                    <a href="javascript:;"><i class="flag-aud"></i><span>AUD</span></a>
                    <input type="hidden" value="AUD" />
                </li>

                <li class="currency-TRY">
                    <a href="javascript:;"><i class="flag-try"></i><span>TRY</span></a>
                    <input type="hidden" value="TRY" />
                </li>
            </ul>

            <select class="currencies_src hide" name="currencies">
                <option value="USD" selected="selected">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="CAD">CAD</option>
                <option value="AUD">AUD</option>
                <option value="TRY">TRY</option>
            </select>
        </li>

        <li class="wishlist-target">
            <a href="#" class="num-items-in-wishlist show-wishlist lazyload waiting" title="Wishlist">
                <span class="wishlist-icon">
                    <i class="demo-icon icon-electro-wishlist-icon"></i>
                    <span class="number">0</span>
                </span>
            </a>
        </li>

        <li class="compare-target">
            <a href="#" class="num-items-in-compare show-compare lazyload waiting" title="Compare">
                <span class="compare-icon">
                    <i class="demo-icon icon-electro-compare-icon"></i>
                    <span id="compare-number" class="number">0</span>
                </span>
            </a>
        </li>
    </ul>
</div>
<!-- --------------- MOBILE LAYOUT END --------------- -->

<!-- --------------- SEARCH MODAL START --------------- -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="searchbox modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="demo-icon icon-close"></i>
            </button>

            <div class="content-wrapper">
                <form id="search" class="navbar-form search" action="" method="get">
                    <input type="hidden" name="type" value="product" />
                    <input id="bc-product-search" type="text" name="q" class="form-control" placeholder="Search" autocomplete="off" />
                    <button type="submit" class="search-icon">
                        <i class="demo-icon icon-electro-search-icon"></i>
                    </button>
                </form>

                <div id="result-ajax-search">
                    <ul class="search-results"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --------------- SEARCH MODAL END --------------- -->

<!-- --------------- PROMOTION POPUP START --------------- -->
<div id="mailchimp-popup" class="leaves" style="display:none;" class="" data-expires="7" data-style="leaves">
    <div class="underlay"></div>
    <div class="wrap-modal intent-exit-btn">
        <a href="javascript:void(0);"><i class="demo-icon icon-close"></i></a>
        <div class="modal-body">
            <div class="mailchimp-popup-content">
                <h3 class="title">Sign up our <br>newsletter<br> and get to</h3>
                <div class="mailchimp-caption-1">-20
                    <label>%</label>
                </div>
                <form id="mc-form" action="" method="post" name="mc-embedded-subscribe-form" target="_blank" rel="noopener">
                    <input id="mc-email" class="input-block-level" type="email" name="EMAIL" placeholder="Your email..." required />
                    <button class="btn btn-1" type="submit">Subscribe</button>
                </form>
            </div>
            <div class="mailchimp-popup-img lazyload">
                <img class="lazyload" data-src="{{asset('frontEnd/assets/img/mailchip_popup_bg.jpg')}}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- --------------- PROMOTION POPUP END --------------- -->

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
                                <img class="zoom-image" src="{{asset('frontEnd/assets/img/products/1.jpg')}}" alt="">
                            </div>
                            <div class="single-qs-product-image">
                                <img class="zoom-image" src="{{asset('frontEnd/assets/img/products/2.jpg')}}" alt="">
                            </div>
                            <div class="single-qs-product-image">
                                <img class="zoom-image" src="{{asset('frontEnd/assets/img/products/3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-info">

                    <h2 id="qs-product-title">
                        <a href="">Kinair Product Sample</a>
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
                        <!-- <form action="" method="post" class="variants" id="qs-product-action" enctype="multipart/form-data"> -->

                        <div id="qs-product-variants" class="variants-wrapper"></div>

                        <div id="qs-description">
                            <ul>
                                <li>4.5 inch HD Screen</li>
                                <li>Android 4.4 KitKat OS</li>
                                <li>1.4 GHz Quad Core™ Processor</li>
                                <li>20 MP front Camera</li>
                            </ul>
                        </div>
                        <form id="qs-product-action" action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="qs-form-product-slug" name="product_slug" value="" />
                            <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />

                            <ul class="options cart-options">
                                <li>
                                    <span class="name">Choose Color</span>
                                    <!-- <span class="divider-colon">:</span> -->
                                    <span>
                                        <input type="radio" name="mcolor" id="mc-color" value="color">
                                        <label class="cart-options-label" for="mc-color">
                                            <span>color</span>
                                            <span><img src="{{asset('frontEnd/assets/img/check-icn.svg')}}" alt=""></span>
                                        </label>
                                    </span>
                                </li>


                                <li>
                                    <span class="name">Choose Size</span>
                                    <!-- <span class="divider-colon">:</span> -->
                                    <span>
                                        <input type="radio" name="msize" id="ms-size" value="size">
                                        <label class="cart-options-label" for="ms-size">
                                            <span>size</span>
                                            <span><img src="{{asset('frontEnd/assets/img/check-icn.svg')}}" alt=""></span>
                                        </label>
                                    </span>
                                </li>
                            </ul>

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
                                    <a href="javascript:void(0)" class="btn btn-1 add-to-cart" title="Add to cart">
                                        <span class="demo-icon icon-electro-add-to-cart-icon"></span> Add to cart
                                    </a>
                                </div>
                            </div>
                        </form>

                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --------------- PRODUCT QUICK VIEW POPUP END --------------- -->
