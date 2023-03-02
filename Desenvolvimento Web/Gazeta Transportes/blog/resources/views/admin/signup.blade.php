@extends('site.master.layout')

@section('content')
        <main>
            <div id="signup-area">
                <div class="signup-bg d-flex justify-content-center align-items-center">
                    <div class="row signup-form-bg justify-content-center">
                        <div class="signup-form-logo position-relative">
                            <img src="{{ asset('storage/img/logo.png') }}" alt="Logo Gazeta Transportes">
                        </div>

                        <form class="signup-form row" action="/cadastro" method="POST">
                            @csrf
                            <div class="col-12 text-start">
                                <label for="nome" class="form-label">Nome Completo <span class="required">*</span></label>
                                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}">
                                @error('nome')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="cpf" class="form-label">CPF <span class="required">*</span></label>
                                <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" oninput="mascaraCPF(this)" value="{{ old('cpf') }}">
                                @error('cpf')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="nascimento" class="form-label">Data de Nascimento <span class="required">*</span></label>
                                <input type="date" class="form-control @error('nascimento') is-invalid @enderror" id="nascimento" name="nascimento" oninput="validardataDeNascimento(this.value)" value="{{ old('nascimento') }}">
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
                                <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" oninput="mascaraTelefone(this)" value="{{ old('telefone') }}">
                                @error('telefone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-6 text-start">
                                <label for="email" class="form-label">E-mail <span class="required">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-6 text-start">
                                <label for="email_confirmation" class="form-label">Confirme seu e-mail</label>
                                <input type="email" class="form-control" id="email_confirmation" name="email_confirmation">
                            </div>

                            <div class="col-4 text-start">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control @error('cep') is-invalid @enderror" id="cep" name="cep" oninput="mascaraCEP(this)" value="{{ old('cep') }}">
                                @error('cep')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="endereco" class="form-label">Endereço <span class="required">*</span></label>
                                <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
                                @error('endereco')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="numero" class="form-label">Número <span class="required">*</span></label>
                                <input type="text" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" value="{{ old('numero') }}">
                                @error('numero')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="bairro" class="form-label">Bairro <span class="required">*</span></label>
                                <input type="text" class="form-control @error('bairro') is-invalid @enderror" id="bairro" name="bairro" value="{{ old('bairro') }}">
                                @error('bairro')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="estado" class="form-label">Estado <span class="required">*</span></label>
                                <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" value="{{ old('estado') }}">
                                @error('estado')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-4 text-start">
                                <label for="cidade" class="form-label">Cidade <span class="required">*</span></label>
                                <input type="text" class="form-control @error('cidade') is-invalid @enderror" id="cidade" name="cidade" value="{{ old('cidade') }}">
                                @error('cidade')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-3 text-start">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" value="{{ old('complemento') }}">
                            </div>

                            <div class="col-9 text-start">
                                <label for="referencia" class="form-label">Referência</label>
                                <input type="text" class="form-control" id="referencia" name="referencia" value="{{ old('referencia') }}">
                            </div>

                            <div class="col-6 text-start">
                                <label for="password" class="form-label">Senha <span class="required">*</span></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-6 text-start">
                                <label for="password_confirmation" class="form-label">Confirme sua senha</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>

                            <div class="col-6 text-start my-2">
                                <a>(<span class="required">*</span>): Campos obrigatórios</a>
                            </div>

                            <div class="col-6 text-end my-2">
                                <a class="form-links text-decoration-none fw-semibold" href="{{ route('perfil.login') }}">Já tenho uma conta</a>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">CADASTRAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
@endsection
