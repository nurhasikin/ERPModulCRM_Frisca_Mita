@extends('master')
@section('judul', 'Data Invoice')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('invoice/create')}}" class= "btn btn-primary">Tambah Invoice</a><hr/>
<table id="data_invoice" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Invoice</th>
            <th>Tanggal Invoice</th>
            <th>Jenis Pembayaran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($invoice as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_invoice}}</td>
            <td>{{$value->tgl_invoice}}</td>
            <td>{{$value->jenis_pembayaran}}</td>
            <td>{{$value->status}}</td>
            <td><a href="{{url('invoice/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                <a href="{{url('invoice/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
    $("#data_invoice").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection