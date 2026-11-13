
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
        Schema::create('alat_berat', function (Blueprint $table) {
            $table->smallIncrements('id_alsintan');
            $table->string('nama_alat', 100);
            $table->enum('jenis', ['traktor', 'combine', 'drone spray', 'transplanter']);
            $table->text('deskripsi');
            $table->string('foto', 255);
            $table->enum('status_operasional', ['tersedia', 'disewa', 'perawatan'])->default('tersedia');
            $table->decimal('tarif_sewa_per_hari', 12, 2);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_berat');
    }
};
