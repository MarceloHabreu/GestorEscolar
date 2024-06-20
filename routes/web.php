 <?php
use App\Http\Controllers\DisciplinasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// routes professor
Route::get('/professor', [ProfessorController::class, 'create'])->name('professor_create');
Route::post('/professor/novo', [ProfessorController::class, 'store'])->name('registrar_professor');

// routes alunos
Route::get('/alunos', [AlunosController::class, 'index'])->name('alunos_index');
Route::get('/alunos/novo', [AlunosController::class, 'create'])->name('alunos_create');
Route::post('/alunos/novo', [AlunosController::class, 'store'])->name('registrar_aluno');
Route::delete('/alunos/{id}', [AlunosController::class, 'destroy'])->name('excluir_aluno');
Route::put('/alunos/{id}', [AlunosController::class, 'update'])->name('alterar_aluno');

// routes disciplinas
Route::get('/disciplinas', [DisciplinasController::class, 'index'])->name('disciplinas_index');
Route::get('/disciplinas/novo', [DisciplinasController::class, 'create'])->name('disciplinas_create');
Route::post('/disciplinas/novo', [DisciplinasController::class, 'store'])->name('registrar_disciplina');
Route::delete('/disciplinas/{id}', [DisciplinasController::class, 'destroy'])->name('excluir_disciplina');
Route::put('/disciplinas/{id}', [DisciplinasController::class, 'update'])->name('alterar_disciplina');

// routes curso
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos_index');
Route::get('/cursos/novo', [CursoController::class, 'create'])->name('cursos_create');
Route::post('/cursos/novo', [CursoController::class, 'store'])->name('cursos_registrar');
Route::put('/cursos/{id}', [CursoController::class, 'update'])->name('cursos_alterar');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos_excluir');
Route::post('/curso/busca', [CursoController::class, 'buscarPorNome'])->name('buscar_curso');
