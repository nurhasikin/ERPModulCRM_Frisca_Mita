@extends('master')
@section('judul','Form Training')
@section('content')

<form role="form" action="{{($action!='training.store') ? url($action):  route($action)  }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='training.store') ? $training->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal">Tanggal Training</label>
                    <input type="date" class="form-control" name="tanggal" 
                    value="{{ ($action!='training.store') ? $training->tanggal : '' }}" placeholder="tanggal training">
                  </div>
                  <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control" name="tempat" 
                    value="{{ ($action!='training.store') ? $training->tempat : '' }}" placeholder="tempat">
                  </div>
                  <div class="form-group">
                    <label for="id_karyawan">NIP</label>
                    <input type="text" class="form-control" name="id_karyawan" 
                    value="{{ ($action!='training.store') ? $training->id_karyawan : '' }}" placeholder="id karyawan">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" 
                  value="{{ ($action!='store') ? 'Update' : 'Simpan' }}" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
