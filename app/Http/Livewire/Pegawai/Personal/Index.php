<?php

namespace App\Http\Livewire\Pegawai\Personal;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $tempat, $nik, $alamat, $no_telp, $kelamin, $nama_pasangan, $agama,
        $nama_ruang, $status_nikah, $gelar_depan, $gelar_belakang, $no_npwp, $rek_bpd, $no_hp,
        $no_bpjs_sehat, $no_bpjs_kerja, $email, $darah,
        $provinsi, $kota, $kecamatan, $rt, $rw, $kode_pos, $kerja, $bpjs,
        $nama, $nip, $tgl_lahir, $ktp, $npwp, $foto, $created_by, $ruang_id;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_ruang_id;
    public $edit_created_by;
    public $edit_nama;
    public $edit_nip;
    public $edit_tgl_lahir;
    public $edit_ktp;
    public $edit_npwp;
    public $old_foto;
    public $new_foto;
    public $old_ktp;
    public $new_ktp;
    public $old_npwp;
    public $new_npwp;

    public $edit_tempat;
    public $edit_agama;
    public $edit_nik;
    public $edit_alamat;
    public $edit_no_telp;
    public $edit_kelamin;
    public $edit_nama_pasangan;
    public $edit_nama_ruang;
    public $edit_status_nikah;
    public $edit_gelar_depan;
    public $edit_gelar_belakang;
    public $edit_no_npwp;
    public $edit_rek_bpd;
    public $edit_no_hp;
    public $edit_no_bpjs_sehat;
    public $edit_no_bpjs_kerja;
    public $edit_email;
    public $edit_darah;
    public $edit_provinsi;
    public $edit_kota;
    public $edit_kecamatan;
    public $edit_rt;
    public $edit_rw;
    public $edit_kode_pos;
    public $old_kerja;
    public $new_kerja;
    public $old_bpjs;
    public $new_bpjs;


    public function resetField()
    {
        $this->created_by = "";
        $this->ruang_id = "";
        $this->nama = "";
        $this->nip = "";
        $this->tgl_lahir = "";
        $this->foto = "";
        $this->ktp = "";
        $this->npwp = "";
        $this->edit_nama = "";
        $this->edit_nip = "";
        $this->edit_tgl_lahir = "";
        $this->new_foto = "";
        $this->old_foto = "";
        $this->new_ktp = "";
        $this->old_ktp = "";
        $this->new_npwp = "";
        $this->old_npwp = "";
        $this->edit_id = "";

        $this->tempat = "";
        $this->agama = "";
        $this->nik = "";
        $this->alamat = "";
        $this->no_telp = "";
        $this->kelamin = "";
        $this->nama_pasangan = "";
        $this->nama_ruang = "";
        $this->status_nikah = "";
        $this->gelar_depan = "";
        $this->gelar_belakang = "";
        $this->no_npwp = "";
        $this->rek_bpd = "";
        $this->no_hp = "";
        $this->no_bpjs_sehat = "";
        $this->no_bpjs_kerja = "";
        $this->email = "";
        $this->darah = "";
        $this->provinsi = "";
        $this->kota = "";
        $this->kecamatan = "";
        $this->rt = "";
        $this->rw = "";
        $this->kode_pos = "";
        $this->kerja = "";
        $this->bpjs = "";

        $this->edit_tempat = "";
        $this->edit_agama = "";
        $this->edit_nik = "";
        $this->edit_alamat = "";
        $this->edit_no_telp = "";
        $this->edit_kelamin = "";
        $this->edit_nama_pasangan = "";
        $this->edit_nama_ruang = "";
        $this->edit_status_nikah = "";
        $this->edit_gelar_depan = "";
        $this->edit_gelar_belakang = "";
        $this->edit_no_npwp = "";
        $this->edit_rek_bpd = "";
        $this->edit_no_hp = "";
        $this->edit_no_bpjs_sehat = "";
        $this->edit_no_bpjs_kerja = "";
        $this->edit_email = "";
        $this->edit_darah = "";
        $this->edit_provinsi = "";
        $this->edit_kota = "";
        $this->edit_kecamatan = "";
        $this->edit_rt = "";
        $this->edit_rw = "";
        $this->edit_kode_pos = "";
        $this->old_kerja = "";
        $this->new_kerja = "";
        $this->old_bpjs = "";
        $this->new_bpjs = "";
    }

    public function showForm()
    {
        $this->showData = false;
        $this->createData = true;
    }


    public function resetInput()
    {
        $this->created_by = NULL;
        $this->ruang_id = NULL;
        $this->nama = NULL;
        $this->nip = NULL;
        $this->tgl_lahir = NULL;
        $this->foto = NULL;
        $this->ktp = NULL;
        $this->npwp = NULL;

        $this->tempat = NULL;
        $this->agama = NULL;
        $this->nik = NULL;
        $this->alamat = NULL;
        $this->no_telp = NULL;
        $this->kelamin = NULL;
        $this->nama_pasangan = NULL;
        $this->nama_ruang = NULL;
        $this->status_nikah = NULL;
        $this->gelar_depan = NULL;
        $this->gelar_belakang = NULL;
        $this->no_npwp = NULL;
        $this->rek_bpd = NULL;
        $this->no_hp = NULL;
        $this->no_bpjs_sehat = NULL;
        $this->no_bpjs_kerja = NULL;
        $this->email = NULL;
        $this->darah = NULL;
        $this->provinsi = NULL;
        $this->kota = NULL;
        $this->kecamatan = NULL;
        $this->rt = NULL;
        $this->rw = NULL;
        $this->kode_pos = NULL;
        $this->kerja = NULL;
        $this->bpjs = NULL;
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }


    use WithFileUploads;
    public function create()
    {
        $pegawai = new Pegawai();
        $this->validate([
            'nama' => 'required|string',
            'ruang_id' => 'nullable|string',
            'nip' => 'nullable|string',
            'tgl_lahir' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg',
            'ktp' => 'nullable',
            'npwp' => 'nullable',

            'tempat' => 'nullable|string',
            'agama' => 'nullable|string',
            'nik' => 'nullable|string',
            'alamat' => 'nullable|string',
            'no_telp' => 'nullable|string',
            'kelamin' => 'nullable|string',
            'nama_pasangan' => 'nullable|string',
            'nama_ruang' => 'nullable|string',
            'status_nikah' => 'nullable|string',
            'gelar_depan' => 'nullable|string',
            'gelar_belakang' => 'nullable|string',
            'no_npwp' => 'nullable|string',
            'rek_bpd' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'no_bpjs_sehat' => 'nullable|string',
            'no_bpjs_kerja' => 'nullable|string',
            'email' => 'nullable|string',
            'darah' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'kota' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'rt' => 'nullable|string',
            'rw' => 'nullable|string',
            'kode_pos' => 'nullable|string',
            'kerja' => 'nullable',
            'bpjs' => 'nullable',
        ]);

        $filefoto = "";
        if ($this->foto) {
            $filefoto = $this->foto->store('foto', 'public');
        } else {
            $filefoto = Null;
        }

        $filektp = "";
        if ($this->ktp) {
            $filektp = $this->ktp->store('ktp', 'public');
        } else {
            $filektp = Null;
        }

        $filenpwp = "";
        if ($this->npwp) {
            $filenpwp = $this->npwp->store('npwp', 'public');
        } else {
            $filenpwp = Null;
        }

        $filekerja = "";
        if ($this->kerja) {
            $filekerja = $this->kerja->store('kerja', 'public');
        } else {
            $filekerja = Null;
        }

        $filebpjs = "";
        if ($this->bpjs) {
            $filebpjs = $this->bpjs->store('bpjs', 'public');
        } else {
            $filebpjs = Null;
        }

        $pegawai->nama = $this->nama;
        // $pegawai->ruang_id = $this->ruang_id;
        $pegawai->nip = $this->nip;
        $pegawai->tgl_lahir = $this->tgl_lahir;

        $pegawai->tempat = $this->tempat;
        $pegawai->agama = $this->agama;
        $pegawai->nik = $this->nik;
        $pegawai->alamat = $this->alamat;
        $pegawai->no_telp = $this->no_telp;
        $pegawai->kelamin = $this->kelamin;
        $pegawai->nama_pasangan = $this->nama_pasangan;
        $pegawai->nama_ruang = $this->nama_ruang;
        $pegawai->status_nikah = $this->status_nikah;
        $pegawai->gelar_depan = $this->gelar_depan;
        $pegawai->gelar_belakang = $this->gelar_belakang;
        $pegawai->no_npwp = $this->no_npwp;
        $pegawai->rek_bpd = $this->rek_bpd;
        $pegawai->no_hp = $this->no_hp;
        $pegawai->no_bpjs_sehat = $this->no_bpjs_sehat;
        $pegawai->no_bpjs_kerja = $this->no_bpjs_kerja;
        $pegawai->email = $this->email;
        $pegawai->darah = $this->darah;
        $pegawai->provinsi = $this->provinsi;
        $pegawai->kota = $this->kota;
        $pegawai->kecamatan = $this->kecamatan;
        $pegawai->rt = $this->rt;
        $pegawai->rw = $this->rw;
        $pegawai->kode_pos = $this->kode_pos;

        $pegawai->foto = $filefoto;
        $pegawai->ktp = $filektp;
        $pegawai->npwp = $filenpwp;
        $pegawai->kerja = $filekerja;
        $pegawai->bpjs = $filebpjs;


        $pegawai->created_by = Auth::user()->id;
        $pegawai->status == true ? '1' : '0';

        $result = $pegawai->save();
        if ($result) {
            $this->dispatchBrowserEvent('success');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Add Successfully');
        }
    }

    public function edit($id)
    {
        $this->showData = false;
        $this->updateData = true;
        $pegawai = Pegawai::findOrFail($id);
        $this->edit_id = $pegawai->id;
        $this->edit_created_by = $pegawai->created_by;
        // $this->edit_ruang_id = $pegawai->ruang_id;
        $this->edit_nama = $pegawai->nama;
        $this->edit_nip = $pegawai->nip;
        $this->edit_tgl_lahir = $pegawai->tgl_lahir;
        $this->old_foto = $pegawai->foto;
        $this->old_ktp = $pegawai->ktp;
        $this->old_npwp = $pegawai->npwp;

        $this->edit_tempat = $pegawai->tempat;
        $this->edit_agama = $pegawai->agama;
        $this->edit_nik = $pegawai->nik;
        $this->edit_alamat = $pegawai->alamat;
        $this->edit_no_telp = $pegawai->no_telp;
        $this->edit_kelamin = $pegawai->kelamin;
        $this->edit_nama_pasangan = $pegawai->nama_pasangan;
        $this->edit_nama_ruang = $pegawai->nama_ruang;
        $this->edit_status_nikah = $pegawai->status_nikah;
        $this->edit_gelar_depan = $pegawai->gelar_depan;
        $this->edit_gelar_belakang = $pegawai->gelar_belakang;
        $this->edit_no_npwp = $pegawai->no_npwp;
        $this->edit_rek_bpd = $pegawai->rek_bpd;
        $this->edit_no_hp = $pegawai->no_hp;
        $this->edit_no_bpjs_sehat = $pegawai->no_bpjs_sehat;
        $this->edit_no_bpjs_kerja = $pegawai->no_bpjs_kerja;
        $this->edit_email = $pegawai->email;
        $this->edit_darah = $pegawai->darah;
        $this->edit_provinsi = $pegawai->provinsi;
        $this->edit_kota = $pegawai->kota;
        $this->edit_kecamatan = $pegawai->kecamatan;
        $this->edit_rt = $pegawai->rt;
        $this->edit_rw = $pegawai->rw;
        $this->edit_kode_pos = $pegawai->kode_pos;
        $this->old_kerja = $pegawai->kerja;
        $this->old_bpjs = $pegawai->bpjs;
    }

    public function update($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $this->validate([
            'edit_nama' => 'required',
            'edit_ruang_id' => 'nullable',
            'edit_nip' => 'nullable',

            'edit_tempat' => 'nullable',
            'edit_agama' => 'nullable',
            'edit_nik' => 'nullable',
            'edit_alamat' => 'nullable',
            'edit_no_telp' => 'nullable',
            'edit_kelamin' => 'nullable',
            'edit_nama_pasangan' => 'nullable',
            'edit_nama_ruang' => 'nullable',
            'edit_status_nikah' => 'nullable',
            'edit_gelar_depan' => 'nullable',
            'edit_gelar_belakang' => 'nullable',
            'edit_no_npwp' => 'nullable',
            'edit_rek_bpd' => 'nullable',
            'edit_no_hp' => 'nullable',
            'edit_no_bpjs_sehat' => 'nullable',
            'edit_no_bpjs_kerja' => 'nullable',
            'edit_email' => 'nullable',
            'edit_darah' => 'nullable',
            'edit_provinsi' => 'nullable',
            'edit_kota' => 'nullable',
            'edit_kecamatan' => 'nullable',
            'edit_rt' => 'nullable',
            'edit_rw' => 'nullable',
            'edit_kode_pos' => 'nullable',

        ]);

        $filefoto = "";
        $destination = public_path('storage\\' . $pegawai->foto);
        if ($this->new_foto != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filefoto = $this->new_foto->store('foto', 'public');
        } else {
            $filefoto = $this->old_foto;
        }

        $filefoto = "";
        $destination = public_path('storage\\' . $pegawai->foto);
        if ($this->new_foto != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filefoto = $this->new_foto->store('foto', 'public');
        } else {
            $filefoto = $this->old_foto;
        }

        $filektp = "";
        $destination = public_path('storage\\' . $pegawai->ktp);
        if ($this->new_ktp != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filektp = $this->new_ktp->store('ktp', 'public');
        } else {
            $filektp = $this->old_ktp;
        }

        $filenpwp = "";
        $destination = public_path('storage\\' . $pegawai->npwp);
        if ($this->new_npwp != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filenpwp = $this->new_npwp->store('npwp', 'public');
        } else {
            $filenpwp = $this->old_npwp;
        }

        $filekerja = "";
        $destination = public_path('storage\\' . $pegawai->kerja);
        if ($this->new_kerja != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filekerja = $this->new_kerja->store('kerja', 'public');
        } else {
            $filekerja = $this->old_kerja;
        }

        $filebpjs = "";
        $destination = public_path('storage\\' . $pegawai->bpjs);
        if ($this->new_bpjs != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filebpjs = $this->new_bpjs->store('bpjs', 'public');
        } else {
            $filebpjs = $this->old_bpjs;
        }

        $pegawai->nama = $this->edit_nama;
        // $pegawai->ruang_id = $this->edit_ruang_id;
        $pegawai->nip = $this->edit_nip;
        $pegawai->tgl_lahir = $this->edit_tgl_lahir;
        $pegawai->foto = $filefoto;
        $pegawai->ktp = $filektp;
        $pegawai->npwp = $filenpwp;

        $pegawai->tempat = $this->edit_tempat;
        $pegawai->agama = $this->edit_agama;
        $pegawai->nik = $this->edit_nik;
        $pegawai->alamat = $this->edit_alamat;
        $pegawai->no_telp = $this->edit_no_telp;
        $pegawai->kelamin = $this->edit_kelamin;
        $pegawai->nama_pasangan = $this->edit_nama_pasangan;
        $pegawai->nama_ruang = $this->edit_nama_ruang;
        $pegawai->status_nikah = $this->edit_status_nikah;
        $pegawai->gelar_depan = $this->edit_gelar_depan;
        $pegawai->gelar_belakang = $this->edit_gelar_belakang;
        $pegawai->no_npwp = $this->edit_no_npwp;
        $pegawai->rek_bpd = $this->edit_rek_bpd;
        $pegawai->no_hp = $this->edit_no_hp;
        $pegawai->no_bpjs_sehat = $this->edit_no_bpjs_sehat;
        $pegawai->no_bpjs_kerja = $this->edit_no_bpjs_kerja;
        $pegawai->email = $this->edit_email;
        $pegawai->darah = $this->edit_darah;
        $pegawai->provinsi = $this->edit_provinsi;
        $pegawai->kota = $this->edit_kota;
        $pegawai->kecamatan = $this->edit_kecamatan;
        $pegawai->rt = $this->edit_rt;
        $pegawai->rw = $this->edit_rw;
        $pegawai->kode_pos = $this->edit_kode_pos;
        $pegawai->kerja = $filekerja;
        $pegawai->bpjs = $filebpjs;

        $pegawai->created_by = Auth::user()->id;
        $pegawai->status == true ? '1' : '0';

        $result = $pegawai->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($pegawai_id)
    {
        $this->pegawai_id = $pegawai_id;
    }

    public function destroy()
    {
        $pegawai = Pegawai::findOrFail($this->pegawai_id);
        $destination = public_path('storage\\' . $pegawai->foto);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $pegawai->ktp);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $pegawai->npwp);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $pegawai->kerja);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $pegawai->bpjs);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $pegawai->delete();

        // $pegawai->keluarga()->delete();
        // $pegawai->pendidikan()->delete();
        // $pegawai->seminar()->delete();
        // $pegawai->pangkat()->delete();
        // $pegawai->jabatan()->delete();
        // $pegawai->cpns()->delete();
        // $pegawai->ruangan()->delete();
        // $pegawai->gaji()->delete();

        if ($result) {
            $this->dispatchBrowserEvent('danger');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Delete Successfully');
        }
    }


    public function render()
    {
        $pegawai = Pegawai::orderBy('id', 'DESC')->paginate(10);


        return view('livewire.pegawai.personal.index', [
            'pegawai' => $pegawai,
        ]);
    }
}
