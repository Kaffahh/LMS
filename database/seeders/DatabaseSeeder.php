<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mata_pelajaran;
use App\Models\Siswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'ajel',
            'email' => 'ajel@gmail.com',
            'telepon' => '087827563203',
            'status' => 'Ad',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'username' => 'kapa',
            'email' => 'kapa@gmail.com',
            'telepon' => '0895368505088',
            'status' => 'S',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'username' => 'saddam',
            'email' => 'saddam@gmail.com',
            'telepon' => '081779955614',
            'status' => 'S',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'username' => 'hadi',
            'email' => 'hadi@gmail.com',
            'telepon' => '081399852560',
            'status' => 'G',
            'password' => bcrypt('12345678'),
        ]);

        Mata_pelajaran::create([
            'nama_mapel' => 'Rekayasa Perangkat Lunak',
        ]);

        Kelas::create([
            'kelas' => 'XII',
            'jurusan' => 'RPL 1',
        ]);

        Siswa::create([
            'id_user' => 1,
            'nis' => '10868',
            'nama' => 'Hazel Avriel Fauzan',
            'id_kelas' => 1,
        ]);

        Siswa::create([
            'id_user' => 2,
            'nis' => '10907',
            'nama' => 'Muhammad Islami Kaffah',
            'id_kelas' => 1,
        ]);

        Siswa::create([
            'id_user' => 3,
            'nis' => '10968',
            'nama' => 'Saddam Al-Malik',
            'id_kelas' => 1,
        ]);

        Guru::create([
            'id_user' => 4,
            'nip' => '1234567890',
            'nama' => 'Hadi Sulistyo',
            'id_mata_pelajaran' => 1,
            'jabatan' => 'Babu',
        ]);
    }
}
