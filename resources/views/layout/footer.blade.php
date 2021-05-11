<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-6 d-md-none d-lg-block">
                    <div class="widget">
                        <img src="{{url('storage/'. setting('site.white_logo'))}}" alt=""/>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <h6 class="m-b30 footer-title"><span>Recent Post</span></h6>
                    <div class="widget recent-posts-entry">
                        @foreach ($latestPosts as $item)
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media"> <img src="{{url('storage/'. $item->image)}}" alt=""> </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h6 class="post-title"><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a></h6>
                                        </div>
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date">{{date('d M, Y', strtotime($item->action_date))}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <h6 class="m-b30 footer-title"><span>My Blogs</span></h6>
                    <a class="video widget relative popup-youtube overlay-black-middle" href="{{setting('site.home_blog_youtube_link')}}">
                        <img src="{{url('storage/'. setting('site.home_blog_image'))}}" alt=""/>
                        <span class="play-video"><i class="la la-play"></i></span>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <h6 class="m-b30 footer-title"><span>Subscribe</span></h6>
                    <ul class="d-flex widget-social-ic">
                        <li><a href="#" class="site-button-link"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="site-button-link"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="site-button-link"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#" class="site-button-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <span>Copyright © 2021 PANG-SORAM-DEPO</span>
                </div>
            </div>
        </div>
    </div>
</footer>
