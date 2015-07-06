@extends('admin.layout')

@section('content')

<h3><i class="fa fa-angle-right"></i> Buat/Perbarui Item Berita </h3>

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

<div class="form-panel">
  <h4 class="mb"><i class="fa fa-angle-right"></i>Item Berita</h4>
  <form name="postForm" id="postForm" novalidate="" method="post" class="form-horizontal style-form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Title" name="title" id="title" required value="{{$news->title}}">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Isi Berita</label>
          <div class="col-sm-10">
              <textarea rows="5" class="form-control editor" placeholder="Content of your news" id="content" name="content" required>{{$news->content}}</textarea>
              <p class="help-block text-danger"></p>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Gambar Utama</label>
          <div class="col-sm-10">
              <input type="text" id="feature_image" name="image" class="form-control" value="{{$news->image}}"/>
              <img style="padding-top:10px" src="{{asset($news->image)}}" alt="" id="current_image" height="150px" /> 
              <a href="" class="popup_selector" data-inputid="feature_image">Pilih</a>
          </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Gambar Tambahan</label>
        <div class="col-sm-10" name="img-form-container" id="img-form-container">
          <div class="row">
            <div class="col-xs-12">
              
              <input type="text" id="feature_image_1" name="images[]" class="form-control" value="{{@$news->images[0]->image}}"/>
              <img src="{{asset(@$news->images[0]->image)}}" alt="" id="current_image_1" style="padding-top:10px" height="150px" /> 
              <a href="" class="popup_selector" data-inputid="feature_image_1" data-imageid="current_image_1">Pilih</a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              
              <input type="text" id="feature_image_2" name="images[]" class="form-control" value="{{@$news->images[1]->image}}"/>
              <img src="{{asset(@$news->images[1]->image)}}" alt="" id="current_image_2" style="padding-top:10px" height="150px" /> 
              <a href="" class="popup_selector" data-inputid="feature_image_2" data-imageid="current_image_2">Pilih</a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              
              <input type="text" id="feature_image_3" name="images[]" class="form-control" value="{{@$news->images[2]->image}}"/>
              <img src="{{asset(@$news->images[2]->image)}}" alt="" id="current_image_3" style="padding-top:10px" height="150px" /> 
              <a href="" class="popup_selector" data-inputid="feature_image_3" data-imageid="current_image_3">Pilih</a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              
              <input type="text" id="feature_image_4" name="images[]" class="form-control" value="{{@$news->images[3]->image}}"/>
              <img src="{{asset(@$news->images[3]->image)}}" alt="" id="current_image_4" style="padding-top:10px" height="150px" /> 
              <a href="" class="popup_selector" data-inputid="feature_image_4" data-imageid="current_image_4">Pilih</a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="text" id="feature_image_5" name="images[]" class="form-control" value="{{@$news->images[4]->image}}"/>
              <img src="{{asset(@$news->images[4]->image)}}" alt="" id="current_image_5" style="padding-top:10px" height="150px" /> 
              <a href="" class="popup_selector" data-inputid="feature_image_5" data-imageid="current_image_5">Pilih</a>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
          <div class="col-xs-12 ">
           <button type="button" class="btn btn-default pull-right" id="add-img-btn" name="add-img-btn" onclick="addImgForm()">
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
        <div class="form-group">
          <div class="col-xs-12 ">
            <button type="submit" class="btn btn-theme pull-right">Simpan</button> 
        </div>
      </div>
  </form>
</div>

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
    
    var imageID = '';

    $(document).on('click','.popup_selector',function (event) {
      event.preventDefault();
      var updateID = $(this).attr('data-inputid'); // Btn id clicked
      imageID = $(this).attr('data-imageid'); 
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
      $('#' + imageID).attr('src', '{{url('/')}}/' + filePath);
    }

  </script>
@stop