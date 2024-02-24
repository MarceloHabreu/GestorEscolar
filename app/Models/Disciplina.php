<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_disciplina');
    }
    protected $fillable = ['nome_disciplina', 'duracao_disciplina'] ;

    use HasFactory;
}
