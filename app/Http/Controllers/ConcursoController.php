<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Concurso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concursos = Concurso::with('Cliente')->get();
        return view('concurso.todos', compact('concursos'));
    }

    public function todos()
    {
        $concursos = Concurso::with('Cliente')->get();
        return view('concurso.todos', compact('concursos'));
    }

    public function andamento()
    {
        $concursos = Concurso::with('Cliente')->where('status', 'Aberto')->get();
         return view('concurso.todos', compact('concursos'));
    }

    public function novo()
    {
        $clientes = Cliente::all();
        return view('concurso.novo', compact('clientes'));
    }

    public function consultar()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.concurso',  compact('clientes'));
    }

    public function avaliacao()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.avaliacao',  compact('clientes'));
    }

    public function publicacao()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.publicacao',  compact('clientes'));
    }

    public function boletos()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.boletos',  compact('clientes'));
    }


    public function cargos()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.cargos',  compact('clientes'));
    }

    public function recursos()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.recursos',  compact('clientes'));
    }

    public function retornos()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.retornos',  compact('clientes'));
    }

    public function inscricao()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.inscricao',  compact('clientes'));
    }

    public function correcao()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.correcao',  compact('clientes'));
    }

    public function afrodescendencia()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.afrodescendente',  compact('clientes'));
    }

    public function pcd()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.pcd',  compact('clientes'));
    }

    /*public function avaliacao()
    {
        $clientes = Cliente::all();
        return view('concurso.menus.avaliacao',  compact('clientes'));
    }*/

    public function encerrados()
    {
        $concursos = Concurso::with('Cliente')->where('status', 'Encerrado')->get();
         return view('concurso.todos', compact('concursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
       try {
        $validatedData = $request->validate([
            'entidade' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'descricao' => 'required|string',
            'edital_numero' => 'required|string|max:255',
            'modalidade' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'situacao' => 'required|string|max:255',
            'descricao_inicial' => 'required|string',
            'descricao_publicacoes' => 'required|string',
            'tipo_inscricao' => 'required|string|max:255',
            'codigo_certame' => 'required|string|max:255',
            'data_inicio' => 'required|date',
            'hora_inicio' => 'required',
            'data_fim' => 'required|date',
            'hora_fim' => 'required',
            'data_pror' => 'nullable|date',
            'hora_pror' => 'nullable',
            'numero_inscricoes' => 'required|string|max:255',
            'numero_inscricoes_turno' => 'required|string|max:255',
            'data_limite_estatuto_idoso' => 'nullable|date',
            'vagas_negros_pardos' => 'required|boolean',
            'informar_dependentes' => 'required|boolean',
            'quantidade_tipo_prova' => 'required|integer',
            'data_final_isencao' => 'nullable|date',
            'hora_final_isencao' => 'nullable',
            'numero_isencoes' => 'required|integer',
            'permite_anexo_documentos' => 'required|boolean',
            'data_final_anexo' => 'nullable|date',
            'hora_final_anexo' => 'nullable',
            'permite_anexo_documentos_pcd' => 'required|boolean',
        ]);
        
        $validatedData['codigo_concurso'] = Str::uuid();
        //return $validatedData;
        Concurso::create($validatedData);

        return redirect()->route('concurso')->with('success', 'Concurso criado com sucesso!');
    
       } catch (\Throwable $th) {
        dd($th->getMessage());
       } 
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Concurso $concurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concurso $concurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concurso $concurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concurso $concurso)
    {
        //
    }
}
