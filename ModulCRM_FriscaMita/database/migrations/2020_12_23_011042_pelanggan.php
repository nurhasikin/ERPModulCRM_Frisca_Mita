<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama_pelanggan',100);
            $table->date('tgl_lahir');
            $table->double('no_tlpn');
            $table->string('jejak_interaksi',255);
            $table->string('segmentasi_pelanggan',255);
            $table->string('perilaku_pelanggan',255);
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
        Schema::dropIfExists('pelanggans');
    }
}
