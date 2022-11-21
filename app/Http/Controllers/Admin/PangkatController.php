<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pangkat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PangkatController extends Controller
{
    public function index()
    {
        return view('admin.pangkat.index');
    }

    public function detail($pangkat_id)
    {
        $pangkat = Pangkat::find($pangkat_id);
        return view('admin.pangkat.detail', compact('pangkat'));
    }
}
