<?php

namespace App\Http\Controllers;

use App\Models\Concurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('concurso.todos');
    }

    public function todos()
    {
        return view('concurso.todos');
    }

    public function andamento()
    {
        return view('concurso.andamento');
    }

    public function novo()
    {
        return view('concurso.novo');
    }

    public function encerrados()
    {
        return view('concurso.encerrados');
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
        //
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
