<?php

use App\Http\Controllers\CandidatoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('candidatos', [CandidatoController::class, 'store']);