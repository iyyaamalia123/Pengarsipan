@extends('app')
@section('content')

<div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-body">
        <form enctype="multipart/form-data" method="POST" action="{{route('data_karyawan.update', $data->id)}}">
            @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Nama Karyawan</label>
                <input name="nama_karyawan" type="text" class="form-control" id="nama_karyawan" value="{{$data->nama_karyawan}}">
              </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Golongan ID</label>
                  <input name="golongan_id" type="text" class="form-control" id="golongan_id" value="{{$data->golongan_id}}">
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Karyawan</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <textarea id="alamat_karyawan" class="form-control" rows="5" name="alamat_karyawan" >{{$data->alamat_karyawan}}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">Nomor Telepon</label>
                    <input name="no_tlp" type="text" class="form-control" id="no_tlp" value="{{$data->no_tlp}}">
                </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Status</label>
                <input name="status" type="text" class="form-control" id="status" value="{{$data->status}}">
              </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Kehadiran</label>
                <select name="hadir" type="text" class="form-control" id="hadir">
                  <option value="Single">1 Hari</option>
                  <option value="Menikah">2 Hari</option>
                  <option value="Single">3 Hari</option>
                  <option value="Menikah">4 Hari</option>
                  <option value="Single">5 Hari</option>
                  <option value="Menikah">6 Hari</option>
                  <option value="Single">7 Hari</option>
                  <option value="Menikah">8 Hari</option>
                  <option value="Single">9 Hari</option>
                  <option value="Menikah">10 Hari</option>
                  <option value="Single">11 Hari</option>
                  <option value="Menikah">12 Hari</option>
                  <option value="Single">13 Hari</option>
                  <option value="Menikah">14 Hari</option>
                  <option value="Single">15 Hari</option>
                  <option value="Menikah">16 Hari</option>
                  <option value="Single">17 Hari</option>
                  <option value="Menikah">18 Hari</option>
                  <option value="Single">19 Hari</option>
                  <option value="Menikah">20 Hari</option>
                  <option value="Single">21 Hari</option>
                  <option value="Menikah">22 Hari</option>
                  <option value="Single">23 Hari</option>
                  <option value="Menikah">24 Hari</option>
                  <option value="Single">25 Hari</option>
                  <option value="Menikah">26 Hari</option>
                  <option value="Single">27 Hari</option>
                  <option value="Menikah">28 Hari</option>
                  <option value="Single">29 Hari</option>
                  <option value="Menikah">30 Hari</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Lembur</label>
                <select name="lembur" type="text" class="form-control" id="lembur">
                  <option value="Single">0</option>
                  <option value="Single">1 Hari</option>
                  <option value="Menikah">2 Hari</option>
                  <option value="Single">3 Hari</option>
                  <option value="Menikah">4 Hari</option>
                  <option value="Single">5 Hari</option>
                  <option value="Menikah">6 Hari</option>
                  <option value="Single">7 Hari</option>
                  <option value="Menikah">8 Hari</option>
                  <option value="Single">9 Hari</option>
                  <option value="Menikah">10 Hari</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Sakit</label>
                <select name="sakit" type="text" class="form-control" id="sakit">
                  <option value="Single">0</option>
                  <option value="Single">1 Kali</option>
                  <option value="Menikah">2 Kali</option>
                  <option value="Single">3 Kali</option>
                  <option value="Menikah">4 Kali</option>
                  <option value="Single">5 Kali</option>
                </select>
              </div>
            </div>
          </div>
          
          
          <button value="simpan" name="submit" type="submit" id="btnsave" class="btn btn-primary pull-right">Simpan Data</button>
        </form>
      </div>
    </div>
  </div>
@endsection