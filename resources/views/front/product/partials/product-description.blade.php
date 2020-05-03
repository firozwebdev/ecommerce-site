<div class="product-simple-tab" style="background-color:#f9f9f9;">
    <div class="container">

        <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">

                <li class="nav-item">
                    <a class="nav-link" href="#product-details-tab-1" aria-controls="product-details-tab-1" role="tab" data-toggle="tab">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#product-details-tab-2" aria-controls="product-details-tab-2" role="tab" data-toggle="tab">Specifications</a>
                </li>
                @if($product->video_link)
                <li class="nav-item">
                    <a class="nav-link" href="#product-details-tab-3" aria-controls="product-details-tab-3" role="tab" data-toggle="tab">Video</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#product-details-tab-4" aria-controls="product-details-tab-4" role="tab" data-toggle="tab">Shipping & Returns</a>
                </li>

            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane" id="product-details-tab-1">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <p> {!!($product->description)!!}<p>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane show active" id="product-details-tab-2">

                    <h6>Technical Specifications</h6>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Brand</td>
                                <td>{{$product->product_title}}</td>
                            </tr>

                            <tr>
                                <td>Available Size</td>
                                <td>
                                    <?php
                                       $avail_size = json_decode($product->size, true);
                                    ?>
                                    @if($avail_size)
                                        @foreach($avail_size as $data)
                                            <li>{{ $data }}</li>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>Color </td>
                                <td>
                                    <?php
                                        $color = json_decode($product->color, true);
                                    ?>
                                    @if($color)
                                        @foreach($color as $data)
                                            <li>{{ $data }}</li>
                                        @endforeach
                                    @endif
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div role="tabpanel" class="tab-pane" id="product-details-tab-3">
                    <span class="video">
                      <iframe width="820" height="410" src="{{$product->video_link}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </span>
                </div>

                <div role="tabpanel" class="tab-pane" id="product-details-tab-4">

                </div>

            </div>
        </div>

    </div>
</div>

<!-- <div class="review-item" id="tab_review_tabbed">
    <div id="tab-review" class="container">
        <div id="shopify-product-reviews" data-id="1394249039936">
            <style scoped>
                .spr-icon {
                    color: #fed700;
                }

                a.spr-icon:hover {
                    color: #665600;
                }

                .spr-container {
                    padding: 24px;
                    border-color: #ECECEC;
                }

                .spr-review,
                .spr-form {
                    border-color: #ECECEC;
                }
            </style>

            <div class="spr-container">
                <div class="spr-header">
                    <h2 class="spr-header-title">Customer Reviews</h2>
                    <div class="spr-summary" itemscope itemprop="aggregateRating"
                        itemtype="http://schema.org/AggregateRating">
                        <meta itemprop="itemReviewed"
                            content="Hot Com Product Sample">

                        <span class="spr-starrating spr-summary-starrating">
                            <meta itemprop="bestRating" content="5">
                            <meta itemprop="worstRating" content="1">
                            <meta itemprop="reviewCount" content="1">
                            <meta itemprop="ratingValue" content="5.0">
                            <i class="spr-icon spr-icon-star"></i><i
                                class="spr-icon spr-icon-star"></i><i
                                class="spr-icon spr-icon-star"></i><i
                                class="spr-icon spr-icon-star"></i><i
                                class="spr-icon spr-icon-star"></i>
                        </span>
                        <span class="spr-summary-caption"><span
                                class='spr-summary-actions-togglereviews'>Based on 1
                                review</span>
                        </span><span class="spr-summary-actions">
                            <a href='#' class='spr-summary-actions-newreview'
                                onclick='SPR.toggleForm(1394249039936);return false'>Write
                                a review</a>
                        </span>
                    </div>
                </div>

                <div class="spr-content">
                    <div class='spr-form' id='form_1394249039936'
                        style='display: none'></div>
                    <div class='spr-reviews' id='reviews_1394249039936'></div>
                </div>

            </div>
        </div>
    </div>
</div> -->
