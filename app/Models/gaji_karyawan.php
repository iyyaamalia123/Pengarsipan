<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji_karyawan extends Model
{
    use HasFactory;

    protected $table = 'gaji_karyawan';

    
    public function karyawan()
    {
        return $this->hasMany(data_karyawan::class, 'id', 'id_karyawan');
    }
}
