@extends ('admin.layout')

@section ('content')
<div class="row">
  <div class="col-md-6">
    <h3><i class="fa fa-angle-right"></i> Kanal </h3>
  </div>
  <div class="col-md-6">
    <a href="{{url('/admin/kanal/create')}}" class="btn btn-default pull-right" style="margin-top:20px"><i class="fa fa-plus"></i> Tambah Item</a>
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
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Instagram</th>
                    <th>Waktu</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                  <tr class="odd gradeX">
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset($item->image)}}" alt="" class="image-bulk"></td>
                    <td>
                      <b>{{$item->title}}</b><br>
                      <span class="label" style="background-color:{{$item->titlecolor}}">{{$item->category}}</span>
                    </td>
                    <td>{{str_limit($item->description, $limit = 100, $end = '...')}}</td>
                    <td><a href="http://www.instagram.com/{{$item->instagramAccount}}">{{$item->instagramAccount}}</a><br>
                     ({{$item->instagramId}})
                    </td>
                    <td>{{$item->timeStamp}}</td>
                    <td>
                      <a href="{{url('/admin/kanal/update/'.$item->id)}}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{url('/admin/kanal/delete/'.$item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <div class="pull-right pagination-custom">
          {!! $items->render() !!}
        </div>
    </div>
</div>

@stop
