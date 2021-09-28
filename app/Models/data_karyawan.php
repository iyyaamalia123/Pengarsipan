<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_karyawan extends Model
{
    use HasFactory;

    protected $table = 'data_karyawan';
    protected $fillable = ['nama_karyawan', 'golongan_id','alamat_karyawan','no_tlp','status','kehadiran'];

    public function gaji()
{
    return $this->belongsTo(gaji_karyawan::class, 'id_karyawan', 'id');
    // return $this->morphTo();

}
    
}
