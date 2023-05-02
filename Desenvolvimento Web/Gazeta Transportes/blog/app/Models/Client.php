<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Client extends Authenticable implements \Illuminate\Contracts\Auth\CanResetPassword
{
    use HasFactory, Notifiable, CanResetPassword;

    protected $fillable = ['nome', 'cpf', 'rg', 'email', 'endereco',
                    'numero', 'bairro', 'cep', 'estado', 'cidade', 'referencia',
                    'password', 'nascimento', 'telefone', 'complemento'];

    public function excursions() {
        return $this->belongsToMany(Excursion::class, 'client_excursion', 'client_id', 'excursion_id');
    }
}
