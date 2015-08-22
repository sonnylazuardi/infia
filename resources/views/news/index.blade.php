@extends('app')

@section('content')

<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="padding">
      @if($pinnedNews != null)
      <div class="container">
        <div class="front-news-title">
          <h2> {{$pinnedNews->title}}</h2>
        </div>
        <div class="img-news-header-full">
          <img class="" src="{{asset($pinnedNews->image)}}"></img>
        </div>
        <div class="front-news-more">
          <a href="{{url('/news/single/'.$pinnedNews->id)}}">..See More..</a>
        </div>
        <div class="front-news-full">
          <p>{!!$pinnedNews->content!!} </p>
        </div>
      </div>
      @endif
      <div class="container news-container" >
        @foreach ($news as $i => $item)
        @if($i%2==0)
	      <div class="row">
	      	<div class="col-md-3">
	      		<img class="img-news-header2" src="{{asset($item->image)}}"></img>
          </div>
          <div class="col-md-9">
	      		<div class="front-news-title2 even">
	      			<h2> {{$item->title}}</h2>
	      		</div>
	      		<div class="front-news-date2 even">
	      			<p> {{$item->timestamp}}</p>
	      		</div>
	      		<div class="front-news-description2 even">
	      			<p>{!!str_limit($item->content, $limit = 250, $end = '')!!} <a href="{{url('/news/single/'.$item->id)}}">..See More..</a></p>
	      		</div>
	      	</div>
	      </div>
        @else
        <div class="row" id="moved-box-{{$i}}">
          <div class="col-md-9">
            <div class="front-news-title2 odd">
              <h2> {{$item->title}}</h2>
            </div>
            <div class="front-news-date2 odd">
              <p> {{$item->timestamp}}</p>
            </div>
            <div class="front-news-description2 odd">
              <p>{!!str_limit($item->content, $limit = 250, $end = '')!!} <a href="{{url('/news/single/'.$item->id)}}">..See More..</a></p>
            </div>
          </div>
          <div class="col-md-3 moved" data-id="{{$i}}">
            <img class="img-news-header2" src="{{asset($item->image)}}"></img>
          </div>
        </div>
        @endif
        @endforeach
	   </div>
    </div>
  </div>

@endsection

@section('script')
  <script src="{{asset('js/enquire.min.js')}}"></script>
  <script>
    $(document).ready(function() {
      
      $(".img-news-header-full").imgLiquid({
        fill: false
      });

      enquire.register("screen and (max-width: 720px)", {
        match : function() {
          $('.moved').each(function (i, item) {
            $(item).prependTo("#moved-box-"+$(item).data('id'));
            $("#moved-box-"+$(item).data('id')).find("h2, p").css('text-align', 'left');
          });
        },
        unmatch: function() {
          $('.moved').each(function (i, item) {
            $(item).appendTo("#moved-box-"+$(item).data('id'));
            $("#moved-box-"+$(item).data('id')).find("h2, p").css('text-align', 'right');
          });
        }
      });

    });
  </script>
@endsection
