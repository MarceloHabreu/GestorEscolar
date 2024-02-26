<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('miscellaneous.nav');
<div class="container">
    <h2 class="mt-5">Cadastro de Aluno</h2>
    <form action="{{route('registrar_aluno')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Aluno</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF do Aluno</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required oninput="CpfM(this)">
        </div>
        <div class="mb-3">
            <label for="disciplinas" class="form-label">Disciplinas</label>
            <select class="form-select" id="disciplinas" name="disciplinas[]" multiple>
                @foreach($disciplinas as $disciplina)
                    <option value="{{ $disciplina->id }}">{{ $disciplina->nome_disciplina }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function CpfM(input) {
        let cpf = input.value.replace(/\D/g, '');
        cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
        cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        input.value = cpf.substring(0, 14);
    }

</script>
</body>
</html>
