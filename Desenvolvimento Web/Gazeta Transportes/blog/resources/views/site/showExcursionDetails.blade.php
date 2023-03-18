@extends('site.master.layout')

@section('content')

<div id="excursion-bg">
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="\storage\{{$excursion->imagem}}" class="img-fluid" alt="{{ $excursion->nome }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $excursion->nome }}</h1>
                <p class="event-city"><i class="fa-regular fa-calendar"></i> {{ $excursion->dias }}</p>
                <p class="events-participants"><i class="fa-solid fa-dollar-sign"></i> R${{ $excursion->valor }}</p>
                <p class="event-owner"><i class="fa-solid fa-location-dot"></i> Saída de:
                    <?php $counter = 1 ?>

                    @foreach ($excursion->cities as $city)
                        @if ($counter == count($excursion->cities))
                            {{ $city->nome }}
                        @else
                            {{ $city->nome }},
                        @endif

                        <?php $counter = $counter + 1 ?>
                    @endforeach
                </p>
                <br>
                @if (!$hasUserJoined)
                <form name="dados" id="dados" action="/excursions/join/{{$excursion->id}}" method="POST"
                data-funcoes-url="{{ route('load_funcoes') }}">
                @csrf
                    @if ( count($excursion->datas) > 1)
                        <label for="data" class="form-label">Escolha uma data</label>
                        <select id="data" class="form-select mb-2 @error('data') is-invalid @enderror" style="height: 60px;" name="datas[]" multiple>
                        @foreach ($excursion->datas as $data )
                            <option>{{ $data->data }}</option>
                        @endforeach
                        </select>
                        @error('data')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    @endif

                    @if ( count($excursion->cities) > 1)
                    <label for="cidade" class="form-label">Escolha uma cidade</label>
                    <select name="cidade" id="cidade" class="form-select mb-2 @error('cidade') is-invalid @enderror">
                        <option>Selecione</option>
                        @foreach ($cidades as $cidade)
                            <option>{{ $cidade->nome }}</option>
                        @endforeach
                        </select>
                        @error('cidade')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    @endif

                    <label for="ponto" class="form-label">Escolha um ponto</label>
                    <select name="ponto" id="ponto" class="form-select mb-2 @error('ponto') is-invalid @enderror">
                        <option>Selecione</option>
                        @foreach ($pontos as $ponto)
                            <option>{{ $ponto->nome }}</option>
                        @endforeach
                    </select>
                    @error('ponto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <a href="/excursions/join/{{$excursion->id}}" class="btn" id="excursion-submit" onclick="event.preventDefault(); this.closest('form').submit();">Confirmar Presença</a>
                </form>
                @else
                <p>Você já está cadastrado nesta excursão!</p>
                <form action="/excursions/leave/{{ $excursion->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="/excursions/leave/{{$excursion->id}}" class="btn" id="excursion-cancel" onclick="event.preventDefault(); this.closest('form').submit();">Cancelar Inscrição</a>
                </form>
                @endif
            </div>

            <div class="col-md-12 mt-4">
                <h3>Detalhes da Excursão:</h3>
                <p class="event-description">{{ $excursion->descricao }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
