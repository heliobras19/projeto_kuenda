<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'codigo' => 'nullable|string',
            'situacao' => 'required|string',
            'quantidade_questoes' => 'required|integer',
            'codigo_interno' => 'nullable|string',
            'cargo' => 'nullable|string',
            'nome_cargo_sistema' => 'nullable|string',
            'nome_area_sistema' => 'nullable|string',
            'nome_regiao_sistema' => 'nullable|string',
            'area_atuacao' => 'nullable|string',
            'escolaridade' => 'nullable|string',
            'vagas' => 'required|integer',
            'vagas_pne' => 'required|integer',
            'vagas_afro' => 'required|integer',
            'vagas_indigenas' => 'required|integer',
            'vagas_cota_adicional' => 'required|integer',
            'cadastro_reserva' => 'required|boolean',
            'vagas_cadastro_reserva' => 'required|integer',
            'salario_inicial' => 'required|numeric',
            'valor_inscricao' => 'required|numeric',
            'limite_inscritos' => 'required|integer',
            'multiplos_cargos' => 'required|boolean',
            'devolucao_valor' => 'required|boolean',
            'anexa_titulos' => 'required|boolean',
            'nota_prova_titulos' => 'nullable|numeric',
            'prova_redacao' => 'required|boolean',
            'nota_prova_discursiva' => 'nullable|numeric',
            'nota_prova_discursiva2' => 'nullable|numeric',
        ]);

        Cargo::create($data);

        return redirect()->route('cargos.show')->with('success', 'Cargo cadastrado com sucesso!');
    }
}
