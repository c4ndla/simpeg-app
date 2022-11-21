<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeluargaFormRequest extends FormRequest
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
        $rules = [
            'personal_id' => [
                'nullable',
                'integer'
            ],
            'no_bpjs' => [
                'nullable',
                'string'
            ],
            'hubungan' => [
                'nullable',
                'string'
            ],
            'nama' => [
                'nullable'
            ],
            'nik' => [
                'nullable',
                'string'
            ],
            'jenis_kelamin' => [
                'nullable',
                'string'
            ],
            'agama' => [
                'nullable',
                'string'
            ],
            'tempat' => [
                'nullable',
                'string'
            ],
            'tgl_lahir' => [
                'nullable',
                'string'
            ],
            'pendidikan' => [
                'nullable',
                'string'
            ],
            'pekerjaan' => [
                'nullable',
                'string'
            ],
            'alamat' => [
                'nullable',
                'string'
            ],
            'dokumen' => [
                'nullable',
                'mimes:jpeg,jpg,png'
            ],
            'kk' => [
                'nullable',
                'mimes:jpeg,jpg,png'
            ],
            'status' => [
                'nullable'
            ],

        ];

        return $rules;
    }
}
