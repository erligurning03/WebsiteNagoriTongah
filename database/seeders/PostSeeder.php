<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'id' => 1,
            'nik' => '1234567890123456',
            'judul' => 'Jalan Rusak',
            'isi_post' => 'Sedang rusak jalan Melati, harap cari jalan lain',
            'jumlah_like' => 100,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('post')->insert([
            'id' => 2,
            'nik' => '1234567890432156',
            'judul' => 'Gempa Bumi',
            'isi_post' => 'Terjadi gempa bumi',
            'jumlah_like' => 100,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('post')->insert([
            'id' => 3,
            'nik' => '1111111122222222',
            'judul' => 'Gempa Bumi',
            'isi_post' => 'Terjadi gempa bumi',
            'jumlah_like' => 100,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
