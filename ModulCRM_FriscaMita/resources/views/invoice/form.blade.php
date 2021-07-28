@extends('master')
@section('judul', 'Form invoice')
@section('content')
<form role="form" action="{{($action!='invoice.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='invoice.store') ? $invoice->id : '' }}">
                <div class="card-body">                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Invoice</label>
                    <input type="text" class="form-control" placeholder="nama_invoice"
                    name="nama_invoice" value="{{ ($action!='invoice.store') ? $invoice->nama_invoice : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Invoice</label>
                    <input type="date" class="form-control" placeholder=" Tgl_invoice"
                    name="tgl_invoice" value="{{ ($action!='invoice.store') ? $invoice->tgl_invoice : '' }}">
                  </div>                
                  <div class="form-group">
                    <label for="">Jenis Pembayaran</label>
                    <input type="text" class="form-control" placeholder="Jenis_Pembayaran"
                    name="jenis_pembayaran" value="{{ ($action!='invoice.store') ? $invoice->jenis_pembayaran : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" class="form-control" placeholder="status"
                    name="status" value="{{ ($action!='invoice.store') ? $invoice->status : '' }}">
                  </div>
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{ ($action!='invoice.store') ? 'Update' : 'Simpan' }}">        
                </div>
              </form>

              @endsection