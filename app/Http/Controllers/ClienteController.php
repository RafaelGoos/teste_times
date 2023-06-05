<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->cpf = $request->cpf;
        $cliente->placa_carro = $request->placa_carro;
        $cliente->marca = $request->marca;
        $cliente->cor = $request->cor;
        $cliente->save();

        return response()->json($cliente, 201);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->cpf = $request->cpf;
        $cliente->placa_carro = $request->placa_carro;
        $cliente->marca = $request->marca;
        $cliente->cor = $request->cor;
        $cliente->save();

        return response()->json($cliente, 200);
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        $cliente->delete();

        return response()->json(['message' => 'Cliente removido com sucesso'], 200);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        return response()->json($cliente, 200);
    }

    public function consultaPorFinalPlaca($numero)
    {
        $clientes = Cliente::where('placa_carro', 'like', '%' . $numero)->get();

        return response()->json($clientes, 200);
    }

}
