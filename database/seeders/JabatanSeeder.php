<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'Osis',
            'Panahan',
            'Voli',
            'Nampon',
        ];

        foreach ($data as $key ) {
            Jabatan::create([
                'nama_jabatan' => $key
            ]);
        }
    }
}
