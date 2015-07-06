@extends('admin.layout')

@section('content')

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
  <h4 class="mb"><i class="fa fa-angle-right"></i>About Settings</h4>
  <form name="postForm" id="postForm" novalidate="" method="post" class="form-horizontal style-form">
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Home Picture</label>
          <div class="col-sm-10">
              <input type="text" id="feature_image_1" name="home_picture" class="form-control" value="{{@$home_picture->value}}"/>
              <img src="{{asset(@$home_picture->value)}}" alt="" id="current_image_1" height="150px"/> 
              <a href="" class="popup_selector" data-inputid="feature_image_1" data-imageid="current_image_1">Pilih Gambar</a>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Home Maskot</label>
          <div class="col-sm-10">
              <input type="text" id="feature_image_1" name="home_maskot" class="form-control" value="{{@$home_maskot->value}}"/>
              <img src="{{asset(@$home_maskot->value)}}" alt="" id="current_image_1" /> 
              <a href="" class="popup_selector" data-inputid="feature_image_1" data-imageid="current_image_1">Pilih Gambar</a>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">History</label>
          <div class="col-sm-10">
              <textarea rows="5" class="form-control editor" placeholder="Content of your news" id="content" name="history" required>{{@$history->text}}</textarea>
              <p class="help-block text-danger"></p>
          </div>
      </div>

      <div id="success"></div>
        <div class="form-group">
          <div class="col-xs-12 ">
            <button type="submit" class="btn btn-default pull-right">Simpan</button> 
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

  <script>

    $( document ).ready( function() {

      $( 'textarea.editor' ).ckeditor({
        filebrowserBrowseUrl : '{{url('/')}}/elfinder/ckeditor'
      });
      
    } );

    var imageID = '';
  
    $(document).on('click','.popup_selector',function (event) {
      event.preventDefault();
      var updateID = $(this).attr('data-inputid'); // Btn id clicked
      var elfinderUrl = '{{url('/')}}/elfinder/popup/';
      imageID = $(this).attr('data-imageid'); // Btn id clicked

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
      filePath = filePath.replace(/\\/g, '/');
      $('#' + requestingField).val(filePath);
      $('#' + imageID).attr('src', '{{url('/')}}/' + filePath);
    }

  </script>
@stop