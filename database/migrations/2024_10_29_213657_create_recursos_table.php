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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo')->default(-1);
            $table->string('situacao')->default('ATIVO');
            $table->boolean('somente_dias_uteis')->default(false);
            $table->boolean('liberar_respostas')->default(false);
            $table->string('tipo_recurso')->nullable();
            $table->date('data_inicio')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->time('hora_fim')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
