<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\CargoInscricao;
use Illuminate\Http\Request;

class CargoInscricaoController extends Controller
{

    private function formatToFloat($value) {
    // Remove "R$" e pontos, substitui a vírgula por ponto
    $formatted = str_replace(['R$', '.', ','], ['', '', '.'], $value);
    return (float)$formatted; // Converte para float
    }
    public function store(Request $request) {
        //return $request;
        try {
            $request->validate([
            'cargo' => 'required', 
            'escolaridade' => 'required',
            'valor_inscricao' => 'required',
            'vagas' => 'required',
            'concurso_id' => 'required',
             'prova_pdf' => 'required|mimes:pdf|max:2048'
            ]); 

            $anexoPath = null;
            if ($request->hasFile('prova_pdf')) {
                $anexoPath = $request->file('prova_pdf')->store('anexos_provas', 'public');
                $request->merge(['anexo_prova' => $anexoPath]);
            }

            if ($request->has('valor_inscricao')) {
               $request->merge(['valor_inscricao' => $this->formatToFloat($request->input('valor_inscricao'))]);
            }

            if ($request->has('salario_inicial')) {
                $request->merge(['salario_inicial' => $this->formatToFloat($request->input('salario_inicial'))]);
            }
            //return $request;
            CargoInscricao::create($request->all());
            return redirect()->back()->with('success', 'Cargo criado com sucesso!');
        } catch (\Throwable $th) {
          return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id){
        $cargo = Cargo::find($id);
        $cargo->delete();
        return  redirect()->back()->with('success', 'Cargo de avaliação excluído com sucesso!');
    }
}
