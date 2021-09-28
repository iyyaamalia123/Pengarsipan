<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gaji_karyawan;

class GajiController extends Controller
{
    public function index()
    {
        $data= gaji_karyawan::all();
        // return $data[1]->karyawan[0]->nama_karyawan;

        return view('gaji_karyawan.index', compact('data')); 
    }

    public function hitung()
    {
        $total=$this->kehadiran() * $this->gaji_harian();
    }
//
}
