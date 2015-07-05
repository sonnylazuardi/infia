@extends('admin.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Update Item Kanal</h1>
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
      <input type="text" class="form-control" placeholder="Title" name="title" id="title" required value="{{$item->title}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Kategori</label>
      <input type="text" class="form-control" placeholder="Kategori" name="category" id="category" required value="{{$item->category}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Deskripsi</label>
      <textarea rows="5" class="form-control editor" placeholder="Deskripsi Item Kanal" id="description" name="description" required>{{$item->description}}</textarea>
      <p class="help-block text-danger"></p>
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12"  name="img-form-container" id="img-form-container">
      <label>Gambar Utama</label>
      <div class="row">
        <div class="col-xs-12">
          <img src="{{asset($item->image)}}" alt="" id="current_image" /> 
          <input type="text" id="feature_image" name="image" class="form-control" value="{{$item->image}}"/>
          <a href="" class="popup_selector" data-inputid="feature_image">Pilih</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Akun Instagram</label>
      <input type="text" class="form-control" placeholder="Akun Instagram" name="instagramAccount" id="instagramAccount" required value="{{$item->instagramAccount}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>ID Instagram</label>
      <input type="text" class="form-control" placeholder="ID Instagram" name="instagramID" id="instagramID" required value="{{$item->instagramID}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Warna</label>
      <input type="text" class="form-control" placeholder="Warna" name="color" id="color" required value="{{$item->color}}">
    </div>
  </div>

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

@stop