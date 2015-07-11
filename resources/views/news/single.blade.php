@extends('app2')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="padding">
    	<div class="container">
    		<div style="background:url('{{asset('/img/spongebob.jpg')}}') no-repeat center center;" class="feature-image">
    		</div>
        <div class="img-slider">
          <div class="row row-centered">
            @foreach ($item->images as $image)
              @if ($image->image)
                <div class="col-xs-3 col-centered">
                  <a class="image_popup" href="{{asset($image->image)}}" title="">
                    <div class="img-item">
                      <img src="{{asset($image->image)}}" alt="">
                    </div>
                  </a>
                </div>
              @endif
            @endforeach
          </div>
        </div>
    		<div class="front-news-title">
    			<h2> {{$item->title}}</h2>
    		</div>
    		<div class="front-news-date">
    			<p> {{$item->timestamp}}</p>
    		</div>
    		<div class="front-news-description">
    			<p>{!!$item->content!!}</p>
    		</div>
    		<div id="map" style="width:100%; height:150px"></div>
    	</div>
    </div>
  </div>
@endsection

@section('script')
  <link rel="stylesheet" href="{{asset('css/colorbox.css')}}">
  <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>

  <script>
    $( document ).ready( function() {
      // Map setup
      var latlng = new google.maps.LatLng({{$item->latitude}}, {{$item->longitude}});

      var mapOptions = {
        zoom: 11, // set the map zoom level
        center: latlng, // set the center region
        disableDefaultUI: true,
        zoomControl: true, // whether to show the zoom control beside
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById('map'), mapOptions);
      var marker = new google.maps.Marker({
        map: map, // refer to the map you've just initialise
        position: latlng, // set the marker position (is based on latitude & longitude)
        draggable: false // allow user to drag the marker
      });

      $('.image_popup').colorbox();

      $(".img-item").imgLiquid({
          fill: true
        });
    });
  </script>
  
@endsection