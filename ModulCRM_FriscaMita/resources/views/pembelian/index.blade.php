@extends('master')
@section('judul', 'Data Penjualan')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('pembelian/create')}}" class= "btn btn-primary">Tambah Pembelian</a><hr/>
<table id="data_pembelian" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal Transaksi</th>
            <th>Jenis Unit</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pembelian as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_pelanggan}}</td>
            <td>{{$value->tgl_transaksi}}</td>
            <td>{{$value->jenis_unit}}</td>
            <td>{{$value->status}}</td>
            <td><a href="{{url('pembelian/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                <a href="{{url('pembelian/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    $("#data_pembelian").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection