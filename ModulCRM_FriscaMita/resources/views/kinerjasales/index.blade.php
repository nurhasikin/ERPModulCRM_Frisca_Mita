@extends('master')
@section('judul', 'Data Kinerja Sales')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<a href="{{url('kinerjasales/create')}}" class= "btn btn-primary">Tambah Kinerja Sales</a><hr/>
<table id="data_kinerjasales" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Sales</th>
            <th>Status Kinerja</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kinerjasales as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_sales}}</td>
            <td>{{$value->status_kinerja}}</td>
            <td><a href="{{url('kinerjasales/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                <a href="{{url('kinerjasales/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
    $("#data_kinerjasales").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection