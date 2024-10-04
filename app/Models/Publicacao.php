<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    protected $fillable = [
    'concurso_id',
    'descricao',
    'tipo_edital',
    'situacao',
    'codigo_ato',
    'path',
    'tipo_publicacao',
    'data_visualizacao',
    'hora_visualizacao',
    'data_publicacao',
    'visivel_ate'
    ];

}
