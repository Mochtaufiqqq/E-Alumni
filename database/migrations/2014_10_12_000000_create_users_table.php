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
            $table->id();
            $table->integer('nisn')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('password');
            $table->string('role')->default('user');
            $table->string('nama_panggilan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('thn_lulus')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('karya')->nullable();
            $table->string('keahlian')->nullable();
            $table->string('foto_profile')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('jabatan_pekerjaan')->nullable();
            $table->string('tmpt_pekerjaan')->nullable();
            // $table->foreignId('id_riwayat');
            // $table->foreignId('id_sosmed');
            // $table->foreignId('id_prestasi');
            // $table->foreignId('id_postingan');
            // $table->foreignId('id_pendidikan');
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
