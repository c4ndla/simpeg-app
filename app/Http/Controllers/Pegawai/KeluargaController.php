<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\Keluarga;
use App\Http\Controllers\Controller;


class KeluargaController extends Controller
{
    public function index()
    {
        return view('pegawai.keluarga.index');
    }

    public function detail($keluarga_id)
    {
        $keluarga = Keluarga::find($keluarga_id);
        return view('pegawai.keluarga.detail', compact('keluarga'));
    }
}
