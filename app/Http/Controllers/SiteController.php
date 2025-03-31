<?php

namespace App\Http\Controllers;

use App\Models\CargoInscricao;
use App\Models\Concurso;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function concurso () {
        $concursos = Concurso::where('status', 'Aberto')->with('cliente')->get();
        $total = count($concursos);
        return view('concursos', compact('concursos', 'total'));
    }

    public function saiba_mais ($id) {
        $concurso = Concurso::with('cliente', 'publicacoes', 'cargos')->find($id);
    //    echo "<pre>";
        // print_r(["pub" =>$concurso->publicacoes]);
        // return;
        return view('info_concursos', compact('concurso'));
    }

    public function candidatar_sepers($id, Request $request) {
        $step = 1;
        if ($request->has('step')) {
            $step = $request->step;
        }
        $cargo_inscricao = CargoInscricao::with('concurso.cliente')->find($id);
        return view('inscricao', compact('cargo_inscricao', 'step'));
    }
}
