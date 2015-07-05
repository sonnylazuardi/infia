@extends('app')

@section('content')
    {{-- <div class="container-fluid kanal-container"> --}}
        <div class="row kanal">
            <div class="col-lg-2 col-md-3 col-sm-4 kanal-left">
                @include('kanal.nav')
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 kanal-content">
            	@foreach ($items as $i => $item)
            		<div class="kanal-single">
		                <div style="background:url('{{asset($item->image)}}') no-repeat center; background-size:cover" class="kanal-single-image">
		                </div>
		                <div class="kanal-single-content">
		                	<div class="container container-small">
		                		<h2 id="{{$item->slug}}-target" class="kanal-single-title">{{$item->title}}</h2>
		                	</div>
		                	<div style="display:none" class="container" show-target="{{$item->slug}}-target" status="hidden">
			                	<p>{{$item->description}}</p>
	                        	<div id="{{$item->slug}}"></div>
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
    		
    		var status =  $("[show-target='" + event.target.id + "']").attr("status");
    		if (status == "hidden"){
    			$("[show-target='" + event.target.id + "']").show();
    			$("[show-target='" + event.target.id + "']").attr("status","visible");
    		}
    		else {
    			$("[show-target='" + event.target.id + "']").hide();
    			$("[show-target='" + event.target.id + "']").attr("status","hidden");
    		}
		});
    </script>

    @include('kanal.instafeed')
  
@endsection