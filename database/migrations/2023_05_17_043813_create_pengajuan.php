<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->foreign('nik')-> references('nik')->on('user');
            $table->enum('nama_suket', ['akta_lahir', 'domisili', 'kehilangan', 'kip', 'ktp', 'akta_nikah', 'penghasilan', 'skck', 'kk']);
            $table->string('deskripsi');
            $table->date('tanggal_pengajuan');
            $table->enum('status_pengajuan', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
