@extends('frontend.app')

@section('title')
    Gallery - Heritage
@endsection

@section('section')
<div class="page-top">
    <div class="container">
        <div class="page-title">
            <div data-velocity="-.2" style="background: url({{asset('front/images/resource/contact.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->        
            <h2>Heritage <strong>Gallery</strong></h2>
            <ul>
                <li><a itemprop="url" href="{{route('index')}}" title="">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div><!-- Page Title -->
    </div>
</div><!-- Page Top -->
<div class=""> 
<div class="row">
    <div class="col-lg-12">
        <div class="container-fluid" style="background:#EAE4E4; padding:5px; text-align:center">
            <h2> Image Gallery</h2>
        </div>
    </div>
</div>
</div>

<div class="container">
  
  <div class="row" style="padding:5px">
    @foreach($garrary as $gar)
    <div class="col-lg-4 col-sm-12">
      
      <div class="gallery" >
     
          <a target="_blank" href="{{url($gar->image)}}">
            <img src="{{asset($gar->image)}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">{{$gar->title}}</div>
          
        </div>
      
    </div>
    @endforeach
  </div>
</div>
 

@endsection
@push('scripts')
<script>
    jQuery(document).ready(function ($) {
        /* ============ Sponsors Carousel ================*/
        $('.countries-contact ul').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2500,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            mouseDrag: true,
            items: 5,
            autoHeight: true,
            responsive: {
                0: {items: 1},
                480: {items: 1},
                768: {items: 3},
                1200: {items: 5},
            }
        });


        /* ============ Sponsors Carousel ================*/
        $('.sponsors-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2500,
            smartSpeed: 2000,
            loop: true,
            dots: false,
            nav: true,
            margin: 10,
            mouseDrag: true,
            items: 5,
            autoHeight: true,
            responsive: {
                0: {items: 1},
                480: {items: 2},
                768: {items: 3},
                1200: {items: 5},
            }
        });

        /*================== Map =====================*/
        function initialize() {
            var myLatlng = new google.maps.LatLng(51.5015588, -0.1276913);
            var mapOptions = {
                zoom: 14,
                disableDefaultUI: true,
                scrollwheel: false,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var image = 'images/icon.png';
            var myLatLng = new google.maps.LatLng(51.5015588, -0.1276913);
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);


    });
</script>   
@endpush