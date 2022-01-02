@extends('frontend.app')

@section('title')
	International - Heritage
@endsection

@section('section')
<div class="page-top">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.2" style="background: url({{asset('front/images/resource/parallax7.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->		
			<h2>International  <strong>Package</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>International Package</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="successful-stories">
						<div class="row">
							@foreach($packages as $package)
							<div class="col-md-3">
								<div class="story">
									<div class="story-img">
										<img itemprop="image" src="{{asset($package->image1)}}" alt="" />
										<a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="">+</a>
									</div>
									<div class="story-detail">
										<span>{{$package->duration}}</span>
										<h3><a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="">{{$package->place}}</a></h3>
									</div>
									<div class="spent-bar">
										<span>Money Spent</span>
										<span class="price"><i>৳</i>{{$package->amount}}</span>
									</div>
								</div><!-- Story -->
							</div>
							@endforeach
						</div>
					</div><!-- Successful Stories -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection