@extends('app')

@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">
  <div class="padding">
    <div class="row">
      <div class="col-md-5">
        <div class="box">
          <h1>Contact</h1>

          <p>Silakan tinggalkan pesan untuk kami. Kami akan membaca dan membalas pesan anda :)</p>

          <div class="info">
            <div>
              <i class="fa fa-envelope"></i> hello@infia.co
            </div>
            <div>
              <i class="fa fa-phone"></i> 021 - 29305285
            </div>
            <div>
              <i class="fa fa-instagram"></i> instagram.com/infia.co
            </div>
          </div>

          <p>Atau mengisi formulir dibawah ini</p>

          
          @if (Session::has('alert'))
            <div class="alert alert-success">  
              {{Session::get('alert')}}
            </div>
          @endif
          

          <form method="post" id="contact">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
              <input type="text" class="form-control" placeholder="Nama" name="name">
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div>
              <input type="text" class="form-control" placeholder="Subjek" name="subject">
            </div>
            <div>
              <textarea name="message" id="" rows="5" class="form-control" placeholder="Pesan Anda"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-default">Send</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="map">
          <div id="map"></div>
        </div>
        <div class="address">
          PT INFIA MEDIA PRATAMA 
          <br>Level 5, Suite 501-504 Tower B, Beltway Office Park, Jl. Letjen TB Simatupang no 41 Jakarta 12550
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script src="{{asset('js/gmaps.js')}}"></script>
<script>
$(document).ready(function() {
  var map = new GMaps({
    el: '#map',
    lat: -6.29143,
    lng: 106.817562
  });
  map.addMarker({
    lat: -6.29143,
    lng: 106.817562,
    title: 'Infia'
  })
});
</script>

@endsection
