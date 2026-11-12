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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->smallIncrements('id_peminjaman');
            $table->unsignedSmallInteger('id_peminjam');
            $table->unsignedSmallInteger('id_pengelola');
            $table->date('tanggal_pengajuan');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->string('lokasi_lahan');
            $table->text('keperluan');
            $table->enum('status_peminjaman', ['menunggu','disetujui','ditolak',
                        'berlangsung','selesai','dibatalkan']);
            $table->dateTime('waktu_diproses');
            $table->dateTime('waktu_pengambilan');
            $table->dateTime('waktu_penyerahan');
            $table->decimal('total_biaya',12,2);
            $table->text('catatan_pengelola');
            $table->timestamps();

            $table  ->foreign('id_peminjam')
                    ->references('id_user')
                    ->on('user');
            $table  ->foreign('id_pengelola')
                    ->references('id_user')
                    ->on('user');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
