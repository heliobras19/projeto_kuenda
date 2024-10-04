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
        Schema::create('turno_avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concurso_id')->references('id')->on('concursos')->cascadeOnDelete();
            $table->date('data');
            $table->string('turno', 50);
            $table->time('hora_prova');
            $table->time('hora_abre_portao');
            $table->time('hora_fecha_portao');
            $table->string('cor_relatorio', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turno_avaliacaos');
    }
};
