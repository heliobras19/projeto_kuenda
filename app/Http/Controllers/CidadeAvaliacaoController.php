<?php

namespace App\Http\Controllers;

use App\Models\CidadeAvaliacao;
use Illuminate\Http\Request;

class CidadeAvaliacaoController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'concurso_id' => 'required',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
        ]);

        // Encontrar a cidade e atualizar
        CidadeAvaliacao::create($request->only(['cidade', 'estado', 'concurso_id']));

        // Redirecionamento com mensagem de sucesso
        return redirect()->back()->with('success', 'Cidade atualizada com sucesso!');
    }

     public function destroy($id)
    {
        $cidade = CidadeAvaliacao::findOrFail($id);
        $cidade->delete();

        // Redirecionamento com mensagem de sucesso
        return redirect()->back()->with('success', 'Cidade removida com sucesso!');
    }
}
