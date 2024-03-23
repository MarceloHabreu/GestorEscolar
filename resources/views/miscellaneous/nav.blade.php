<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}">Sistema Escolar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">

                    <!-- Link para Disciplinas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="cursosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="cursosDropdown">
                            <li><a class="dropdown-item" href="{{ route('cursos_index') }}">Registro de cursos</a></li>
                            <li><a class="dropdown-item" href="{{ route('cursos_registrar') }}">Cadastrar novo curso</a></li>
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

                    <!-- Dropdown para Professor -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="professorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Professor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="professorDropdown">

                            <li><a class="dropdown-item" href="{{ route('professor_create') }}">Cadastrar novo aluno</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
</div>
