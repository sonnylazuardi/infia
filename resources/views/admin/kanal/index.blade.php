@extends ('admin.layout')

@section ('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Kanal</h1>
      <a href="{{url('/admin/kanal/create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Item</a>
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
                  <th>Judul</th>
                  <th>Deskripsi</th>                  
                  <th>Gambar</th>
                  <th>Waktu</th>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($items as $item)
                <tr class="odd gradeX">
                  <td>{{$item->title}}</td>
                  <td>{{str_limit($item->description, $limit = 100, $end = '...')}}</td>
                  <td><img src="{{asset($item->image)}}" alt="" class="image-bulk"></td>
                  <td>{{$item->timestamp}}</td>
                  <td class="center">
                    <a href="{{url('/admin/kanal/update/'.$item->id)}}" class="btn btn-default">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="{{url('/admin/kanal/delete/'.$item->id)}}" class="btn btn-default" onclick="return confirm('Yakin akan menghapus item ini?');">
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