<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuaraTimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juara_tims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tim_id');
            $table->string('keterangan');
            $table->string('sertifikat');
            $table->integer('status');
            $table->integer('tahun');
            $table->string('type');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juara_tims');
    }
}
