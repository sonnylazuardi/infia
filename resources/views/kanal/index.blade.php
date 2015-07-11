@extends('kanal.layout')

@section('content')
    <div class="container-fluid kanal-container" id="desktop">
        <div class="kanal">
            @include('kanal.nav')
            <div class="kanal-content">
                <div class="kanal-box">
                    {{-- <div class="kanal-img-container"> --}}
                        <img class="kanal-img" src="{{asset('/files/kanal/kanal.png')}}" alt="" usemap="#Map"/>
                    {{-- </div> --}}
                    <map name="Map" id="Map">
                        <area shape="rect" style="background: #000" id="infia_automotive" coords="331, 334, 414, 385" href="{{url('/kanal/category/information#infia_automotive')}}"/>
                        <area shape="rect" coords="225, 269, 330, 343" href="{{url('/kanal/category/information#infia_tech')}}"/>
                        <area shape="rect" coords="1531,480,1421,560,1481,646,1616,661,1679,549" href="{{url('/kanal/category/entertainment#dagelan')}}"/>
                        <area shape="rect" coords="267, 336, 327, 380" href="{{url('/kanal/category/information#infia_entrepreneur')}}"/>
                        <area shape="rect" coords="817,833,817,917,915,918,920,824" href="{{url('/kanal/category/information#infia_fact')}}"/>
                        <area shape="rect" coords="242, 381, 293, 424" href="{{url('/kanal/category/information#infia_health')}}"/>
                        <area shape="rect" coords="1168,617,1152,735,1245,754,1277,642" href="{{url('/kanal/category/entertainment#komik_dagelan')}}"/>
                        <area shape="rect" coords="1068,436,1069,533,1168,526,1175,432" href="{{url('/kanal/category/e-commerce#infia_market')}}"/>
                        <area shape="rect" coords="1362,612,1359,717,1455,712,1448,629,1427,614" href="{{url('/kanal/category/entertainment#ramalandagelan')}}"/>
                        <area shape="rect" coords="1801,485,1812,585,1971,585,1948,492" href="{{url('/kanal/category/entertainment#sahabatdagelan')}}"/>
                        <area shape="rect" coords="750,958,748,1055,866,1057,880,949" href="{{url('/kanal/category/information#infia_showbiz')}}"/>
                    </map>
                    <div id="pointer"></div>
                </div>
            </div>
        </div>
    </div>
    

@endsection

@section('mobile')

    <div class="page-content-wrapper" id="mobile">
        <div class="mobile__item-list">
            @foreach ($items as $item)
                <div class="mobile__item">
                    <div class="row">
                        <div class="col-xs-3 text-right">
                            <div class="mobile__icon">
                                <img src="{{asset($item->icon)}}" alt="">
                            </div>        
                        </div>
                        <div class="col-xs-9 mobile__padding">
                            <div class="mobile__account">
                                {!!'@'.$item->instagramAccount!!}
                            </div>
                            <div class="mobile__description">
                                {{$item->description}}
                            </div> 
                            <div class="mobile__instagram">
                                <a href="https://instagram.com/{{$item->instagramAccount}}">
                                    <i class="fa fa-instagram"></i> To Instagram 
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('script')

<script src="{{asset('js/jquery.rwdImageMaps.min.js')}}"></script>
<script src="{{asset('js/enquire.min.js')}}"></script>
<script>
    $(document).ready(function() {

        $('img[usemap]').rwdImageMaps();
        $('area').hover(function() {

            console.log($(this));
            var coords = $(this).context.coords;
            var coord = coords.split(',');
            var _x = parseInt(coord[0]) + parseInt(coord[2]) / 2;
            var _y = parseInt(coord[1]) + parseInt(coord[3]) / 2;
            _x = (_x - 30) / 1.5;
            _y = (_y - 30) / 1.5;

            $('#pointer').css({left: _x + 'px', top: _y + 'px'});
        });

        enquire.register("screen and (min-width: 1025px)", {
            match : function() {
                $('#mobile').hide();
                $('#desktop').show();
            }
        });


        enquire.register("screen and (max-width: 1024px) and (min-width: 451px)", {
            match : function() {
                $('#desktop').hide();
                $('#mobile').show();
                $('#mobile').removeClass('tablet');
            }
        });

        enquire.register("screen and (max-width: 450px)", {
            match : function() {
                $('#desktop').hide();
                $('#mobile').show();
                $('#mobile').addClass('tablet');
            }
        });
    });
</script>

@endsection