<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FavIcon;


use App\Models\Organisasi;
use App\Models\User;
use App\Models\TentangKami;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TentangKami::create([
            'judul' => 'Tentang Kami',
            'isi' => 'Ini adalasdjaosdhaspdjaspdojoasidhoas
            idhaosidhaosidhaosfhoaisdhaosidhosadihaosdi
            hasodihasodihasodiahsdoiahsdoiashdoaishdousfoaihfio'
        ]);

        FavIcon::create([
            'favicon' => 'tracerstudy.ico'
        ]);

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrganisasiSeeder::class);
        $this->call(JabatanSeeder::class);

    }
    
}
