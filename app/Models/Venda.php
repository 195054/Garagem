<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas";
    protected $fillable = ['data_venda', 'valor_venda'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function veiculo() {
        return $this->belongsTo(Veiculo::class);
    }
}
