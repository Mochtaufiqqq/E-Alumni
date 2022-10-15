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
        Schema::table('riwayat_organisasi', function (Blueprint $table) {
            $table->string('slug', 225)->nullable()->after('periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_organisasi', function (Blueprint $table) {
            if (Schema::hasColumn('riwayat_organisasi', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};
