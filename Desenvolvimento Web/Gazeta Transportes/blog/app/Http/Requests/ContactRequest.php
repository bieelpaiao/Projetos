<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'ida' => 'required',
            'pessoas' => 'required',
            'nome' => ['required', new FullName],
            'email' => 'required',
            'mensagem' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ida.required' => 'Selecione uma data de ida',
            'pessoas.required' => 'Informe o número de pessoas',
            'nome.required' => 'Informe seu nome',
            'email.required' => 'Informe seu e-mail',
            'mensagem.required' => 'Informe uma mensagem'
        ];
    }
}
