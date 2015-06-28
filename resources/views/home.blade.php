@extends('app')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="full-image"> <img src="{{asset('img/slider.jpg')}}" alt=""> </div>
    <p class="padding">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita error earum deleniti laborum facere ipsa, magnam ipsum eum suscipit itaque pariatur, maxime quibusdam molestias, aliquam possimus sint numquam labore.
    </p>
  </div>
  
@endsection

@section('script')
  <script>
    $(document).ready(function() {
      
      $(".full-image").imgLiquid({
        fill: false
      });
    });
  </script>
@endsection