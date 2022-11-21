<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPegawaiFormRequest extends FormRequest
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
            'nama' => [
                'required',
                'string'
            ],
            'deskripsi' => [
                'nullable',
                'string'
            ],
            'icon' => [
                'nullable',
                'mimes:jpg,bmp,jpeg,png'
            ]
        ];
    }
}
