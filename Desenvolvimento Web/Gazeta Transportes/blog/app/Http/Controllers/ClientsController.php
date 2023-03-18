<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinExcursionRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Routing\Controller;
use App\Models\Client;
use App\Models\Excursion;
use App\Models\City;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    public function __construct(City $cidade, Stop $ponto)
    {
        $this->cidade = $cidade;
        $this->ponto = $ponto;

    }

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

        $cidades = $this->cidade->orderBy('nome', 'ASC')->get();

        $pontos = $this->ponto->Where('id', '=', 0)->orderBy('nome', 'ASC')->get();

        $excursion = Excursion::findOrFail($id);

        $hasUserJoined = false;

        if(Auth::guard('admin')->check() === true) {
            $userId = Auth::guard('admin')->User()->id;

            $user = Client::where('id', $userId)->first();

            $userExcursions = $user->excursions->toArray();

            foreach($userExcursions as $userExcursion) {
                if($userExcursion['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        return view('site.showExcursionDetails', ['excursion' => $excursion, 'hasUserJoined' => $hasUserJoined, 'cidades' => $cidades, 'pontos' => $pontos]);
    }

    public function loadFuncoes(Request $request) {
        $dataForm = $request->all();
        $cidade = $dataForm['cidade'];

        $city = City::where('nome', $cidade)->first();

        $cidade_id = $city->id;

        $sql = "Select stops.id, nome from cities_stops, stops ";
        $sql = $sql . " Where cities_stops.stop_id = stops.id ";
        $sql = $sql . " and cities_stops.city_id = '$cidade_id' ";
        $sql = $sql . " order by stops.nome";

        $pontos = DB::select($sql);

        return view('site.funcao_ajax', ['pontos' => $pontos]);
    }

    public function joinExcursion($id, JoinExcursionRequest $request) {
        $userId = Auth::guard('admin')->User()->id;

        $user = Client::where('id', $userId)->first();

        $excursion = Excursion::findOrFail($id);

        foreach($request->datas as $data) {
            $user->excursions()->attach($id, ['dia' => $data, 'cidade' => $request->cidade, 'ponto' => $request->ponto]);
        }

        return redirect('/minhas-excursoes')->with('sucesso', 'Sua presença está confirmada na excursão ' . $excursion->nome);
    }

    public function leaveExcursion($id) {
        $userId = Auth::guard('admin')->User()->id;

        $user = Client::where('id', $userId)->first();

        $excursion = Excursion::findOrFail($id);

        $user->excursions()->detach($id);

        return redirect('/minhas-excursoes')->with('sucesso', 'Seu cancelamento está confirmado na excursão ' . $excursion->nome);

    }
}
