<?php

namespace App\Http\Controllers;


use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
   public function index(){
       $cursos = Curso::all();
       return view('cursos.index', compact('cursos'));
   }


   public function create(){
       return view('cursos.create');
   }
   public function store(Request $request){
       Curso::create([
           'nome_curso' =>$request->nome_curso,
           'descricao_curso' => $request->descricao_curso,

       ]);

       return redirect()->route('cursos_index')->with('success', 'Curso cadastrado com sucesso.');
   }
    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return redirect()->route('cursos_index')->with('success', 'Curso atualizada com sucesso.');
    }

    public function destroy($id){
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('cursos_index')->with('success', 'Curso apagado com sucesso.');
    }

    public function buscarPorNome(Request $request)
    {
        $nome = $request->input('nome');

        if ($nome) {
            $cursos = Curso::where('nome_curso', 'like', '%' . $nome . '%')->get();
        } else {
            $cursos = Curso::all();
        }

        return view('cursos.index', compact('cursos'));
    }
}
