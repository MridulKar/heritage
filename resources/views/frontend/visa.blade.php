@extends('frontend.app')

@section('title')
	Visa - Heritage
@endsection

@section('section')
<div class="page-top gray">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.4" style="background: url({{asset('front/images/resource/parallax6.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->			
			<h2>Visa <strong>Service</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>Visa Service</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="donation-page">
						<div class="container">
							<div class="popup-centralize">
								<div class="parallax" style="background:url({{asset('front/images/resource/parallax5.jpg')}}) repeat scroll 0 0 rgba(0, 0, 0, 0);" data-velocity="-.1"></div><!-- PARALLAX BACKGROUND IMAGE -->				
								<div class="donation-intro">
									<div class="row">
										<div class="col-md-6">
											<div class="make-donation">
												<h5>Enlisted Agent</h5>
												
											</div><!-- Make Donation -->
										</div>
										<div class="col-md-6">
											{{--
											<div class="select-cause">
												<div class="cause-selectbox">
													<select class="select">
														<option>Chosee Country</option>
														@foreach($enlisteds as $e)
														<option>{{$e->country_name}}</option>
														@endforeach
													</select>
												</div><!-- Cause Select Box -->						
											</div><!-- Select Cause -->
											--}}
										</div>
										<div class="col-md-12">
											@foreach($enlisteds as $e)
											<div class="col-md-3">
												<div class="needed-donation">
													<img itemprop="image" src="{{asset($e->country_image)}}" alt="{{$e->country_name}}" />

													<div class="overlay-donation">
														<a itemprop="url" class="theme-btn" href="{{route('single-visa', $e->id)}}" title="">{{$e->country_name}} Details</a>
													</div>
												</div><!-- Needed Donation -->
											</div>
											@endforeach
										</div>
									</div>
								</div><!-- Donation Intro -->
								<div class="donation-intro">
									<div class="row">
										<div class="col-md-6">
											<div class="make-donation">
												<h5>All Country <i></i></h5>
												
											</div><!-- Make Donation -->
										</div>
										<div class="col-md-6">
											{{--
											<div class="select-cause">
												<div class="cause-selectbox">
													<select class="select">
														<option>Select Country</option>
														@foreach($visas as $visa)
														<option>{{$visa->country_name}}</option>
														@endforeach
													</select>
												</div><!-- Cause Select Box -->						
											</div><!-- Select Cause -->
											--}}
										</div>
										<div class="col-md-12">
											@foreach($visas as $visa)
											<div class="col-md-3">
												<div class="needed-donation">
													<img itemprop="image" src="{{asset($visa->country_image)}}" alt="{{$visa->country_name}}" />

													<div class="overlay-donation">
														<a itemprop="url" class="theme-btn" href="{{route('single-visa', $visa->id)}}" title="">{{$visa->country_name}} Details</a>
													</div>
												</div><!-- Needed Donation -->
											</div>
											@endforeach
										</div>
									</div>
								</div><!-- Donation Intro -->
							</div><!-- Popup Centralize -->
						</div>
					</div><!-- Donation Popup -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection