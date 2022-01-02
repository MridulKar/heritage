@extends('frontend.app')

@section('title')
	Company Profile - Heritage
@endsection

@section('section')
<div class="page-top">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.2" style="background: url({{asset('front/images/resource/parallax7.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->		
			<h2>ABOUT <strong>Us</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>About Us</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="who-we-are">
						<div class="row">
							<div class="col-md-6 column">
								<div class="title style3">
									<span style="font-size: 55px; font-family: MyriadPro-Regular; text-align: justify;">{{CRUDBooster::getSetting('company_profile_title')}} </span>
								</div>		
								<div class="who-we-text">
									<p style="font-size: 18px; font-family: MyriadPro-Regular; text-align: justify;">{!!CRUDBooster::getSetting('company_profile_content')!!}</p>

								</div><!-- Who We Text -->
							</div>
							<div class="col-md-6 column">
								<div class="video">
									<img itemprop="image" src="{{asset(CRUDBooster::getSetting('company_profile_video_thumbnail_image'))}}" alt="">
									<a itemprop="url" class="play" href="#" title=""></a><!-- Play Button -->
									<a itemprop="url" class="pause" href="#" title=""></a><!-- Pause Button -->
									<iframe id="video" src="{{CRUDBooster::getSetting('company_profile_youtube_video_link')}}"></iframe>
								</div><!-- Video -->
							</div>				
						</div>
					</div><!-- Who We Are -->
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block blackish">
	<div data-velocity="-.1" style="background: url({{asset('front/images/resource/parallax3.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->				
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="title light">
						<h2>Our <span>Service</span></h2>
						<span>Committed To Providing The Best</span>
					</div>	
					@php
					$services = \App\service::where('status', 1)->get();
					@endphp
					@foreach($services as $service)
					<div class="service-boxes">
						<div class="row">
							<div class="col-md-3 column">
								<div class="service-box">
									<img itemprop="image" src="{{asset($service->img)}}" alt="">
									<h3><a itemprop="url" href="#" title="">{{$service->service_title}}</a></h3>
									<p>{{$service->service_content}}</p>
								</div>
							</div>
					@endforeach	
						</div>
					</div><!-- Service Boxes -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection