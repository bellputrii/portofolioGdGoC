<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('penanggung_jawab', function (Blueprint $table) {
            $table->increments('id_penanggung_jawab');
            $table->string('nama_penanggung_jawab', 60);
            $table->string('status_penanggung_jawab', 5);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penanggung_jawab');
    }

};