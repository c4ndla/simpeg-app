<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agama;
use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PersonalFormRequest;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all();
        $agama = Agama::all();
        return view('admin.personal.index', compact('personal'));
    }

    public function detail($personal_id)
    {
        $personal = Personal::find($personal_id);
        return view('admin.personal.detail', compact('personal'));
    }

    public function view()
    {

        return view('admin.personal.view');
    }

    public function create()
    {
        $agama = Agama::where('status', '0')->get();
        return view('admin.personal.create', compact('agama'));
    }

    public function store(PersonalFormRequest $request)
    {
        $data = $request->validated();

        $personal = new Personal;
        $personal->agama_id = $data['agama_id'];
        $personal->NIP = $data['NIP'];
        $personal->nama_depan = $data['nama_depan'];
        $personal->nama_belakang = $data['nama_belakang'];
        $personal->gelar_depan = $data['gelar_depan'];
        $personal->gelar_belakang = $data['gelar_belakang'];
        $personal->jenis_kelamin = $data['jenis_kelamin'];
        // $personal->agama = $data['agama'];
        $personal->tempat = $data['tempat'];
        $personal->tgl_lahir = $data['tgl_lahir'];
        $personal->status_nikah = $data['status_nikah'];
        $personal->alamat = $data['alamat'];
        $personal->provinsi = $data['provinsi'];
        $personal->kota = $data['kota'];
        $personal->kecamatan = $data['kecamatan'];
        $personal->rt = $data['rt'];
        $personal->rw = $data['rw'];
        $personal->kode_pos = $data['kode_pos'];
        $personal->no_telp = $data['no_telp'];
        $personal->no_hp = $data['no_hp'];
        $personal->status_pegawai = $data['status_pegawai'];
        $personal->status_jabatan = $data['status_jabatan'];
        $personal->status_keahlian = $data['status_keahlian'];
        $personal->tingkat_keahlian = $data['tingkat_keahlian'];
        $personal->jabatan_struktural = $data['jabatan_struktural'];

        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/foto/', $filename);
            $personal->foto = $filename;
        }

        if ($request->hasfile('ktp')) {
            $file = $request->file('ktp');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/ktp/', $filename);
            $personal->ktp = $filename;
        }

        $personal->status = $request->status == true ? '1' : '0';
        // $personal->created_by = Auth::user()->id;
        $personal->save();

        return redirect('admin/personal')->with('message', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($personal_id)
    {
        $agama = Agama::where('status', '0')->get();
        $personal = Personal::find($personal_id);
        return view('admin.personal.edit', compact('personal', 'agama'));
    }


    public function update(PersonalFormRequest $request, $personal_id)
    {
        $data = $request->validated();

        $personal = Personal::find($personal_id);
        $personal->agama_id = $data['agama_id'];
        $personal->NIP = $data['NIP'];
        $personal->nama_depan = $data['nama_depan'];
        $personal->nama_belakang = $data['nama_belakang'];
        $personal->gelar_depan = $data['gelar_depan'];
        $personal->gelar_belakang = $data['gelar_belakang'];
        $personal->jenis_kelamin = $data['jenis_kelamin'];
        // $personal->agama = $data['agama'];
        $personal->tempat = $data['tempat'];
        $personal->tgl_lahir = $data['tgl_lahir'];
        $personal->status_nikah = $data['status_nikah'];
        $personal->alamat = $data['alamat'];
        $personal->provinsi = $data['provinsi'];
        $personal->kota = $data['kota'];
        $personal->kecamatan = $data['kecamatan'];
        $personal->rt = $data['rt'];
        $personal->rw = $data['rw'];
        $personal->kode_pos = $data['kode_pos'];
        $personal->no_telp = $data['no_telp'];
        $personal->no_hp = $data['no_hp'];
        $personal->status_pegawai = $data['status_pegawai'];
        $personal->status_jabatan = $data['status_jabatan'];
        $personal->status_keahlian = $data['status_keahlian'];
        $personal->tingkat_keahlian = $data['tingkat_keahlian'];
        $personal->jabatan_struktural = $data['jabatan_struktural'];


        if ($request->hasfile('foto')) {

            //delete
            $destination = 'uploads/foto/' . $personal->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/foto/', $filename);
            $personal->foto = $filename;
        }

        if ($request->hasfile('ktp')) {

            //delete
            $destination = 'uploads/ktp/' . $personal->ktp;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('ktp');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/ktp/', $filename);
            $personal->ktp = $filename;
        }

        $personal->status = $request->status == true ? '1' : '0';
        // $personal->created_by = Auth::user()->id;
        $personal->update();

        return redirect('admin/personal')->with('message', 'Kategori Berhasil Diupdate');
    }

    public function destroy($personal_id)
    {
        $personal = Personal::find($personal_id);

        if ($personal) {
            $destination = 'uploads/foto/' . $personal->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $destination = 'uploads/ktp/' . $personal->ktp;
            if (File::exists($destination)) {
                File::delete($destination);
            }


            $personal->delete();
            return redirect('admin/personal')->with('message', 'personal dan Tema Berhasil Dihapus');
        } else {
            return redirect('admin/personal')->with('message', 'personal Gagal Dihapus');
        }
    }
}
