<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_concurso',
        'entidade',
        'municipio',
        'estado',
        'descricao',
        'edital_numero',
        'modalidade',
        'status',
        'situacao',
        'descricao_inicial',
        'descricao_publicacoes',
        'tipo_inscricao',
        'codigo_certame',
        'data_inicio',
        'hora_inicio',
        'data_fim',
        'hora_fim',
        'data_pror',
        'hora_pror',
        'numero_inscricoes',
        'numero_inscricoes_turno',
        'data_limite_estatuto_idoso',
        'vagas_negros_pardos',
        'informar_dependentes',
        'quantidade_tipo_prova',
        'data_final_isencao',
        'hora_final_isencao',
        'numero_isencoes',
        'permite_anexo_documentos',
        'data_final_anexo',
        'hora_final_anexo',
        'permite_anexo_documentos_pcd',
    ];

    public function Cliente () {
        return $this->belongsTo(Cliente::class, 'entidade');
    }

    public function turno () {
        return $this->hasMany(TurnoAvaliacao::class, 'concurso_id');
    }

    public function cidade() {
        return $this->hasMany(CidadeAvaliacao::class, 'concurso_id');
    }

    function publicacoes()  {
        return $this->hasMany(Publicacao::class, 'concurso_id');
    }

    public function cargos() {
        return $this->hasMany(CargoInscricao::class, 'concurso_id');
    }
}
