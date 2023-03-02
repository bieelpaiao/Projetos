@extends('site.master.layout')

<div id="perfil-area" class="">
    <div class="container">
        <div class="nav-bg me-3">
            <nav class="nav flex-column">
                <a class="nav-link" aria-current="page" href="{{ route('perfil') }}">Minha Conta</a>
                <a class="nav-link" href="{{ route('perfil.excursoes') }}">Minhas excursões</a>
                <a class="nav-link" href="{{ route('perfil.excursoes') }}">Alterar minha senha</a>
                <a class="nav-link" href="{{ route('perfil.excursoes') }}">Alterar meu e-mail</a>
                <a class="nav-link" href="{{ route('perfil.logout') }}">Sair</a>
            </nav>
        </div>

        <div class="dashboard">
            @yield('perfil_content')
        </div>
    </div>

    @if (session('sucesso'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <span class="me-auto">Gazeta Transportes</span>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>

                <div class="toast-body">
                    {{ session('sucesso') }}
                </div>
            </div>
        </div>
    @endif
</div>

