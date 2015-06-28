@extends('app')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="padding">
      <div class="container">
        <div class="front-news-title">
          <h2> {{$pinnedNews->title}}</h2>
        </div>
        <div class="img-news-header-full">
          <img class="" src="{{asset('/img/spongebob.jpg')}}"></img>
        </div>
        <div class="front-news-more">
          <a>..See More..</a>
        </div>
        <div class="front-news-full">
          <p>{!!$pinnedNews->content!!} </p>
        </div>
      </div>
      <div class="container" >
        @foreach ($news as $i => $item)
        @if($i%2==0)
	      <div class="row">	
	      	<div class="col-md-3">
	      		<img class="img-news-header2" src="{{asset('/img/spongebob.jpg')}}"></img>
          </div>
          <div class="col-md-9">
	      		<div class="front-news-title2">
	      			<h2> {{$item->title}}</h2>
	      		</div>
	      		<div class="front-news-date2">
	      			<p> {{$item->timestamp}}</p>
	      		</div>
	      		<div class="front-news-description2">
	      			<p>{!!str_limit($item->content, $limit = 250, $end = '')!!} <a href="news/single/{{$item->id}}">..See More..</a></p>
	      		</div>
	      	</div>
	      </div>
        @else
        <div class="row">
          <div class="col-md-9">
            <div class="front-news-title2">
              <h2> {{$item->title}}</h2>
            </div>
            <div class="front-news-date2">
              <p> {{$item->timestamp}}</p>
            </div>
            <div class="front-news-description2">
              <p>{!!str_limit($item->content, $limit = 250, $end = '')!!} <a href="news/single/{{$item->id}}">..See More..</a></p>
            </div>
          </div>
          <div class="col-md-3">
            <img class="img-news-header2" src="{{asset('/img/spongebob.jpg')}}"></img>
          </div>
        </div>
        @endif
        @endforeach
	   </div>
    </div>
  </div>
  
@endsection

@section('script')
  
@endsection