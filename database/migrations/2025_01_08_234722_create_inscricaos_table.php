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
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidato_id')->references('id')->on('candidatos')->cascadeOnDelete();
            $table->foreignId('concurso_id')->references('id')->on('concursos')->cascadeOnDelete();
            $table->foreignId('cargo_id')->references('id')->on('cargo_inscricaos')->cascadeOnDelete();
            $table->boolean('inscricao_paga')->default(false);
            $table->string('data_pagamento')->nullable();
            $table->string('cidade_para_realizar_prova')->nullable();
            $table->float('valor_pago')->default(0);
            $table->string('homologado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscricaos');
    }
};
