<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Rani Putri',
            'npm' => '2101001',
            'prodi' => 'Informatika',
            'email' => 'rani@example.com',
        ]);
    }
}
