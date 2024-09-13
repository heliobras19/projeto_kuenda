<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function index(Request $request)
    {
        return view('candidato.home');
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
}
