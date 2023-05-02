@extends('site.master.relatorio')
@section('content')

        <h1 class="text-center">Relatório de Excursões</h1>
        <h3 class="text-center mb-5">Excursão - {{ $excursions->nome }} | Dia: {{ $data }}</h3>

        <table>
            <thead>
                <tr>
                    <th>Nome do cliente</th>
                    <th>CPF</th>
                    <th>Celular</th>
                    <th>Cidade</th>
                    <th>Ponto</th>
                    <th>Situação</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clients as $client)
                        <?php
                            $query = DB::table('client_excursion')->where([
                                ['excursion_id', '=', $excursions->id],
                                ['client_id', '=', $client->id]
                            ])->first();

                            $ponto = $query->ponto;
                            $cidade = $query->cidade;
                        ?>
                    <tr>
                        <td>{{ $client->nome }}</td>
                        <td>{{ $client->cpf }}</td>
                        <td>{{ $client->telefone }}</td>
                        <td>{{ $ponto }}</td>
                        <td>{{ $cidade }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
