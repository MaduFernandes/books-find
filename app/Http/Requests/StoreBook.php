<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'nome' => ['required'],
            'autor' => ['required'],
            'ano_de_publicacao' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Este campo é de preenchimento obrigatório',
            'autor.required' => 'Este campo é de preenchimento obrigatório',
            'ano_de_publicacao.required' => 'Este campo é de preenchimento obrigatório',
        ];
    }
}
