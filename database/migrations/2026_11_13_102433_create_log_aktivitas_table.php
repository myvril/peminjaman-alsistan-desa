
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
        Schema::create('log_aktivitas', function (Blueprint $table) {
            $table->increments('id_log');
            $table->unsignedSmallInteger('id_user');
            $table->string('aksi', 50); // setujui, tolak, serah_terima, kembali, tambah_alat, ubah_alat, hapus_alat
            $table->string('entitas', 50); // peminjaman atau alsintan
            $table->unsignedSmallInteger('id_entitas');
            $table->text('keterangan');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_aktivitas');
    }
};
