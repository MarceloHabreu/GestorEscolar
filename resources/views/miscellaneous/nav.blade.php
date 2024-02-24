<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}">Sistema Escolar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">

                    <!-- Dropdown para Alunos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="alunosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alunos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="alunosDropdown">
                            <li><a class="dropdown-item" href="{{ route('alunos_index') }}">Registro de alunos</a></li>
                            <li><a class="dropdown-item" href="{{ route('registrar_aluno') }}">Cadastrar novo aluno</a></li>
                        </ul>
                    </li>


                    <!-- Link para Disciplinas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="disciplinasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Disciplinas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="disciplinasDropdown">
                            <li><a class="dropdown-item" href="{{ route('disciplinas_index') }}">Registro de disciplinas</a></li>
                            <li><a class="dropdown-item" href="{{ route('registrar_disciplina') }}">Cadastrar Nova disciplina</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
