@extends('admin.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Update Berita</h1>
  </div>
</div>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form name="postForm" id="postForm" novalidate="" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Judul</label>
      <input type="text" class="form-control" placeholder="Title" name="title" id="title" required value="{{$news->title}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Isi Berita</label>
      <textarea rows="5" class="form-control editor" placeholder="Content of your news" id="content" name="content" required>{{$news->content}}</textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12"  name="img-form-container" id="img-form-container">
      <label>Gambar</label>
      <div class="row" name="img-form-1" id="img-form-1">
        <div class="col-xs-12">
          <img src="{{asset($news->image)}}" alt="" id="current_image" /> 
          <input type="text" id="feature_image" name="image" class="form-control" value="{{$news->image}}"/>
          <a href="" class="popup_selector" data-inputid="feature_image">Pilih</a>
          <a href="" onclick="deleteImgForm(1)">Hapus</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <button type="button" class="btn btn-default" id="add-img-btn" name="add-img-btn" onclick="addImgForm()">
        <span class="fa fa-plus"></span> Tambah
      </button>
    </div>
  </div>

  <div clas="row control-group">
    <div class="form-group col-xs-12">
      <label>Lokasi</label>
      <div class="row">
        <div class="col-xs-6">
          <input type="text" class="form-control" placeholder="Latitude" name="latitude" id="latitude" required value="{{$news->latitude}}">
        </div class="col-xs-6">
        <div class="col-xs-6">
          <input type="text" class="form-control" placeholder="Longitude" name="longitude" id="longitude" required value="{{$news->longitude}}">
        </div class="col-xs-6">
      </div>
    </div>
  </div>

  <div id="map" style="width:100%; height:400px"></div>

  <br>
  <div id="success"></div>
  <div class="row">
    <div class="form-group col-xs-12">
      <button type="submit" class="btn btn-default">Simpan</button> 
    </div>
  </div>
</form>

@stop

@section ('script')
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckeditor/adapters/jquery.js')}}"></script>

  <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
  <script src="{{asset('packages/barryvdh/elfinder/js/standalonepopup.js')}}"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB52sSHDcDbRehaBgmFiRx2E_j8L8qMsFY"></script>

  <script>

    // Map setup
    var latlng = new google.maps.LatLng(-6.9167, 107.6000);
    if ($("#latitude").val() != "" && $("#longitude").val() != ""){
      latlng = new google.maps.LatLng($("#latitude").val(), $("#longitude").val());
    }

    var mapOptions = {
      zoom: 11, // set the map zoom level
      center: latlng, // set the center region
      disableDefaultUI: true,
      zoomControl: true, // whether to show the zoom control beside
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    var marker = new google.maps.Marker({
      map: map, // refer to the map you've just initialise
      position: latlng, // set the marker position (is based on latitude & longitude)
      draggable: true // allow user to drag the marker
    });

    $("#longitude").val(marker.getPosition().lng());
    $("#latitude").val(marker.getPosition().lat());
    
    google.maps.event.addListener(marker, "dragend", function(event) {
      $("#longitude").val(marker.getPosition().lng());
      $("#latitude").val(marker.getPosition().lat());
    });

    var idxImg = 1;
    function addImgForm(){
      idxImg++;
      var newElement = '<div class="row" name="img-form-' + idxImg + '" id="img-form-' + idxImg + '"><div class="col-xs-12"><img src="" alt="" id="current_image" /><input type="text"  id="feature_image-' + idxImg + '' + idxImg + '" name="image" class="form-control" value=""/>&nbsp;<a href="" class="popup_selector" data-inputid="feature_image-' + idxImg + '">Pilih</a><a href="" onclick="deleteImgForm(' + idxImg + ')">Hapus</a></div></div>';
      $("#img-form-container").append(newElement);
    }

    function deleteImgForm(id){
      $("#img-form-" + id).remove();
    }

    $( document ).ready( function() {

      $( 'textarea.editor' ).ckeditor({
        filebrowserBrowseUrl : '{{url('/')}}/elfinder/ckeditor'
      });
      
    } );
  
    $(document).on('click','.popup_selector',function (event) {
      event.preventDefault();
      var updateID = $(this).attr('data-inputid'); // Btn id clicked
      var elfinderUrl = '{{url('/')}}/elfinder/popup/';

      // trigger the reveal modal with elfinder inside
      var triggerUrl = elfinderUrl + updateID;
      $.colorbox({
        href: triggerUrl,
        fastIframe: true,
        iframe: true,
        width: '70%',
        height: '80%'
      });

    });
    // function to update the file selected by elfinder
    function processSelectedFile(filePath, requestingField) {
      $('#' + requestingField).val(filePath);
      $('#current_image').attr('src', '{{url('/')}}/' + filePath);
    }

  </script>
@stop