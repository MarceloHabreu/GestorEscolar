<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function create()
    {
        $professor = Professor::all();
        return view('professor.create', compact('professor'));

    }
    public function store(Request $request) {
        $professor = Professor::create([
            'nome' => $request->input('nome'),
            'salario' => $request->input('salario')
        ]);


        return redirect()->route('alunos_index');
    }
}
