<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Veiculo;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', compact('vendas'));
    }


    public function create()
    {
        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        return view('vendas.create', compact('clientes', 'veiculos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'data_venda' => 'required|string|max:255',
            'valor_venda' => 'required',
            'id_cliente' => 'required|exists:clientes,id',
            'id_veiculo' => 'required|exists:veiculos,id',
        ]);

        Venda::create($request->all());

        return redirect()->route('vendas.index')->with('success', 'Venda registrada com sucesso!');
    }

    public function show($id)
    {
        $venda = Venda::findOrFail($id);
        return view('vendas.show', compact('venda'));
    }

    public function edit($id)
    {
        $venda = Venda::findOrFail($id);
        return view('vendas.edit', compact('venda'));
    }

    public function update(Request $request, $id)
    {
        $venda = Venda::findOrFail($id);
        // Atualize a venda com os dados do request aqui
        $venda->update($request->all());
        return redirect()->route('vendas.index')->with('success', 'Venda atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $venda = Venda::findOrFail($id);
        $venda->delete();
        return redirect()->route('vendas.index')->with('success', 'Venda excluída com sucesso!');
    }
}