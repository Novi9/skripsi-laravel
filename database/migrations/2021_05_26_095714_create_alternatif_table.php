<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alternatif', function (Blueprint $table) {
            $table->bigIncrements('id_data_alternatif');
            $table->bigInteger('id_user');
            $table->string('alternatif', 20);
            $table->string('nilai', 20);
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
        Schema::dropIfExists('data_alternatif');
    }
}
