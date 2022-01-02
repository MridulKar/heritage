@extends('frontend.app')

@section('title')
	Privacy - Heritage
@endsection

@section('section')
<div class="page-top gray">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.4" style="background: url({{asset('front/images/resource/parallax6.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
			<h2>Privacy <strong>Page</strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li>Privacy Page</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->


<section>
	<div class="block remove-gap gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="join-team">
						<h4>{!! CRUDBooster::getSetting('privacy_title') !!}</h4>
						<p>{!! CRUDBooster::getSetting('privacy_content') !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection