<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table ="professores";


    public function disciplinas(){

        return $this->hasMany(Disciplina::class);
    }
}
