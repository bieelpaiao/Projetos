@extends('site.master.perfil')

@section('perfil_content')
<h3 class="text-center">Minha Conta</h3>
<form class="signup-form row" action="/alteracao" method="POST">
    @csrf
    <div class="col-12 text-start">
        <label for="nome" class="form-label">Nome Completo <span class="required">*</span></label>
        <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ $user->nome }}" disabled>
        @error('nome')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="cpf" class="form-label">CPF <span class="required">*</span></label>
        <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" oninput="mascaraCPF(this)" value="{{ $user->cpf }}" disabled>
        @error('cpf')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="nascimento" class="form-label">Data de Nascimento <span class="required">*</span></label>
        <input type="date" class="form-control @error('nascimento') is-invalid @enderror" id="nascimento" name="nascimento" oninput="validardataDeNascimento(this.value)" value="{{ $user->nascimento }}" disabled>
        @error('nascimento')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

        <div class="invalid-feedback" id="erroValidaData">
            Somente maiores de 18 anos
        </div>

    </div>

    <div class="col-4 text-start">
        <label for="telefone" class="form-label">Telefone <span class="required">*</span></label>
        <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" oninput="mascaraTelefone(this)" value="{{ $user->telefone }}" disabled>
        @error('telefone')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-6 text-start">
        <label for="email" class="form-label">E-mail <span class="required">*</span></label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" disabled>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-6 text-start">
        <label for="email_confirmation" class="form-label">Confirme seu e-mail</label>
        <input type="email" class="form-control" id="email_confirmation" name="email_confirmation" value="{{ $user->email }}" disabled>
    </div>

    <div class="col-4 text-start">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control @error('cep') is-invalid @enderror" id="cep" name="cep" oninput="mascaraCEP(this)" value="{{ $user->cep }}" disabled>
        @error('cep')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="endereco" class="form-label">Endereço <span class="required">*</span></label>
        <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ $user->endereco }}" disabled>
        @error('endereco')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="numero" class="form-label">Número <span class="required">*</span></label>
        <input type="text" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" value="{{ $user->numero }}" disabled>
        @error('numero')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="bairro" class="form-label">Bairro <span class="required">*</span></label>
        <input type="text" class="form-control @error('bairro') is-invalid @enderror" id="bairro" name="bairro" value="{{ $user->bairro }}" disabled>
        @error('bairro')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="estado" class="form-label">Estado <span class="required">*</span></label>
        <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" value="{{ $user->estado }}" disabled>
        @error('estado')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-4 text-start">
        <label for="cidade" class="form-label">Cidade <span class="required">*</span></label>
        <input type="text" class="form-control @error('cidade') is-invalid @enderror" id="cidade" name="cidade" value="{{ $user->cidade }}" disabled>
        @error('cidade')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-3 text-start">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $user->complemento }}" disabled>
    </div>

    <div class="col-9 text-start">
        <label for="referencia" class="form-label">Referência</label>
        <input type="text" class="form-control" id="referencia" name="referencia" value="{{ $user->referencia }}" disabled>
    </div>

    <div class="col-6 text-start my-2">
        <a>(<span class="required">*</span>): Campos obrigatórios</a>
    </div>

    <div class="col-6 text-end my-2">
        <span class="btn btn-primary desativado" onclick="alterarDados()" id="btnAltera">Alterar dados <i class="fa-solid fa-pen-to-square"></i></span>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary d-none" id="submitBtnAltera">ALTERAR MEUS DADOS</button>
    </div>
</form>
@endsection
