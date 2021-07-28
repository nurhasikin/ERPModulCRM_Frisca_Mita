@extends('master')
@section('judul','Form Gaji')
@section('content')

<form role="form" action="{{($action!='gaji.store') ? url($action):  route($action)  }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='gaji.store') ? $gaji->id : '' }}">
                <div class="card-body">
                <div class="form-group">
                    <label for="id_karyawan">NIP</label>
                    <input type="text" class="form-control" name="id_karyawan" 
                    value="{{ ($action!='gaji.store') ? $gaji->id_karyawan : '' }}" placeholder="NIP">
                  </div>
                  <div class="form-group">
                    <label for="jumlah_uang">Jumlah Uang</label>
                    <input type="text" class="form-control" name="jumlah_uang" 
                    value="{{ ($action!='gaji.store') ? $gaji->jumlah_uang : '' }}" placeholder="Jumlah Uang">
                  </div>
                  <div class="form-group">
                    <label for="status_gaji">Status Gaji</label>
                    <input type="text" class="form-control" name="status_gaji" 
                    value="{{ ($action!='gaji.store') ? $gaji->status_gaji : '' }}" placeholder="status_gaji">
                  </div>
                  
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" 
                  value="{{ ($action!='store') ? 'Update' : 'Simpan' }}" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
