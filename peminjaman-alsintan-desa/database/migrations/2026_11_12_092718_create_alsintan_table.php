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
        Schema::create('alsintan', function (Blueprint $table) {
            $table  ->smallIncrements('id_alsintan')
                    ->primary()
                    ->unsigned();
            $table->string('nama_alat', 100);
            $table->enum('jenis', ['traktor', 'combine', 'drone-spray', 'transplante']);
            $table->text('deskripsi');
            $table->string('foto');
            $table->enum('status_operasional', ['tersedia', 'disewa', 'perawatan']);
            $table->decimal('tarif_sewa_per_hari', 12, 2);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alsintan');
    }
};
