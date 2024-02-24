
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('miscellaneous.nav');
<div class="container">
    <h1>Registro de disciplinas</h1>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Duração em horas</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina->nome_disciplina }}</td>
                <td>{{ $disciplina->duracao_disciplina }}</td>
                <td>
                    <form action="{{ route('excluir_aluno', $disciplina->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark btn-sm">Apagar</button>
                    </form>
                    <button class="btn btn-secondary btn-sm"
                            onclick="openEditModal('{{ $disciplina->nome_disciplina }}', '{{ $disciplina->duracao_disciplina }}')">Editar
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="{{route('alterar_aluno',$disciplina->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">Duração em horas</label>
                        <input type="text" class="form-control" id="duracao" name="duracao">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function openEditModal(nome, duracao) {
        $('#nome').val(nome);
        $('#duracao').val(duracao);
        var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
            keyboard: false
        });
        myModal.show();
    }
</script>

</body>
</html>
