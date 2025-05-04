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
        Schema::create('versoes', function (Blueprint $table) {
            $table->id();
            $table->text('alteracoes');
            $table->foreignId('id_aviso')->constrained('avisos'); // referência à tabela "avisos"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versoes');
    }
};
