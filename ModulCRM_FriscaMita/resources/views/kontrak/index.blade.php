@extends('master')
@section('judul','Data Kontrak Karyawan')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{ url('kontrak/create')}}"class="btn btn-primary">Tambah</a><hr/>
<table id="kontrak"  class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Jenis Pegawai</th>
            <th>Lama Kontrak</th>
            <th>Tanggal Bekerja</th>
            <th>Tanggal Pensiun</th>
            <th>NIP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kontrak as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->jenis_karyawan}}</td>
            <td>{{$value->lama_kontrak}}</td>
            <td>{{$value->tanggal_bekerja}}</td>
            <td>{{$value->tanggal_pensiun}}</td>
            <td>{{$value->id_karyawan}}</td>
            <td><a href="{{url('kontrak/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>| 
            <a href="{{url('kontrak/delete/'.$value->id)}}" class ="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    $("#data_kontrak").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
<script>
@endsection
