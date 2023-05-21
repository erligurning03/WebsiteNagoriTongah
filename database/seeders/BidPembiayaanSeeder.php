<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidPembiayaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang_pembiayaan')->insert([
            'id' => 1,
            'keterangan' => 'SILPA DD',
            'anggaran' => 1088000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pembiayaan')->insert([
            'id' => 2,
            'keterangan' => 'SILPA DD',
            'anggaran' => 1100234,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}