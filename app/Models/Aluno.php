<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class,'aluno_disciplina');
    }

    use HasFactory;
}
