<!-- --------------- FOOTER AREA START --------------- -->

<footer id="footer-content">
  <h2 style="text-align:center;">{{ Session::get('message')}}</h2>
    <div id="shopify-section-footer" class="shopify-section">
        <div class="footer-container layout-full">
            <div id="widget-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container fix-full">
                    <div class="newsletter-container">
                        <div class="newsletter-title">
                            <i class="demo-ion icon-paper-plane-empty"></i><span>Sign up to Newsletter</span>
                        </div>

                        <p>...and receive <span>$20 coupon for first shopping.</span></p>
                        {!! Form::open(['url' => route('subscibed'),'method'=>'post']) !!}
                            <input class="form-control" type="email" required placeholder="Enter your email address" name="email" id="email-input"  required/>
                            <button id="email-submit" type="submit" title="Subscibe" class="btn-custom">Submit</button>
                            {!! Form::close() !!}
                        </form>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-inner container fix-full">
                    <div class="table-row">
                        <div class="row">

                            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="footer-block footer-logo">
                                    <div class="logo-footer">
                                        <a href="index.html" title="Arena Electro" class="logo-site lazyload waiting">
                                            <img class="lazyload" data-srcset="{{asset('frontEnd/assets/img/logo_125x.png')}}" alt="Arena Electro" style="max-width: 125px;" />
                                        </a>
                                    </div>


                                    <div class="support-box-1">
                                        <i class="demo-icon icon-electro-support-icon"></i>
                                        <div class="text">
                                            <span>Got questions? Call us 24/7!</span>
                                            <span>(+880)1768408584</span>
                                        </div>
                                    </div>

                                    <div class="support-box-2">
                                        <div class="text">
                                            <span>Contact info</span>
                                            <span>Mirpur-1216.Bangladesh </span>
                                            <span></span>

                                        </div>
                                    </div>

                                    <div class="widget-social">
                                        <ul class="widget-social-icons list-inline">
                                            <li>
                                                <a target="_blank" rel="noopener" href="" title="Facebook">
                                                    <i class="demo-icon icon-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" rel="noopener" href="" title="Twitter">
                                                    <i class="demo-icon icon-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" rel="noopener" href="" title="Instagram">
                                                    <i class="demo-icon icon-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" rel="noopener" href="" title="Pinterest">
                                                    <i class="demo-icon icon-pinterest-circled"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                                <div class="footer-block footer-menu">
                                    <h6>Find In Fast</h6>
                                    <ul class="f-list">
                                        <li>
                                            <a href="#"><span>Accessories</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Gaming</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Laptops & Computer</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Mac Computers</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>PC Computers</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span>Ultrabooks</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                                <div class="footer-block footer-menu">
                                    <h6>Information</h6>
                                    <ul class="f-list">
                                        <li>
                                            <a href="{{route('about')}}"><span>About Us</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}"><span>Contact Us</span></a>
                                        </li>

                                        <li>
                                            <a href="#"><span>Privacy policy</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('terms')}}"><span>Terms & Conditions</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <div class="footer-block footer-menu">
                                    <h6>Customer Care</h6>
                                    <ul class="f-list">

                                        <li><a href="{{'login'}}"><span>My Account</span></a></li>
                                        <li><a href="#"><span>Wishlist</span></a></li>
                                        <li><a href={{route('cart')}}><span>Shopping Cart</span></a></li>
                                        <li><a href="{{route('terms')}}"><span>Terms & Conditions</span></a></li>
                                        <li><a href="{{route('faq')}}"><span>FAQs</span></a></li>
                                        <li><a href="{{route('about')}}"><span>About Us</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bot">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container fix-full">
                                <div class="table-row">
                                    <div class="copyright">
                                        <p>&copy; 2019 Yinimini by <a href="#"> Update Tech Ltd</a>. All Rights Reserved</p>
                                    </div>

                                    <div class="payment-icons">
                                        <ul class="list-inline">
                                            <li class="lazyload waiting">
                                                <img class="lazyload" data-srcset="{{asset('frontEnd/assets/img/patment-icon_325x.png')}}" alt="Payment" style="max-width: 325px;" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- --------------- FOOTER AREA END --------------- -->
