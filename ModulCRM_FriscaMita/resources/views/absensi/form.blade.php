@extends('master')
@section('judul','Form Absensi')
@section('content')

<form role="form" action="{{($action!='absensi.store') ? url($action):  route($action)  }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name=id value="{{($action!='absensi.store') ? $absensi->id : '' }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_karyawan">NIP</label>
                    <input type="text" class="form-control" name="id_karyawan" 
                    value="{{ ($action!='absensi.store') ? $absensi->id_karyawan : '' }}" placeholder="NIP">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_absensi">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_absensi" 
                    value="{{ ($action!='absensi.store') ? $absensi->tanggal_absensi : '' }}" placeholder="tanggal_absensi">
                  </div>
                  <div class="form-group">
                    <label for="status_kehadiran">Status Kehadiran
                    <select multiple="multiple"  name="status_kehadiran" value="{{ ($action!='absensi.store') ? $absensi->status_kehadiran : '' }}">
													<optgroup label="Pilih">
													<option>Hadir</option>
                          <option>Sakit</option>
                          <option>Alpa</option>
                          <option>Izin</option>
                          </optgroup>
												</select></label>
                    </div>
                  
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success" 
                  value="{{ ($action!='store') ? 'Update' : 'Simpan' }}" class="btn btn-primary">Submit</button>
                </div>
              </form>

@endsection
