<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
     public function index()
    {
        $recursos = Recurso::all();
        return view('recursos.index', compact('recursos'));
    }

    public function create()
    {
        return view('recursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'integer',
            'situacao' => 'string',
            'somente_dias_uteis' => 'boolean',
            'liberar_respostas' => 'boolean',
            'tipo_recurso' => 'string|nullable',
            'data_inicio' => 'date|nullable',
            'hora_inicio' => 'date_format:H:i|nullable',
            'data_fim' => 'date|nullable',
            'hora_fim' => 'date_format:H:i|nullable',
        ]);

        Recurso::create($request->all());

        return redirect()->route('recursos.index')->with('success', 'Recurso cadastrado com sucesso.');
    }

    public function show(Recurso $recurso)
    {
        return view('recursos.show', compact('recurso'));
    }

    public function edit(Recurso $recurso)
    {
        return view('recursos.edit', compact('recurso'));
    }

    public function update(Request $request, Recurso $recurso)
    {
        $request->validate([
            'codigo' => 'integer',
            'situacao' => 'string',
            'somente_dias_uteis' => 'boolean',
            'liberar_respostas' => 'boolean',
            'tipo_recurso' => 'string|nullable',
            'data_inicio' => 'date|nullable',
            'hora_inicio' => 'date_format:H:i|nullable',
            'data_fim' => 'date|nullable',
            'hora_fim' => 'date_format:H:i|nullable',
        ]);

        $recurso->update($request->all());

        return redirect()->route('recursos.index')->with('success', 'Recurso atualizado com sucesso.');
    }

    public function destroy(Recurso $recurso)
    {
        $recurso->delete();
        return redirect()->route('recursos.index')->with('success', 'Recurso excluído com sucesso.');
    }
}
