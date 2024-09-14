<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\HomeController;
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


Route::controller(ConcursoController::class)->prefix('concurso')->group(function () {
    Route::get('/', 'index')->name('concurso'); // Exibe o formulário de login.
    Route::get('/novo', 'novo')->name('concurso.novo'); // Processa o login.
    Route::get('/andamento', 'andamento')->name('concurso.andamento'); //->middleware('check.concurso'); // Exibe a página inicial do concurso.
    Route::get('/todos', 'todos')->name('concurso.todos');//->middleware('check.concurso'); // Exibe a página inicial do concurso.
    Route::get('/editar', 'editar')->name('concurso.editar');//->middleware('check.concurso');
    Route::get('/encerrados', 'encerrados')->name('concurso.encerrados');//->middleware('check.concurso');
});

Route::controller(CandidatoController::class)->prefix('candidato')->group(function () {
    Route::get('/', 'login')->name('candidato'); // Exibe o formulário de login.
    Route::post('/login', 'login')->name('candidato.login'); // Processa o login.
    Route::get('/home', 'index')->name('candidato.home'); //->middleware('check.candidato'); // Exibe a página inicial do candidato.
    Route::get('/anexos/documento', 'anexo_documento')->name('candidato.anexo.documento');//->middleware('check.candidato'); // Exibe a página inicial do candidato.
    Route::get('/edit', 'edit')->name('candidato.edit');//->middleware('check.candidato');
    Route::post('/logout', 'logout')->name('candidato.logout');//->middleware('check.candidato');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
