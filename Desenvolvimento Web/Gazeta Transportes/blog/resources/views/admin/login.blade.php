@extends('site.master.layout')

@section('content')
        <main>
            <div id="login-area">
                <div class="login-bg d-flex justify-content-center align-items-center">
                    <div class="row login-form-bg justify-content-center">
                        <div class="login-form-logo position-relative">
                            <img src="{{ asset('storage/img/logo.png') }}" alt="Logo Gazeta Transportes">
                        </div>


                        <form class="login-form row" method="post" action="{{ route('perfil.login.do') }}">
                            @csrf

                            @if($errors->all())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <div class="col-12 text-start">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email" value="bibi.paiao@gmail.com">
                            </div>

                            <div class="col-12 text-start">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="col-6 text-start my-2">
                                <a class="form-links text-decoration-none fw-semibold" href="">Esqueci minha senha</a>
                            </div>

                            <div class="col-6 text-end my-2">
                                <a class="form-links text-decoration-none fw-semibold" href="{{ route('perfil.cadastro') }}">Cadastrar</a>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">ENTRAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

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
@endsection
