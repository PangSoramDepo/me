<header class="site-header mo-left header style-1">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container">
                <div class="header-content-bx no-bdr">
                    <!-- website logo -->
                    <div class="logo-header">
                        <a href="{{route('home')}}"><img src="{{url('storage/'. setting('site.black_logo'))}}" alt=""/></a>
                    </div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
                        <div class="logo-header">
                            <a href="{{route('home')}}"><img src="{{url('storage/'. setting('site.white_logo'))}}" alt=""/></a>
                        </div>
                        <ul class="nav navbar-nav">

                            <!-- HOME -->
                            <li class="active">
                                <a href="{{route('home')}}">Home <i class="fa fa-chevron-down"></i></a>
                            </li>
                            <!-- END HOME -->

                            <!-- CATEGORY -->
                            <li class="has-mega-menu post-slider life-style">
                                <a href="#">Category<i class="fa fa-chevron-down"></i></a>
                                <div class="mega-menu">
                                    <div class="life-style-bx">
                                        <div class="life-style-tabs">
                                            <ul>
                                                <li><a href="javascript:void(0);" id="st-all" class="post-tabs active">All</a></li>
                                                @foreach ($categories as $item)
                                                    <li><a href="javascript:void(0);" id="st-{{$item->slug}}" class="post-tabs">{{$item->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="life-style-post text-center">

                                            <!-- ALL CATEGORY -->
                                            <div id="all" class="life-style-post-bx show">
                                                <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                    @foreach ($latestPosts as $item)
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="{{route('post_detail', $item->id)}}"><img src="{{url('storage/'. $item->image)}}" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a></h5>
                                                                    </div>
                                                                    <div class="date">
                                                                        {{date('d M, Y', strtotime($item->action_date))}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- END ALL CATEGORY -->

                                            <!-- REST CATEGORY -->
                                            @foreach ($categories as $cat)
                                                <div id="{{$cat->slug}}" class="life-style-post-bx">
                                                    <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                        @foreach ($cat->posts()->where('is_portrait', 0)->take(4)->get() as $item)
                                                            <div class="item">
                                                                <div class="blog-post blog-sm">
                                                                    <div class="dlab-post-media">
                                                                        <a href="{{route('post_detail', $item->id)}}"><img src="{{url('storage/'. $item->image)}}" alt=""></a>
                                                                    </div>
                                                                    <div class="dlab-post-info">
                                                                        <div class="dlab-post-title ">
                                                                            <h5 class="post-title"><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a></h5>
                                                                        </div>
                                                                        <div class="date">
                                                                            {{date('d M, Y', strtotime($item->action_date))}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- END REST CATEGORY -->

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- END CATEGORY -->

                            <li><a href="about-us.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>

                        <div class="social-menu">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <ul>
                                <li><a href="#" class="site-button-link"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="site-button-link"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="site-button-link"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="site-button-link"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
