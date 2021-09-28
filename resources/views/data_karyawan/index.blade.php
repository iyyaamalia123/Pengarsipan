@extends('app')
@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Data Karyawan</h4>
      </div>
      <div class="card-body">
        <a href="{{ url('/data_karyawan/create')}}" class="btn btn-primary pull-right">Tambah Data</a>
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <tr><th>
                No
              </th>
              <th>
                Nama Karyawan 
              </th>
              <th>
                Golongan ID
              </th>
              <th>
                Alamat
              </th>
              <th>
                Telepon
              </th>
              <th>
                Status
              </th>
              <th>
                Kehadiran
              </th>
              <th>
                Lembur
              </th>
              <th>
                Sakit
              </th>
              <th>
                Opsi
              </th>
            </tr></thead>
            <tbody>
                @foreach ($data as $dt)
                <tr>
                  <td>
                    {{$loop->iteration}}
                  </td>
                
                  <td>
                    {{$dt->nama_karyawan}}
                  </td>
                  <td>
                    {{$dt->golongan_id}}
                  </td>
                  <td>
                    {{$dt->alamat_karyawan}}
                  </td>
                  <td class="text-primary">
                    {{$dt->no_tlp}}
                  </td>
                  <td>
                    {{$dt->status}}
                  </td>
                  <td>
                    {{$dt->kehadiran}}
                  </td>
                  <td>
                    {{$dt->gaji_lembur}}
                  </td>
                  <td>
                    {{$dt->tunjangan_sakit}}
                  </td> 
                  <td>
                    <a href="{{url ('/data_karyawan/edit/'. $dt->id)}}">Edit</a>
                    ||
                    <a href="#" class="delete_data" data-id="{{$dt->id}}">Hapus</button>
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
@endsection
@section('js')
<script>
  $('.delete_data').click(function() {
    var id = $ (this) .data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    $.ajax(
      {
        url: "/data_karyawan/destroy/"+id,
        type: 'DELETE',
        data: {
          "id" : id,
          "_token": token,
        },
        success: function () {
          alert("Sukses");
          window.location.reload(); 
        }
      }
    )
  })
</script>
    
@endsection
       