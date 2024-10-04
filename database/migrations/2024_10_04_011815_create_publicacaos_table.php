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
        Schema::create('publicacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concurso_id')->references('id')->on('concursos')->cascadeOnDelete();
            $table->text('descricao');
            $table->string('tipo_edital');
            $table->boolean('situacao');
            $table->string('codigo_ato');
            $table->string('path');
            $table->string('tipo_publicacao');
            $table->date('data_visualizacao');
            $table->time('hora_visualizacao');
            $table->date('data_publicacao');
            $table->date('visivel_ate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacaos');
    }
};
