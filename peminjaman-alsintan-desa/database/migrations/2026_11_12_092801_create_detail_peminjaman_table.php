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
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->smallIncrements('id_detail');
            $table->unsignedSmallInteger('id_peminjaman');
            $table->unsignedSmallInteger('id_alsintan');
            $table->decimal('subtotal',12,2);
            $table->timestamps();

            
            $table  ->foreign('id_peminjaman')
                    ->references('id_peminjaman')
                    ->on('peminjaman');
            $table  ->foreign('id_alsintan')
                    ->references('alsintan')
                    ->on('alsintan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjaman');
    }
};
