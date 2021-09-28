<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $data= laporan::all();

        return view('laporan.index', compact('data')); 
    }//
}
