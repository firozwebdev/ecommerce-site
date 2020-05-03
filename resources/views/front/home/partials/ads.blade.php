<div id="shopify-section-1542364070592" class="shopify-section">

    <div class="slideshow-02 slideshow-catalog-wrapper sidebar-banner">
        <div class="bc-wrapper">

            <div class="wrap-stb fix-textbox">

                <div class="bc-home-slideshow">

                    <div class="home-slideshow-wrapper swiper-container swiper-container-02" data-autoplay="true" data-time="3000" data-animation="slide">
                        <div class="home-slideshow swiper-wrapper">
                            @foreach($slider as $object)

                            <div class="swiper-slide swiper-slide-1542364070592-0 lazyload" style="background-image:url({{ asset('uploads/documents/sliderimages/'.$object->images) }}); height: 350px;width: 100%;">
                                <a href="/collections">
                                    <img src="{{ asset('uploads/documents/sliderimages/'.$object->images) }}" alt="" />
                                </a>

                                <div class="swiper-content text-left slide-1 container" style="top: 30%;">
                                    <div class="container-box">
                                        <div class="heading"></div>
                                        <div class="subheading"></div>
                                        <div class="caption"></div>
                                        <a class="caption-link"></a>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="btn-pagination">
                        <div class="swiper-pagination swiper-pagination-02 swiper-pagination-white"></div>
                    </div>

                    <div class="block-collection">



                        <div class="collection-item">
                            <div class="category text-center">
                                <div class="category-image">
                                    <a href="#">
                                        <img src="{{asset('frontEnd/assets/img/products/4.jpg')}}" alt="All in One" />
                                    </a>
                                </div>
                                <a class="category-name" href="/collections/all-in-one" title="All in One">All in One</a>
                            </div>
                        </div>

                        @foreach($feature_c as $category)

                        <div class="collection-item">
                            <div class="category text-center">
                                <div class="category-image">
                                    <a href="{{route('sub_category',$category->slug)}}">
                                        <img src="{{asset('uploads/SubCategory/' .$category->icon)}}" alt=" &amp; " />
                                    </a>
                                </div>
                                <a class="category-name" href="/collections/tv-audio" title="TV &amp; Audio">{{$category->name}}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

                <!-- Ad Banner Beside Home Slider Start -->
                <div class="bc-three-banner">

                    @foreach($ads as $data)
                    <a href="{{$data->link}}">
                        <img src="{{asset('uploads/documents/adsimages/'.$data->images)}}" alt="Banner" />
                    </a>
                    @endforeach

                </div>
                <!-- Ad Banner Beside Home Slider Start -->

            </div>

        </div>
    </div>

</div>
