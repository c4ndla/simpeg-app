<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeminarController extends Controller
{
    public function index()
    {
        return view('admin.seminar.index');
    }

    public function detail($seminar_id)
    {
        $seminar = Seminar::find($seminar_id);
        return view('admin.seminar.detail', compact('seminar'));
    }
}
