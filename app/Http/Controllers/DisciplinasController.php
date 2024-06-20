<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        Disciplina::create([
            'nome_disciplina' => $request->nome_disciplina,
            'duracao_disciplina' => $request->duracao_disciplina,
        ]);
        return redirect()->route('disciplinas_index')->with('success', 'Disciplina registrada com sucesso.');
    }

    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());
        return redirect()->route('disciplinas_index')->with('success', 'Disciplina atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();
        return redirect()->route('disciplinas_index')->with('success', 'Disciplina apagada com sucesso.');
    }
}
