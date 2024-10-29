<?php

namespace App\Http\Controllers;

use App\Models\TipoRecurso;
use Illuminate\Http\Request;

class TipoRecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = TipoRecurso::all();
        return view('tipo_recurso.listagem', compact('tipo'));
    }

    public function novo()
    {
        return view('tipo_recurso.novo');
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
        TipoRecurso::create($request->all());
        return redirect()->route('tipo_recurso');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoRecurso $tipoRecurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoRecurso $tipoRecurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoRecurso $tipoRecurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoRecurso $tipoRecurso)
    {
        //
    }
}
