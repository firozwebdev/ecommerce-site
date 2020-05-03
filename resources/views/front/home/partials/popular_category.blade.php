@if($popular_categories->count() > 0)
<!-- Popular catagories -->
<div class="shopify-section popular-categories-section">
    <div class="hp-tabs-section layout-full tab-style-2 heading-row-left">

        <div class="title-wrapper">
            <h3>Popular Categories</h3>
            <a href="">View All Categories<i class="demo-icon icon-angle-right"></i></a>
        </div>

        <div class="wrap-tab-content">

            <!-- Begin nav tabs -->
            <div class="nav-tab-wrapper nav-tab-position">
                <ul class="nav nav-tabs tab-heading tab-title-1 align-left" role="tablist">
                    <?php $k = 0; ?>
                    @foreach($popular_categories as $data)

                    <li class="tab-title nav-item">
                      <a class="nav-link {{ $k==0? 'active':''}} lazyload" href="#pc-tab-{{$data->id}}" aria-controls="pc-tab-{{$data->id}}" role="tab" data-toggle="tab">{{$data->category->name}}</a>
                    </li>
                    <?php $k++; ?>
                    @endforeach

                </ul>
            </div>
            <!-- End nav tabs -->

            <!-- Begin tab content -->
            <?php $i = 0; ?>
            <div class="tab-content tab-title-1">
              @foreach($popular_categories as $data)
                <!-- Tab {{$i}} Start -->
                <div class="special-block-image fade  {{ $i==0? 'show active':''}} tab-pane" id="pc-tab-{{$data->id}}">
                    <div class="hp-tabs-list tabs-list-row big-image-style big-image-left">
                        <div class="wrap-grid-item">
                            <div class="row">
                              <!-- <pre>
                                {{$data}}
                              </pre> -->
                                @foreach($data->category->products as $product)
                                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="product-wrapper effect-none">
                                        <div class="product-head">
                                            <div class="product-image">
                                                <div class="featured-img lazyload waiting">
                                                    <a href="{{route('product',$product->slug)}}">
                                                        <?php $images=collect(json_decode($product->multiple))->first() ?>
                                                        <img class="featured-image front lazyload" data-src="{{ asset('uploads/documents/productimages/'.$images)}}" alt="Product Image" />
                                                    </a>
                                                </div>
                                                <div class="product-group-vendor-name">
                                                    <!-- <div class="product-vendor">
                                                        <a href="{{route('product',$product->slug)}}" title="Product Title">{{$product->product_title}}</a>
                                                    </div> -->
                                                    <h5 class="product-name">
                                                        <a href="{{route('product',$product->slug)}}">{{$product->product_name}}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pc-inner">
                                                <div class="price-cart-wrapper">
                                                    <div class="product-price">
                                                        <span class="price">
                                                            <span class="money">$ {{$product->product_price}}</span>
                                                        </span>
                                                    </div>
                                                    <div class="product-add-cart">
                                                        <form action="{{route('cartpost')}}" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="quantity" value="1" />
                                                            <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                                                            <input type="hidden" name="rowId" value="{{rand(55555,999999)}}" />
                                                            <a href="javascript:void(0)" class="btn-add-cart add-to-cart" title="Add to cart">
                                                                <span class="demo-icon icon-electro-add-to-cart-icon"></span>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <div data-target="#quick-shop-popup" data-productDetails="{{json_encode($product)}}" class="quick_shop" data-toggle="modal" title="Quick View">
                                                        <i class="demo-icon icon-eye-1"></i> Quick View
                                                    </div>
                                                    <div class="product-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-wishlist add-product-wishlist" data-handle-product="georgeous-white-dresses" title="Wishlist">
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
                <?php $i++ ?>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endif
