@extends('master')
@section('judul', 'Form order')
@section('content')
<form role="form" action="{{($action!='order.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='order.store') ? $order->id : '' }}">
                <div class="card-body">                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Sales</label>
                    <input type="text" class="form-control" placeholder="nama_sales"
                    name="nama_sales" value="{{ ($action!='order.store') ? $order->nama_sales : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" placeholder=" Deskripsi"
                    name="deskriptiom" value="{{ ($action!='order.store') ? $order->deskriptiom : '' }}">
                  </div>                
                  <div class="form-group">
                    <label for="">Tgl order</label>
                    <input type="date" class="form-control" placeholder="Tgl order"
                    name="tgl_order" value="{{ ($action!='order.store') ? $order->tgl_order : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Diskon</label>
                    <input type="text" class="form-control" placeholder="Diskon"
                    name="diskon_invoice" value="{{ ($action!='order.store') ? $order->diskon_invoice : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Pembayaran</label>
                    <input type="text" class="form-control" placeholder="Jenis Pembayaran"
                    name="jenis_pembayaran" value="{{ ($action!='order.store') ? $order->jenis_pembayaran : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" class="form-control" placeholder="Rp.-"
                    name="harga" value="{{ ($action!='order.store') ? $order->harga : '' }}">
                  </div>
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{ ($action!='order.store') ? 'Update' : 'Simpan' }}">        
                </div>
              </form>

              @endsection