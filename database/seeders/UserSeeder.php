<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\User;
use App\Models\TentangKami;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'nisn'  => '20211001',
            'nama' => 'Taufiq',
            // 'jurusan' => 'XI RPL',
            // 'thn_lulus' => '2023',
            'foto_profile' => 'asasd',
            // 'no_tlp'  => '0908779097',
            // 'pekerjaan' => 'ngoding',
            // 'jabatan_pekerjaan' => 'manager aminnn',
            // 'tmpt_pekerjaan' => 'PT.NASA aminn',
            // 'karya' => 'asdasd',
            // 'keahlian' => 'asdasd',
            // 'nama_panggilan' => 'opik',
            'email' => 'mhmdtaufiq3@gmail.com',
            'status' => '1',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            'role_id' => 1,
            'id_organisasi' => 1,
        ]);
        User::create([
            'nisn'  => '20211787',
            'nama' => 'Taufiqqq',
            // 'jurusan' => 'XI RPL',
            // 'thn_lulus' => '2023',
            'foto_profile' => 'asasd',
            // 'no_tlp'  => '0908779097',
            // 'pekerjaan' => 'ngoding',
            // 'jabatan_pekerjaan' => 'manager aminnn',
            // 'tmpt_pekerjaan' => 'PT.NASA aminn',
            // 'karya' => 'asdasd',
            // 'keahlian' => 'asdasd',
            // 'nama_panggilan' => 'opik',
            'email' => 'user@gmail.com',
            'status' => '0',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            'role_id' => 2,
            'id_organisasi' => 1,
        ]);

        User::create([
            'nisn'  => '090909',
            'nama' => 'huhuhu',
            // 'jurusan' => 'XI RPL',
            // 'thn_lulus' => '2023',
            'foto_profile' => 'null',
            // 'no_tlp'  => '0908779097',
            // 'pekerjaan' => 'ngoding',
            // 'jabatan_pekerjaan' => 'manager aminnn',
            // 'tmpt_pekerjaan' => 'PT.NASA aminn',
            // 'karya' => 'asdasd',
            // 'keahlian' => 'asdasd',
            // 'nama_panggilan' => 'opik',
            'email' => 'user2@gmail.com',
            'status' => '0',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            'role_id' => 2,
            'id_organisasi' => 1,
        ]);

        // TentangKami::create([
        //     'judul' => 'Tentang Kami',
        //     'isi' => 'Ini adalasdjaosdhaspdjaspdojoasidhoas
        //     idhaosidhaosidhaosfhoaisdhaosidhosadihaosdi
        //     hasodihasodihasodiahsdoiahsdoiashdoaishdousfoaihfio',
        //     'postingan_id' => 3,
        //     'kategori' => 'posting'

        // ]);
    }
}
