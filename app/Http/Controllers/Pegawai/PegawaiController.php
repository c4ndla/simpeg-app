<?php

namespace App\Http\Controllers\Pegawai;

use PDF;
use App\Models\Cpns;
use App\Models\Gaji;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Seminar;
use App\Models\Keluarga;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('pegawai.personal.index');
    }

    public function detail($pegawai_id)
    {
        $pegawai = Pegawai::where('id', $pegawai_id)->first();
        if ($pegawai) {
            $keluarga = Keluarga::where('pegawai_id', $pegawai->id)->get();
            $pendidikan = Pendidikan::where('pegawai_id', $pegawai->id)->get();
            $seminar = Seminar::where('pegawai_id', $pegawai->id)->get();
            $pangkat = Pangkat::where('pegawai_id', $pegawai->id)->get();
            $jabatan = Jabatan::where('pegawai_id', $pegawai->id)->get();
            $cpns = Cpns::where('pegawai_id', $pegawai->id)->get();
            $ruangan = Ruangan::where('pegawai_id', $pegawai->id)->get();
            $gaji = Gaji::where('pegawai_id', $pegawai->id)->get();


            return view('pegawai.personal.detail', compact(
                'pegawai',
                'keluarga',
                'pendidikan',
                'seminar',
                'pangkat',
                'jabatan',
                'cpns',
                'ruangan',
                'gaji',

            ));
        } else {
            return redirect('/');
        }

        return view('pegawai.personal.index');
    }

    // public function viewSub(string $pegawai_id, string $keluarga_id)
    // {
    //     $pegawai = Pegawai::where('id', $pegawai_id)->where('status', '0')->first();
    //     if ($pegawai) {
    //         $keluarga = Keluarga::where('pegawai_id', $pegawai->id)->where('id', $keluarga_id)->first();

    //         return view('pegawai.pegawai.detail', compact('keluarga'));
    //     } else {
    //         return redirect('/');
    //     }
    // }


    public function view($pegawai_id)
    {
        $pegawai = Pegawai::where('id', $pegawai_id)->first();

        if ($pegawai) {
            $keluarga = Keluarga::where('pegawai_id', $pegawai->id)->get();


            return view('pegawai.personal.view', compact(
                'pegawai',
                'keluarga',

            ));
        } else {
            return redirect('/');
        }
    }



    public function viewPDF($pegawai_id)
    {
        $pegawai = Pegawai::where('id', $pegawai_id)->first();

        if ($pegawai) {

            $keluarga = Keluarga::where('pegawai_id', $pegawai->id)->get();
            $pendidikan = Pendidikan::where('pegawai_id', $pegawai->id)->get();
            $seminar = Seminar::where('pegawai_id', $pegawai->id)->get();
            $jabatan = Jabatan::where('pegawai_id', $pegawai->id)->get();

            $pdf = PDF::loadView('pegawai.personal.pdf-download', array(
                'pegawai' => $pegawai,
                'keluarga' => $keluarga,
                'pendidikan' => $pendidikan,
                'seminar' => $seminar,
                'jabatan' => $jabatan,

            ));

            return $pdf->stream();
            // return $pdf->download('download.pdf');
        } else {
            return redirect('/');
        }
    }
}
