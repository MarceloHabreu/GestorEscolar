<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('disciplinas')->get();
        $disciplinas = Disciplina::all();
        return view('alunos.index', compact('alunos', 'disciplinas'));
    }

    public function create()
    {
        $disciplinas = Disciplina::all();
        return view('alunos.create', compact('disciplinas'));
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());
        $aluno->disciplinas()->sync($request->disciplinas);
        return redirect()->route('alunos_index')->with('success', 'Aluno registrado com sucesso.');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $disciplinas = Disciplina::all();
        return view('alunos.edit', compact('aluno', 'disciplinas'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        $aluno->disciplinas()->sync($request->disciplinas);
        return redirect()->route('alunos_index')->with('success', 'Aluno atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos_index')->with('success', 'Aluno apagado com sucesso.');
    }
}

