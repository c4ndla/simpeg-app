<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalFormRequest extends FormRequest
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
            'agama_id' => [
                'required',
                'integer'
            ],
            'NIP' => [
                'nullable',
                'string'
            ],
            'nama_depan' => [
                'nullable',
                'string'
            ],
            'nama_belakang' => [
                'nullable',
                'string'
            ],
            'gelar_depan' => [
                'nullable',
                'string'
            ],
            'gelar_belakang' => [
                'nullable',
                'string'
            ],
            'jenis_kelamin' => [
                'nullable',
                'string'
            ],
            // 'agama' => [
            //     'nullable',
            //     'string'
            // ],
            'tempat' => [
                'nullable',
                'string'
            ],
            'tgl_lahir' => [
                'nullable',
                'string'
            ],
            'status_nikah' => [
                'nullable',
                'string'
            ],
            'alamat' => [
                'nullable',
                'string'
            ],
            'provinsi' => [
                'nullable',
                'string'
            ],
            'kota' => [
                'nullable',
                'string'
            ],
            'kecamatan' => [
                'nullable',
                'string'
            ],
            'rt' => [
                'nullable',
                'string'
            ],
            'rw' => [
                'nullable',
                'string'
            ],
            'kode_pos' => [
                'nullable',
                'string'
            ],
            'no_telp' => [
                'nullable',
                'string'
            ],
            'no_hp' => [
                'nullable',
                'string'
            ],
            'status_pegawai' => [
                'nullable',
                'string'
            ],
            'status_jabatan' => [
                'nullable',
                'string'
            ],
            'status_keahlian' => [
                'nullable',
                'string'
            ],
            'tingkat_keahlian' => [
                'nullable',
                'string'
            ],
            'jabatan_struktural' => [
                'nullable',
                'string'
            ],
            'foto' => [
                'nullable',
                'mimes:jpg,bmp,jpeg,png,pdf'
            ],
            'ktp' => [
                'nullable',
                'mimes:jpg,bmp,jpeg,png,pdf'
            ],
        ];
    }
}
