@extends('admin.layout')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Update Admin</h1>
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
      <label>Name</label>
      <input type="text" class="form-control" name="name" id="name" required value="{{$user->name}}">
    </div>
  </div>

  <div class="row control-group">
    <div class="form-group col-xs-12">
      <label>Email</label>
      <input type="email" class="form-control" name="email" id="email" required value="{{$user->email}}">
    </div>
  </div>

  @if ($scenario == 'create')
    
    <div class="row control-group">
      <div class="form-group col-xs-12">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" required value="">
      </div>
    </div>

  @endif

  <br>
  <div id="success"></div>
  <div class="row">
    <div class="form-group col-xs-12">
      <button type="submit" class="btn btn-default">Simpan</button> 
    </div>
  </div>
</form>

@stop