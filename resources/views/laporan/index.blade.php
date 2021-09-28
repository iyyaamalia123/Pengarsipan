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
                  Nama Karyawan
                </th>
                <th>
                  Jumlah Gaji
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
                    {{$dt->nama_karyawan}}
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