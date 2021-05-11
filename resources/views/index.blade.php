@extends('layout.master')

@section('content')
    <div class="page-content bg-white">
        <!-- Banner -->
        <div class="banner-image style-1 dlab-bnr-inr dlab-bnr-inr-lg overlay-black-light relative">
            <img src="{{url('storage/'. setting('site.home_banner'))}}" alt="">
        </div>
        <!-- End Banner -->

        <!-- Top -->
        <div class="section-full trend-panel style-1">
            <div class="container">
                <div class="trend-panel-space">
                    <div class="row">
                        @foreach ($tops as $item)
                            <div class="col-lg-4 col-md-4 @if($loop->iteration < $loop->count) col-sm-6 @endif">
                                <div class="category-box-outline m-b30">
                                    <div class="category-box overlay">
                                        <div class="category-media">
                                            <img src="{{url('storage/'. $item->image)}}" alt="">
                                        </div>
                                        <div class="category-info">
                                            <div class="category-style"><a href="javascript:void(0);">{{$item->category->name}}</a></div>
                                            <h4><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a></h4>
                                            <a href="{{route('post_detail', $item->id)}}" class="category-title">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top -->

        <div class="content-block">
            <!-- load-more-content -->
            <div class="section-full bg-white content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12 col-12">

                            <!-- Portrait 1 -->
                            <div class="row sp10">
                                <div class="col-lg-6">
                                    <div class="blog-card post-grid m-b30">
                                        <div class="blog-card-media">
                                            <img src="{{url('storage/'. $portrait_top->image)}}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex">
                                    <div class="blog-card center text-center bg-dark m-b30">
                                        <div class="blog-card-info text-white">
                                            <div class="title-sm"><a href="javascript:void(0);">{{$portrait_top->category->name}}</a></div>
                                            <h4 class="title"><a href="{{route('post_detail', $portrait_top->id)}}">{{$portrait_top->title}}</a></h4>
                                            <p>{{$portrait_top->excerpt}}</p>
                                            @include('layout.socialLink')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portrait 1 -->

                            <!-- Middle Post-->
                            <div class="sep-bottom">
                                <div class="row">
                                    @foreach ($post_middle as $item)
                                        <div class="col-lg-4">
                                            <div class="blog-card post-grid grid-style m-b30">
                                                <div class="blog-card-media">
                                                    <img src="{{url('storage/'. $item->image)}}" alt=""/>
                                                </div>
                                                <div class="blog-card-info">
                                                    <div class="title-sm"><a href="javascript:void(0);">{{$item->category->name}}</a></div>
                                                    <h5 class="font-20"><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Middle Post -->

                            <!-- Portrait Middle-->
                            <div class="section-head text-center">
                                <div class="title-sm"><a href="javascript:void(0);">{{$portrait_middle->category->name}}</a></div>
                                <h2 class="title-head"><a href="{{route('post_detail', $portrait_middle->id)}}">{{$portrait_middle->title}}</a></h2>
                            </div>
                            <div class="loadmore-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="blog-card full-design">
                                            <div class="blog-card-media">
                                                <img src="{{url('storage/'. $portrait_middle->image)}}" alt=""/>
                                            </div>
                                            <div class="blog-card-info style-1">
                                                <div class="date">
                                                    {{date('d M, Y', strtotime($portrait_middle->action_date))}}
                                                </div>
                                                @include('layout.socialLink')
                                                <div class="">
                                                    <a href="{{route('post_detail', $portrait_middle->id)}}" class="btn-link readmore"><i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Portrait Middle-->

                                 <!-- Down Post-->
                                <div class="row" id="down-post">
                                    @foreach ($post_down as $item)
                                        <div class="col-lg-6 col-md-12 col-sm-6 card-container">
                                            <div class="blog-card post-grid">
                                                <div class="blog-card-media">
                                                    <img src="{{url('storage/'. $item->image)}}" alt=""/>
                                                </div>
                                                <div class="blog-card-info">
                                                    <div class="title-sm"><a href="javascript:void(0);">{{$item->category->name}}</a></div>
                                                    <h4 class="title"><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a></h4>
                                                    <p>{{$item->excerpt}}</p>
                                                    @include('layout.socialLink')
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- End Down Post-->

                                @if($isLoadMore)
                                    <div class="row" id="readmore">
                                        <div class="col-12">
                                            <div class="load-more-btn-we text-center">
                                                <a class="btn outline outline-2 black radius-xl">Load More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" id="loader"></div>
                                @endif

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

@section('script')
    <script>
        var page = 1;
        $("#readmore").click(function() {
            var link="{{route('loadmore')}}" + "?page=" + page + "&exclude=" + "{{$excludeIds}}";
            document.getElementById('readmore').className="depo-hide";
            document.getElementById('loader').className="loader";
            $.ajax({
                url:link,
                method:"GET",
                data:{},
                success:function(data){
                    console.log(data);
                    page++;
                    const parent = document.getElementById('down-post');
                    parent.insertAdjacentHTML('beforeend',data.html);
                    document.getElementById('loader').className="";
                    if (data.isLoadMore)
                        document.getElementById('readmore').className="row";
                }
            });
        });
    </script>
@endsection
