<?php

namespace App\Http\Controllers\Admin;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function detail($laporan_id)
    {
        $laporan = Laporan::find($laporan_id);
        return view('admin.laporan.detail', compact('laporan'));
    }
}
