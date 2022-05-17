<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_film_dan_jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_film');
            $table->date('jadwal_film');
            $table->date('tahun_film');
            $table->string('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_film_dan_jadwal');
    }
};
