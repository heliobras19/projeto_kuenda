<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'codigo', 'situacao', 'quantidade_questoes', 'codigo_interno', 'cargo',
        'nome_cargo_sistema', 'nome_area_sistema', 'nome_regiao_sistema', 'area_atuacao',
        'escolaridade', 'vagas', 'vagas_pne', 'vagas_afro', 'vagas_indigenas',
        'vagas_cota_adicional', 'cadastro_reserva', 'vagas_cadastro_reserva',
        'salario_inicial', 'valor_inscricao', 'limite_inscritos', 'multiplos_cargos',
        'devolucao_valor', 'anexa_titulos', 'nota_prova_titulos', 'prova_redacao',
        'nota_prova_discursiva', 'nota_prova_discursiva2'
    ];
}
