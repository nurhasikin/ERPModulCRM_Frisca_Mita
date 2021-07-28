@extends('master')
@section('judul','Data Absensi Pegawai')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{ url('absensi/create')}}"class="btn btn-primary">Tambah</a><hr/>
<table id="absensi"  class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIP</th>
            <th>Tanggal</th>
            <th>Status Kehadiran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($absensi as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->id_karyawan}}</td>
            <td>{{$value->tanggal_absensi}}</td>
            <td>{{$value->status_kehadiran}}</td>
            <td><a href="{{url('absensi/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>| 
            <a href="{{url('absensi/delete/'.$value->id)}}" class ="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    $("#data_absensi").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
@endsection
