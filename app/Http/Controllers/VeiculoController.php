<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $veiculos = Veiculo::paginate(10);

        return view('veiculos.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $veiculos = new Veiculo([
            'placa' => $request->input('placa'),
            'modelo' => $request->input('modelo'),
            'marca' => $request->input('marca'),
            'valor' => $request->input('valor'),
            'cor' => $request->input('cor'),
            'ano' => $request->input('ano'),
        ]);
        $veiculos->save();
        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um Veiculo no banco de dados com o ID fornecido
        $veiculos = Veiculo::findOrFail($id);
        // Retorna a view 'veiculos.show' e passa o Veiculo como parâmetro
        return view('veiculos.show', compact('veiculos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um Veiculo no banco de dados com o ID fornecido
        $veiculos = Veiculo::findOrFail($id);
        // Retorna a Veiculo 'veiculos.edit' e passa o veiculo como parâmetro
        return view('veiculos.edit', compact('veiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $veiculos = Veiculo::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $veiculos->placa = $request->input('placa');
        $veiculos->modelo = $request->input('modelo');
        $veiculos->marca = $request->input('marca');
        $veiculos->valor = $request->input('valor');
        $veiculos->cor = $request->input('cor');
        $veiculos->ano = $request->input('ano');
        // Salva as alterações no autor
        $veiculos->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('veiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $veiculos = Veiculo::findOrFail($id);
        // Exclui o autor do banco de dados
        $veiculos->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('veiculos.index');
    }
}

