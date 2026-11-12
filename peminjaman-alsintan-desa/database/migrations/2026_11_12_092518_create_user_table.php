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
        Schema::create('user', function (Blueprint $table) {
            $table->smallIncrements('id_user')->unsigned();
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('password');
            $table->string('no_hp', 15);
            $table->text('alamat');
            $table->enum('role', ['pengelola', 'petani']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
