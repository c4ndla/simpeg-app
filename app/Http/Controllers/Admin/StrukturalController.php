<?php

namespace App\Http\Controllers\Admin;

use App\Models\Struktural;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StrukturalController extends Controller
{
    public function index()
    {
        return view('admin.struktural.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'deskripsi' => 'required|max:100',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator
            ]);
        } else {
            $struktural = new Struktural;
            $struktural->nama = $request->input('nama');
            $struktural->deskripsi = $request->input('deskripsi');

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/struktural/', $filename);
                $struktural->image = $filename;
            }

            $struktural->save();

            return redirect('admin/struktural')->with('message', 'Kategori Berhasil Ditambahkan');
        }
    }
}
