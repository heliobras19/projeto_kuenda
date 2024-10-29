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
        Schema::create('cargos', function (Blueprint $table) {
        $table->id();
        $table->string('codigo')->nullable();
        $table->string('situacao')->default('ATIVO');
        $table->integer('quantidade_questoes')->default(0);
        $table->string('codigo_interno')->nullable();
        $table->string('cargo')->nullable();
        $table->string('nome_cargo_sistema')->nullable();
        $table->string('nome_area_sistema')->nullable();
        $table->string('nome_regiao_sistema')->nullable();
        $table->string('area_atuacao')->nullable();
        $table->string('escolaridade')->nullable();
        $table->integer('vagas')->default(0);
        $table->integer('vagas_pne')->default(0);
        $table->integer('vagas_afro')->default(0);
        $table->integer('vagas_indigenas')->default(0);
        $table->integer('vagas_cota_adicional')->default(0);
        $table->boolean('cadastro_reserva')->default(false);
        $table->integer('vagas_cadastro_reserva')->default(0);
        $table->decimal('salario_inicial', 10, 2)->default(0.00);
        $table->decimal('valor_inscricao', 10, 2)->default(0.00);
        $table->integer('limite_inscritos')->default(0);
        $table->boolean('multiplos_cargos')->default(false);
        $table->boolean('devolucao_valor')->default(false);
        $table->boolean('anexa_titulos')->default(false);
        $table->decimal('nota_prova_titulos', 5, 2)->nullable();
        $table->boolean('prova_redacao')->default(false);
        $table->decimal('nota_prova_discursiva', 5, 2)->nullable();
        $table->decimal('nota_prova_discursiva2', 5, 2)->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
