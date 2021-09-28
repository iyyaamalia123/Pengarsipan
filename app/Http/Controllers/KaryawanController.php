<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_karyawan;
use App\Models\gaji_karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= data_karyawan::all();

        return view('data_karyawan.index', compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_db = new data_karyawan;

        $data_db->nama_karyawan = $request->nama_karyawan;
        $data_db->golongan_id = $request->golongan_id;
        $data_db->alamat_karyawan = $request->alamat_karyawan;
        $data_db->no_tlp = $request->no_tlp;
        $data_db->status = $request->status;
        $data_db->kehadiran = $request->kehadiran;

        if ($data_db->save()) {
            $gaji = new gaji_karyawan();
            $gaji->id_karyawan = $data_db->id;
            if($request->golongan_id == 'Manager' || $request->golongan_id == 'manager'){
                $gaji->jumlah_gaji = 'Rp 6.000.000';
            }elseif($request->golongan_id == 'HRD' || $request->golongan_id == 'hrd' || $request->golongan_id == 'Hrd'){
                $gaji->jumlah_gaji = 'Rp 5.400.000';
            }elseif($request->golongan_id == 'Admin' || $request->golongan_id == 'admin'){
                $gaji->jumlah_gaji = 'Rp 4.500.000';
            }elseif($request->golongan_id == 'Staff' || $request->golongan_id == 'staff'){
                $gaji->jumlah_gaji = 'Rp 3.600.000';
            }else{
                $gaji->jumlah_gaji = 'Rp 1.000.000';
            }
            $gaji->save();
        }
        return redirect(route('data_karyawan'))-> with ('sukses', 'berhasil menambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data= data_karyawan::where('id', $id)-> first();

        return view('data_karyawan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data_db = data_karyawan::where('id', $id)->first();
        $data_db->nama_karyawan = $request->nama_karyawan;
        $data_db->golongan_id = $request->golongan_id;
        $data_db->alamat_karyawan = $request->alamat_karyawan;
        $data_db->no_tlp = $request->no_tlp;
        $data_db->status = $request->status;
        $data_db->kehadiran = $request->kehadiran;
        $data_db->save();
        

        return redirect(route('data_karyawan'))->with ('sukses', 'berhasil menambah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_db = data_karyawan::where('id', $id)->first();
        if ($data_db->delete()) {
            $gaji= gaji_karyawan::where('id_karyawan', $data_db->id);
            $gaji->delete();
        }

        return response () ->json ([
            'Success' => 'Berhasil Delete'
        ]);
    }
}
