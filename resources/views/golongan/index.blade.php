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
                  Jenis Golongan
                </th>
                <th>
                  Gaji Pokok
                </th>
                <th>
                  Gaji Per Hari
                </th>
                <th>
                  Gaji Lembur Per Hari
                </th>
                <th>
                  Tunjangan Sakit
                </th>
              </tr></thead>
              <tbody>

              @foreach($data as $dt)
                <tr>
                  <td>
                    {{$loop->iteration}}
                  </td>
                  <td>
                    {{$dt->id_karyawan}}
                  </td>
                  <td>
                    {{$dt->jenis_golongan}}
                  </td>
                  <td>
                    {{$dt->besar_gaji}}
                  </td>
                  <td>
                    {{$dt->gaji_harian}}
                  </td>
                  <td>
                    {{$dt->gaji_lembur}}
                  </td>
                  <td>
                    {{$dt->tunjangan_sakit}}
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