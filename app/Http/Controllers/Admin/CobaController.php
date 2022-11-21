<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sub;
use App\Models\Coba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CobaController extends Controller
{
    public function index()
    {
        return view('admin.coba.index');
    }

    public function detail($coba_id)
    {
        $coba = Coba::where('id', $coba_id)->first();
        if ($coba) {
            $sub = Sub::where('coba_id', $coba->id)->get();


            return view('admin.coba.detail', compact('coba', 'sub'));
        } else {
            return redirect('/');
        }

        return view('admin.coba.index');
    }

    public function viewSub(string $coba_id, string $sub_id)
    {
        $coba = Coba::where('id', $coba_id)->where('status', '0')->first();
        if ($coba) {
            $sub = Sub::where('coba_id', $coba->id)->where('id', $sub_id)->first();

            return view('admin.coba.detail', compact('sub'));
        } else {
            return redirect('/');
        }
    }
}
