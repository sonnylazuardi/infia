@extends('admin.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="portfolio-header">Update Portfolio</h1>
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
      <input type="text" class="form-control" placeholder="Title" name="title" id="title" required value="{{$portfolio->title}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Konten Portfolio</label>
      <textarea rows="5" class="form-control editor" placeholder="Content of your news" id="content" name="content" required>{{$portfolio->content}}</textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>

  <br>
  <div id="success"></div>
  <div class="row">
    <div class="form-group col-xs-12">
      <button type="submit" class="btn btn-theme">Simpan</button> 
    </div>
  </div>
</form>

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