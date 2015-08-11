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
                        <area shape="rect" coords="331, 334, 414, 385" href="{{url('/kanal/category/information#infia_fact')}}"/>
                        <area shape="rect" coords="225, 269, 330, 343" href="{{url('/kanal/category/information#infia_tech')}}"/>
                        <area shape="rect" coords="606, 211, 670, 261" href="{{url('/kanal/category/entertainment#dagelan')}}"/>
                        <area shape="rect" coords="267, 336, 327, 380" href="{{url('/kanal/category/information#infia_entrepreneur')}}"/>
                        <area shape="rect" coords="396, 417, 462, 463" href="{{url('/kanal/category/information#infia_automotive')}}"/>
                        <area shape="rect" coords="242, 381, 293, 424" href="{{url('/kanal/category/information#infia_health')}}"/>
                        <area shape="rect" coords="478, 257, 528, 309" href="{{url('/kanal/category/entertainment#komik_dagelan')}}"/>
                        <area shape="rect" coords="664, 384, 708, 427" href="{{url('/kanal/category/partner#rahasiagadis')}}" />
                        <area shape="rect" coords="620, 386, 663, 431" href="{{url('/kanal/category/partner#dailymanly')}}" />
                        <area shape="rect" coords="664, 430, 701, 472" href="{{url('/kanal/category/partner#bolagila')}}" />
                        <area shape="rect" coords="565, 187, 613, 228" href="{{url('/kanal/category/entertainment#dagelantv')}}" />
                        <area shape="rect" coords="730, 427, 779, 486" href="{{url('/kanal/category/entertainment#komikin_ajah')}}"/>
                        <area shape="rect" coords="1068,436,1069,533,1168,526,1175,432" href="{{url('/kanal/category/e-commerce#infia_market')}}"/>
                        <area shape="rect" coords="309, 198, 358, 244" href="{{url('/kanal/category/e-commerce#do-dolan')}}"/>
                        <area shape="rect" coords="381, 245, 435, 284" href="{{url('/kanal/category/e-commerce#infia_automarket')}}"/>
                        <area shape="rect" coords="436, 177, 494, 221" href="{{url('/kanal/category/e-commerce#infia_market')}}"/>
                        <area shape="rect" coords="554, 249, 601, 297" href="{{url('/kanal/category/entertainment#ramalandagelan')}}"/>
                        <area shape="rect" coords="746, 198, 807, 239" href="{{url('/kanal/category/entertainment#sahabatdagelan')}}"/>
                        <area shape="rect" coords="302, 389, 355, 435" href="{{url('/kanal/category/information#infia_showbiz')}}"/>
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
            _x = (_x - 30) / 1.515;
            _y = (_y - 30) / 1.515;

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