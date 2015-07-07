@extends('admin.layout')

@section('content')

<h3><i class="fa fa-angle-right"></i> Buat/Perbarui Item Kanal </h3>

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
  <h4 class="mb"><i class="fa fa-angle-right"></i>Item Kanal</h4>
  <form name="postForm" id="postForm" novalidate="" method="post" class="form-horizontal style-form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Title" name="title" id="title" required value="{{$item->title}}">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Kategori" name="category" id="category" required value="{{$item->category}}">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
          <div class="col-sm-10">
              <textarea rows="5" class="form-control editor" placeholder="Deskripsi Item Kanal" id="description" name="description" required>{{$item->description}}</textarea>
              <p class="help-block text-danger"></p>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
          <div class="col-sm-10">
              <input type="text" id="feature_image" name="image" class="form-control" value="{{$item->image}}"/>
              @if (!str_is(@$item->image,""))
              <img style="padding-top:10px"  src="{{asset($item->image)}}" alt="" id="current_image" height="150px"/>
              @endif
              <a href="" class="popup_selector" data-inputid="feature_image">Pilih</a>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Akun Instagram</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Akun Instagram" name="instagramAccount" id="instagramAccount" required value="{{$item->instagramAccount}}">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">ID Instagram</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="ID Instagram" name="instagramId" id="instagramId" required value="{{$item->instagramId}}">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Warna</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Warna" name="color" id="color" required value="{{$item->color}}">
          </div>
      </div>

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

@stop