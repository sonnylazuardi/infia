@extends ('admin.layout')

@section ('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Admins</h1>
      <a href="{{url('/admin/user/create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Admin</a>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($users as $user)
                <tr class="odd gradeX">
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td class="center">
                    <a href="{{url('/admin/user/update/'.$user->id)}}" class="btn btn-default">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-default" onclick="return confirm('Yakin akan menghapus item ini?');">
                      <i class="fa fa-remove"></i>
                    </a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->

@stop