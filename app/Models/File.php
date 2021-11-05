<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = '_file';
    protected $fillable = ['id_user', 'id_folder', 'nama','tahun' ];
}
