<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Disciplina;

class AlunosController extends Controller
{
    public function create()
    {
        $disciplinas = Disciplina::all();
        return view('alunos.create', compact('disciplinas'));
    }
    public function store(Request $request) {
        $aluno = Aluno::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
        ]);

        $aluno->disciplinas()->attach($request->input('disciplinas'));
        return "Aluno cadastrado com sucesso!";
    }

    public function show($id){
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', ['aluno' => $aluno]);

    }
    public function index(){
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('alunos_index')->with('success', 'Aluno atualizado com sucesso.');
    }

    public function destroy($id){
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos_index')->with('success', 'Aluno apagado com sucesso.');
    }
}
