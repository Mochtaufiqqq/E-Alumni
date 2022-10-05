<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Organisasi::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Osis',
            'Panahan',
            'Voli',
            'Nampon',
        ];

        foreach ($data as $key ) {
            Organisasi::create([
                'nama_organisasi' => $key
            ]);
        }
    }
}
