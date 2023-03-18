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
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($excursions as $excursion)
                    <tr>
                        <th scope="row">{{ $excursion->id }}</th>
                        <td>{{ $excursion->nome }}</td>
                        <td>{{ $excursion->valor }}</td>
                        <td>Rodoviária</td>
                        <td>João Ramalho</td>
                        <td class="d-flex">
                            <a href="/excursions/{{ $excursion->id }}" class="btn" data-bs-toggle="tooltip" data-bs-title="Ver detalhes" data-bs-placement="bottom"><i class="fa-solid fa-circle-info"></i></a>
                            <form action="/excursions/leave/{{ $excursion->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn" data-bs-toggle="tooltip" data-bs-title="Cancelar Inscrição" data-bs-placement="bottom"><i class="fa-solid fa-ban"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
