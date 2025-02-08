<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidato_id',
        'concurso_id',
        'cargo_id',
        'inscricao_paga',
        'data_pagamento',
        'cidade_para_realizar_prova',
        'valor_pago',
        'homologado',
    ];
}
