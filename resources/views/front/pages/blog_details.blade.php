@extends('front.master')
@section('content')
<div id="body-content">
    <div id="main-content">
        <div class="main-content">
            <div id="shopify-section-article-template" class="shopify-section">
                <div class="wrap-breadcrumb bw-color">
                    <div id="breadcrumb" class="breadcrumb-holder container">
                        <ul class="breadcrumb">
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a itemprop="url" href="/">
                                    <span itemprop="title" class="d-none">Arena Electro</span>Home
                                </a>
                            </li>
                            <li><a href="/blogs/news" title="">News</a></li>
                            <li class="active">The Best Shopify Support 24/7</li>
                        </ul>
                    </div>
                </div>
                <div class="page-article layout-right-sidebar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                                <article class="post">
                                    <div class="post-image">
                                        <img src="assets/img/blog/1.jpg" alt="Article" />
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">The Best Shopify Support 24/7</h3>
                                        <div class="post-info">
                                            <ul class="list-inline">
                                                <li><a href="/blogs/news" class="post-t">News</a></li>
                                                <li><span class="post-date">14 Nov, 2018</span></li>
                                                <li><span class="post-author">Posted by: BitCode
                                                        Technology</span></li>
                                            </ul>
                                        </div>
                                        <div class="post-des">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                        </div>
                                    </div>
                                    <div class="share-links social-sharing" data-permalink="https://arena-electro.myshopify.com/blogs/news/the-best-shopify-support-24-7">
                                        <ul class="list-inline">
                                            <li>
                                                <a class="facebook" target="_blank" rel="noopener" href="//www.facebook.com/sharer.php?u=https://arena-electro.myshopify.com/blogs/news/the-best-shopify-support-24-7" title="Facebook">
                                                    <i class="demo-icon icon-facebook"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" target="_blank" rel="noopener" href="//twitter.com/share?url=https://arena-electro.myshopify.com/blogs/news/the-best-shopify-support-24-7&amp;text=news/the-best-shopify-support-24-7" title="Twitter">
                                                    <i class="demo-icon icon-twitter"></i>
                                                    <span>Tweet</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="google" target="_blank" rel="noopener" href="//plus.google.com/share?url=https://arena-electro.myshopify.com/blogs/news/the-best-shopify-support-24-7" title="Google">
                                                    <i class="demo-icon icon-google"></i>
                                                    <span>Google+</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-author-info">
                                        <div class="media">
                                            <div class="image"><img src="assets/img/team-member/6.jpg" alt="Admin" /></div>
                                            <div class="text"><span class="author">BitCode Technology</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <div class="comment-form">
                                    <form method="post" action="/blogs/news/the-best-shopify-support-24-7/comments#comment_form" id="comment_form" accept-charset="UTF-8" class="comment-form">
                                        <input type="hidden" name="form_type" value="new_comment" />
                                        <input type="hidden" name="utf8" value="✓" />
                                        <h3>Leave a comment</h3>
                                        <p class="moderated">Comments have to be approved before showing up
                                        </p>
                                        <div class="grid-form">
                                            <div class="row">
                                                <div class="control-wrapper col-md-6 col-sm-12">
                                                    <input type="text" name="comment[author]" id="comment-author" class="" placeholder="Name" value="">
                                                </div>
                                                <div class="control-wrapper col-md-6 col-sm-12">
                                                    <input type="email" name="comment[email]" id="comment-email" class="" placeholder="E-mail" value="" autocorrect="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <div class="control-wrapper">
                                                <textarea name="comment[body]" id="comment-body" class="" placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-1" value="Post Comment">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 d-none d-lg-block">
                                <div id="sidebar-blog" class="sidebar">
                                    <div class="sb-widget">
                                        <div class="search-blog">
                                            <form action="/search" method="get">
                                                <input type="hidden" name="type" value="article" />
                                                <input type="text" name="q" class="form-control" placeholder="Enter Keywords..." autocomplete="off" />
                                                <button type="submit"><i class="demo-icon icon-electro-search-icon"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="sb-widget">
                                        <div class="sb-about-blog">
                                            <h5 class="sb-title">About</h5>
                                            <div class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.</div>
                                        </div>
                                    </div>
                                    <div class="sb-widget">
                                        <div class="sb-menu">
                                            <h5 class="sb-title">Categories</h5>
                                            <ul class="blog-menu">
                                                <li class="dropdown">
                                                    <a href="/collections/accessories" class="dropdown-link"><span>Accessories</span></a>
                                                    <span class="expand"></span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/collections/cameras"><span>Cameras</span></a>
                                                        </li>
                                                        <li><a href="/collections/software"><span>Software</span></a>
                                                        </li>
                                                        <li><a href="/collections/phones-pdas"><span>Phones
                                                                    & PDAs</span></a></li>
                                                        <li><a href="/collections/mp3-players"><span>MP3
                                                                    Players</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="/collections/all-in-one" class="dropdown-link"><span>All in One</span></a>
                                                    <span class="expand"></span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/collections/music"><span>Music</span></a>
                                                        </li>
                                                        <li><a href="/collections/photography"><span>Photography</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="/collections/gadgets" class="dropdown-link"><span>Gadgets</span></a>
                                                    <span class="expand"></span>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown sb-dropdown-submenu">
                                                            <a href="/collections/watches" class="dropdown-link"><span>Watches</span></a>
                                                            <span class="expand"></span>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="/collections"><span>All
                                                                            Watches</span></a></li>
                                                                <li><a href="/collections/all"><span>Premium
                                                                            Watches</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="/collections/eyewear"><span>Eyewear</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="/collections/gaming" class="dropdown-link"><span>Gaming</span></a>
                                                    <span class="expand"></span>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="/collections/mouse"><span>Mouse</span></a>
                                                        </li>
                                                        <li><a href="/collections/keyboard"><span>Keyboard</span></a>
                                                        </li>
                                                        <li><a href="/collections/headphone"><span>Headphone</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="/collections/laptops-computer">Laptops &
                                                        Computer</a></li>
                                                <li><a href="/collections/mac-computers">Mac Computers</a>
                                                </li>
                                                <li><a href="/collections/printers-ink">Printers & Ink</a>
                                                </li>
                                                <li><a href="/collections/tv-audio">TV & Audio</a></li>
                                                <li><a href="/collections/ultrabooks">Ultrabooks</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sb-widget">
                                        <div class="sb-blog-posts">
                                            <h5 class="sb-title">Recent posts</h5>
                                            <div class="post-list">
                                                <div class="post-item">
                                                    <div class="post-item-inner">
                                                        <div class="post-image">
                                                            <a href="/blogs/news/lets-meet-the-whole-team-of-electro">
                                                                <img src="assets/img/blog/2.jpg" alt="Blog" />
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <div class="info">
                                                                <h6><a
                                                                        href="/blogs/news/lets-meet-the-whole-team-of-electro">Lets
                                                                        Meet The Whole Team of Electro</a>
                                                                </h6>
                                                            </div>
                                                            <div class="meta-data">
                                                                <span class="date">12 Nov, 2017</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-item-inner">
                                                        <div class="post-image">
                                                            <a href="/blogs/news/the-best-shopify-support-24-7">
                                                                <img src="assets/img/blog/3.jpg" alt="Blog" />
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <div class="info">
                                                                <h6><a
                                                                        href="/blogs/news/the-best-shopify-support-24-7">The
                                                                        Best Shopify Support 24/7</a></h6>
                                                            </div>
                                                            <div class="meta-data">
                                                                <span class="date">12 Nov, 2017</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-item-inner">
                                                        <div class="post-image">
                                                            <a href="/blogs/news/coffe-time-in-office">
                                                                <img src="assets/img/blog/4.jpg" alt="Blog" />
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <div class="info">
                                                                <h6><a
                                                                        href="/blogs/news/coffe-time-in-office">Coffe
                                                                        Time in Office</a></h6>
                                                            </div>
                                                            <div class="meta-data">
                                                                <span class="date">12 Nov, 2017</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sb-widget">
                                        <div class="sb-blog-tag">
                                            <h5 lass="sb-title">Tags</h5>
                                            <ul class="list-inline">
                                                <li><a href="https://arena-electro.myshopify.com/blogs/news">All</a>
                                                </li>
                                                <li><a href="/blogs/news/tagged/art" title="Show articles tagged Art">Art</a></li>
                                                <li><a href="/blogs/news/tagged/classic" title="Show articles tagged Classic">Classic</a>
                                                </li>
                                                <li><a href="/blogs/news/tagged/design" title="Show articles tagged Design">Design</a></li>
                                                <li><a href="/blogs/news/tagged/photography" title="Show articles tagged Photography">Photography</a>
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
    </div>
</div>
@endsection
