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
      <div class="container">
	      <div class="row">
	      	@foreach ($news as $item)
	      	<div class="col-md-4">
	      		<img class="img-news-header" src="{{asset('/img/spongebob.jpg')}}"></img>
	      		<div class="front-news-title">
	      			<h2> {{$item->title}}</h2>
	      		</div>
	      		<div class="front-news-date">
	      			<p> {{$item->timestamp}}</p>
	      		</div>
	      		<div class="front-news-description">
	      			<p>{!!str_limit($item->content, $limit = 250, $end = '')!!} <a href="news/single/{{$item->id}}">..See More..</a></p>
	      		</div>
	      	</div>
	      	@endforeach
	      </div>
	   </div>
    </div>
  </div>
  
@endsection

@section('script')
  
@endsection