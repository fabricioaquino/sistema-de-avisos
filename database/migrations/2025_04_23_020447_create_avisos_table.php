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
        Schema::create('avisos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 80);
            $table->text('mensagem');
            $table->timestamp('data_publicacao');
            $table->date('data_expedicao');
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->enum('obrigatorio', ['sim', 'nao']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avisos');
    }
};
