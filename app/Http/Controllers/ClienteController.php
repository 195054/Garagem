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
        $clientes = Cliente::all();
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
        $cliente = new Cliente([
            'cpf' => $request->input('cpf'),
            'nome' => $request->input('nome'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
        ]);
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Cliente::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Cliente::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Cliente::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $autor->cpf = $request->input('cpf');
        $autor->nome = $request->input('nome');
        $autor->telefone = $request->input('telefone');
        $autor->endereco = $request->input('endereco');
        // Salva as alterações no autor
        $autor->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $autor = Cliente::findOrFail($id);
        // Exclui o autor do banco de dados
        $autor->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('clientes.index');
    }
}
