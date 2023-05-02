<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\JoinExcursionRequest;
use App\Http\Requests\StoreUserRequest;
use Couchbase\RequestTracer;
use Illuminate\Routing\Controller;
use App\Models\Client;
use App\Models\Excursion;
use App\Models\City;
use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function gerarLink(ContactRequest $request)
    {
        $msg = $request->mensagem;
        $ida = $request->ida;
        $volta = $request->volta;
        $cliente = $request->nome;
        $email = $request->email;
        $pessoas = $request->pessoas;

        $encoded_msg = str_replace("+", "%20", urlencode($msg));

        if ($volta) {
            $datas_msg = "*[RESERVA EXCURSÃO | GAZETA TRANSPORTES 🚌]* \n👤 *CLIENTE:* ".$cliente."\n📧 *E-MAIL:* ".$email." \n📆 *IDA:* ".$ida."  \n📆 *VOLTA:* ".$volta."  \n📆 *NÚMERO DE PESSOAS:* ".$pessoas."\n\n📝 *MENSAGEM:* ";
        } else {
            $datas_msg = "*[RESERVA EXCURSÃO | GAZETA TRANSPORTES 🚌]* \n👤 *CLIENTE:* ".$cliente."\n📧 *E-MAIL:* ".$email." \n📆 *IDA:* ".$ida."  \n📆 *NÚMERO DE PESSOAS:* ".$pessoas."\n\n📝 *MENSAGEM:* ";
        }

        $original = array("%40, @");
        $substituir = array("+, %20");

        $encoded_datas_msg = str_replace($original, $substituir, urlencode($datas_msg));

        $href = "https://api.whatsapp.com/send/?phone=5518996989578&text=".$encoded_datas_msg.$encoded_msg;

        return redirect($href);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $userId = Auth::guard('admin')->User()->id;

        $user = Client::where('id', $userId)->first();

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Senha atual incorreta.'])->withInput();
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('perfil')->with('sucesso', 'Senha atualizada com sucesso!');
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'new_email' => 'required|confirmed',
        ]);

        $userId = Auth::guard('admin')->User()->id;

        $user = Client::where('id', $userId)->first();

        if ($request->email != $user->email) {
            return back()->withErrors(['email' => 'E-mail atual incorreto.'])->withInput();
        }

        $user->update([
            'email' => $request->new_email
        ]);

        return redirect()->route('perfil')->with('sucesso', 'E-mail atualizado com sucesso!');
    }
}
