@extends('admin.layout')

@section('content')

<h3><i class="fa fa-angle-right"></i> Buat/Perbarui Admin </h3>

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
          <label class="col-sm-2 col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" required value="{{$user->name}}">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="email" required value="{{$user->email}}">
          </div>
      </div>

        @if ($scenario == 'create')
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" required value="">
            </div>
          </div>
        @endif

      <div id="success"></div>
        <div class="form-group">
          <div class="col-xs-12 ">
            <button type="submit" class="btn btn-theme pull-right">Simpan</button> 
        </div>
      </div>
  </form>
</div>

@stop