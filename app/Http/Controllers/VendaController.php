<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\Funcionario;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::paginate(10);
        return view('vendas.index', compact('vendas'));
    }


    public function create()
    {
        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        $funcionarios = Funcionario::all();
        return view('vendas.create', compact('clientes', 'veiculos', 'funcionarios'));
    }

    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'É necessário preencher o campo título.',
            'resumo.required'  => 'É necessário preencher o campo resumo.',
        ];

        $request->validate([
            'data_venda' => 'required|string|max:255',
            'valor_venda' => 'required',
            'id_cliente' => 'required|exists:clientes,id',
            'id_veiculo' => 'required|exists:veiculos,id',
            'id_funcionario' => 'required|exists:funcionarios,id',
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

        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        $funcionarios = Funcionario::all();

        return view('vendas.edit', compact('venda', 'clientes', 'funcionarios', 'veiculos'));
    }

    public function update(Request $request, string $id)
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