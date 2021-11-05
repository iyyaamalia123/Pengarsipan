<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_data__karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->char('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('status');
            $table->string('no_darurat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_data__karyawan');
    }
}
