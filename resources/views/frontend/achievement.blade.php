@extends('frontend.app')

@section('title')
	Achievement - Heritage
@endsection

@section('section')
<div class="page-top gray">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.4" style="background: url({{asset('front/images/resource/parallax6.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->			
			<h2>Our <strong>Achievements</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>Our Achievements</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-9 column">
					@foreach($achievements as $a)
					<div class="search-page">
						<div class="all-posts list-style">
							<div class="row">
								<div class="col-md-12">
									<div class="post-listview">
										<div class="col-md-6">
											<div class="post-img">
												<img itemprop="image" src="{{asset($a->image)}}" alt="" />
												<span><i class="fa fa-calendar-o"></i><span>{{$a->date}}</span></span>
											</div><!-- Post Image -->
										</div>
										<div class="col-md-6">
											<div class="post-detail">
												<h3 style="font-size: 22px; font-family: MyriadPro-Regular; text-align: center;">{{$a->title}}</h3>
												<ul class="meta">
													<li><i class="fa fa-home"></i> By <span itemprop="author">{{$a->by}}</span></li>
												</ul>
												<p style="font-size: 16px; font-family: MyriadPro-Regular; text-align: center;">{!!$a->content!!}</p>
											</div><!-- Post Detail -->
										</div>
									</div><!-- Blog Post -->
								</div>
							</div>
						</div>
					</div><!-- Search Page -->
					@endforeach
				</div>
				{{--
				<aside class="col-md-3 sidebar column">
					<div class="widget">						
						<div class="video-widget">
							<img itemprop="image" src="{{asset('front/images/resource/video-widget.jpg')}}" alt="" />
							<div class="video-layer lightbox">
								<a itemprop="url" href="https://vimeo.com/33123008" title=""><img itemprop="image" src="{{asset('front/images/video-icon.png')}}" alt="" /></a>
								<h6>HELP A CHILD WHO WITHOUT FAMILY</h6>
							</div>
						</div>
					</div><!-- Widget -->					

				</aside><!-- Sidebar -->
				--}}
				
			</div>
		</div>
	</div>
</section>
@endsection