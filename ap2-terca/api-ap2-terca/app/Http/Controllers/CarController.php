<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function listar()
    {
        $car = Car::all();
        return response()->json([
            'status' => true,
            'message' => 'Lista de Carros:',
            'data' => $car
        ], 200);
    }

    public function listarPelaId(int $id)
    {
        $car = Car::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Carro selecionado:',
            'data' => $car
        ], 200);
    }

    public function criar(Request $request){
        $validator = Validator::make($request->all(), [
            'placa' => 'required|string|max:10',
            'quilometragem' => 'required|numeric',
            'modelo'=> 'required|string|max:50',
            'marca'=> 'required|string|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Erro na criação.',
                'errors' => $validator->errors()
            ], 422);
        }

        $car = Car::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Registro criado com sucesso!',
            'data' => $car
        ], 201);
    }

    public function editar(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'placa' => 'required|string|max:10',
            'quilometragem' => 'required|int',
            'modelo'=> 'required|string|max:50',
            'marca'=> 'required|string|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Atualização comprometida, algum erro detectado.',
                'errors' => $validator->errors()
            ], 422);
        }

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Registro atualizado com sucesso!',
            'data' => $car
        ], 200);
    }

    public function remover(int $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Registro removido com sucesso!'
        ], 204);
    }
}
