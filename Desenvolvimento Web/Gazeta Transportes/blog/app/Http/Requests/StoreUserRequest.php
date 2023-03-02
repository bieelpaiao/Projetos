<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', new FullName],
            'cpf' => 'required|cpf|formato_cpf|unique:clients,cpf',
            'nascimento' => 'required',
            'telefone' => 'required|celular_com_ddd',
            'email' => 'required|confirmed|unique:clients,email',
            'cep' => 'required|formato_cep',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'estado' => 'required|uf',
            'cidade' => 'required',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.unique' => 'Este CPF já possui cadastro',
            'nascimento.required' => 'O campo nascimento é obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.confirmed' => 'A confirmação de email não confere',
            'email.unique' => 'Este email já possui cadastro',
            'cep.required' => 'O campo CEP é obrigatório',
            'endereco.required' => 'O campo endereço é obrigatório',
            'numero.required' => 'O campo número é obrigatório',
            'bairro.required' => 'O campo bairro é obrigatório',
            'estado.required' => 'O campo estado é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
            'password.required' => 'O campo senha é obrigatório',
            'password.confirmed' => 'A confirmação de senha não confere'
        ];
    }
}
