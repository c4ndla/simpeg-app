<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\JabatanFormRequest;

class JabatanController extends Controller
{
    public function index()
    {
        return view('admin.jabatan.index');
    }

    public function detail($jabatan_id)
    {
        $jabatan = Jabatan::find($jabatan_id);
        return view('admin.jabatan.detail', compact('jabatan'));
    }
}
