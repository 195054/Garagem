<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'data_venda', 'valor_venda', 'id_cliente', 'id_veiculo', 'id_funcionario'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function veiculo() {
        return $this->belongsTo(Veiculo::class);
    }

    public function funcionario() {
        return $this->belongsTo(Funcionario::class);
    }
}
