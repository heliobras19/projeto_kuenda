<?php

use App\Http\Controllers\BancaController;
use App\Http\Controllers\BoletosController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipoRecursoController;
use App\Http\Controllers\TipoTituloController;
use App\Http\Controllers\UsuarioController;
use App\Models\TipoRecurso;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/formacao', function () {
    return view('formacao');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/desenvolvimento', function () {
    return view('desenvolvimento');
});


Route::get('/concursos', function () {
    return view('concursos');
});

Route::get('/dashboard', function () {
    return view('candidato.home');
});

Route::controller(ClienteController::class)->prefix('cliente')->group(function () {
    Route::get('/', 'index')->name('cliente'); // Exibe o formulário de login.
    Route::get('/novo', 'novo')->name('cliente.novo'); // Processa o login.
    Route::post('/novo_save', 'store')->name('clientes.store');
});

Route::controller(ConcursoController::class)->prefix('concurso')->group(function () {
    Route::get('/', 'index')->name('concurso'); // Exibe o formulário de login.
    Route::get('/novo', 'novo')->name('concurso.novo'); // Processa o login.
    Route::post('/novo_save', 'store')->name('concurso.store'); // Processa o login.
    Route::get('/andamento', 'andamento')->name('concurso.andamento'); //->middleware('check.concurso'); // Exibe a página inicial do concurso.
    Route::get('/todos', 'todos')->name('concurso.todos');//->middleware('check.concurso'); // Exibe a página inicial do concurso.
    Route::get('/editar', 'editar')->name('concurso.editar');//->middleware('check.concurso');
    Route::get('/encerrados', 'encerrados')->name('concurso.encerrados');//->middleware('check.concurso');
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
});

Route::controller(FinanceiroController::class)->prefix('financeiro')->group(function () {
    Route::get('/', 'index')->name('financeiro'); 
});

Route::controller(TipoRecursoController::class)->prefix('tipo_recurso')->group(function () {
    Route::get('/', 'index')->name('tipo_recurso'); 
    Route::get('/novo', 'novo')->name('tipo_recurso.novo'); 
});

Route::controller(TipoTituloController::class)->prefix('tipo_titulo')->group(function () {
    Route::get('/', 'index')->name('tipo_titulo'); 
    Route::get('/novo', 'novo')->name('tipo_titulo.novo'); 
});

Route::controller(UsuarioController::class)->prefix('usuario')->group(function () {
    Route::get('/', 'index')->name('usuario'); 
    Route::get('/novo', 'novo')->name('usuario.novo'); 
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
