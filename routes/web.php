<?php

use App\Http\Controllers\BancaController;
use App\Http\Controllers\BoletosController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CargoInscricaoController;
use App\Http\Controllers\CidadeAvaliacaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TipoRecursoController;
use App\Http\Controllers\TipoTituloController;
use App\Http\Controllers\TurnoAvaliacaoController;
use App\Http\Controllers\UsuarioController;
use App\Models\TipoRecurso;
use App\Services\BoletoData;
use App\Services\BoletoService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    $boleto = new BoletoData();
    return $boleto->data(1, "helio", "heliobras3@hotmail.com", "123.3243-232/23", "11", "936500717", "150");
});

Auth::routes();

Route::get('/formacao', function () {
    return view('formacao');
});

Route::get('/cargos/create', [CargoController::class, 'show'])->name('cargos.show');
Route::post('/cargos/store', [CargoController::class, 'store'])->name('cargos.store');

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/desenvolvimento', function () {
    return view('desenvolvimento');
});


Route::get('/concorrer', [SiteController::class, 'concurso']);
Route::get('concorrer/{id}', [SiteController::class, 'saiba_mais'])->name('concurso_info');
Route::get('inscrever/{id}', [SiteController::class, 'candidatar_sepers'])->name('candidatar_sepone');
Route::get('/dashboard', function () {
    return view('candidato.home');
});

Route::controller(ClienteController::class)->prefix('cliente')->group(function () {
    Route::get('/', 'index')->name('cliente'); // Exibe o formulário de login.
    Route::get('/novo', 'novo')->name('cliente.novo'); // Processa o login.
    Route::post('/novo_save', 'store')->name('clientes.store');
});

Route::post('cargo', [CargoInscricaoController::class, 'store'])->name('cargo_inscricao.store');
Route::delete('/cargo/{id}', [CargoInscricaoController::class, 'destroy'])->name('cargo_inscricao.delete');

Route::post('/turno-avaliacao', [TurnoAvaliacaoController::class, 'store'])->name('turno-avaliacao.store');
Route::delete('/turno-avaliacao/{id}', [TurnoAvaliacaoController::class, 'destroy'])->name('turno-avaliacao.destroy');

Route::post('/cidade-avaliacao', [CidadeAvaliacaoController::class, 'store'])->name('cidades.store');
Route::delete('/cidade-destroy/{id}', [CidadeAvaliacaoController::class, 'destroy'])->name('cidades.destroy');

Route::post('publicacao', [PublicacaoController::class, 'store'])->name('publicacao.store');
Route::delete('/publicacao/{id}', [PublicacaoController::class, 'destroy'])->name('publicacao.destroy');
Route::controller(ConcursoController::class)->prefix('concurso')->group(function () {
    Route::get('/', 'index')->name('concurso'); // Exibe o formulário de login.
    Route::get('/novo', 'novo')->name('concurso.novo'); // Processa o login.
    Route::post('/novo_save', 'store')->name('concurso.store'); // Processa o login.
    Route::post('/novo_save_update/{id}', 'update')->name('concurso.update'); // Processa o login.
    Route::get('/andamento', 'andamento')->name('concurso.andamento'); //->middleware('check.concurso'); // Exibe a página inicial do concurso.
    Route::get('/todos', 'todos')->name('concurso.todos');//->middleware('check.concurso'); // Exibe a página inicial do concurso.
    Route::get('/editar', 'editar')->name('concurso.editar');//->middleware('check.concurso');
    Route::get('/encerrados', 'encerrados')->name('concurso.encerrados');//->middleware('check.concurso');

    Route::get('/{id}/visualizar', 'consultar')->name('concurso.consultar');
    Route::get('/{id}/avaliacao', 'avaliacao')->name('concurso.avaliacao');
    Route::get('/{id}/publicacao', 'publicacao')->name('concurso.publicacao');
    Route::get('/{id}/boletos', 'boletos')->name('concurso.boletos');
    Route::get('/{id}/cargos', 'cargos')->name('concurso.cargos');
    Route::get('/{id}/cadastro_recursos', 'cadastro_recursos')->name('concurso.cadastro_recursos');
    Route::get('/{id}/recursos', 'recursos')->name('concurso.recursos');
    Route::get('/{id}/retornos', 'retornos')->name('concurso.retornos');
    Route::get('/{id}/inscricao', 'inscricao')->name('concurso.inscricao');
    Route::get('/{id}/afrodescendencia', 'afrodescendencia')->name('concurso.afrodescendencia');
    Route::get('/{id}/pcd', 'pcd')->name('concurso.pcd');
    Route::get('/{id}/cota_adicional', 'cota_adicional')->name('concurso.cota_adicional');
    Route::get('/{id}/ensalamento', 'ensalamento')->name('concurso.ensalamento');
    Route::get('/{id}/material_grafica', 'material_grafica')->name('concurso.material_grafica');
    Route::get('/{id}/pedidos_isencao', 'pedidos_isencao')->name('concurso.pedidos_isencao');
    Route::get('/{id}/relatorios', 'relatorios')->name('concurso.relatorios');
    Route::get('/{id}/relatorios_novos', 'relatorios_novos')->name('concurso.relatorios_novos');
    Route::get('/{id}/titulos', 'titulos')->name('concurso.titulos');
    Route::get('/{id}/usuarios', 'usuarios')->name('concurso.usuarios');
    Route::get('/{id}/necessidade_prova', 'necessidade_prova')->name('concurso.necessidade_prova');
    Route::get('/{id}/indigenas', 'indigenas')->name('concurso.indigenas');
    Route::get('/{id}/correcao', 'correcao')->name('concurso.correcao');
});

Route::controller(CandidatoController::class)->prefix('candidato')->group(function () {
    Route::get('/', 'index')->name('candidato'); // Exibe o formulário de login.
    Route::post('/login', 'login')->name('candidato.login'); // Processa o login.
    Route::get('/home', 'home')->name('candidato.home'); //->middleware('check.candidato'); // Exibe a página inicial do candidato.
    Route::get('/anexos/documento', 'anexo_documento')->name('candidato.anexo.documento');//->middleware('check.candidato'); // Exibe a página inicial do candidato.
    Route::get('/edit', 'edit')->name('candidato.edit');//->middleware('check.candidato');
    Route::post('/logout', 'logout')->name('candidato.logout');//->middleware('check.candidato');
});

Route::controller(BancaController::class)->prefix('banca')->group(function () {
    Route::get('/', 'index')->name('banca'); 
    Route::get('/nova', 'novo')->name('banca.novo'); 
});

Route::controller(BoletosController::class)->prefix('boleto')->group(function () {
    Route::get('/', 'index')->name('boleto'); 
    Route::get('/novo', 'novo')->name('boleto.novo'); 
    Route::get('/retornos', 'retorno')->name('boleto.retornos'); 
    Route::get('/localizar', 'localizar')->name('boleto.localizar'); 
});

Route::controller(FinanceiroController::class)->prefix('financeiro')->group(function () {
    Route::get('/', 'index')->name('financeiro'); 
});

Route::controller(TipoRecursoController::class)->prefix('tipo_recurso')->group(function () {
    Route::get('/', 'index')->name('tipo_recurso'); 
    Route::get('/novo', 'novo')->name('tipo_recurso.novo'); 
    Route::post('/recurso_store', 'store')->name('tipo_recurso.store');
});

Route::controller(TipoTituloController::class)->prefix('tipo_titulo')->group(function () {
    Route::get('/', 'index')->name('tipo_titulo'); 
    Route::get('/novo', 'novo')->name('tipo_titulo.novo'); 
    Route::post('/recurso_store', 'store')->name('tipo_titulo.store');
});

Route::controller(UsuarioController::class)->prefix('usuario')->group(function () {
    Route::get('/', 'index')->name('usuario'); 
    Route::get('/novo', 'novo')->name('usuario.novo'); 
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');