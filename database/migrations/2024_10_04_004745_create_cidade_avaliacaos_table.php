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
        Schema::create('cidade_avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concurso_id')->references('id')->on('concursos')->cascadeOnDelete();
            $table->string('estado');
            $table->string('cidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidade_avaliacaos');
    }
};
