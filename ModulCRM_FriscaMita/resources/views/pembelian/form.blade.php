@extends('master')
@section('judul', 'Form Penjualan')
@section('content')
<form role="form" action="{{($action!='pembelian.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}  
    <input type="hidden" name=id value="{{($action!='pembelian.store') ? $pembelian->id : '' }}">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" name ="nama_pelanggan"  value="{{ ($action!='pembelian.store') ? $pembelian->nama_pelanggan : '' }}" placeholder="Nama Pelanggan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Transaksi</label>
                    <input type="date" class="form-control" name="tgl_transaksi" value="{{ ($action!='pembelian.store') ? $pembelian->tgl_transaksi : '' }}" placeholder="ex : yy-mm-dd">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Unit</label>
                    <input type="text" class="form-control" name="jenis_unit" value="{{ ($action!='pembelian.store') ? $pembelian->jenis_unit : '' }}" placeholder="ex: Perumahan/Ruko">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" class="form-control" name="status" value="{{ ($action!='pembelian.store') ? $pembelian->status : '' }}" placeholder="ex: Lunas/Cicil">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class= "btn btn-success" value="{{ ($action!='store') ? 'Update' : 'Simpan' }}"><br>
                </div>
              </form>
@endsection