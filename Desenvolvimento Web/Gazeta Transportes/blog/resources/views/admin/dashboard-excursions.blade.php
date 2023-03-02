@extends('site.master.perfil')

@section('perfil_content')
<h3 class="text-center">Minhas Excursões</h3>
    @foreach ($excursions as $excursion)
        <p> {{ $excursion->nome }} </p>
    @endforeach
@endsection
