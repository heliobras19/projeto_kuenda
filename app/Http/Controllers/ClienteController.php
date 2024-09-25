<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.listagem', ['clientes' => $clientes]);
    }

    public function novo()
    {
        return view('clientes.novo');
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
        try {
            $validated = $request->validate([
            'nome' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'endereco' => 'required',
            'cep' => 'nullable',
            'telefone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'required|email|unique:clientes',
            'site' => 'nullable',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validação do logo
        ]);
        $validated['codigo'] = Str::uuid();
        // Upload do logo, se existir
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validated['logo'] = $logoPath;
        }

        // Criar novo cliente
        Cliente::create($validated);

        return redirect()->route('cliente');
        } catch (Exception $th) {
            dd($th->getMessage());
        }
        // Validação dos dados
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        // Validação dos dados
        $validated = $request->validate([
            'codigo' => 'required|unique:clientes,codigo,' . $cliente->id,
            'nome' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'endereco' => 'required',
            'cep' => 'nullable',
            'telefone' => 'nullable',
            'fax' => 'nullable',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'site' => 'nullable',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload do logo, se existir
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validated['logo'] = $logoPath;
        }

        // Atualizar cliente
        $cliente->update($validated);

        return redirect()->back()->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
