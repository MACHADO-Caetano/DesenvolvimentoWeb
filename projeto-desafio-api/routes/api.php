<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route ::get('/user',function (Request $request){
    return $request->user();
})->middleware('auth:sanctum');

Route ::get('/post', [PostController::class,'listar']);
Route ::get('/post/{id}', [PostController::class,'listarPeloId']);
Route ::post('/post', [PostController::class,'salvar']);
Route ::put('/post{id}', [PostController::class,'editar']);
Route ::delet('/post/{id}', [PostController::class,'deletar']);