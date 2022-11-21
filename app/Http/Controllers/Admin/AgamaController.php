<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agama;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\AgamaFormRequest;

class AgamaController extends Controller
{
    public function index()
    {
        return view('admin.agama.index');
    }
}
