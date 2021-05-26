<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->bigIncrements('id_biodata');
            $table->bigInteger('id_user');
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 20);
            $table->string('jenis_kelamin', 20);
            $table->string('status', 20);
            $table->string('alamat', 20);
            $table->string('email', 20);
            $table->string('no_hp', 20);
            $table->string('pendidikan_terakhir', 20);
            $table->string('pengalaman_kerja', 20);
            $table->string('jurusan_pendidikan', 20);
            $table->string('iPK', 20);
            $table->string('wawancara', 20);
            $table->string('psikotest', 20);
            $table->string('kemampuan_bahasa_asing', 20);
            $table->string('ktp', 20);
            $table->string('pas_poto', 20);
            $table->string('ijazah', 20);
            $table->string('transkip_nilai', 20);
            $table->string('portofolio', 20);
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
        Schema::dropIfExists('biodata');
    }
}
