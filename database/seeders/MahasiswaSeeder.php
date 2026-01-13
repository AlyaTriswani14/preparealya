<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data contoh mahasiswa untuk belajar
        $mahasiswa = [
            [
                'nama' => 'Alya Nurfitriyani',
                'nim' => '12345',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '67890',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Citra Dewi',
                'nim' => '11223',
                'jurusan' => 'Teknik Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Doni Prasetyo',
                'nim' => '44556',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Eka Putri',
                'nim' => '77889',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('mahasiswa')->insert($mahasiswa);
    }
}
