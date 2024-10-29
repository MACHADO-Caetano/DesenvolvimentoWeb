<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/pessoa', [PessoaController::class, 'listarTodos']);
Route::get('/pessoa/{id}', [PessoaController::class, 'listarPeloId']);
Route::post('/pessoa', [PessoaController::class, 'criar']);
Route::put('/pessoa/{id}', [PessoaController::class,'editar']);
Route::delete('/pessoa/{id}', [PessoaController::class,'remover']);
