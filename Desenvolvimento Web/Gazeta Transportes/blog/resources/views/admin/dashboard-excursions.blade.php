@extends('site.master.perfil')

@section('perfil_content')
<h3 class="text-center">Minhas Excursões</h3>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Excursão</th>
                <th scope="col">Valor</th>
                <th scope="col">Ponto</th>
                <th scope="col">Cidade</th>
                <th scope="col">Dias</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                    $id_antigo = 0;
                    $id_novo = 0;
                    $counter = 1;
                    use Illuminate\Support\Facades\Auth;
                    use App\Models\Client;
                ?>
                @foreach ($excursions as $excursion)
                    <?php $id_novo = $excursion->id; ?>

                    @if($id_novo == $id_antigo)
                        @continue
                    @endif

                    <?php
                        $userId = Auth::guard('admin')->User()->id;

                        $user = Client::where('id', $userId)->first();

                        $qtdDias = $user->excursions()->where([
                            ['excursion_id', '=', $excursion->id]
                        ]);

                        $valor = ($qtdDias->count() * $excursion->valor);

                        $query = DB::table('client_excursion')->where([
                            ['excursion_id', '=', $excursion->id],
                            ['client_id', '=', $userId]
                        ])->first();

                        $queryDias = DB::table('client_excursion')->where([
                            ['excursion_id', '=', $excursion->id],
                            ['client_id', '=', $userId]
                        ])->get();

                        $ponto = $query->ponto;
                        $cidade = $query->cidade;

                    ?>

                    <tr>
                        <th scope="row">{{ $counter }}</th>
                        <td>{{ $excursion->nome }}</td>
                        <td>R${{ $valor }},00</td>
                        <td>{{ $ponto }}</td>
                        <td>{{ $cidade }}</td>
                        <td><?php $contador = 1 ?>
                            @foreach($queryDias as $dia)

                                @if ($contador == count($queryDias))
                                    {{ $dia->dia }}
                                @else
                                    {{ $dia->dia }},
                                @endif

                                <?php $contador += 1 ?>
                            @endforeach
                        </td>
                        <td class="d-flex">
                            <a href="/excursions/{{ $excursion->id }}" class="btn" data-bs-toggle="tooltip" data-bs-title="Ver detalhes" data-bs-placement="bottom"><i class="fa-solid fa-circle-info"></i></a>
                            <form action="/excursions/leave/{{ $excursion->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn" data-bs-toggle="tooltip" data-bs-title="Cancelar Inscrição" data-bs-placement="bottom"><i class="fa-solid fa-ban"></i></button>
                            </form>
                        </td>
                    </tr>

                    <?php $id_antigo = $id_novo; $counter += 1; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
