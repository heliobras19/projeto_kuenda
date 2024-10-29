<?php

namespace App\Http\Controllers;

use App\Models\TipoTitulo;
use Illuminate\Http\Request;

class TipoTituloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = TipoTitulo::all();
        return view('tipo_titulo.listagem', compact('tipo'));
    }

    public function novo()
    {
        return view('tipo_titulo.novo');
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
        TipoTitulo::create($request->all());
        return redirect()->route('tipo_titulo');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoTitulo $tipoTitulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoTitulo $tipoTitulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoTitulo $tipoTitulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoTitulo $tipoTitulo)
    {
        //
    }
}
