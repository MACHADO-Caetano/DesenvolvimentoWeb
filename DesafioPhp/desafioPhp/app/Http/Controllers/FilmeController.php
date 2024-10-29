<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmeController extends Controller
{
    public function listarTodos(Request $request)
    {
        $filme = Filme::all();
        return response()->json([
            'status' => true,
            'message' => 'Filme cadastrado com sucesso',
            'data' => $filme
        ], 200);
    }

    public function listarPeloId($id)
    {
        $flime = Filme::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Seleção:',
            'data' => $flime
        ], 200);
    }

    public function criar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|max:200',
            'ano' => 'required|integer',
            'diretor'=> 'required|string|max:150'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Não foi possível cadastrar o filme.',
                'errors' => $validator->errors()
            ], 422);
        }

        $filme = Filme::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Filme cadastrado com sucesso!',
            'data' => $filme
        ], 201);
    }

    public function editar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|max:250',
            'ano' => 'required|integer',
            'diretor' => 'required|string|max:150'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Erro na atualização',
                'errors' => $validator->errors()
            ], 422);
        }

        $filme = Filme::findOrFail($id);
        $filme->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Filme editado com sucesso!',
            'data' => $filme
        ], 200);
    }

    public function remover($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Filme removido com sucesso!'
        ], 204);
    }
}
