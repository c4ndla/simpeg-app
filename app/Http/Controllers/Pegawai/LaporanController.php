<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        return view('pegawai.laporan.index');
    }

    public function detail($laporan_id)
    {
        $laporan = Laporan::find($laporan_id);
        return view('pegawai.laporan.detail', compact('laporan'));
    }
}
