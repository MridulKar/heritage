@extends('frontend.app')

@section('title')
	{{\Str::limit($package->title, 50)}} - Heritage
@endsection

@section('section')
<div class="page-top gray">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.4" style="background: url({{asset('/front/images/resource/parallax6.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<h2>Tour <strong>Package</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>Package Detail</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-9 column">
					<div class="blog-detail-page">
						<div class="post-intro cause-intro">
							<img class="main-image-height" itemprop="image" src="{{asset($package->image1)}}" alt="" />
							<div class="row">
								<div class="col-md-9">
									<ul class="meta">
										<li><i class="ti-calendar"></i>{{$package->date}}</li>
										<li><i class="ti-location-pin"></i> In {{$package->place}}</li>
										<li><i class="ti-user"></i> By <a itemprop="url" href="#" title="">{{$package->duration}}</a></li>
									</ul>
									<h1 class="post-title">{{$package->title}}</h1>

								</div>
								<div class="col-md-3">
									<div class="cause-detail">
										<span><i>৳</i> {{$package->amount}}</span>
										<strong>Money Spent<a itemprop="url" href="#" title="">Money Spent</a></strong>
									</div>
								</div>
							</div>
						</div><!-- Post Intro -->
						<p>{!!$package->description!!}</p>
						<div class="page-gallery">
							<div class="col-md-4">
								<div class="page-gallery-img">
									@if($package->image2)
									<a itemprop="url" data-rel="prettyPhoto[gallery]" href="{{asset($package->image2)}}">
										<img class="height_fixed" itemprop="image" src="{{asset($package->image2)}}" alt="" />
									</a>
									@endif
								</div>
							</div>
							<div class="col-md-8">
								<div class="page-gallery-img">
									@if($package->image3)
									<a itemprop="url" data-rel="prettyPhoto[gallery]" href="{{asset($package->image3)}}" title="">
										<img class="height_fixed" itemprop="image" src="{{asset($package->image3)}}" alt="" />
									</a>
									@endif
								</div>
							</div>
							<div class="col-md-8">
								<div class="page-gallery-img">
									@if($package->image4)
									<a itemprop="url" data-rel="prettyPhoto[gallery]" href="{{asset($package->image4)}}" title="">
										<img class="height_fixed" itemprop="image" src="{{asset($package->image4)}}" alt="" />
									</a>
									@endif
								</div>
							</div>
							<div class="col-md-4">
								<div class="page-gallery-img">
									@if($package->image5)
									<a itemprop="url" data-rel="prettyPhoto[gallery]" href="{{asset($package->image5)}}" title="">
										<img class="height_fixed" itemprop="image" src="{{asset($package->image5)}}" alt="" />
									</a>
									@endif
								</div>
							</div>
						</div><!-- Post Gallery -->
					</div><!-- Blog Detail -->
				</div>

				<aside class="col-md-3 sidebar column">



					<div class="widget">
						<div class="widget-title subtitle"><h4>Online Booking </h4></div>						
						<ul>
							<form method="post" action="{{route('tour-package-booking', $package->id)}}">
								@csrf
								<input type="hidden" name="type" value="{{$type}}">
                            <div class="form-group">
                                <span class="form-label">Your Name</span>
                                <input class="form-control" type="text" placeholder="Your Name" name="name" required="">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Your Email</span>
                                <input class="form-control" type="email" placeholder="Your Email" name="email">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Your Phone</span>
                                <input class="form-control" type="text" placeholder="Your Phone" name="phone" required="">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Adults</span>
                                <input class="form-control" type="text" placeholder="Adults" name="adults">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Children</span>
                                <input class="form-control" type="text" placeholder="Children" name="children">
                            </div>
                             <div class="form-group">
                                <span class="form-label">Note</span>
                                <textarea class="form-control" placeholder="Note" name="note"></textarea>
                            </div>
                            <br>
                            <div class="form-btn">
                                <h3 class="tktitle text-center"><input type="submit" value="Book Now" style="background: unset;border: unset;"> </h3>
                            </div>
                            </form>
						</ul>
					</div><!-- Widget -->

					<!--<div class="widget">-->
					<!--	<div class="widget-title"><h4>Contact <span>Us</span></h4></div>						-->
					<!--	<div class="contact-widget">-->
					<!--		<p>Quis autem velum iure reprehe nderit. Lore m ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet ctetur.</p>-->
					<!--		<ul>-->
					<!--			<li><i class="fa fa-map-marker"></i>63 Birch Street Granada Hills, CA 91344</li>-->
					<!--			<li><i class="fa fa-phone"></i>818-832-5258</li>-->
					<!--			<li><i class="fa fa-mobile"></i>63 Birch Street Granada Hills, CA 91344</li>-->
					<!--		</ul>-->
					<!--	</div>-->
					<!--</div>-->
				</aside>
				
			</div>
		</div>
	</div>
</section>
@endsection