<?php

namespace App\Http\Controllers\Admin;

use App\Models\Data_pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\DataPegawaiFormRequest;

class DataPegawaiController extends Controller
{
    public function index()
    {
        return view('admin.data_pegawai.index');
    }

    public function create()
    {
        return view('admin.data_pegawai.create');
    }

    public function view()
    {
        return view('admin.data_pegawai.view');
    }

    public function store(DataPegawaiFormRequest $request)
    {
        $data = $request->validated();

        $data_pegawai = new Data_pegawai();
        $data_pegawai->nama = $data['nama'];
        $data_pegawai->deskripsi = $data['deskripsi'];

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/data_pegawai/', $filename);
            $data_pegawai->icon = $filename;
        }

        $data_pegawai->status = $request->status == true ? '1' : '0';
        $data_pegawai->save();

        return redirect('admin/data_pegawai')->with('message', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($data_pegawai_id)
    {
        $data_pegawai = Data_pegawai::find($data_pegawai_id);
        return view('admin.data_pegawai.edit', compact('data_pegawai'));
    }

    public function update(DataPegawaiFormRequest $request, $data_pegawai_id)
    {
        $data = $request->validated();

        $data_pegawai = Data_pegawai::find($data_pegawai_id);
        $data_pegawai->nama = $data['nama'];
        $data_pegawai->deskripsi = $data['deskripsi'];

        if ($request->hasfile('icon')) {

            //delete
            $destination = 'uploads/data_pegawai/' . $data_pegawai->icon;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/data_pegawai/', $filename);
            $data_pegawai->icon = $filename;
        }

        $data_pegawai->status = $request->status == true ? '1' : '0';
        $data_pegawai->update();

        return redirect('admin/data_pegawai')->with('message', 'Kategori Berhasil Diupdate');
    }

    // public function destroy(Request $request)
    // {
    //     $data_pegawai = Data_pegawai::find($request->data_pegawai_delete_id);
    //     if ($data_pegawai) {
    //         $destination = 'uploads/data_pegawai/' . $data_pegawai->icon;
    //         if (File::exists($destination)) {
    //             File::delete($destination);
    //         }
    //         // $data_pegawai->posts()->delete();
    //         $data_pegawai->delete();
    //         return redirect('admin/data_pegawai')->with('message', 'data_pegawai dan Post Berhasil Dihapus');
    //     } else {
    //         return redirect('admin/data_pegawai')->with('message', 'data_pegawai Gagal Dihapus');
    //     }
    // }
}
