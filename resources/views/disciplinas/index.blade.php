<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Disciplinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('miscellaneous.nav')
<div class="container">
    <h1>Registro de Disciplinas</h1>
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
                    <form action="{{ route('excluir_disciplina', $disciplina->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark btn-sm">Apagar</button>
                    </form>
                    <button class="btn btn-secondary btn-sm"
                            onclick="openEditModal('{{ $disciplina->id }}', '{{ $disciplina->nome_disciplina }}', '{{ $disciplina->duracao_disciplina }}')">Editar
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modals -->
@foreach($disciplinas as $disciplina)
<div class="modal fade" id="editModal-{{ $disciplina->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Disciplina</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="{{ route('alterar_disciplina', $disciplina->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nome_disciplina" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome_disciplina-{{ $disciplina->id }}" name="nome_disciplina" value="{{ $disciplina->nome_disciplina }}">
                    </div>
                    <div class="mb-3">
                        <label for="duracao_disciplina" class="form-label">Duração em horas</label>
                        <input type="text" class="form-control" id="duracao_disciplina-{{ $disciplina->id }}" name="duracao_disciplina" value="{{ $disciplina->duracao_disciplina }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function openEditModal(disciplinaId, nome, duracao) {
        $('#nome_disciplina-' + disciplinaId).val(nome);
        $('#duracao_disciplina-' + disciplinaId).val(duracao);
        var myModal = new bootstrap.Modal(document.getElementById('editModal-' + disciplinaId), {
            keyboard: false
        });
        myModal.show();
    }
</script>

</body>
</html>
