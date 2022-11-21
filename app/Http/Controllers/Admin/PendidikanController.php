<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        return view('admin.pendidikan.index');
    }

    public function detail($pendidikan_id)
    {
        $pendidikan = Pendidikan::find($pendidikan_id);
        return view('admin.pendidikan.detail', compact('pendidikan'));
    }
}
