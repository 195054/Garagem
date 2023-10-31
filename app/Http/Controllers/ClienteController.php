<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $clientes = Cliente::paginate(10);

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente([
            'cpf' => $request->input('cpf'),
            'nome' => $request->input('nome'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
        ]);
        $clientes->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um cliente no banco de dados com o ID fornecido
        $clientes = Cliente::findOrFail($id);
        // Retorna a view 'clientes.show' e passa o cliente como parâmetro
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um cliente no banco de dados com o ID fornecido
        $clientes = Cliente::findOrFail($id);
        // Retorna a cliente 'clientes.edit' e passa o cliente como parâmetro
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $clientes = Cliente::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $clientes->cpf = $request->input('cpf');
        $clientes->nome = $request->input('nome');
        $clientes->telefone = $request->input('telefone');
        $clientes->endereco = $request->input('endereco');
        // Salva as alterações no autor
        $clientes->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $clientes = Cliente::findOrFail($id);
        // Exclui o autor do banco de dados
        $clientes->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('clientes.index');
    }
}

