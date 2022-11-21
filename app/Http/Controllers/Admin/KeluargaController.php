<?php

namespace App\Http\Controllers\Admin;

use App\Models\Keluarga;
use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KeluargaFormRequest;
use Illuminate\Support\Facades\File;

class KeluargaController extends Controller
{
    public function index()
    {
        return view('admin.keluarga.index');
    }

    public function detail($keluarga_id)
    {
        $keluarga = Keluarga::find($keluarga_id);
        return view('admin.keluarga.detail', compact('keluarga'));
    }
}
