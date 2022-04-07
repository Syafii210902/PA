<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinDivisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_divisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('divisi_id');
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->integer('status1');
            $table->integer('status2');
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
        Schema::dropIfExists('join_divisis');
    }
}
