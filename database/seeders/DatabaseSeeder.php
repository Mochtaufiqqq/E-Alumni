<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Logo;


use App\Models\User;
use App\Models\FavIcon;
use App\Models\Organisasi;
use App\Models\TentangKami;
use App\Models\Carousel;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\JabatanSeeder;
use Database\Seeders\OrganisasiSeeder;


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

        // FavIcon::create([
        //     'favicon' => 'tracerstudy.ico'
        // ]);

        // Logo::create([
        //     'isi' => 'TRACER STUDY',
        //     'foto' => 'Null'
        // ]);

        // Logo::create([
        //     'isi'  => 'TRACER STUDY',
        //     'foto'  => 'Null'
        // ]);

        Carousel::create([
            'halaman' => '8',
            'judul' => 'LOGIN',
            'isi' => 'login',
            'foto' => 'asd'
        ]);

        Carousel::create([
            'halaman' => '7',
            'judul' => 'REGISTER',
            'isi' => 'login',
            'foto' => 'asd'
        ]);

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(OrganisasiSeeder::class);
        $this->call(JabatanSeeder::class);

    }
    
}
