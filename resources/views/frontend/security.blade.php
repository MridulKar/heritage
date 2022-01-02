@extends('frontend.app')

@section('title')
	 Privacy - Heritage
@endsection

@section('section')
<div class="page-top gray">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.4" style="background: url({{asset('front/images/resource/parallax6.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
			<h2>Security <strong>Page</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>Security Page</li>
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
							<div class="col-md-12 column">
								<div class="title style3">
								<span>{{CRUDBooster::getSetting('security_content')}} </span>
								</div>		
								<div class="who-we-text">
									<p></p>

								</div><!-- Who We Text -->
							</div>
											
						</div>
					</div><!-- Who We Are -->
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