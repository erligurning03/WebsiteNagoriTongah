<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
            'id' => 1,
            'nik' => '1111111122222222',
            'jenis_berita' => 'berita',
            'judul' => 'Pembagian Bansos',
            'isi_berita' => 'Ada bagi-bagi bansos ini',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('berita')->insert([
            'id' => 2,
            'nik' => '1111111122222222',
            'jenis_berita' => 'hoax',
            'judul' => 'Vaksin Palsu',
            'isi_berita' => 'Pembagian vaksin palsu itu adalah hoaks',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('berita')->insert([
            'id' => 3,
            'nik' => '1234567890432156',
            'jenis_berita' => 'berita',
            'judul' => 'Pembagian Bansos',
            'isi_berita' => 'Ada bagi-bagi bansos ini',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}