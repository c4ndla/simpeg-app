<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\Cpns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CpnsController extends Controller
{
    public function index()
    {
        return view('pegawai.cpns.index');
    }

    public function detail($cpns_id)
    {
        $cpns = Cpns::find($cpns_id);
        return view('pegawai.cpns.detail', compact('cpns'));
    }
}
