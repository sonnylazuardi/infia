@extends('app')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="padding">
    	<div class="container">
    		<div style="background:url('{{asset('/img/spongebob.jpg')}}') no-repeat center center;" class="feature-image">
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
    		<div id="map" style="width:100%; height:400px"></div>
    	</div>
    </div>
  </div>
@endsection

@section('script')

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB52sSHDcDbRehaBgmFiRx2E_j8L8qMsFY"></script>

  <script>

    // Map setup
    var latlng = new google.maps.LatLng({{$item->latitude}}, {{$item->longitude}});
    if ($("#latitude").val() != "" && $("#longitude").val() != ""){
      latlng = new google.maps.LatLng($("#latitude").val(), $("#longitude").val());
    }

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

    $("#longitude").val(marker.getPosition().lng());
    $("#latitude").val(marker.getPosition().lat());
  </script>
  
@endsection