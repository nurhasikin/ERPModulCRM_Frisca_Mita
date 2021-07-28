@extends('master')
@section('judul', 'Form promo')
@section('content')
<form role="form" action="{{($action!='promo.store') ? url($action):  route($action)  }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='promo.store') ? $promo->id : '' }}">
                <div class="card-body">                
                  <div class="form-group">
                    <label for=" ">Nama Promo</label>
                    <input type="text" class="form-control" placeholder="nama_promo"
                    name="nama_promo" value="{{ ($action!='promo.store') ? $promo->nama_promo : '' }}">
                  </div>
                  <div class="form-group">
                    <label for="">Diskon Promo</label>
                    <input type="text" class="form-control" placeholder=" Diskon Promo"
                    name="diskon_promo" value="{{ ($action!='promo.store') ? $promo->diskon_promo : '' }}">
                  </div>                
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-success" value="{{ ($action!='promo.store') ? 'Update' : 'Simpan' }}">        
                </div>
              </form>

              @endsection