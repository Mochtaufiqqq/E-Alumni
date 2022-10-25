<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Jabatan::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Ketua',
            'Wakil',
            'anggota',
            'Serketaris',
            'Bendahara',
        ];

        foreach ($data as $key ) {
            Jabatan::create([
                'jabatan' => $key,
                'user_id' => 1
            ]);
        }
    }
}
