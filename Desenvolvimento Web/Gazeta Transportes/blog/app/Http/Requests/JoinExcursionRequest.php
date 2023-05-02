<?php

namespace App\Http\Requests;

use App\Rules\City;
use App\Rules\Stop;
use Illuminate\Foundation\Http\FormRequest;

class JoinExcursionRequest extends FormRequest
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
            'datas' => 'required',
            'cidade' => ['required', new City],
            'ponto' => ['required', new Stop]
        ];
    }

    public function messages()
    {
        return [
            'datas.required' => 'Escolha pelo menos uma data',
            'cidade.required' => 'Escolha pelo menos uma cidade',
            'ponto.required' => 'Escolha pelo menos um ponto',
        ];
    }
}
