<?php

namespace Database\Seeders;

use App\Models\Organisasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'organisasi' => $key
            ]);
        }
    }
}
