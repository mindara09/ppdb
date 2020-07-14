<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDiri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_diri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->string('nama_lengkap');
            $table->string('nis');
            $table->string('nisn');
            $table->string('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('no_kk');
            $table->string('nik');
            $table->string('agama');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->integer('kodepos');
            $table->string('no_register_akte');
            $table->string('jenis_tinggal');
            $table->string('transportasi');
            $table->string('no_telprumah');
            $table->string('no_hp');
            $table->string('email');
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
        Schema::dropIfExists('data_diri');
    }
}
