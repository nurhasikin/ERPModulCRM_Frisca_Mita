@extends('master')
@section('judul','Form Karyawan')
@section('content')

<form role="form" action="{{($action!='karyawan.store') ? url($action):  route($action)  }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='karyawan.store') ? $karyawan->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama" 
                    value="{{ ($action!='karyawan.store') ? $karyawan->nama : '' }}" placeholder="Nama Karyawan">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" 
                    value="{{ ($action!='karyawan.store') ? $karyawan->alamat : '' }}" placeholder="alamat">
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No. Hp</label>
                    <input type="text" class="form-control" name="no_hp" 
                    value="{{ ($action!='karyawan.store') ? $karyawan->no_hp : '' }}" placeholder="nomor hp">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" 
                    value="{{ ($action!='karyawan.store') ? $karyawan->email : '' }}" placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" 
                    value="{{ ($action!='karyawan.store') ? $karyawan->jabatan : '' }}" placeholder="jabatan">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" 
                  value="{{ ($action!='store') ? 'Update' : 'Simpan' }}" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
