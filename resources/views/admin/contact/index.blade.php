@extends ('admin.layout')

@section ('content')

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Kontak</h1>
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
                  <th>Subjek</th>
                  <th>Waktu</th>
                  <th>Email</th>
                  <th>Pesan</th>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($contacts as $contact)
                <tr class="odd gradeX">
                  <td>{{$contact->name}}</td>
                  <td>{{$contact->subject}}</td>
                  <td>{{$contact->timestamp}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->message}}</td>
                  <td class="center">
                    <a href="{{url('/admin/contact/delete/'.$contact->id)}}" class="btn btn-default" onclick="return confirm('Yakin akan menghapus item ini?');">
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