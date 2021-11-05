<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_menu')->insert(
            [[
            'nama' => 'Tender',
            'id_user' => 1,
            'url' => '/tender'
        ],
        [
            'nama' => 'Proyek',
            'id_user' => 1,
            'url' => '/proyek'
        ],
        [
            'nama' => 'Inventaris Perusahaan',
            'id_user' => 1,
            'url' => '/inventaris_perusahaan'
        ],
        [
            'nama' => 'Data Karyawan',
            'id_user' => 1,
            'url' => '/data_karyawan'
        ],
        [
            'nama' => 'Company Profile',
            'id_user' => 1,
            'url' => '/company_profile'
        ]]);
        
    }
}
