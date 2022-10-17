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
        Schema::create('foto_postingan', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('name')->nullable();
            $table->string('image_path')->nullable();
            $table->string('nama_file');
            $table->string('foto_dokumen')->nullable();
            $table->string('location')->nullable();
=======
            $table->string('images');
>>>>>>> 3bd4a0ee6ffbada08092cfaffc0ff161d1ea32a8
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
        Schema::dropIfExists('foto_postingans');
    }
};
