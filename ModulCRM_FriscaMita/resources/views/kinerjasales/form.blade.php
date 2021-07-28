@extends('master')
@section('judul', 'Form Kinerja Sales')
@section('content')
<form role="form" action="{{($action!='kinerjasales.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}  
    <input type="hidden" name=id value="{{($action!='kinerjasales.store') ? $kinerjasales->id : '' }}">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Sales</label>
                    <input type="text" class="form-control" name ="nama_sales"  value="{{ ($action!='kinerjasales.store') ? $kinerjasales->nama_sales : '' }}" placeholder="Nama Sales">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status Kinerja</label>
                    <input type="text" class="form-control" name="status_kinerja" value="{{ ($action!='kinerjasales.store') ? $kinerjasales->status_kinerja : '' }}" placeholder="ex : SangatBaik/Baik/KurangBaik/SedangCuti">
                  </div>

                <!-- /.card-body -->

               <div class="card-footer">
                <input type="submit" class= "btn btn-success" value="{{ ($action!='store') ? 'Update' : 'Simpan' }}"><br>
                </div>
              </form>
@endsection