<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cpns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CpnsController extends Controller
{
    public function index()
    {
        return view('admin.cpns.index');
    }

    public function detail($cpns_id)
    {
        $cpns = Cpns::find($cpns_id);
        return view('admin.cpns.detail', compact('cpns'));
    }
}
