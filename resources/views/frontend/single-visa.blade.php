@extends('frontend.app')

@section('title')
	{{$visa->country_name}} Visa - Heritage
@endsection

@section('section')
<div class="page-top">
	<div class="container">
		<div class="page-title">
			<div data-velocity="-.2" style="background: url(images/resource/parallax7.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->		
			<h2>{{$visa->country_name}}  <strong>Visa Checklist </strong></h2>
			<ul>
				<li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
				<li><a itemprop="url" href="{{route('visa')}}" title="">Visa Services</a></li>
				<li>{{$visa->country_name}} Checklist</li>
			</ul>
		</div><!-- Page Title -->
	</div>
</div><!-- Page Top -->


<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="service-detail-page">
						<div class="service-detail-img">
							<img src="{{asset($visa->country_image)}}" alt="" />
							<span><img src="{{asset('front/images/service-icon.png')}}" alt="" /></span>
						</div>
						<div class="service-description">
							<div class="row">
								<div class="col-md-4">
									<div class="service-features-wrapper">
										<h3>Visa for Other  <span>Countries</span></h3>	
										<div class="all-skills">
											<div class="ex3">
												<table style="width: 100%">
													@foreach($visas as $v)
													<tr>
														<td><img src="{{asset($v->country_image)}}"></td>
														<td><a href="{{route('single-visa', $v->id)}}">{{$v->country_name}}</a> </td>
													</tr>
													@endforeach
												</table>
											</div>
										</div>									
									</div>
								</div>
								<div class="col-md-8 tabsection">
									<ul class="nav nav-tabs">
									    <li class="active"><a data-toggle="tab" href="#home">Documents Required</a></li>
									    <li><a data-toggle="tab" href="#menu1">Processing Fee & Service Charge</a></li>
									    <li><a data-toggle="tab" href="#menu2">Remarks</a></li>
									 </ul>
									<div class="tab-content">
									    <div id="home" class="tab-pane fade in active">
									      {!!$visa->document_requirement!!}
									    </div>
									    <div id="menu1" class="tab-pane fade">
									      {!!$visa->fee!!}
									    </div>
									    <div id="menu2" class="tab-pane fade">
									      {!!$visa->remarks!!}
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- Service Detail Page -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection