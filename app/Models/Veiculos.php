<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $table = "veiculos";
    protected $fillable = ['placa', 'modelo', 'marca', 'valor', 'cor', 'ano'];
}
