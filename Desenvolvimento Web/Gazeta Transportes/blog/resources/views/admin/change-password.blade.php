@extends('site.master.perfil')

@section('perfil_content')
    <h3 class="text-center">Alterar minha senha</h3>
    <form class="signup-form row col-6" action="/alteracao-senha" method="POST">
        @csrf
        <div class="col-12 text-start">
            <label for="password" class="form-label">Senha antiga <span class="required">*</span></label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-12 text-start">
            <label for="new_password" class="form-label">Nova senha <span class="required">*</span></label>
            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password">
            @error('new_password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-12 text-start">
            <label for="new_password_confirmation" class="form-label">Confirme a nova senha <span class="required">*</span></label>
            <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="new_password_confirmation" name="new_password_confirmation">
            @error('new_password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        </div>

        <div class="col-8 text-start my-2">
            <a>(<span class="required">*</span>): Campos obrigatórios</a>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">ALTERAR MINHA SENHA</button>
        </div>
    </form>
@endsection
