<?php

namespace App\Http\Controllers\Api;

use App\Produto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProdutoRequest as Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = \Auth::user()->id;
        return Produto::create($data);
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json([
                'error' => 'Produto não encontrado'
            ], 404);
        }

        return $produto;
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json([
                'error' => 'Produto não encontrado'
            ], 404);
        }

        $produto->update($request->all());
        return $produto;
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json([
                'error' => 'Produto não encontrado'
            ], 404);
        }

        // $this->authorize('delete', $produto);

        $produto->delete();
        return $produto;
    }
}
