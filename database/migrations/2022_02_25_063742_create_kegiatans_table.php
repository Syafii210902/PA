<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('kategori_id');
            $table->string('nama_kegiatan');
            $table->text('deskripsi');
            $table->date('deadline');
            $table->string('poster');
            $table->string('info');
            $table->timestamps();
        });

        Schema::create('join_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('kegiatan_id');
            $table->string('no_wa');
            $table->integer('status');
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
        Schema::dropIfExists('kegiatans');
        Schema::dropIfExists('join_kegiatan');
    }
}
