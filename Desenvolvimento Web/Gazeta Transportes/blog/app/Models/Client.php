<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'rg', 'email', 'endereco',
                    'numero', 'bairro', 'cep', 'estado', 'cidade', 'referencia',
                    'password', 'nascimento', 'telefone', 'complemento'];

    public function excursions() {
        return $this->belongsToMany(Excursion::class, 'client_excursion', 'client_id', 'excursion_id');
    }
}
