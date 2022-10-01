<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'nisn'  => '20211050',
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
            'role' => 'admin',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            // 'id_riwayat' => '1',
            // 'id_sosmed' => '1',
            // 'id_postingan' => '1',
            // 'id_prestasi' => '1',
            // 'id_pendidikan' => '1',
        ]);
        User::create([
            'nisn'  => '20211080',
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
            'role' => 'user',
            'alamat' => 'Downtown Street,California State, USA',
            'password' => bcrypt('123123123'),
            // 'id_riwayat' => '1',
            // 'id_sosmed' => '1',
            // 'id_postingan' => '1',
            // 'id_prestasi' => '1',
            // 'id_pendidikan' => '1',
        ]);
    }
}
