
public function store(Request $request) {
$aluno = Aluno::create([
'nome' => $request->input('nome'),
'cpf' => $request->input('cpf'),
]);

$aluno->disciplinas()->attach($request->input('disciplinas'));
return redirect()->route('alunos_index');
}
