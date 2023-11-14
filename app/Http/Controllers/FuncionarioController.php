<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $funcionarios = Funcionario::paginate(10);

        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $funcionarios = new Funcionario([
            'matricula' => $request->input('matricula'),
            'cargo' => $request->input('cargo'),
            'telefone' => $request->input('telefone'),
            'nome' => $request->input('nome'),
        ]);
        $funcionarios->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um Funcionario no banco de dados com o ID fornecido
        $funcionarios = Funcionario::findOrFail($id);
        // Retorna a view 'funcionarios.show' e passa o Funcionario como parâmetro
        return view('funcionarios.show', compact('funcionarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um Funcionario no banco de dados com o ID fornecido
        $funcionarios = Funcionario::findOrFail($id);
        // Retorna a Funcionario 'funcionarios.edit' e passa o Funcionario como parâmetro
        return view('funcionarios.edit', compact('funcionarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $funcionarios = Funcionario::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $funcionarios->matricula = $request->input('matricula');
        $funcionarios->cargo = $request->input('cargo');
        $funcionarios->telefone = $request->input('telefone');
        $funcionarios->nome = $request->input('nome');
        // Salva as alterações no autor
        $funcionarios->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $funcionarios = Funcionario::findOrFail($id);
        // Exclui o autor do banco de dados
        $funcionarios->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('funcionarios.index');
    }
}

