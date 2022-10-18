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
        User::create([
            'nisn'  => '20211001',
            'nama' => 'Taufiq',
            // 'jurusan' => 'XI RPL',
            // 'thn_lulus' => '2023',
            // 'no_tlp'  => '0908779097',
            // 'pekerjaan' => 'ngoding',
            // 'jabatan_pekerjaan' => 'manager aminnn',
            // 'tmpt_pekerjaan' => 'PT.NASA aminn',
            // 'karya' => 'asdasd',
            // 'keahlian' => 'asdasd',
            // 'nama_panggilan' => 'opik',
            'email' => 'mhmdtaufiq3@gmail.com',
            'role_id' => '1',
            'status' => '1',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            'id_organisasi' => '1',
            // 'id_riwayatORG' => '1',
            // 'id_prestasi' => '1',
            // 'id_pendidikan' => '1',
        ]);
        User::create([
            'nisn'  => '20211787',
            'nama' => 'Taufiqqq',
            // 'jurusan' => 'XI RPL',
            // 'thn_lulus' => '2023',
            // 'no_tlp'  => '0908779097',
            // 'pekerjaan' => 'ngoding',
            // 'jabatan_pekerjaan' => 'manager aminnn',
            // 'tmpt_pekerjaan' => 'PT.NASA aminn',
            // 'karya' => 'asdasd',
            // 'keahlian' => 'asdasd',
            // 'nama_panggilan' => 'opik',
            'email' => 'user@gmail.com',
            'role_id' => '2',
            'status' => '0',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            'id_organisasi' => '1',
            // 'id_riwayatORG' => '1',
            // 'id_prestasi' => '1',
            // 'id_pendidikan' => '1',
        ]);

        User::create([
            'nisn'  => '090909',
            'nama' => 'huhuhu',
            // 'jurusan' => 'XI RPL',
            // 'thn_lulus' => '2023',
            // 'no_tlp'  => '0908779097',
            // 'pekerjaan' => 'ngoding',
            // 'jabatan_pekerjaan' => 'manager aminnn',
            // 'tmpt_pekerjaan' => 'PT.NASA aminn',
            // 'karya' => 'asdasd',
            // 'keahlian' => 'asdasd',
            // 'nama_panggilan' => 'opik',
            'email' => 'user2@gmail.com',
            'role_id' => '2',
            'status' => '0',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            'id_organisasi' => '1',
            // 'id_riwayatORG' => '1',
            // 'id_prestasi' => '1',
            // 'id_pendidikan' => '1',
        ]);

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
