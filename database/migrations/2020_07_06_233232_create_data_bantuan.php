<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBantuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bantuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->string('penerima_kps');
            $table->string('nomer_kps');
            $table->string('penerima_kip');
            $table->string('nomer_kip');
            $table->string('nama_kip');
            $table->string('nomer_kks');
            $table->string('bank_penerima_bantuan');
            $table->string('no_rekening');
            $table->string('nama_rekening');
            $table->string('layak_mendapatkan_pip');
            $table->string('alasan_mendapatkan_pip');     
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
        Schema::dropIfExists('data_bantuan');
    }
}
