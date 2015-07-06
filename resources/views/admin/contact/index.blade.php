@extends ('admin.layout')

@section ('content')

<div class="row">
  <div class="col-md-6">
    <h3><i class="fa fa-angle-right"></i> Kontak </h3>
  </div>
</div>
<div class="row"> 
    <div class="col-md-12 mt">
      <div class="content-panel">
            <table class="table table-hover">
            <h4><i class="fa fa-angle-right"></i> Item Kontak</h4>
            <hr>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $contact)
                  <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->timestamp}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                      <a href="{{url('/admin/kanal/delete/'.$contact->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop