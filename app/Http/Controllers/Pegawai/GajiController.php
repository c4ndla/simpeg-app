<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\Gaji;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GajiController extends Controller
{
    public function index()
    {
        return view('pegawai.gaji.index');
    }

    public function detail($gaji_id)
    {
        $gaji = Gaji::find($gaji_id);
        return view('pegawai.gaji.detail', compact('gaji'));
    }
}
