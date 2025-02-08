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
        Schema::create('cargo_inscricaos', function (Blueprint $table) {
            $table->id();
            $table->string('cargo');
            $table->string('escolaridade');
            $table->integer('vagas');
            $table->float('valor_inscricao');
            $table->float('salario_inicial')->nullable();
            $table->string('anexo_prova')->nullable();
            $table->integer('limite_inscritos')->default(0);
            $table->foreignId('turno_avaliacaos_id')->references('id')->on('turno_avaliacaos')->nullOnDelete();
            $table->foreignId('concurso_id')->references('id')->on('concursos')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo_inscricaos');
    }
};
