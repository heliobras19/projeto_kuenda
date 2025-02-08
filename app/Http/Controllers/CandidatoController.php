<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CandidatoController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('candidato');
    // }


    public function home(Request $request)
    {
        return view('candidato.home');
    }

    public function index(Request $request)
    {
        return view('candidato.listagem');
    }

    public function edit(Request $request)
    {
        return view('candidato.edit');
    }



    public function login(Request $request)
    {

        if ($request->isMethod('post')) {
            //TODO: check if the request method is POST
            $request->session()->put('candidato_logged_in', true);
            return redirect()->route('candidato.home');
        }
        // // $validated = $request->validate([
        // //     'cpf' => 'required',
        // //     'password' => 'required|min:6',
        // // ]);

        // // $logado = 1;

        // // if ($logado) {
        // //     return view('candidato.home', ['logado' => true]);
        // // } else {
        // // }

        return view('candidato.login');
    }

    public function anexo_documento()
    {
        return view('candidato.anexos.anexo_documento');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('candidato_logged_in');
        return redirect()->route('candidato');
    }

      public function store(Request $request)
    {
        try {
            // Validação dos dados recebidos
            $validator =    Validator::make($request->all(), [
                'cpf' => 'required|string|max:255|unique:candidatos',
                'nome' => 'required|string|max:255',
                'email' => 'required|email|unique:candidatos',
                'telefone' => 'required|string|max:20',
                'sexo' => 'required|string|max:10',
                'data_nascimento' => 'required|date',
                'escolaridade' => 'required|string|max:255',
                'naturalidade' => 'required|string|max:255',
                'raça' => 'required|string|max:255',
                'uf' => 'required|string|max:2',
                'tipo_endereco' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'cidade' => 'required|string|max:255',
                'lougradouro' => 'required|string|max:255',
                'telefone' => 'required|string|max:20',
                'celular' => 'nullable|string|max:20',
                'nome_social' => 'nullable|string|max:255',
                'homologado' => 'nullable|string|in:indeferido(a),aprovado(a)',
            ]);

            // Se a validação falhar
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Erro na validação dos dados',
                    'errors' => $validator->errors()
                ], 422); // HTTP 422 Unprocessable Entity
            }

            // Criação do candidato com os dados recebidos
            $candidato = Candidato::create([
                'cpf' => $request->cpf,
                'nome' => $request->nome,
                'senha' => Hash::make($request->senha), // Senha padrão
                'email' => $request->email,
                'mae' => $request->mae,
                'pai' => $request->pai,
                'data_nascimento' => $request->data_nascimento,
                'sexo' => $request->sexo,
                'dta_exp' => $request->dta_exp,
                'org_exp' => $request->org_exp,
                'numero_nsi' => $request->numero_nsi,
                'telefone' => $request->telefone,
                'fax' => $request->fax,
                'celular' => $request->celular,
                'escolaridade' => $request->escolaridade,
                'naturalidade' => $request->naturalidade,
                'raça' => $request->raça,
                'uf' => $request->uf,
                'tipo_endereco' => $request->tipo_endereco,
                'estado' => $request->estado,
                'cidade' => $request->cidade,
                'lougradouro' => $request->lougradouro,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'nome_social' => $request->nome_social,
                'homologado' => $request->homologado ?? 'indeferido(a)', // Valor padrão
            ]);

            // Retorno de resposta com sucesso
            return response()->json([
                'message' => 'Candidato criado com sucesso!',
                'candidato' => $candidato
            ], 201); // HTTP 201 Created

        } catch (\Exception $e) {
            // Tratamento de erro com resposta JSON
            return response()->json([
                'message' => 'Erro ao criar candidato',
                'error' => $e->getMessage()
            ], 500); // HTTP 500 Internal Server Error
        }
    }
    
}
