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
        Schema::create('concursos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_concurso');
            $table->string('entidade');
            $table->string('municipio');
            $table->string('estado');
            $table->text('descricao');
            $table->string('edital_numero');
            $table->string('modalidade');
            $table->string('status');
            $table->string('situacao');
            $table->text('descricao_inicial');
            $table->text('descricao_publicacoes');
            $table->string('tipo_inscricao');
            $table->string('codigo_certame');
            $table->date('data_inicio');
            $table->time('hora_inicio');
            $table->date('data_fim');
            $table->time('hora_fim');
            $table->date('data_pror');
            $table->time('hora_pror');
            $table->string('numero_inscricoes');
            $table->string('numero_inscricoes_turno');
            $table->date('data_limite_estatuto_idoso');
            $table->boolean('vagas_negros_pardos');
            $table->boolean('informar_dependentes');
            $table->integer('quantidade_tipo_prova');
            $table->date('data_final_isencao');
            $table->time('hora_final_isencao');
            $table->integer('numero_isencoes');
            $table->boolean('permite_anexo_documentos');
            $table->date('data_final_anexo');
            $table->time('hora_final_anexo');
            $table->boolean('permite_anexo_documentos_pcd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concursos');
    }
};
