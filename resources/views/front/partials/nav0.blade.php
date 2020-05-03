<!-- Header Main Start -->
<div class="header-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-row">
                    <div class="navbar navbar-responsive-menu d-lg-none">
                        <div class="responsive-menu">Menu
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>

                    <div class="m-cart-icon cart-target lazyload waiting d-lg-none">
                        <a href="#" class="mobile-basket" title="cart">
                            <i class="demo-icon icon-electro-cart-icon"></i>
                            <span class="number"><span class="n-item">0</span></span>
                        </a>
                    </div>

                    <div class="header-menu-logo">
                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="{{url('/')}}" title="Arena Electro" class="logo-site lazyload waiting">
                                <img class="lazyload" src="{{asset('frontEnd/assets/img/logo_125x.png')}}" alt="Arena Electro" />
                            </a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Vertical Menu Start -->
                        <div class="vertical-menu dropdown-fix d-none d-lg-block">
                            <div class="sidemenu-holder">
                                <div class="navigation">
                                    <div class="head">
                                        <span class="icon">
                                            <i class="demo-icon icon-menu-2"></i>
                                        </span>
                                        <span class="text">All Categories</span>
                                    </div>
                                    <nav class="navbar vertical-navbar">
                                        <div class="collapse navbar-collapse">
                                            <ul class="main-nav">
                                                <?php
                                                    $product_menus = Helper::getMenus();
                                                ?>

                                                @foreach($product_menus as $menu)

                                                <li class="dropdown mega-menu">
                                                    <!-- menu  images  -->
                                                    <img class="vertical-menu-icon" src="{{asset('uploads/Menuimages/'.$menu->menu_icon)}}" alt="{{$menu->name}}" />
                                                    <!-- menu images -->
                                                    <a href="{{route('menu',$menu->id.'-'.str_slug($menu->name))}}" class="dropdown-link">
                                                        <span>{{$menu->name}}</span>
                                                    </a>
                                                    <span class="expand"></span>


                                                    <div class="dropdown-menu width-75" style="min-height: 370px; background: url({{asset('frontEnd/assets/img/vertical_mega_menu_bg_img_2.png')}}) no-repeat bottom right #fff;">

                                                        <div class="row row-1">
                                                            @foreach($menu->categories as $category)
                                                            <div class="mega-col mega-col-1 col-lg-6">
                                                                <div class="dropdown mega-sub-link ">

                                                                    <a href="{{route('category', $category->id.'-'.str_slug($category->name))}}">
                                                                        <span>{{$category->name}}</span>
                                                                    </a>

                                                                    <span class="expand"></span>

                                                                    <ul class="dropdown-menu dropdown-menu-sub">
                                                                      @foreach($category->sub_category as $sub_c)
                                                                        <li><a href="{{route('sub_category',$sub_c->slug)}}">{{$sub_c->name}}</a></li>
                                                                      @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </li>

                                                @endforeach

                                            </ul>


                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Vertical Menu End -->


                    </div>

                    <!-- Header Search & Horizontal Menu Start -->
                    <div class="header-search-menu">
                        <!-- Header Search Start -->
                        <div class="searchbox d-none d-lg-block">
                            <form id="search" class="navbar-form search" action="" method="get">
                                <input type="hidden" name="type" value="product" />
                                <input id="bc-product-search" type="text" name="q" class="form-control" placeholder="Search" autocomplete="off" />

                                <div class="search-all-categories-dropdown">
                                    <select class="custom-select search-all-categories-btn" id="inputGroupSelect01">
                                        <?php $searchCategoryValue = 0; ?>
                                        <option value="<?php echo $searchCategoryValue; ?>" selected>All Categories</option>
                                        @foreach($product_menus as $menu)
                                            <?php $searchCategoryValue++; ?>
                                            <option value="<?php echo $searchCategoryValue; ?>">{{$menu->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="search-icon">
                                    <span class="lazyload waiting">
                                        <i class="demo-icon icon-electro-search-icon"></i>
                                    </span>
                                </button>
                            </form>

                            <div id="result-ajax-search">
                                <ul class="search-results"></ul>
                            </div>
                        </div>
                        <!-- Header Search End -->

                        <!-- Horizontal Menu Start -->
                        <!-- <div class="horizontal-menu dropdown-fix d-none d-lg-block">
                            <div class="sidemenu-holder">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse">
                                        <ul class="menu-list">
                                            <li class="dropdown active">
                                                <div class="dropdown-inner">
                                                    <a href="{{'./'}}" class="dropdown-link">
                                                        <span>Home</span>
                                                    </a>
                                                    <span class="expand"></span>
                                                </div>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{'./'}}"><span>Home</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('about')}}"><span>About</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('contact')}}"><span>Contact</span></a>
                                                    </li>



                                                    <li>
                                                        <a href="{{route('wishlist')}}"><span>Wishlist</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('compare')}}"><span>Compare</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('faq')}}"><span>FAQs</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('terms')}}"><span>Terms & Condition</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html"><span>404</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="">
                                                <a href="#">
                                                    <span>Top 10 Printers</span>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="#">
                                                    <span>Trending</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div> -->
                        <!-- Horizontal Menu Start -->
                    </div>
                    <!-- Header Search & Horizontal Menu Start -->

                    <!-- Header Compare, Wishlist, Cart Icon Start -->
                    <div class="header-icons d-none d-lg-block">
                        <ul class="list-inline">

                            <li class="wishlist-target">
                                <a href="#" class="num-items-in-wishlist show-wishlist lazyload waiting" title="Wishlist">
                                    <span class="wishlist-icon">
                                        <i class="demo-icon icon-electro-wishlist-icon"></i>
                                        <span class="number">0</span>
                                    </span>
                                </a>
                            </li>

                            <li class="top-cart-holder">
                                <div class="cart-target">
                                    <a href="javascript:void(0)" class="basket cart-toggle lazyload waiting" title="cart">
                                        <i class="demo-icon icon-electro-cart-icon"></i>
                                        <span class="number"><span class="n-item"></span></span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Main End -->

<!-- Begin Menu Mobile-->
<div class="mobile-version d-lg-none">
    <div class="menu-mobile navbar">
        <div class="mm-wrapper">
            <div class="m-close"><i class="demo-icon icon-close"></i></div>
            <div class="nav-collapse is-mobile-nav">
                <ul class="main-nav">
                    <li class="li-on-mobile">
                        <span>Menu</span>
                    </li>

                    @foreach($product_menus as $menu)
                    <li class="dropdown mega-menu">
                        <div class="dropdown-inner">
                            <a href="{{route('menu',$menu->id)}}" class="dropdown-link">
                                <span>{{$menu->name}}</span>
                            </a>
                            <span class="expand"></span>
                        </div>

                        <div class="dropdown-menu position-left"
                            style="width: 100%;min-height: 190px; background: url({{asset('frontEnd/assets/img/mega_menu_bg_img_1.jpg')}}) no-repeat top right #fff;">

                            <div class="back-prev-menu">
                                <span class="expand back">Back</span>
                            </div>

                            <div class="row row-1">
                                @foreach($menu->categories as $category)
                                <div class="mega-col mega-col-1 col-lg-3">
                                    <div class="dropdown mega-sub-link ">
                                        <div class="dropdown-inner">
                                            <a href="#">
                                                <span>{{$category->name}}</span>
                                            </a>
                                            <span class="expand"></span>
                                        </div>

                                        <ul class="dropdown-menu dropdown-menu-sub">
                                            <li class="back-prev-menu">
                                                <span class="expand back">Back</span>
                                            </li>
                                            @foreach($category->sub_category as $sub_c)
                                            <li><a href="{{route('sub_category',$sub_c->slug)}}">{{$sub_c->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </li>
                    @endforeach


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Menu Mobile-->
