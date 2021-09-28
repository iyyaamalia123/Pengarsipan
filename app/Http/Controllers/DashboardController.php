<?php

namespace App\Http\Controllers;

use App\Models\data_karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view('dashboard');
        
    }
    public function statistik()
    {
        $data= DB::table('data_karyawan')->select('golongan_id', DB::raw('count(golongan_id) as total'))->groupBy('golongan_id')->get();
        $golongan=[];
        $total=[];
        foreach($data as $dt ){
            array_push($golongan, $dt->golongan_id);
            array_push($total, $dt->total);
        }
        return response()->JSON([
            'golongan'=>$golongan, 
            'total'=>$total
        ]);
    }

}
