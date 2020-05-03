@extends('front.master')

@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="home-main-content" class="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('front/home/partials/ads')
                        </div>
                    </div>
                </div>
                

                @if($dailyDeals)
                    @include('front/home/partials/deal')
                @endif

                <div class="container mt-35">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('front/home/partials/flash-deals')
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('front/home/partials/top-selection')
                                </div>
                                <div class="col-lg-6">
                                    @include('front/home/partials/new-arrivals')
                                </div>
                            </div>
                            <!-- popular category wise product Start -->
                            @include('front/home/partials/popular_category')
                            <!-- popular category wise product -->

                            <!-- More Product Start-->
                            @include('front/home/partials/more-product')
                            <!-- more product -->
                            @include('front/home/partials/seller')

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
