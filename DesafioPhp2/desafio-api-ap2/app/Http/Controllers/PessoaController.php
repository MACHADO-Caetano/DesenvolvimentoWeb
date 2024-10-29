<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{
    public function listarTodos()
    {
        $pessoa = Pessoa::all();
        return response()->json([
            'status' => true,
            'message' => 'Lista de pessoas:',
            'data' => $pessoa
        ], 200);
    }

    public function listarPeloId($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Pessoa selecionada.',
            'data' => $pessoa
        ], 200);
    }

    public function criar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:200',
            'idade' => 'required|numeric',
            'cpf'=> 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Erro na criação.',
                'errors' => $validator->errors()
            ], 422);
        }

        $pessoa = Pessoa::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Criação bem sucedida!',
            'data' => $pessoa
        ], 201);
    }

    public function editar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:200',
            'idade' => 'required|numeric' . $id,
            'cpf'=> 'required|string|max:15'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Erro na edição.',
                'errors' => $validator->errors()
            ], 422);
        }

        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Pessoa Atualizada',
            'data' => $pessoa
        ], 200);
    }

    public function remover($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Pessoa removida com sucesso!'
        ], 204);
    }
}
