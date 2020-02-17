<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnonceRequest extends FormRequest
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
            'title' => 'bail | required | string | max:100',
            'city' => 'bail | required | integer | digits:4',
            'price' => 'bail | required | integer',
            'duration' => 'bail | required | integer',
            'type' => 'bail | required | integer',
            'description' => 'bail | required | string',
        ];
    }
}
