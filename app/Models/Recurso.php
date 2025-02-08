<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'situacao',
        'somente_dias_uteis',
        'liberar_respostas',
        'tipo_recurso',
        'data_inicio',
        'hora_inicio',
        'data_fim',
        'hora_fim',
    ];
}
