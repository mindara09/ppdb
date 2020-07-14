<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAkademik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_akademik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->string('asal_sekolah');
            $table->string('nomer_un');
            $table->string('nomer_ijazah');
            $table->string('rencana_ekstrakulikuler_1');
            $table->string('rencana_ekstrakulikuler_2');
            $table->string('rencana_ekstrakulikuler_3');
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
        Schema::dropIfExists('data_akademik');
    }
}
