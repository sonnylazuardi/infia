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
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Instagram</th>
                    <th>Waktu</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                  <tr class="odd gradeX">
                    <td>{{$item->id}}</td>
                    <td>
                      <h5>{{$item->title}}</h5>
                      <h6><b>{{$item->category}}</b></h6>
                    </td>
                    <td>{{str_limit($item->description, $limit = 100, $end = '...')}}</td>
                    <td><img src="{{asset($item->image)}}" alt="" class="image-bulk"></td>
                    <td>{{$item->instagramAccount}} ({{$item->instagramId}})</td>
                    <td>{{$item->timeStamp}}</td>
                    <td>
                      <a href="{{url('/admin/kanal/update/'.$item->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{url('/admin/kanal/delete/'.$item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop