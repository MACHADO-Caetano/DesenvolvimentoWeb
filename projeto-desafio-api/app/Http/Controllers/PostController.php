<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Responses\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request)
    // {
    //     //
    // }



    public function listar()
    {
        $post = Post::all();
        return ApiResponses::success('Lista de Filmes', $post);
    }

    public function listarPorId(int $id)
    {
        $post = Post::findOrFail($id);
        return ApiResponses::success('Filme:', $post);
    }

    public function salvar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo'=> 'required|string|max:200',
            'ano'=> 'required|numeric',
            'autor'=> 'required|string|max:150',
        ]);

        if ($validator->fails()){
            return ApiResponses::error('Erro de Validação', $validator->errors());
        }

        $post = Post::create($request->all());
        return ApiResponses::success('Filme salvo com sucesso!', $post);
    }

    public function editar(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'titulo'=> 'required|string|max:200',
            'ano'=> 'required|numeric',
            'autor'=> 'required|string|max:150',
        ]);

        if ($validator->fails())
        {
            return ApiResponses::error('Erro de Validação', $validator->errors());
    }

    $post = Post::findOrFail($id);
    $post->update($request->all());

    return ApiResponses::success('Filme atualizado com sucesso', $post);
    }

    public function deletar(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return ApiResponses::success('Filme removido com sucesso!', $post);
    }
}
