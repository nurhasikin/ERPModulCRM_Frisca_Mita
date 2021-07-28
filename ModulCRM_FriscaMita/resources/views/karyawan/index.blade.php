@extends('master')
@section('judul','Data Karyawan')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{ url('karyawan/create')}}"class="btn btn-primary">Tambah</a><hr/>
<table id="karyawan"  class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($karyawan as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->id}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->alamat}}</td>
            <td>{{$value->no_hp}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->jabatan}}</td>
            <td><a href="{{url('karyawan/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>| 
            <a href="{{url('karyawan/delete/'.$value->id)}}" class ="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    $("#data_karyawan").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
@endsection
