@extends('app')

@section('content')
<!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="padding">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita error earum deleniti laborum facere ipsa, magnam ipsum eum suscipit itaque pariatur, maxime quibusdam molestias, aliquam possimus sint numquam labore.
      <div class="container">
	      <div class="row">
	      	@foreach ($news as $item)
	      	<div class="col-md-4">
	      		<img class="img-news-header" src="{{asset('/img/spongebob.jpg')}}"></img>
	      		<div class="img-news-title">
	      			<h2> {{$item-id}}</h2>
	      		</div>
	      		<div class="img-news-date">
	      			<p> {{$item-date}}</p>
	      		</div>
	      		<div class="img-news-description">
	      			<p>{{$item-description}} <a>Selengkapnya </a></p>
	      		</div>
	      	</div>
	      	@endforeach
	      	<div class="col-md-4">
	      		<img class="img-news-header" src="{{asset('/img/spongebob.jpg')}}"></img>
	      		<div class="img-news-title">
	      			<h2> Buka Puasa Yuk Gan Huehue</h2>
	      		</div>
	      		<div class="img-news-date">
	      			<p>18 November 2015</p>
	      		</div>
	      		<div class="img-news-description">
	      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita error earum deleniti laborum facere ipsa, magnam ipsum eum suscipit itaque pariatur, maxime quibusdam molestias, aliquam possimus sint numquam labore.<a>Selengkapnya </a></p>
	      		</div>
	      	</div>
	      	<div class="col-md-4">
	      		<img class="img-news-header" src="{{asset('/img/spongebob.jpg')}}"></img>
	      		<div class="img-news-title">
	      			<h2> Buka Puasa Yuk Gan Huehue</h2>
	      		</div>
	      		<div class="img-news-date">
	      			<p>18 November 2015</p>
	      		</div>
	      		<div class="img-news-description">
	      			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur expedita error earum deleniti laborum facere ipsa, magnam ipsum eum suscipit itaque pariatur, maxime quibusdam molestias, aliquam possimus sint numquam labore.<a>Selengkapnya </a></p>
	      		</div>
	      	</div>
	      </div>
	   </div>
    </div>
  </div>
  
@endsection

@section('script')
  
@endsection