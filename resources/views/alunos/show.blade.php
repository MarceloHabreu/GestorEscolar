<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Mostra Aluno</h2>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Aluno</label>
            <input type="text" class="form-control" id="nome" name="nome" required  value="{{$aluno->nome}}">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF do Aluno</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required value="{{$aluno->cpf}}">
        </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
