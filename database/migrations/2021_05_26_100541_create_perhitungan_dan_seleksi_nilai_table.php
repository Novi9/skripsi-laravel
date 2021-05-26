<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerhitunganDanSeleksiNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_dan_seleksi_nilai', function (Blueprint $table) {
            $table->bigInteger('id_user');
            $table->bigIncrements('id_kriteria');
            $table->string('nilai', 20)->nullable();
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
        Schema::dropIfExists('perhitungan_dan_seleksi_nilai');
    }
}
