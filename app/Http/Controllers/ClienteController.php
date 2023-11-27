<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) // metódo de pesquisa
    {
        
        $search = $request->input('search');
        $clientes = Cliente::where('nome', 'like', '%'.$search.'%')
                         ->orWhere('cpf', 'like', '%'.$search.'%')
                         ->paginate(10);
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
        $cliente = new Cliente([
            'cpf' => $request->input('cpf'),
            'nome' => $request->input('nome'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
        ]);
        $cliente->save();
        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um cliente no banco de dados com o ID fornecido
        $cliente = Cliente::findOrFail($id);
        // Retorna a view 'clientes.show' e passa o cliente como parâmetro
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um cliente no banco de dados com o ID fornecido
        $cliente = Cliente::findOrFail($id);
        // Retorna a cliente 'clientes.edit' e passa o cliente como parâmetro
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cliente = Cliente::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $cliente->cpf = $request->input('cpf');
        $cliente->nome = $request->input('nome');
        $cliente->telefone = $request->input('telefone');
        $cliente->endereco = $request->input('endereco');
        // Salva as alterações no autor
        $cliente->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cliente = Cliente::findOrFail($id);
        // Exclui o autor do banco de dados
        $cliente->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('clientes.index')->with('success', 'Cliente Excluido com sucesso!');
    }
}

