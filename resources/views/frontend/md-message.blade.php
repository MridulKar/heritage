@extends('frontend.app')

@section('title')
	MD Message - Heritage
@endsection

@section('section')
<div class="page-top gray">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.4" style="background: url({{asset('front/images/resource/parallax6.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
			<h2>MESSAGE FROM  <strong>MD</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>MESSAGE FROM MD</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->


<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="team-detail">
						<div class="col-md-4 column">
							<div id="team-detail-img">
								<img itemprop="image" src="{{asset('front/images/md.jpg')}}" alt="" />
								<ul>
									<li><span><i class="ti-email"></i></span><p><i>Email:</i> <a href="" class="__cf_email__" style="color: #fff">{{CRUDBooster::getSetting('md_email')}}</a></p></li>
									<li><span><i class="ti-map-alt"></i></span><p><i>Address:</i> {{CRUDBooster::getSetting('md_address')}}</p></li>
									<li><span><i class="ti-headphone-alt"></i></span><p><i>Phone:</i> {{CRUDBooster::getSetting('md_phone')}}</p></li>
								</ul>
								{{--
								<div class="member-social">
									<span>Get In Touch</span>
									<div class="social-links">
										<a itemprop="url" title="" href="#"><i class="ti-facebook"></i></a>
										<a itemprop="url" title="" href="#"><i class="ti-twitter"></i></a>
										<a itemprop="url" title="" href="#"><i class="ti-tumblr"></i></a>
									</div>
								</div><!-- Members -->
								--}}								
							</div><!-- Team Detail Image -->
						</div>
						<div class="col-md-8 column">
							<div class="team-desc">
								<p>{!!CRUDBooster::getSetting('md_message')!!}</p>
								<div class="all-skills">
									<div class="skills">
										<span><img src="{{asset('front/images/mission.png')}}"></span>
										<h5 style="font-size: 45px; font-family: MyriadPro-Regular; text-align: justify;">Mission</h5>
										<p>{!!CRUDBooster::getSetting('mission')!!}</p>
									</div><!-- Skills -->
									<div class="skills">
										<span><img src="{{asset('front/images/vision.png')}}"></span>
										<h5 style="font-size: 45px; font-family: MyriadPro-Regular; text-align: justify;">Vision</h5>
										<p style="font-size: 18px; font-family: MyriadPro-Regular; text-align: justify;">{!!CRUDBooster::getSetting('vision')!!}</p>
									</div><!-- Skills -->
								</div>
							</div><!-- Team Description -->
						</div>
					</div><!-- Team Detail -->
				</div>
			</div>
		</div>
	</div>
</section>


{{--
<section>
	<div class="block remove-gap gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="join-team">
						<h4>Want To Join Our Team?</h4>
						<p>Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sapien neque, bibendum in sagittis. Duis varius tellus eget massa pulvinar eu aliquet nibh dapibus. Aenean eros erat, tincidunt vitae fringila nec, fermentum et quam. Class aptent tacit socio squ ad litora torquent peri bia nostra, per inceptos himenaeos. Aenean eros erat, tincidunt vitae fringillanec, fermentum et quam.</p>
						<a itemprop="url" title="" href="#" class="button">JOIN US TODAY</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
--}}
@endsection