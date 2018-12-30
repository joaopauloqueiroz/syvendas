<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class ProductRequest extends FormRequest
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
            'name' => 'required|unique:products|min:5',
            'code' => 'required|unique:products',
            'type' => 'required',
            'value' => 'required|numeric',
            'quantidade' => 'required|numeric',

        ];
    }

    public function messages(){

    return [
        'name.required' => 'O campo Nome do produto deve ser informado.',
        'name.unique'  => 'O campo Nome do produto deve ser unico.',
        'name.min'     => 'O campo Nome do produto deve conter no minimo 5 caracteres',
        'value.required' => 'O campo Preço deve ser informado.',
        'value.numeric' => 'o campo Preço deve conter  apenas números',
        'code.required' => 'O campo Código do produto deve ser informado.',
        'code.numeric' => 'o campo Código do produto deve conter  apenas números',
    ];
    }
}
