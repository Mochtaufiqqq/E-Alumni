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
        Schema::create('riwayat_organisasi', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_organisasi');
            $table->string('periode')->nullable();
            $table->string('organisasi');
            $table->string('dokumentasi')->nullable();
            $table->string('logo')->nullable();
            $table->text('deskripsi');
            $table->string('foto_struktur');
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
        Schema::dropIfExists('riwayat_organisasi');
    }
};
