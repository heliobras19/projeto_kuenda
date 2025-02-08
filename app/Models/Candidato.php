<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

       protected $fillable = [
        'cpf',
        'senha',
        'nome',
        'email',
        'mae',
        'pai',
        'data_nascimento',
        'sexo',
        'dta_exp',
        'org_exp',
        'numero_nsi',
        'telefone',
        'fax',
        'celular',
        'escolaridade',
        'naturalidade',
        'raça',
        'uf',
        'tipo_endereco',
        'estado',
        'cidade',
        'lougradouro',
        'numero',
        'complemento',
        'nome_social',
        'homologado',
    ];

    public function arquivos () {
        return $this->hasMany(CandidatoArquivo::class, 'candidato_id');
    }
}
