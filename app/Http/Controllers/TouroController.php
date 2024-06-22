<?php

namespace App\Http\Controllers;

use App\Models\Touro;
use Illuminate\Http\Request;

class TouroController extends Controller
{
    // Lista todos os touros
    public function index()
    {
        $touros = Touro::all();
        return view('touros.index', compact('touros'));
    }

    // Mostra o formulário para criar um novo touro
    public function create()
    {
        return view('touros.create');
    }

    // Salva um novo touro
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
            'raça' => 'required',
        ]);

        Touro::create($request->all());
        return redirect()->route('touros.index')->with('success', 'Touro criado com sucesso.');
    }

    // Mostra um touro específico
    public function show(Touro $touro)
    {
        return view('touros.show', compact('touro'));
    }

    // Mostra o formulário para editar um touro
    public function edit(Touro $touro)
    {
        return view('touros.edit', compact('touro'));
    }

    // Atualiza um touro específico
    public function update(Request $request, Touro $touro)
    {
        $request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
            'raça' => 'required',
        ]);

        $touro->update($request->all());
        return redirect()->route('touros.index')->with('success', 'Touro atualizado com sucesso.');
    }

    // Deleta um touro específico
    public function destroy(Touro $touro)
    {
        $touro->delete();
        return redirect()->route('touros.index')->with('success', 'Touro deletado com sucesso.');
    }
}
