@extends('app')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="full-image"> <img src="{{asset(@$home_picture->value)}}" alt=""> </div>
    <div class="padding">
      <div class="home-history">
        <div class="history-box">
          <div class="history-title">
            history
          </div>
          {!!@$history->text!!}
        </div>
      </div>
      <div class="home-news">
        <div class="news-title">
          <span>News</span>
        </div>
        <div class="news-item row">
          @foreach ($news as $item)
            <div class="col-md-4">
              <div class="item-image">
                <img src="{{asset($item->image)}}" alt="">
              </div>
              <div class="item-title">
                {{$item->title}}
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
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