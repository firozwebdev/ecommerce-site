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
                            <li class="active">Wishlist</li>
                        </ul>
                    </div>
                </div>

                <div id="col-main" class="page-cart">
                    <h1 class="page-heading">Wishlist</h1>
                    <div class="container">

                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="remove">&nbsp;</th>
                                        <th class="item">Product</th>
                                        <th class="price">Unit Price</th>
                                        <th class="qty">Stock Status</th>
                                        <th class="total-price">&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="cart-item" data-id="12668996419648">
                                        <td class="action">
                                            <a href="" class="cart-remove-btn" type="button" title="Remove">
                                                <span class="cart-remove-icon">
                                                    <i class="demo-icon icon-close" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <div class="item-image">
                                                <a href="">
                                                    <img src="{{asset('frontEnd/assets/img/products/4.jpg')}}" alt="Freecof Product Sample" />
                                                </a>
                                            </div>
                                            <div class="item-title">
                                                <a href="">
                                                    <span class="item-name">Freecof Product Sample</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="item-price">
                                            <span class=money>$450.00</span>
                                        </td>
                                        <td class="item-status">
                                            <span class="stock-stutas">In stock</span>
                                        </td>
                                        <td class="item-cart">
                                            <a href="" class="btn btn-2 btn-cart">Add To Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="cart-item" data-id="12668996419648">
                                        <td class="action">
                                            <a href="" class="cart-remove-btn" type="button" title="Remove">
                                                <span class="cart-remove-icon">
                                                    <i class="demo-icon icon-close" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <div class="item-image">
                                                <a href="">
                                                    <img src=" {{asset('frontEnd/assets/img/products/5.jpg')}}" alt="Freecof Product Sample" />
                                                </a>
                                            </div>
                                            <div class="item-title">
                                                <a href="">
                                                    <span class="item-name">Freecof Product Sample</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="item-price">
                                            <span class=money>$450.00</span>
                                        </td>
                                        <td class="item-status">
                                            <span class="stock-stutas">In stock</span>
                                        </td>
                                        <td class="item-cart">
                                            <a href="" class="btn btn-2 btn-cart">Add To Cart</a>
                                        </td>
                                    </tr>
                                    <tr class="cart-item" data-id="12668996419648">
                                        <td class="action">
                                            <a href="" class="cart-remove-btn" type="button" title="Remove">
                                                <span class="cart-remove-icon">
                                                    <i class="demo-icon icon-close" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <div class="item-image">
                                                <a href="">
                                                    <img src="{{asset('frontEnd/assets/img/products/6.jpg')}} " alt="Freecof Product Sample" />
                                                </a>
                                            </div>
                                            <div class="item-title">
                                                <a href="">
                                                    <span class="item-name">Freecof Product Sample</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="item-price">
                                            <span class=money>$450.00</span>
                                        </td>
                                        <td class="item-status">
                                            <span class="stock-stutas">In stock</span>
                                        </td>
                                        <td class="item-cart">
                                            <a href="" class="btn btn-2 btn-cart">Add To Cart</a>
                                        </td>
                                    </tr>

                                    <tr class="last">
                                        <td colspan="5">
                                            <a href="" class="btn btn-2 btn-continue">Continue  Shopping</a>

                                            <a class="btn btn-1 btn-clear" href="">Clear Wishlist</a>
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
