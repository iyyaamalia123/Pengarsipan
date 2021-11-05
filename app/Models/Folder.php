<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $table = '_folder';
    protected $fillable = ['id_user', 'id_menu', 'nama','url_folder' ];
}
