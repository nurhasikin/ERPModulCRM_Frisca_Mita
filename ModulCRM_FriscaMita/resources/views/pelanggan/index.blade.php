@extends('master')
@section('judul', 'Data Pelanggan')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('pelanggan/create')}}" class= "btn btn-primary">Tambah Pelanggan</a><hr/>
<table id="data_pelanggan" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>No Tlpn</th>
            <th>Tanggal Lahir</th>
            <th>Jejak Interaksi</th>
            <th>Segmentasi Pelanggan</th>
            <th>Perilaku Pelanggan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggan as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_pelanggan}}</td>
            <td>{{$value->no_tlpn}}</td>
            <td>{{$value->tgl_lahir}}</td>
            <td>{{$value->jejak_interaksi}}</td>
            <td>{{$value->segmentasi_pelanggan}}</td>
            <td>{{$value->perilaku_pelanggan}}</td>
            <td><a href="{{url('pelanggan/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                <a href="{{url('pelanggan/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
        </tbody> 
</table>
@endsection
@section('js')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#data_pelanggan").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection