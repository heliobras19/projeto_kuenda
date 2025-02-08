<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->string('nome');
            $table->string('senha')->default(Hash::make('12345678'));
            $table->string('email');
            $table->string('mae')->nullable();
            $table->string('pai')->nullable();
            $table->string('data_nascimento');
            $table->string('sexo');
            $table->string('dta_exp')->nullable();
            $table->string('org_exp')->nullable();
            $table->string('numero_nsi')->nullable();
            $table->string('telefone');
            $table->string('fax')->nullable();
            $table->string('celular')->nullable();
            $table->string('escolaridade');
            $table->string('naturalidade');
            $table->string('raça');
            $table->string('uf');
            $table->string('tipo_endereco');
            $table->string('estado');
            $table->string('cidade');
            $table->string('lougradouro');
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('nome_social')->nullable();
            $table->string('homologado')->default('indeferido(a)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
