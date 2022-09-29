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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_alumni');
            $table->integer('nisn')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('password');
            $table->string('nama_panggilan');
            $table->string('jurusan');
            $table->string('thn_lulus');
            $table->string('no_tlp');
            $table->string('karya');
            $table->string('keahlian');
            $table->string('foto_profile');
            $table->string('pekerjaan');
            $table->string('jabatan_pekerjaan');
            $table->string('tmpt_pekerjaan');
            $table->foreignId('id_riwayat');
            $table->foreignId('id_sosmed');
            $table->foreignId('id_prestasi');
            $table->foreignId('id_postingan');
            $table->foreignId('id_pendidikan');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('status_user_id')->default('1');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
