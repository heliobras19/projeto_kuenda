<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoInscricao extends Model
{
    use HasFactory;
   protected $fillable = [
    'cargo',
    'escolaridade',
    'vagas',
    'valor_inscricao',
    'salario_inicial',
    'anexo_prova',
    'limite_inscritos',
    'turno_avaliacaos_id',
    'concurso_id',
];
}
