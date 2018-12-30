<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            'name' => 'required',
            'cnpj' => 'required|unique:providers',
            'email' => 'required|unique:providers',
            'address' => 'required',
            'telephone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'O campo endereço e obrigatório.',
            'telephone.required' => 'O campo Telefone e obrigatório.'
        ];
    }
}
