<?php
$latests = \App\Models\Product::where('status',1)->latest()->take(4)->get();
 ?>
<div class="sb-widget d-none d-lg-block">
    <div class="sb-product">

        <h5 class="sb-title">Latest Products</h5>

        <div class="sb-product-list sb-product-carousel">

            <div class="latest-product-item">
              @foreach($latests as $latest)
                <div class="row align-items-center">

                    <div class="sb-product-head col-sm-5 col-xs-4">
                        <a href="{{route('product',$latest->slug)}}" class="lazyload waiting">
                            <img class="lazyload" data-src="{{Helper::getProductImage($latest->id)}}" alt="{{$latest->product_name}}" />
                        </a>
                    </div>

                    <div class="sb-product-content col-sm-7 col-xs-8">
                        <div class="bp-content-inner">

                            <a href="{{route('product',$latest->slug)}}">{{$latest->product_name}}</a>

                            <div class="sb-price">
                                @if($latest->special_price)
                                <span class="price-compare"> <span class=money>{{$latest->product_price}}</span></span>
                                @endif
                                <span class="price-sale"><span class=money>{{$latest->special_price?$latest->special_price:$latest->product_price}}</span></span>

                            </div>

                        </div>
                    </div>

                </div>
                @endforeach

            </div>

        </div>

    </div>
</div>
