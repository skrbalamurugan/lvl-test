<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Enter Product Name',
            'price.required' => 'Enter Product Price',
            'price.numeric' => 'Enter Correct Price',
            'description.required' => 'Enter Product Description'
        ];
    }
}
