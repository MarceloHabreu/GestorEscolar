<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('miscellaneous.nav');
<div class="container">
    <h1>Registro de cursos</h1>


    <form action="{{ route('buscar_curso') }}" method="POST" class="mb-3">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="nome" placeholder="Buscar por nome de curso">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição de cursos</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->nome_curso }}</td>
                <td>{{ $curso->descricao_curso}}</td>
                <td>
                    <form id="deleteForm" action="{{ route('cursos_excluir', $curso->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark btn-sm">Apagar</button>
                    </form>
                    <button class="btn btn-secondary btn-sm"
                            onclick="openEditModal('{{ $curso->id }}', '{{ $curso->nome_curso }}', '{{ $curso->descricao_curso }}')">Editar
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
                <h5 class="modal-title" id="editModalLabel">Editar Curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nome_curso" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome_curso" name="nome_curso">
                    </div>
                    <div class="mb-3">
                        <label for="descricao_curso" class="form-label">Descrição do curso</label>
                        <textarea type="text" class="form-control" id="descricao_curso" name="descricao_curso"></textarea>
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
    function openEditModal(id, nome_curso, descricao_curso) {
        $('#editModal').modal('show');
        $('#editForm').attr('action', '/cursos/' + id);
        $('#nome_curso').val(nome_curso);
        $('#descricao_curso').val(descricao_curso);
    }
</script>

</body>
</html>
