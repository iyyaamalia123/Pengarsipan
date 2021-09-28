@extends('app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Data Karyawan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr><th>
                  No
                </th>
                <th>
                  ID Karyawan
                </th>
                <th>
                  Kehadiran
                </th>
                <th>
                  Lembur
                </th>
                <th>
                  Tunjangan Sakit
                </th>
                <th>
                  Jumlah Gaji
                </th>
              </tr></thead>
              <tbody>

              @foreach($data as $key => $dt)
                <tr>
                  <td>
                    {{$loop->iteration}}
                  </td>
                  <td>
                    {{$dt->karyawan[0]->nama_karyawan}}
                  </td>
                  <td>
                    {{$dt->karyawan[0]->kehadiran}}
                  </td>
                  <td>
                    {{$dt->karyawan[0]->gaji_lembur}}
                  </td>
                  <td>
                    {{$dt->karyawan[0]->tunjangan_sakit}}
                  </td>
                  <td>
                    {{$dt->jumlah_gaji}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection