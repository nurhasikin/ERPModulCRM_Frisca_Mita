@extends('master')
@section('judul', 'Data Order')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('order/create')}}" class= "btn btn-primary">Tambah Order</a><hr/>
<table id="data_order" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>No.</th>
          <th>Nama Sales</th>
          <th>Deskripsi </th>
          <th>Tgl Order</th>
          <th>Diskon Order</th>
          <th>Jenis Pembayaran</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_sales}}</td>
            <td>{{$value->deskriptiom}}</td>
            <td>{{$value->tgl_order}}</td>
            <td>{{$value->diskon_invoice}}</td>
            <td>{{$value->jenis_pembayaran}}</td>
            <td>{{$value->harga}}</td>
            <td><a href="{{url('order/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                <a href="{{url('order/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              </td>
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
    $("#data_order").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection