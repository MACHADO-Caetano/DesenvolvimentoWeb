<?php

use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/filme',[FilmeController::class, 'listarTodos']);
Route::get('/filme/{id}',[FilmeController::class,'listarPeloId']);
Route::post('/filme',[FilmeController::class,'criar']);
Route::put('/filme/{id}',[FilmeController::class,'editar']);
Route::delete('/filme/{id}',[FilmeController::class,'remover']);