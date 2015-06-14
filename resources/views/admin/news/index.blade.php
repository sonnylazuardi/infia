@extends ('admin.layout')

@section ('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Berita</h1>
      <a href="{{url('/admin/news/create')}}" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Berita</a>
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
                  <th>Waktu</th>
                  <th>Gambar</th>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($news as $news_item)
                <tr class="odd gradeX">
                  <td>{{$news_item->title}}</td>
                  <td>{{$news_item->timestamp}}</td>
                  <td><img src="{{asset($news_item->image)}}" alt="" class="image-bulk"></td>
                  <td class="center">
                    <a href="{{url('/admin/news/update/'.$news_item->id)}}" class="btn btn-default">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="{{url('/admin/news/delete/'.$news_item->id)}}" class="btn btn-default" onclick="return confirm('Yakin akan menghapus item ini?');">
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