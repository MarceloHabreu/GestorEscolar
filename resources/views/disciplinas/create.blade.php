<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de disciplinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('miscellaneous.nav');
<div class="container">
    <h2 class="mt-5">Cadastro de disciplinas</h2>
    <form action="{{route('registrar_disciplina')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da disciplina</label>
            <input type="text" class="form-control" id="nome" name="nome_disciplina" required>
        </div>
        <div class="mb-3">
            <label for="duracao" class="form-label">Duração da disciplina</label>
            <input type="number" class="form-control" id="duracao" name="duracao_disciplina" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
