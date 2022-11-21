<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuanganController extends Controller
{
    public function index()
    {
        return view('admin.ruangan.index');
    }

    public function detail($ruangan_id)
    {
        $ruangan = Ruangan::find($ruangan_id);
        return view('admin.ruangan.detail', compact('ruangan'));
    }
}
