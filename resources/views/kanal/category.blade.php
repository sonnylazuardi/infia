@extends('kanal.layout')

@section('content')
    {{-- <div class="container-fluid kanal-container"> --}}
        <div class="kanal">
            @include('kanal.nav')
            <div class="kanal-content">
            	@foreach ($items as $i => $item)
            		<div class="kanal-single" id="{{$item->instagramAccount}}">
		                <div style="background:url('{{asset($item->image)}}') no-repeat ; background-size:cover; background-position: bottom right" class="kanal-single-image">
		                </div>
		                <div style="background-color:{{$item->color}}" class="kanal-single-content">
		                	<div class="container container-kanal container-small">
		                		<h2 style="color:{{$item->titlecolor}}" id="instagram-{{$item->id}}-target" class="kanal-single-title">{{$item->title}}</h2> <i class="fa fa-chevron-down"></i>
		                	</div>
		                	<div style="display:none" class="container container-kanal" show-target="instagram-{{$item->id}}-target" instagram-id="{{$item->instagramId}}">
			                	<p>{{$item->description}}</p>
	                        	<div class="kanal-instagram" id="instagram-{{$item->instagramId}}"></div>
                                <a class="btn btn-warning btn-kanal" href="https://instagram.com/{{$item->instagramAccount}}"><i class="fa fa-instagram"></i> &#64;{{$item->instagramAccount}} </a>
                        	</div>
		                </div>
	                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection

@section('script')

    <script src="{{asset('js/instafeed.min.js')}}"></script>

    <script>
    	$(".kanal-single-title").click(function(){
    		$("[show-target='" + event.target.id + "']").slideToggle('slow');
            var id = $("[show-target='" + event.target.id + "']").attr("instagram-id");
            showInstagram(parseInt(id));
		});
    </script>

    @include('kanal.instafeed')

@endsection
