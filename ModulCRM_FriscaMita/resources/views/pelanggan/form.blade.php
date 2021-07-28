@extends('master')
@section('judul', 'Form Pelanggan')
@section('content')
<form role="form" action="{{($action!='pelanggan.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}  
    <input type="hidden" name=id value="{{($action!='pelanggan.store') ? $pelanggan->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" name ="nama_pelanggan"  value="{{ ($action!='pelanggan.store') ? $pelanggan->nama_pelanggan : '' }}" placeholder="Nama Kamu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No HP</label>
                    <input type="text" class="form-control" name="no_tlpn" value="{{ ($action!='pelanggan.store') ? $pelanggan->no_tlpn : '' }}" placeholder="No HP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" value="{{ ($action!='pelanggan.store') ? $pelanggan->tgl_lahir : '' }}" placeholder="ex : yy-mm-dd">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jejak Interaksi</label>
                    <input type="text" class="form-control" name="jejak_interaksi" value="{{ ($action!='pelanggan.store') ? $pelanggan->jejak_interaksi : '' }}" placeholder="Jejak Interaksi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Segmentasi Pelanggan</label>
                    <input type="text" class="form-control" name="segmentasi_pelanggan" value="{{ ($action!='pelanggan.store') ? $pelanggan->segmentasi_pelanggan : '' }}" placeholder="Segmentasi Pelanggan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Perilaku Pelanggan</label>
                    <input type="text" class="form-control" name="perilaku_pelanggan" value="{{ ($action!='pelanggan.store') ? $pelanggan->perilaku_pelanggan : '' }}" placeholder="Perilaku Pelanggan">
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class= "btn btn-success" value="{{ ($action!='store') ? 'Update' : 'Simpan' }}"><br>
                </div>
              </form>
@endsection