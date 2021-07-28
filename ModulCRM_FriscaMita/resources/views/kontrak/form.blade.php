@extends('master')
@section('judul','Form Kontrak')
@section('content')

<form role="form" action="{{($action!='kontrak.store') ? url($action):  route($action)  }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='kontrak.store') ? $kontrak->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="jenis_karyawan">Jenis Pegawai</label>
                    <input type="text" class="form-control" name="jenis_karyawan" 
                    value="{{ ($action!='kontrak.store') ? $kontrak->jenis_karyawan : '' }}" placeholder="Jenis Pegawai">
                  </div>
                  <div class="form-group">
                    <label for="lama_kontrak">Lama Kontrak</label>
                    <input type="text" class="form-control" name="lama_kontrak" 
                    value="{{ ($action!='kontrak.store') ? $kontrak->lama_kontrak : '' }}" placeholder="lama kontrak">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_bekerja">Tanggal Bekerja</label>
                    <input type="date" class="form-control" name="tanggal_bekerja" 
                    value="{{ ($action!='kontrak.store') ? $kontrak->tanggal_bekerja : '' }}" placeholder="tanggal bekerja">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pensiun">Tanggal Pensiun</label>
                    <input type="date" class="form-control" name="tanggal_pensiun" 
                    value="{{ ($action!='kontrak.store') ? $kontrak->tanggal_pensiun : '' }}" placeholder="tanggal pensiun">
                  </div>
                  <div class="form-group">
                    <label for="id_karyawan">NIP</label>
                    <input type="text" class="form-control" name="id_karyawan" 
                    value="{{ ($action!='kontrak.store') ? $kontrak->id_karyawan : '' }}" placeholder="id karyawan">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" 
                  value="{{ ($action!='store') ? 'Update' : 'Simpan' }}" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
