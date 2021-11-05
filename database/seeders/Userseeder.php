<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('mik123'),
                'level' => 'superadmin',
            ],[
            'name' => 'Admin',
            'email' => 'mik@gmail.com',
            'password' => Hash::make('mik123'),
            'level' => 'admin',

        ]]
      );
    }
}
