@extends('front.master')
@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">

            <div id="shopify-section-page-contact-template" class="shopify-section">

                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">

                        <ul class="breadcrumb">
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a itemprop="url" href="/">
                                    <span itemprop="title" class="d-none">Arena Electro</span>Home
                                </a>
                            </li>

                            <li class="active">Contact Us</li>

                        </ul>

                    </div>
                </div>

                <div class="page-contact">

                    <div class="container">
                        <div id="col-main" class="page-contact-content">
                            <div class="row">

                                <div class="contact-form-wrapper col-md-6 col-sm-12">

                                    <div class="title-wrapper">
                                        <h3>Leave A Message</h3>
                                        <p>Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices, neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
                                    </div>

                                    <div class="contact-form">
                                      {!! Form::open(['url' => route('postcontact'),'method'=>'post']) !!}

                                        <div id="contact-form">
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-md-12">
                                                    <label for="name">Name<span class="req">*</span></label>
                                                    <input type="text" id="name" class="form-control" value="" name="name" />
                                                </div>

                                                <div class="form-group col-lg-6 col-md-12">
                                                    <label for="email">Email<span class="req">*</span></label>
                                                    <input required type="email" id="email" class="form-control" value="" name="email" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="number" id="phone" class="form-control" value="" name="phone" />
                                            </div>

                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea required id="message" class="form-control" cols="40" rows="7" name="description"></textarea>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-1">Send message
                                                </button>
                                            </div>
                                        </div>
                              {!! Form::close() !!}
                              </div>

                                </div>

                                <div class="map-wrapper col-md-6 col-sm-12">
                                    <div id="page-contact-map" class="map" style="height: 418px;" latitude="51.514863" longitude="-0.133689" icon-url="https://i.imgur.com/p3Mx5rl.png" info-window-text='<div class="map-info-box"><p>8A Nguyen Van Mai Ward 4, Ho Chi Minh City, Vietnam</p></div>'></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
