<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('description', 'Heritage')" />
<title>@yield('title', 'Heritage')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="@yield('keywords', 'Heritage')" />

<!-- Styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('front/layerslider/css/layerslider.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('front/css/icons.css')}}">
<link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('front/css/style.css')}}" type="text/css" />
<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('front/css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('front/css/colors/color.css')}}" title="color1" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=MyriadPro-Regular">
<link rel="stylesheet" type="text/css" href="{{asset('front/fonts/Myriad Pro Regular.ttf')}}" title="color1" />
<link rel="icon" href="{{CRUDBooster::getSetting('logo')}}" type="image/gif" sizes="16x16">

<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 255px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 250px;
  height: 280px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.slink{
    margin-left:8%;
}

.error{
      color: red;
    }
    
    .abc{
        height: 267px!important; width: 239px!important;
    }
    
</style>
</head>

<body itemscope>

@include('partials.alert')

<div class="theme-layout">
<div class="icon-bar">

	@php
	$socials = \App\Social::where('status', 1)->get();
	@endphp
	
    @foreach($socials as $s)
    	  <a class="facebook " style="background-color:{{$s->background_color}}; color: {{$s->color}}" href="{{$s->url}}"><i class="{!!$s->icon!!}"></i><span class="slink">{{$s->name}} </span> </a>
    	  
    @endforeach
    

</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-12">
			@php
			$f_l = \App\LeftLayout::where('id', 1)->first();
			$l_l = \App\LeftLayout::where('id', 2)->first();
			@endphp
			<!--<div class="popup-btn">-->
			<!--	<a href="{{$f_l->url}}" class="flyheritage" style="background:#046899;" target="_blank">{{$f_l->title}}</a>-->
			<!--</div>-->
			<div class="popup-btn2">
				<a href="{{$l_l->url}}" class="flyheritage" style="background:#046899;" target="_blank">{{$l_l->title}}</a>
			</div>
		</div>
	</div>
</div>
<header class="stick headback">

	<div class="menu" style="height: 96px;" >
		
		<div class="container-fluid" style="position:relative;top:18px;">
				
			<nav>
<div class="logo"><a itemprop="url" href="{{route('index')}}" title=""><img itemprop="image" src="{{CRUDBooster::getSetting('logo')}}" alt="" /></a></div>	
				<a class="theme-btn " style="background:#046899; href="tel:{{CRUDBooster::getSetting('phone1')}}">{{CRUDBooster::getSetting('phone1')}}</a>
				<ul>
					<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
					<li class="menu-item-has-children all-demos"><a itemprop="url" href="javascript:void(0)" title="">About us </a>
						<ul>
							<li><a href="{{route('company-profile')}}">Company Profile</a></li>
                            <li><a href="{{route('md-message')}}">Message form MD</a></li>
                            <li><a href="{{route('achievement')}}">Our Achievement</a></li>
						</ul>
					</li>
					<li><a href="{{route('ticket')}}">Air Ticket</a></li>
					<li class="menu-item-has-children" ><a itemprop="url" href="javascript:void(0)" title="">Tour Package </a>
						<ul>
							<li><a href="{{route('domestic')}}">Domestic Package</a></li>
                            <li><a href="{{route('international')}}">International Package</a></li>
						</ul>
					</li>
					<li><a href="{{route('visa')}}">Visa Service</a></li>
					<li class="menu-item-has-children"><a itemprop="url" href="javascript:void(0)" title="">Hajj </a>
						<ul>
							<li><a href="{{route('hajj')}}">Hajj Package</a></li>
                            <li><a href="{{route('umrah')}}">Umrah Hajj Package</a></li>
						</ul>
					</li>
					<li><a itemprop="url" href="{{route('contact')}}" title="">Contact Us</a></li>
					<li><a itemprop="url" href="{{route('gallary')}}" title="">Gallery</a></li>
				</ul>
			</nav>
		</div>
	</div><!-- Menu -->
</header><!-- Header -->
<div id="responsive-header">

	<div id="responsive-menu">
		<span class="show-topbar"><i class="fa fa-angle-double-down"></i></span>
		<div class="logo"><a itemprop="url" href="{{route('index')}}" title=""><img itemprop="image" src="{{asset('front/images/logo.png')}}" alt="" /></a></div>
		<span class="open-menu"><i class="fa fa-align-justify"></i></span>
		<div class="menu-links">
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li class="menu-item-has-children all-demos"><a itemprop="url" href="javascript:void(0)" title="">About us </a>
					<ul>
						<li><a href="{{route('company-profile')}}">Company Profile</a></li>
                        <li><a href="{{route('md-message')}}">Message form MD</a></li>
                        <li><a href="{{route('achievement')}}">Our Achievement</a></li>
					</ul>
				</li>
				<li><a href="{{route('ticket')}}">Air Ticket</a></li>
				<li class="menu-item-has-children"><a itemprop="url" href="javascript:void(0)" title="">Tour Package </a>
					<ul>
						<li><a href="{{route('domestic')}}">Domestic Package</a></li>
                        <li><a href="{{route('international')}}">International Package</a></li>
					</ul>
				</li>
				<li><a href="{{route('visa')}}">Visa Service</a></li>
				<li class="menu-item-has-children"><a itemprop="url" href="javascript:void(0)" title="">Hajj </a>
					<ul>
						<li><a href="{{route('hajj')}}">Hajj Package</a></li>
                        <li><a href="{{route('umrah')}}">Umrah Hajj Package</a></li>
					</ul>
				</li>
				<li><a itemprop="url" href="{{route('contact')}}" title="">Contact Us</a></li>
				<li><a itemprop="url" href="{{route('gallary')}}" title="">Gallery</a></li>
			</ul>
		</div>
	</div><!-- Responsive Menu -->
</div><!-- Responsive Header -->

@yield('section')

<section>
	<div class="" style="padding:10px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="title">
						<h2 style="color:#046899; font-size:45px; font-family: MyriadPro-Regular; ">Our <span>CONCERNS</span></h2>
					</div>
					<div class="successful-stories">
						<div class="row">
							<div class="sponsors-carousel">
							@php 
							    $clients = DB::table('clients')->get();
							    
							@endphp
								@foreach($clients as $client)
								<div class="">
									<div class="story">
										<div class="story-img">
											<img style="height: 190px; width: 283px; border:1px solid #fff; border-radius:12px " itemprop="image" src="{{asset($client->image)}}" alt=""  />
											<a itemprop="url" href="{{url($client->link)}}" title="">+</a>
										</div>
									</div><!-- Story -->
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="parallax" style="background:url({{asset('front/images/resource/parallax6.jpg')}}) repeat scroll 0 0 rgba(0, 0, 0, 0);" data-velocity="-.1"></div>		
	<div class="block" style="background: #046899;">
		<div class="container">
			<div class="footer-widgets">
				<div class="row">
					<div class="col-md-4 column">
						<div class="widget">
							<div class="contact-widget">
								<h5 style="font-size:40; font-family:MyriadPro-Regular; ">Contact <span>Heritage</span></h5>
								<ul>
									<li > <i class="fa fa-home" style=" color:white"></i> {{CRUDBooster::getSetting('address')}}</li>
									<li > <i class="fa fa-phone" style=" color:white"></i> <b style="font-size:20px">{{CRUDBooster::getSetting('phone1')}}</b></li>
									<li ><i class="fa fa-envelope" style=" color:white"></i> <a href="#" style="color:white" >{{CRUDBooster::getSetting('email')}}</a></li>
								</ul>
							</div><!-- Contact Widget -->
						</div>
					</div>
					<div class="col-md-4 column">
						<div class="widget">
							<div class="widget-title"><h4 style="font-size:40; font-family:MyriadPro-Regular;">Recent <span>Package</span></h4></div>
							@php
							$packages = \App\TourPackage::whereStatus(1)->latest()->limit(2)->get();
							@endphp
							<div class="blog-widget">
								@foreach($packages as $package)
								<div class="widget-post" itemscope itemtype="http://schema.org/BlogPosting">
									<a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title=""><img class="footer-package-img" style="width:120px; height:100px" itemprop="image" src="{{asset($package->image1)}}" alt="" /></a>
									<h5 itemprop="headline" style="font-size: 18px; font-family: MyriadPro-Regular; text-align: justify;"><a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="" style="color:white">{{\Str::limit($package->title, 25)}}</a></h5>
									<ul class="meta">
										<li content="03 Aug 2015" itemprop="datePublished"><i class="fa fa-calendar-o"></i> <span>{{$package->date}}</span></li>
									</ul>
								</div><!-- Widget Post -->
								@endforeach
							</div><!-- Blog Widget -->
						</div><!-- Widget -->
					</div>
					<div class="col-md-4 column">
						<div class="widget">
							<div class="widget-title"><h4>Ready For <span>Help</span></h4></div>					
							<div class="mb-3">
								   <form action="{{route('newslatter')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                     <div class="col-md-12"> 
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email" style=" width: 74%;">
                                    <button type="submit" class="btn btn-primary  btn-md mt-2" style="margin-left: 77%;  margin-top: -16%; ">Submit</button>
                                     </div>   
                                    </div>
                                    
                                    </form>
                                    </div>
                                
						</div> <!-- Ready For Help -->
					</div>
                    
                    <div class="col-md-4 column">
						<div class="widget">
							<div class="widget-title"><h4>We <span>Accept</span></h4></div>					
							
								<div class="mb-3">
								   <img src="{{CRUDBooster::getSetting('accept')}}" style="width:329px; height:187px;"/>
                                    </div>
                                
							
						</div> <!-- Ready For Help -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-bar" style="background: #046899;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 column">
					<div class="bottom-links"> 
						<a itemprop="url" href="{{route('index')}}" title="">Home</a>
						<a itemprop="url" href="{{route('company-profile')}}" title="">About</a>
						<a itemprop="url" href="{{route('contact')}}" title="">Contact</a>

					</div>
				</div>
				<div class="col-md-6 column">
					<p>© <span id="current_year"></span> SIS - All Rights Reserved - Made By Soft IT Security</p>
				</div>
			</div>
		</div>
	</div>
</footer>



<!--<div class="banner-popup">-->
<!--	<div class="big-banner">-->
<!--		<div class="banner-inner">-->
<!--			<span class="close"><i class="fa fa-remove"></i></span>-->
<!--			<h5>The <strong>Campaign</strong> To Reduce Poverty</h5>-->
<!--			<span class="banner-subtitle">We Need Your Support.</span>-->
<!--			<strong><i>BDT</i>2250</strong>-->
<!--			<span class="banner-subtitle"> </span>-->
<!--			<a class="theme-btn" href="cause-detail.html" title="">AIR TICKET NOW IMMEDIATELY</a>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->


</div><!-- Theme Layout -->



	<!-- SCRIPTS-->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('front/js/modernizr.custom.17475.js')}}"></script>
	<script src="{{asset('front/js/jquery-2.1.4.js')}}" type="text/javascript"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.poptrox.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('front/js/jquery.scrolly.js')}}"></script>
	<script src="{{asset('front/js/jquery.knob.js')}}"></script>
	<script src="{{asset('front/js/jquery.isotope.min.js')}}"></script>
	<script src="{{asset('front/js/isotope-initialize.js')}}"></script>
	<script src="{{asset('front/js/jquery.plugin.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('front/js/select2.min.js')}}"></script>
	<script src="{{asset('front/js/enscroll-0.5.2.min.js')}}"></script>
	<script src="{{asset('front/js/toastr.min.js')}}"></script>

	<!-- Scripts For Layer Slider  -->
	<script src="{{asset('front/layerslider/js/greensock.js')}}" type="text/javascript"></script>
	<script src="{{asset('front/layerslider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
	<script src="{{asset('front/layerslider/js/layerslider.kreaturamedia.jquery.js')}}" type="text/javascript"></script>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script><!-- Google reCaptcha -->
 
	<script>
    jQuery(document).ready(function( $ ) {
        /* ============ LAYER SLIDER ================*/
		jQuery("#layerslider").layerSlider({
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
			skin: 'fullwidth',
			hoverPrevNext: true,
			skinsPath: 'layerslider/skins/'
		});
	

        /* ============ Welfare Projects Carousel ================*/
		$('.welfare-projects-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:2500,
			smartSpeed:2000,
			autoplayHoverPause:true,
			loop:true,
			dots:false,
			nav:false,
			margin:0,
			mouseDrag:true,
			items:4,
			autoHeight:true,
			responsive : {
			    0 : {items : 1},
			    480 : {items :2},
			    768 : {items : 3},
			    1200 : {items : 4},
			}	
		});	 


        /* ============ Sponsors Carousel ================*/
		$('.sponsors-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:2500,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:true,
			margin:10,
			mouseDrag:true,
			items:4,
			autoHeight:true,
			responsive : {
			    0 : {items : 1},
			    480 : {items :2},
			    768 : {items : 3},
			    1200 : {items : 4},
			}	
		});	 




        /* ============ Count Down Timer ================*/
		$(function () {
			var date = new Date();
			date = new Date(2020, 4 - 1, 12);
			$('.count-down').countdown({until: date});
		});
		$(function () {
			var date2 = new Date();
			date2 = new Date(2020, 4 - 1, 12);
			$('.count-down2').countdown({until: date2});
		});

		$(function () {
			var current_year = new Date().getFullYear()
			$('#current_year').text(current_year);
		});	 

	});	 
	</script>	
	<script src="{{asset('front/js/script.js')}}"></script>
	@stack('scripts') 
</body>
 