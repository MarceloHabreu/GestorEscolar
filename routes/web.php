 <?php

 use App\Http\Controllers\DisciplinasController;
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;

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



 //routes alunos
 Route::get('/alunos', [AlunosController::class, 'index'])->name('alunos_index');
 Route::get('/alunos/novo', 'App\\Http\\Controllers\\AlunosController@create');

Route::post('/alunos/novo', 'App\\Http\\Controllers\\AlunosController@store')->name('registrar_aluno');
Route::delete('/alunos/{id}', 'App\\Http\\Controllers\\AlunosController@destroy')->name('excluir_aluno');
Route::put('/alunos/{id}', 'App\\Http\\Controllers\\AlunosController@update')->name('alterar_aluno');

//routes disciplinas
 Route::get('/disciplinas',[DisciplinasController::class, 'index'])->name('disciplinas_index');
 Route::get('/disciplinas/novo', 'App\\Http\\Controllers\\DisciplinasController@create')->name('disciplinas_create');
Route::post('/disciplinas/novo', 'App\\Http\\Controllers\\DisciplinasController@store')->name('registrar_disciplina');
 Route::delete('/disciplinas/{id}', 'App\\Http\\Controllers\\DisciplinasController@destroy')->name('excluir_disciplina');
 Route::put('/disciplinas/{id}', 'App\\Http\\Controllers\\DisciplinasController@update')->name('alterar_disciplina');

