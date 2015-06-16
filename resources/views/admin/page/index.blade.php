@extends ('admin.layout')

@section ('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Halaman Statis</h1>
      <a href="{{url('/admin/page/create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Halaman</a>
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
                  <th>Konten</th>
                  <th>Waktu Pembuatan</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($page as $page_item)
                <tr class="odd gradeX">
                  <td>{{$page_item->title}}</td>
                  <td>{{$page_item->content}}</td>
                  <td>{{$page_item->timestamp}}</td>
                  <td class="center">
                    <a href="{{url('/admin/page/update/'.$page_item->id)}}" class="btn btn-default">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="{{url('/admin/page/delete/'.$page_item->id)}}" class="btn btn-default" onclick="return confirm('Yakin akan menghapus item ini?');">
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