@extends('layout.master')

@section('content')
    <div class="page-content bg-white">
		<div class="content-block">
            <!-- About Us -->
            <div class="section-full content-inner bg-white">
                <div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12 col-12">
							<div class="section-head text-center">
								<div class="title-sm">{{$post->category->name}}</div>
								<h2 class="title-head">{{$post->title}}</h2>
							</div>
							<div class="blog-post blog-single blog-post-style-2 sidebar">
                                <div class="dlab-post-info">
                                    {!! $post->body !!}
                                </div>
							</div>
							<div class="">
								{{-- <div class="author-box blog-user m-b60">
									<div class="author-profile-info">
										<div class="author-profile-pic">
											<img src="{{url('assets/images/comment.jpg')}}" alt="">
										</div>
										<div class="author-profile-content">
											<h6>Mercer Owen</h6>
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor nisi elit consequat ipsum, nec sagittis sem amet nibh vulputate cursus itaet mauris. </p>
											<ul class="list-inline m-b0">
												<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-twitter"></i></a></li>
												<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-pinterest-p"></i></a></li>
												<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:void(0);" class="btn-link"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div> --}}
								<div class="post-btn">
                                    @foreach ($relates as $item)
                                        <div class="@if($loop->iteration == 1) prev-post @else next-post @endif">
                                            <img src="{{url('storage/'. $item->image)}}" alt=""/>
                                            <h6 class="title"><a href="{{route('post_detail', $item->id)}}">{{$item->title}}</a><span class="post-date">{{date('d M, Y', strtotime($item->action_date))}}</span></h6>
                                        </div>
                                    @endforeach
								</div>
								{{-- <div class="clear m-b30" id="comment-list">
									<div class="comments-area" id="comments">
										<h6 class="comments-title"><span>Comments</span></h6>
										<div>
											<!-- comment list END -->
											<ol class="comment-list">
												<li class="comment">
													<div class="comment-body">
														<div class="comment-author vcard"> <img class="avatar photo" src="{{url('assets/images/comment.jpg')}}" alt=""> <cite class="fn">Mercer Owen</cite> <span class="says">says:</span> </div>
														<div class="comment-meta"> <a href="javascript:void(0);">25 January, 2020</a> </div>
														<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor elit consequat ipsum, nec sagittis sem amet nibh vulputate cursus itaet mauris.</p>
														<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-share"></i></a> </div>
													</div>
													<ol class="children">
														<li class="comment odd parent">
															<div class="comment-body">
																<div class="comment-author vcard"> <img class="avatar photo" src="{{url('assets/images/comment.jpg')}}" alt=""> <cite class="fn">Mercer Owen</cite> <span class="says">says:</span> </div>
																<div class="comment-meta"> <a href="javascript:void(0);">25 January, 2020</a> </div>
																<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor elit consequat ipsum, nec sagittis sem amet nibh vulputate cursus itaet mauris.</p>
																<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-share"></i></a> </div>
															</div>
														</li>
													</ol>
													<!-- list END -->
												</li>
												<li class="comment">
													<div class="comment-body">
														<div class="comment-author vcard"> <img class="avatar photo" src="{{url('assets/images/comment.jpg')}}" alt=""> <cite class="fn">Mercer Owen</cite> <span class="says">says:</span> </div>
														<div class="comment-meta"> <a href="javascript:void(0);">25 January, 2020</a> </div>
														<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor elit consequat ipsum, nec sagittis sem amet nibh vulputate cursus itaet mauris.</p>
														<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-share"></i></a> </div>
													</div>
													<ol class="children">
														<li class="comment odd parent">
															<div class="comment-body">
																<div class="comment-author vcard"> <img class="avatar photo" src="{{url('assets/images/comment.jpg')}}" alt=""> <cite class="fn">Mercer Owen</cite> <span class="says">says:</span> </div>
																<div class="comment-meta"> <a href="javascript:void(0);">25 January, 2020</a> </div>
																<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisma bibendum auctor elit consequat ipsum, nec sagittis sem amet nibh vulputate cursus itaet mauris.</p>
																<div class="reply"> <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-share"></i></a> </div>
															</div>
														</li>
													</ol>
													<!-- list END -->
												</li>
											</ol>
											<!-- comment list END -->
											<!-- Form -->
											<div class="comment-respond" id="respond">
												<h3 class="comment-reply-title text-center" id="reply-title">Leave a Reply <small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h3>
												<form class="comment-form" id="commentform" method="post">
													<p class="comment-form-author">
														<label for="author">Name <span class="required">*</span></label>
														<input type="text" value="" placeholder="Name" id="author">
													</p>
													<p class="comment-form-email">
														<label for="email">Email <span class="required">*</span></label>
														<input type="text" value="" placeholder="Email" id="email">
													</p>
													<p class="comment-form-comment">
														<label for="comment">Comment</label>
														<textarea rows="8" placeholder="Add Comment" id="comment"></textarea>
													</p>
													<p class="form-submit text-center">
														<input type="submit" value="Post Comment" class="submit" id="submit">
													</p>
												</form>
											</div>
											<!-- Form END -->
										</div>
									</div>
								</div> --}}
							</div>
						</div>
                        <!-- Right Side -->
                        @include('layout.rightSide')
                        <!-- End Right Side -->
					</div>
				</div>
            </div>
			<!-- About Us End -->

            <!-- subscribe -->
            @include('layout.subscribe')
            <!-- subscribe end -->
        </div>
		<!-- contact area END -->
    </div>
@endsection
