@extends('site.master.layout')

@section('content')

<main>
    <div id="login-area">
        <div class="login-bg d-flex justify-content-center align-items-center">
            <div class="row login-form-bg justify-content-center">
                <div class="login-form-logo position-relative">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="Logo Gazeta Transportes">
                </div>


                <form class="login-form row" method="post" action="/excursao/pdf/{{ $excursion->id }}">
                    @csrf
                    <div class="col-12 text-center">
                        <label for="dias" class="form-label mb-2">Selecione o dia para gerar o relatório</label>
                        <select class="form-select" id="dia" name="dia">
                            <option>Selecione</option>
                            @foreach($excursion->datas as $data)
                                <option>{{ $data->data }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">GERAR RELATÓRIO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
