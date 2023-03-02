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
                <p class="events-participants"><i class="fa-solid fa-dollar-sign"></i> R${{ $excursion->valor }},00 cada dia</p>
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
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $excursion->descricao }}</p>
                <br>
                <h3>Escolha uma data:</h3>
                <form action="/excursions/join/{{$excursion->id}}" method="POST">
                @csrf
                    @if ( $excursion->varios_dias == "sim")
                        <select class="form-select mb-2">
                        @foreach ($excursion->datas as $data )
                            <option>{{ $data->data }}</option>
                        @endforeach
                        </select>
                    @endif
                    <a href="/excursions/join/{{$excursion->id}}" class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">Confirmar Presença</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
