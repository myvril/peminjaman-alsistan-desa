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
            $table  ->integerIncrements('id_log')
                    ->primary();
            $table  ->foreign('id_user')
                    ->references('id_user')
                    ->on('user');
            $table->string('aksi',50);
            $table->string('entitas',50);
            $table->smallInteger('id_entitas')->unsigned();
            $table->text('keterangan');
            $table->timestamps();
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
