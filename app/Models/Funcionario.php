<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "Funcionario";
    protected $fillable = ['matricula', 'cargo', 'telefone', 'nome'];
}
