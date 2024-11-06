<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('pokemon', [PokemonController::class, 'list']);
Route::get('pokemon/create', [PokemonController::class, 'create']);
Route::post('pokemon', [PokemonController::class, 'register']);
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemon/{id}', [PokemonController::class, 'update']);
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

