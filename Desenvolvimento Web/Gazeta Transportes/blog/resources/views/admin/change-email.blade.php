@extends('site.master.perfil')

@section('perfil_content')
    <h3 class="text-center">Alterar meu e-mail</h3>
    <form class="signup-form row col-6" action="/alteracao-email" method="POST">
        @csrf
        <div class="col-12 text-start">
            <label for="email" class="form-label">E-mail antigo <span class="required">*</span></label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-12 text-start">
            <label for="new_email" class="form-label">Novo e-mail <span class="required">*</span></label>
            <input type="email" class="form-control @error('new_email') is-invalid @enderror" id="new_email" name="new_email">
            @error('new_email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-12 text-start">
            <label for="new_email_confirmation" class="form-label">Confirme o novo e-mail <span class="required">*</span></label>
            <input type="email" class="form-control @error('new_email_confirmation') is-invalid @enderror" id="new_email_confirmation" name="new_email_confirmation">
            @error('new_email_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        </div>

        <div class="col-8 text-start my-2">
            <a>(<span class="required">*</span>): Campos obrigatórios</a>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">ALTERAR MEU EMAIL</button>
        </div>
    </form>
@endsection
