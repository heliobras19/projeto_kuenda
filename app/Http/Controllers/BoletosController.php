<?php

namespace App\Http\Controllers;

use App\Models\Boletos;
use Illuminate\Http\Request;

class BoletosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('boletos.novo');
    }

    public function novo()
    {
        return view('boletos.novo');
    }

    public function retorno()
    {
        return view('boletos.retornos');
    }

    public function localizar()
    {
        return view('boletos.localizar');
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
    public function show(Boletos $boletos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boletos $boletos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boletos $boletos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boletos $boletos)
    {
        //
    }
}
