<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlamatRequest extends FormRequest
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
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric|digits:12'
        ];
    }
}
