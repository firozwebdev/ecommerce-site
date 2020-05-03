<div class="shopify-section partner-logo-area boxed-section-design seller-list-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="bottom-widget">
                    <div class="bottom-container layout-full">
                        <div class="bottom-partner">
                            <div class="bottom-partner-list">

                                @foreach($seller as $info)
                                <div class="partner-item">
                                    <a href="{{route('seller-shop',$info->seller_id,$info->name)}}">
                                        <img src="{{asset('uploads/documents/Sellerimages/'.$info->shop_iamge)}}" alt="Partner" />
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
