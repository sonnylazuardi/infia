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
            <h4><i class="fa fa-angle-right"></i> Pinned</h4>
            <hr>
                <thead>
                <tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Konten</th>
                  <th>Waktu</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @if(isset($pinnedNews->id))
                  <td>{{$pinnedNews->id}}</td>
                  <td><img src="{{asset($pinnedNews->image)}}" alt="" class="image-bulk"></td>
                  <td>
                    <b>{{$pinnedNews->title}}</b>
                    @if($pinnedNews->pinned == 1)
                      <br>
                      <span class="label label-info">Pinned</span>
                    @endif
                  </td>
                  <td>{{str_limit($pinnedNews->content, $limit = 100, $end = '...')}}</td>
                  <td>{{$pinnedNews->timestamp}}</td>
                  <td class="pull-right">
                    <a href="{{url('/admin/news/update/'.$pinnedNews->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('/admin/news/delete/'.$pinnedNews->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
                @endif
              </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row"> 
    <div class="col-md-12 mt">
      <div class="content-panel">
            <table class="table table-hover">
            <h4><i class="fa fa-angle-right"></i> Item Berita</h4>
            <hr>
                <thead>
                <tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Konten</th>
                  <th>Waktu</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($news as $news_item)
                <tr>
                  <td>{{$news_item->id}}</td>
                  <td><img src="{{asset($news_item->image)}}" alt="" class="image-bulk"></td>
                  <td>
                    <b>{{$news_item->title}}</b>
                    @if($news_item->pinned == 1)
                      <br>
                      <span class="label label-info">Pinned</span>
                    @endif
                  </td>
                  <td>{{str_limit($news_item->content, $limit = 100, $end = '...')}}</td>
                  <td>{{$news_item->timestamp}}</td>
                  <td class="pull-right">
                    <a href="{{url('/admin/news/update/'.$news_item->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('/admin/news/delete/'.$news_item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
            
        </div>
        <div class="pull-right pagination-custom">
          {!! $news->render() !!}
        </div>
    </div>
</div>

@stop