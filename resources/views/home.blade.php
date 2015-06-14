@extends('app')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div id="owl-example" class="owl-carousel">
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
      <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
    </div>
  </div>
  
@endsection

@section('script')
  <script>
    $(document).ready(function() {
      $("#owl-example").owlCarousel({
        navigation : true, 
        singleItem: true,
        navigationText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ],
      });
      $(".full-image").imgLiquid({
        fill: false
      });
    });
  </script>
@endsection