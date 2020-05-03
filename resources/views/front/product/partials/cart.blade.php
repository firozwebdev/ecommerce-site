<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    <div id="product-info" class="product-info">
        <div class="product-info-inner">
            <div id="stock">
                <span>Available:</span>
                <span class="stock">{{$product->stock==1?'In Stock':'Stock Out'}}</span>
            </div>
            <div class="product-price">
                <div class="detail-price">
                    <span class="price-sale">
                        <span class="money">${{$product->special_price}}</span>
                    </span>
                    <del class="price-compare">
                        <span class="money">${{$product->product_price}}</span>
                    </del>
                </div>
            </div>
            <div class="group-cw clearfix">
                {!! Form::open(['url' => route('cartpost'),'method'=>'Post', 'enctype'=>"multipart/form-data"]) !!}
                <!--
                    <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                    <input type="hidden" name="rowId" value="" /> -->
                <input type="hidden" name="utf8" value="✓" />
                <div class="quantity-product">
                    <label>Quantity</label>
                    <div class="quantity">
                        <input readonly type="text" id="quantity" class="item-quantity input-cart-qty" name="quantity" value="1" min="1" pattern="[0-9]*" />
                        <span class="qty-inner qty-wrapper">
                            <span class="qty-up" title="Increase" data-src="#quantity">
                                <i class="demo-icon icon-plus"></i>
                            </span>
                        <span class="qty-down" title="Decrease" data-src="#quantity">
                                <i class="demo-icon icon-minus"></i>
                            </span>
                        </span>
                    </div>
                </div>

                <ul class="options cart-options">
                    <?php $colors=json_decode($product->color,true) ?>
                    @if($color==!null)
                    <li>
                        <span class="name">Choose Color</span>
                        <!-- <span class="divider-colon">:</span> -->
                        <span>
                            @foreach($colors as $color)
                            <input type="radio" name="color" id="c-{{$color}}" value="{{$color}}">
                            <label class="cart-options-label" for="c-{{$color}}">
                                <span>{{$color}}</span>
                                <span><img src="{{asset('frontEnd/assets/img/check-icn.svg')}}" alt=""></span>
                            </label>
                            @endforeach
                        </span>
                    </li>
                    @endif

                    <?php $sizes=json_decode($product->size,true) ?>
                    @if($sizes==!null)
                    <li>
                        <span class="name">Choose Size</span>
                        <!-- <span class="divider-colon">:</span> -->
                        <span>
                            @foreach($sizes as $size)
                            <input type="radio" name="size" id="s-{{$size}}" value="{{$size}}">
                            <label class="cart-options-label" for="s-{{$size}}">
                                <span>{{$size}}</span>
                                <span><img src="{{asset('frontEnd/assets/img/check-icn.svg')}}" alt=""></span>
                            </label>
                            @endforeach
                        </span>
                    </li>
                    @endif
                </ul>


                <div class="action-button">
                    <div class="product-add-cart">
                        <input type="hidden" name="quantity" value="1" />
                        <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                        <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                        <a href="javascript:void(0)" class="add-to-cart btn btn-1" title="Add to cart">
                            <span class="demo-icon icon-electro-add-to-cart-icon"></span>Add to cart
                        </a>
                    </div>
                    <!-- <button id="add-to-cart"  class="add-to-cart btn btn-1" type="button"><span class="demo-icon icon-electro-add-to-cart-icon"></span>Add to cart</button> -->
                </div>
                <div class="pre-order hide">
                    <a href="#pre-order-popup" class="btn-pre-order btn btn-1">Pre-order</a>
                </div>
                <div class="pre-order-success hide">Successful pre-order.Thanks for contacting us!</div>
                <div class="shopify-payment-button">
                    <button type="submit" class="shopify-payment-button__button shopify-payment-button__button--unbranded"> Buy It Now
                    </button>
                </div>
                <a href="javascript:void(0)" class="add-to-wishlist add-product-wishlist" title="Wishlist">
                    <i class="demo-icon icon-electro-wishlist-icon"></i>Wishlist
                </a>
                <a href="javascript:void(0)" class="add-to-compare add-product-compare" title="Compare">
                    <i class="demo-icon icon-electro-compare-icon"></i>Compare
                </a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
