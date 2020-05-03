@extends('front.master')
@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="shopify-section-cart-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">
                        <ul class="breadcrumb">
                            <li itemscope itemtype="">
                                <a itemprop="url" href="/">
                                    <span itemprop="title" class="d-none">Arena Electro</span>Home
                                </a>
                            </li>
                            <li class="active">Compare</li>
                        </ul>
                    </div>
                </div>

                <div id="col-main" class="page-cart page-compare">
                    <div class="container">

                        <div class="table-responsive">
                            <table class="table table-compare compare-list">
                                <tbody>
                                    <tr>
                                        <th>Product</th>
                                        <td>
                                            <a class="product" href="single-product.html">
                                                <div class="product-image">
                                                    <div class="">
                                                        <img alt="1" class="wp-post-image" src="{{asset('frontEnd/assets/img/products/1.jpg')}} ">
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title">White Solo 2 Wireless</h3>
                                                    <div class="rateit" data-rateit-value="2" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="product" href="single-product.html">
                                                <div class="product-image">
                                                    <div class="">
                                                        <img alt="Ultrabooks" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('frontEnd/assets/img/products/2.jpg')}} ">
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title">Tablet Red EliteBook  Revolve 810 G2</h3>

                                                    <div class="rateit" data-rateit-value="4.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="product" href="single-product.html">
                                                <div class="product-image">
                                                    <div class="">
                                                        <img alt="GameStation" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('frontEnd/assets/img/products/3.jpg')}} ">
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title">GameConsole Destiny  Special Edition</h3>
                                                    <div class="rateit" data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>
                                            <div class="product-price price"><span class="electro-price"><span class="amount">$248.99</span></span></div>
                                        </td>
                                        <td>
                                            <div class="product-price price"><span class="electro-price"><ins><span class="amount">$1,999.00</span></ins></span></div>
                                        </td>
                                        <td>
                                            <div class="product-price price"><span class="electro-price"><span class="amount">$789.00</span></span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Availability</th>
                                        <td><span class="in-stock">In stock</span></td>
                                        <td><span class="out-of-stock">Out of stock</span></td>
                                        <td><span class="in-stock">In stock</span></td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>
                                            <ul style="text-align:left; margin-bottom: 0;">
                                                <li><span class="a-list-item">Pair and Play with Bluetoothe</span></li>
                                                <li><span class="a-list-item">12 hour rechargeable battery</span></li>
                                                <li><span class="a-list-item">Take hands-free calls</span></li>
                                                <li><span class="a-list-item">Fine-tuned acoustics</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul style="text-align:left; margin-bottom: 0;">
                                                <li><span class="a-list-item">Intel Core i5 processors</span></li>
                                                <li><span class="a-list-item">Intel Iris Graphics 6100</span></li>
                                                <li><span class="a-list-item">Flash storage</span></li>
                                                <li><span class="a-list-item">Up to 10 hours of battery</span></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul style="text-align:left; margin-bottom: 0;">
                                                <li><span class="a-list-item"> Play online with your friends</span></li>
                                                <li><span class="a-list-item">Cutting edge graphics bring</span></li>
                                                <li><span class="a-list-item">Connect with your friends</span></li>
                                                <li><span class="a-list-item">  Perfect for both new players</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Add to cart</th>
                                        <td>
                                            <a class="btn btn-2" href="">Add to cart</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-2" href="">Add to cart</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-2" href="">Add to cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">
                                            <a href="#" title="Remove" class="remove-icon"><i class="demo-icon icon-close"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" title="Remove" class="remove-icon"><i class="demo-icon icon-close"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" title="Remove" class="remove-icon"><i class="demo-icon icon-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
