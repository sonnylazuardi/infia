@extends ('admin.layout')

@section ('content')

<div class="row">
  <div class="col-md-6">
    <h3><i class="fa fa-angle-right"></i> Berita </h3>
  </div>
  <div class="col-md-6">
    <a href="{{url('/admin/news/create')}}" class="btn btn-default pull-right" style="margin-top:20px"><i class="fa fa-plus"></i> Tambah Berita</a>
  </div>
</div>

<div class="row"> 
    <div class="col-md-12 mt">
      <div class="content-panel">
            <table class="table table-hover">
            <h4><i class="fa fa-angle-right"></i> Item Kanal</h4>
            <hr>
                <thead>
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Konten</th>
                  <th>Gambar</th>
                  <th>Waktu</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($news as $news_item)
                <tr class="odd gradeX">
                  <td>{{$news_item->id}}</td>
                  <td>{{$news_item->title}}</td>
                  <td>{{str_limit($news_item->content, $limit = 100, $end = '...')}}</td>
                  <td><img src="{{asset($news_item->image)}}" alt="" class="image-bulk"></td>
                  <td>{{$news_item->timestamp}}</td>
                  <td>
                    <a href="{{url('/admin/news/update/'.$news_item->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('/admin/news/delete/'.$news_item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
        </div>
    </div>
</div>

@stop