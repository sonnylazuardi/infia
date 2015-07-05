@extends('app')

@section('content')
    {{-- <div class="container-fluid kanal-container"> --}}
        <div class="row kanal">
            <div class="col-lg-2 col-md-3 col-sm-4 kanal-left">
                @include('kanal.nav')
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 kanal-content">
                <div style="background:url('{{asset('/files/kanal/kanal.png')}}') no-repeat center; background-size:cover" class="kanal-img">
                    
                </div>
            </div>
        </div>
    </div>
    

@endsection

@section('script')

@endsection