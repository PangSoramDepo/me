@extends('layout.master')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="banner-image style-1 dlab-bnr-inr dlab-bnr-inr-lg overlay-black-light relative">
            <img src="{{url('assets/images/banner.jpg')}}" alt="">
        </div>
        <!-- Trending -->
        <div class="section-full trend-panel style-1">
            <div class="container">
                <div class="trend-panel-space">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="category-box-outline m-b30">
                                <div class="category-box overlay">
                                    <div class="category-media">
                                        <img src="{{url('assets/images/top1.jpg')}}" alt="">
                                    </div>
                                    <div class="category-info">
                                        <div class="category-style"><a href="javascript:void(0);">Fashion</a></div>
                                        <h4><a href="post-navigation.html">Ready for the Summer</a></h4>
                                        <a href="post-navigation.html" class="category-title">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="category-box-outline m-b30">
                                <div class="category-box overlay">
                                    <div class="category-media">
                                        <img src="{{url('assets/images/top2.jpg')}}" alt="">
                                    </div>
                                    <div class="category-info">
                                        <div class="category-style"><a href="javascript:void(0);">Travel</a></div>
                                        <h4><a href="post-link.html">Trends Tried & Tested.</a></h4>
                                        <a href="post-link.html" class="category-title">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="category-box-outline m-b30">
                                <div class="category-box overlay">
                                    <div class="category-media">
                                        <img src="{{url('assets/images/top3.jpg')}}" alt="">
                                    </div>
                                    <div class="category-info">
                                        <div class="category-style"><a href="javascript:void(0);">Beauty</a></div>
                                        <h4><a href="post-quote.html">Makeup for new Look</a></h4>
                                        <a href="post-quote.html" class="category-title">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending end -->
        <!-- inner page banner end -->
        <div class="content-block">
            <!-- load-more-content -->
            <div class="section-full bg-white content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12 col-12">
                            <div class="row sp10">
                                <div class="col-lg-6">
                                    <div class="blog-card post-grid m-b30">
                                        <div class="blog-card-media">
                                            <img src="{{url('assets/images/watch.jpg')}}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex">
                                    <div class="blog-card center text-center bg-dark m-b30">
                                        <div class="blog-card-info text-white">
                                            <div class="title-sm"><a href="javascript:void(0);">Lifestyle</a></div>
                                            <h4 class="title"><a href="post-gallery-alternative.html">Sonoma Valley Lancome</a></h4>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh into service id elit. Duis sedio.</p>
                                            <div class="">
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sep-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-card post-grid grid-style m-b30">
                                        <div class="blog-card-media">
                                            <img src="{{url('assets/images/fan.jpg')}}" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="title-sm"><a href="javascript:void(0);">Beauty</a></div>
                                            <h5 class="font-20"><a href="post-quote.html">Wardrobe this Season</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-card post-grid grid-style m-b30">
                                        <div class="blog-card-media">
                                            <img src="{{url('assets/images/bd.jpg')}}" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="title-sm"><a href="javascript:void(0);">Fashion</a></div>
                                            <h5 class="font-20"><a href="post-left-sidebar.html">Our Winter Fairytale</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-card post-grid grid-style m-b30">
                                        <div class="blog-card-media">
                                            <img src="{{url('assets/images/ppcb.jpg')}}" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="title-sm"><a href="javascript:void(0);">Travel</a></div>
                                            <h5 class="font-20"><a href="post-full-width.html">French Skincare Secret</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="section-head text-center">
                                <div class="title-sm"><a href="javascript:void(0);">Lifestyle</a></div>
                                <h2 class="title-head"><a href="post-with-small-side-image.html">Sonoma Valley Lancome</a></h2>
                            </div>
                            <div class="loadmore-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="blog-card full-design">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/money.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info style-1">
                                                <div class="date">
                                                    25 January,  2020
                                                </div>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                                <div class="">
                                                    <a href="post-with-small-side-image.html" class="btn-link readmore"><i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="masonry">
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d1.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-gallery.html">Night Out in Whistler</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d2.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-audio.html">Head-To-Toe Black</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d3.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-full-width.html">California Spring Break</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d4.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-gallery-alternative.html">Valentine’s Day Outfits</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d5.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-left-sidebar.html">Weekend Style Diaries</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d6.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-link.html">The Gift Of Time</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d1.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-navigation.html">French Skincare Secret</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                        <div class="blog-card post-grid">
                                            <div class="blog-card-media">
                                                <img src="{{url('assets/images/d2.jpg')}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info">
                                                <div class="title-sm"><a href="javascript:void(0);">beauty</a></div>
                                                <h4 class="title"><a href="post-open-gutenberg.html">Amazon Echo Look</a></h4>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, ninkis elit ipsum, nec sagittis sem nibh id elit. Duis sedio.</p>
                                                <ul class="social-link-round">
                                                    <li class="link-ic"><a href="javascript:void(0);" class="btn-link share"><i class="la la-share-alt"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="load-more-btn text-center">
                                            <a href="javascript:;" class="btn outline outline-2 black radius-xl">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side -->
                        @include('layout.rightSide')
                        <!-- End Right Side -->
                    </div>
                </div>
            </div>
            <!-- load-more-content end -->

            <!-- subscribe -->
            @include('layout.subscribe')
            <!-- subscribe end -->
        </div>
        <!-- contact area END -->
    </div>
@endsection
