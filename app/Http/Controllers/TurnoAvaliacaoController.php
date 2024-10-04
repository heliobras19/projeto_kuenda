<?php

namespace App\Http\Controllers;

use App\Models\TurnoAvaliacao;
use Illuminate\Http\Request;

class TurnoAvaliacaoController extends Controller
{
     public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'concurso_id' => 'required|exists:concursos,id',
            'data' => 'required|date',
            'turno' => 'required|string|max:50',
            'hora_prova' => 'required|date_format:H:i',
            'hora_abre_portao' => 'required|date_format:H:i',
            'hora_fecha_portao' => 'required|date_format:H:i',
            'cor_relatorio' => 'nullable|string|max:50',
        ]);
        // Criação do novo registro
        TurnoAvaliacao::create($request->all());

        // Redireciona de volta para a tela de origem com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Turno de avaliação criado com sucesso!');
    }

    public function destroy($id)
    {
        // Localiza o registro pelo ID
        $turnoAvaliacao = TurnoAvaliacao::findOrFail($id);
        
        // Remove o registro
        $turnoAvaliacao->delete();

        // Redireciona de volta para a tela de origem com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Turno de avaliação excluído com sucesso!');
    }
}
