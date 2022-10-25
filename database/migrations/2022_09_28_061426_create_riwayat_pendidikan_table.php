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
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_sekolah_univ')->nullable();
            $table->string('tahun_mulai_univ')->nullable();
            $table->string('tahun_akhir_univ')->nullable();
            $table->string('nama_sekolah_smk')->nullable();
            $table->string('tahun_mulai_smk')->nullable();
            $table->string('tahun_akhir_smk')->nullable();
            $table->string('nama_sekolah_smp')->nullable();
            $table->string('tahun_mulai_smp')->nullable();
            $table->string('tahun_akhir_smp')->nullable();
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
        Schema::dropIfExists('riwayat_pendidikans');
    }
};
