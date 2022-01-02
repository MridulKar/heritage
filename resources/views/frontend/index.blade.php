@extends('frontend.app')

@section('title')
	Home - Heritage
@endsection

@section('section')
<section>
    <div class="container-fluid block gray no-padding">
		<div class="">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xl-12">
				    <div class="">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                        
                            @foreach($sliders as $key=>$slider)
                              <div class="item {{ $key==0 ? 'active':''}}">
                                <img src="{{asset($slider->image)}}" alt="Los Angeles" style="width:100%;">
                                <div class="carousel-caption">
                                  
                                <div class="ls-l slide-title" style="position:relative;bottom: 223px;left: 52%; font-size:40px;font-weight:800;  " data-ls="offsetyin:50px;offsetxin:0;durationin:1500;delayin:400;easingin:easeOutBack; direction: rtl;">{{$slider->title1}}</div>
								<div class="ls-l slide-subtitle" style="position:relative;bottom: 223px;left: 52%; font-size:26px; " data-ls="offsetyin:-50px;offsetxin:0;durationin:1500;delayin:800;">{{$slider->title2}}</div>
								<div class="ls-l slide-text" style="position:relative;bottom: 223px;left: 52%; font-size:40px; " data-ls="offsetyin:50px;offsetxin:0;durationin:1500;delayin:1200;">{{$slider->title3}}</div>
                                </div>
                              </div>
                            @endforeach
                              
                          
                            </div>
                            
                            
                            
                            <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
                
                         </div>
                    </div>	
			    </div>
		    </div>
	    </div>
    </div>
</section><!-- Slider Section -->


<!--<section>-->
<!--	<div class="block gray no-padding">-->
<!--		<div class="">-->
<!--			<div class="row">-->
<!--				<div class="col-md-12 column">-->
<!--					<div id="layerslider-container-fw">-->
<!--						<div id="layerslider" style="width: 100%; height: 570px; margin: 0px auto; ">	-->
<!--							@foreach($sliders as $slider)	-->
<!--							<div style="height: 267px!important; width: 100%!important; height: 100rem;" class="ls-slide" data-ls="transition2d:12; timeshift:-1000;">	-->
<!--								<img  itemprop="image" src="{{asset($slider->image)}}" class="ls-bg" alt="Slide background" />-->
<!--								<div class="ls-l slide-title" style="top:250px;left:75%;font-size:40px;font-weight:800;  " data-ls="offsetyin:50px;offsetxin:0;durationin:1500;delayin:400;easingin:easeOutBack; direction: rtl;">{{$slider->title1}}</div>-->
<!--								<div class="ls-l slide-subtitle" style="top:350px;left:80%;font-size:26px; " data-ls="offsetyin:-50px;offsetxin:0;durationin:1500;delayin:800;">{{$slider->title2}}</div>-->
<!--								<div class="ls-l slide-text" style="top:400px;left:80%;font-size:40px; " data-ls="offsetyin:50px;offsetxin:0;durationin:1500;delayin:1200;">{{$slider->title3}}</div>-->
	
<!--							</div> -->
<!--							@endforeach-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>	-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->



<style>
    
    .carousel-item img {
      width: 100vw;
      height: 100%;
    }

</style>


<section>
	<div class="block whitish parallax-sec">
		<div class="parallax" style="background:url({{asset('front/images/resource/parallax1.jpg')}}) repeat scroll 0 0 rgba(0, 0, 0, 0);" data-velocity="-.1"></div>			
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="urgent-cause">
						<div class="row">
							<div class="col-md-6 column">
								<div class="urgentcause-detail">
									<h3 style="color:#046899; font-size:28px">{{CRUDBooster::getSetting('slider_bottom_section_title')}}</h3>
									
									<p >{!!CRUDBooster::getSetting('slider_bottom_section_content')!!}</p>

								</div><!-- Urgent Cause Detail -->
							</div>
							<div class="col-md-6 column">
								<div class="urgentcause2">
									<div class="col-md-5"><a itemprop="url" href="#" title=""><img itemprop="image" src="{{asset(CRUDBooster::getSetting('slider_bottom_section_image'))}}" alt="" /></a></div>
									
								</div>
							</div>

						</div>
					</div><!-- Urgent Cause -->
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="block grayimg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="title">
						<h2 style="color:#ffffff; font-size:60px; font-family: MyriadPro-Regular;">Tour  <span>Package</span></h2>
					</div>
					<div class="successful-stories">
						<div class="row">
							<div class="sponsors-carousel">
								@foreach($tour_packages as $package)
								<div class="col-md-4 sponsor">
									<div class="story">
										<div class="story-img">
											<img style="height: 267px; width: 239px;" itemprop="image" src="{{asset($package->image1)}}" alt="" />
											<a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="">+</a>
										</div>
										<div class="story-detail">
											<span>{{$package->duration}}</span>
											<h3><a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="">{{$package->place}}</a></h3>
										</div>
										<div class="spent-bar" style="background:#046899">
											<span>Money Spent</span>
											<span class="price"><i style="color:white">৳</i>{{$package->amount}}</span>
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



<section>
	<div class="block grayimg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="title">
						<h2 style="color:#ffffff; font-size:60px; font-family: MyriadPro-Regular;">Hajj  <span>Package</span></h2>
					</div>
					<div class="successful-stories">
						<div class="row">
							<div class="sponsors-carousel">
								@foreach($hajj_packages as $package)
								<div class="col-md-4 sponsor">
									<div class="story">
										<div class="story-img">
											<img style="height: 267px; width: 239px;" itemprop="image" src="{{asset($package->image1)}}" alt="" />
											<a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="">+</a>
										</div>
										<div class="story-detail">
											<span>{{$package->duration}}</span>
											<h3><a itemprop="url" href="{{route('single-tour-package', $package->id)}}" title="">{{$package->place}}</a></h3>
										</div>
										<div class="spent-bar" style="background:#046899">
											<span>Money Spent</span>
											<span class="price"><i style="color:white">৳</i>{{$package->amount}}</span>
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


@endsection