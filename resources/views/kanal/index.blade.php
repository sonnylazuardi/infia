@extends('app')

@section('content')
    {{-- <div class="container-fluid kanal-container"> --}}
        <div class="kanal">
            @include('kanal.nav')
            <div class="kanal-content">
                {{-- <img src="{{asset('/files/kanal/kanal.png')}}" width="100vh">
                </img> --}}
                {{-- <div style="background:url('{{asset('/files/kanal/kanal.png')}}') no-repeat center; background-size:cover" class="kanal-img">
                    
                </div> --}}
                <div class="kanal-img-container">
                    <img class="kanal-img" src="{{asset('/files/kanal/kanal.png')}}" alt="" usemap="#Map"/>
                </div>
                <map name="Map" id="Map">
                    <area alt="" title="" shape="poly" coords="917,595,916,683,1061,685,1062,594" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="1531,480,1421,560,1481,646,1616,661,1679,549" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="656,830,656,918,781,919,790,822" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="817,833,817,917,915,918,920,824" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="602,928,601,1017,700,1017,714,939,645,927" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="1168,617,1152,735,1245,754,1277,642" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="1068,436,1069,533,1168,526,1175,432" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="1362,612,1359,717,1455,712,1448,629,1427,614" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="1801,485,1812,585,1971,585,1948,492" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="750,958,748,1055,866,1057,880,949" href="category/information"/>
                    <area alt="" title="" shape="poly" coords="588,671,581,792,753,799,763,664" href="category/information"/>
                </map>
            </div>
        </div>
    </div>
    

@endsection

@section('script')

<script src="{{asset('js/imageMapResizer.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('map').imageMapResize();
    });
</script>

@endsection