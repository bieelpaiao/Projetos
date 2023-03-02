<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Cep extends Component
{
    public $cep;
    public $endereco;
    public $bairro;
    public $cidade;
    public $estado;

    public function buscaCep($cep) {

        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/');

        $dadosAPI = $response->json();

        $this->endereco = $dadosAPI['logradouro'];
        $this->bairro = $dadosAPI['bairro'];
        $this->cidade = $dadosAPI['localidade'];
        $this->estado = $dadosAPI['uf'];
    }

    public function render()
    {
        return view('livewire.cep');
    }
}
