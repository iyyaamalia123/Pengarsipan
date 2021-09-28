<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\golongan;

class GolonganController extends Controller
{
    public function index()
    {
        $data= golongan::all();

        return view('golongan.index', compact('data')); 
    }//
}
