<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Routing\Controller;
use App\Models\Client;
use App\Models\Excursion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    protected function store(StoreUserRequest $request) {

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $client = Client::create($data);

        return redirect('/login')->with('sucesso', 'Seu cadastro foi realizado com sucesso!');
    }

    protected function update(StoreUserRequest $request) {
        $cpf = Auth::guard('admin')->User();

        Client::where('cpf', $cpf->cpf)
        ->update(['nome' => $request->nome, 'cpf' => $request->cpf,
        'nascimento' => $request->nascimento, 'telefone' => $request->telefone,
        'email' => $request->email, 'cep' => $request->cep,
        'endereco' => $request->endereco, 'numero' => $request->numero,
        'bairro' => $request->bairro, 'estado' => $request->estado,
        'cidade' => $request->cidade, 'complemento' => $request->complemento,
        'referencia' => $request->referencia, 'password' => bcrypt($request->password)]);

        return redirect('/perfil')->with('sucesso', 'Seu cadastro foi alterado com sucesso!');
    }

    public function showExcursionDetails($id) {

        $excursion = Excursion::findOrFail($id);

        return view('site.showExcursionDetails', ['excursion' => $excursion]);
    }

    public function joinExcursion($id) {
        $userId = Auth::guard('admin')->User()->id;

        $user = Client::where('id', $userId)->first();

        $excursion = Excursion::findOrFail($id);

        dd($excursion->datas);

        // $user->excursions()->attach($id);

        // return redirect('/minhas-excursoes')->with('sucesso', 'Sua presença está confirmada na excursão ' . $excursion->nome);
    }
}
