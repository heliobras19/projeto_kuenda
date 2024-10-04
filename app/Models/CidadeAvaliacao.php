<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadeAvaliacao extends Model
{
    use HasFactory;
    protected $fillable = ['cidade', 'estado', 'concurso_id'];
}
