@extends('master')
@section('judul','Data Training')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{ url('training/create')}}"class="btn btn-primary">Tambah</a><hr/>
<table id="training"  class="table table-bordered table-striped">
    <thead>
        <tr>
            
            <th>ID</th>
            <th>Tanggal</th>
            <th>Tempat</th>
            <th>NIP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($training as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->tanggal}}</td>
            <td>{{$value->tempat}}</td>
            <td>{{$value->id_karyawan}}</td>
            <td><a href="{{url('training/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>| 
            <a href="{{url('training/delete/'.$value->id)}}" class ="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
        </tbody>
       
</table>
</body>
@endsection
@section('js')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script>
  $(function () {
    $("#data_training").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
@endsection
