@extends('app')

@section('content')

    <div style="background:url('{{asset('/img/kanal.png')}}') no-repeat center; background-size:cover" class="kanal">

    <div class="instagrams">
        <h1>Informasi</h1>
        <div>#infia-fact</div>
        <div id="infia-fact"></div>
        <div>#infia-health</div>
        <div id="infia-health"></div>
        <div>#infia-showbiz</div>
        <div id="infia-showbiz"></div>
        <div>#infia-entrepreneur</div>
        <div id="infia-entrepreneur"></div>
        <div>#infia-tech</div>
        <div id="infia-tech"></div>
        <div>#infia-automotive</div>
        <div id="infia-automotive"></div>
        <h1>Entertainment</h1>
        <div>#dagelan</div>
        <div id="dagelan"></div>
        <div>#dagelantv</div>
        <div id="dagelantv"></div>
        <div>#ramalandagelan</div>
        <div id="ramalandagelan"></div>
        <div>#komikin-ajah</div>
        <div id="komikin-ajah"></div>
        <div>#komik-dagelan</div>
        <div id="komik-dagelan"></div>
        <div>#sahabatdagelan</div>
        <div id="sahabatdagelan"></div>
        <h1>E-Commerce</h1>
        <div>#do-dolan</div>
        <div id="do-dolan"></div>
        <div>#infia-automarket</div>
        <div id="infia-automarket"></div>
        <div>#infia-market</div>
        <div id="infia-market"></div>
        <h1>Partner</h1>
        <div>#dailymanly</div>
        <div id="dailymanly"></div>
        <div>#rahasiagadis</div>
        <div id="rahasiagadis"></div>
        <div>#yang-terdalam</div>
        <div id="yang-terdalam"></div>
        <div>#bolagila</div>
        <div id="bolagila"></div>
    </div>

@endsection

@section('script')

    <script src="{{asset('js/instafeed.min.js')}}"></script>

    @include('kanal.instafeed')
  
@endsection