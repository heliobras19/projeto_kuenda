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
        Schema::table('boletos', function (Blueprint $table) {
            $table->string("banco");
            $table->string("cendente");
            $table->string("cnpj_cedente");
            $table->string("endereço_cedente");
            $table->string("agencia");
            $table->string("dv_agencia");
            $table->string("conta");
            $table->string("dv_conta");
            $table->string("numero_cliente");
            $table->string("carteira")->nullable();
            $table->string("opcional_1")->nullable();
            $table->string("opcional_2")->nullable();
            $table->string("opcional_3")->nullable();
            $table->string("opcional_4")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('boletos', function (Blueprint $table) {
            //
        });
    }
};
