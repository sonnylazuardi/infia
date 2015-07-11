@extends ('admin.layout')

@section ('content')

<div class="row">
  <div class="col-md-6">
    <h3><i class="fa fa-angle-right"></i> Admin </h3>
  </div>
  <div class="col-md-6">
    <a href="{{url('/admin/user/create')}}" class="btn btn-default pull-right" style="margin-top:20px"><i class="fa fa-plus"></i>Tambah Admin</a>
  </div>
</div>

<div class="row"> 
    <div class="col-md-12 mt">
      <div class="content-panel">
            <table class="table table-hover">
            <h4><i class="fa fa-angle-right"></i> Item Admin</h4>
            <hr>
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    <a href="{{url('/admin/user/update/'.$user->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
        </div>
        <div class="pull-right pagination-custom">
          {!! $users->render() !!}
        </div>
    </div>
</div>

@stop