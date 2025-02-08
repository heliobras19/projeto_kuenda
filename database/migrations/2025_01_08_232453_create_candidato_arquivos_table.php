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
        Schema::create('candidato_arquivos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidato_id')->references('id')->on('candidatos')->cascadeOnDelete();
            $table->foreignId('concurso_id')->references('id')->on('concursos')->cascadeOnDelete();
            $table->string('nome')->nullable();
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidato_arquivos');
    }
};
