@extends ('master')
@section ('judul','Data Promo')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section ('content')
<a href="{{url('promo/create')}}" class="btn btn-primary">Tambah Data</a><hr/>
<table id="data_promo" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Promo</th>
            <th>Diskon Promo</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($promo as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->nama_promo}}</td>
            <td>{{$value->diskon_promo}}</td>
            <td><a href="{{url('promo/'.$value->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
              <a href="{{url('promo/delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </td>
        </tr>
        @endforeach
        </tbody>
       
</table>
@endsection
@section('js')
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $("#data_promo").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection