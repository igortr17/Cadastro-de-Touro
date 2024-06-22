<?php

namespace App\Http\Controllers;

use App\Models\Touro;
use Illuminate\Http\Request;

class TouroController extends Controller
{
    
    public function index()
    {
        $touros = Touro::all();
        return view('touros.index', compact('touros'));
    }

    
    public function create()
    {
        return view('touros.create');
    }

    
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

    
    public function show(Touro $touro)
    {
        return view('touros.show', compact('touro'));
    }

    
    public function edit(Touro $touro)
    {
        return view('touros.edit', compact('touro'));
    }

    
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

    
    public function destroy(Touro $touro)
    {
        $touro->delete();
        return redirect()->route('touros.index')->with('success', 'Touro deletado com sucesso.');
    }
}
