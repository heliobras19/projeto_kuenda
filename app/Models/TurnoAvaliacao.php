<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoAvaliacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'concurso_id',
        'data',
        'turno',
        'hora_prova',
        'hora_abre_portao',
        'hora_fecha_portao',
        'cor_relatorio',
    ];

}
