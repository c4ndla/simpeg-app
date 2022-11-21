<?php

namespace App\Http\Livewire\Admin\Pangkat;

use App\Models\Pangkat;
use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $golongan, $angka_kredit, $dokumen, $pegawai_id, $status, $bln_masuk,
        $jabatan, $status_pangkat, $masa_kerja, $sip, $berlaku_sip, $keluar_sip, $str,
        $keluar_str, $tmt_pangkat, $fungsional, $tmt_fungsional, $sk_jabatan;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_golongan;
    public $edit_bln_masuk;
    public $edit_jabatan;
    public $edit_status_pangkat;
    public $edit_masa_kerja;
    public $edit_sip;
    public $edit_berlaku_sip;
    public $edit_keluar_sip;
    public $edit_str;
    public $edit_keluar_str;
    public $edit_tmt_pangkat;
    public $edit_fungsional;
    public $edit_tmt_fungsional;
    public $edit_sk_jabatan;

    public $edit_angka_kredit;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;


    public $search = '';


    public function resetField()
    {
        $this->golongan = "";
        $this->bln_masuk = "";
        $this->jabatan = "";
        $this->status_pangkat = "";
        $this->masa_kerja = "";
        $this->sip = "";
        $this->berlaku_sip = "";
        $this->keluar_sip = "";
        $this->str = "";
        $this->keluar_str = "";
        $this->tmt_pangkat = "";
        $this->fungsional = "";
        $this->tmt_fungsional = "";
        $this->sk_jabatan = "";

        $this->angka_kredit = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->status = "";
        $this->edit_golongan = "";
        $this->edit_status = "";
        $this->new_dokumen = "";
        $this->old_dokumen = "";
        $this->edit_id = "";
    }

    public function showForm()
    {
        $this->showData = false;
        $this->createData = true;
    }



    public function resetInput()
    {
        $this->golongan = NULL;
        $this->bln_masuk = NULL;
        $this->status_pangkat = NULL;
        $this->masa_kerja = NULL;
        $this->sip = NULL;
        $this->berlaku_sip = NULL;
        $this->keluar_sip = NULL;
        $this->str = NULL;
        $this->keluar_str = NULL;
        $this->tmt_pangkat = NULL;
        $this->fungsional = NULL;
        $this->tmt_fungsional = NULL;
        $this->sk_jabatan = NULL;

        $this->angka_kredit = NULL;
        $this->dokumen = NULL;
        $this->pegawai_id = NULL;
        $this->status = NULL;
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }


    public function create()
    {
        $pangkat = new Pangkat();
        $this->validate([
            'golongan' => 'required',
            'angka_kredit' => 'required',
            'dokumen' => 'nullable',
            'pegawai_id' => 'required',
            'status' => 'nullable',

            'bln_masuk' => 'nullable',
            'status_pangkat' => 'nullable',
            'masa_kerja' => 'nullable',
            'sip' => 'nullable',
            'berlaku_sip' => 'nullable',
            'keluar_sip' => 'nullable',
            'str' => 'nullable',
            'keluar_str' => 'nullable',
            'tmt_pangkat' => 'nullable',
            'fungsional' => 'nullable',
            'tmt_fungsional' => 'nullable',
            'sk_jabatan' => 'nullable',
        ]);

        $filename = "";
        if ($this->dokumen) {
            $filename = $this->dokumen->store('dokumen', 'public');
        } else {
            $filename = Null;
        }

        $pangkat->golongan = $this->golongan;
        $pangkat->bln_masuk = $this->bln_masuk;
        $pangkat->jabatan = $this->jabatan;
        $pangkat->status_pangkat = $this->status_pangkat;
        $pangkat->masa_kerja = $this->masa_kerja;
        $pangkat->berlaku_sip = $this->berlaku_sip;
        $pangkat->keluar_sip = $this->keluar_sip;
        $pangkat->str = $this->str;
        $pangkat->keluar_str = $this->keluar_str;
        $pangkat->tmt_pangkat = $this->tmt_pangkat;
        $pangkat->fungsional = $this->fungsional;
        $pangkat->tmt_fungsional = $this->tmt_fungsional;
        $pangkat->sk_jabatan = $this->sk_jabatan;

        $pangkat->angka_kredit = $this->angka_kredit;
        $pangkat->pegawai_id = $this->pegawai_id;
        $pangkat->dokumen = $filename;
        $pangkat->created_by = Auth::user()->id;
        $pangkat->status = $this->status == true ? '1' : '0';
        $result = $pangkat->save();
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
        $pangkat = Pangkat::findOrFail($id);
        $this->edit_id = $pangkat->id;
        $this->edit_golongan = $pangkat->golongan;
        $this->edit_bln_masuk = $pangkat->bln_masuk;
        $this->edit_jabatan = $pangkat->jabatan;
        $this->edit_status_pangkat = $pangkat->status_pangkat;
        $this->edit_masa_kerja = $pangkat->masa_kerja;
        $this->edit_sip = $pangkat->sip;
        $this->edit_berlaku_sip = $pangkat->berlaku_sip;
        $this->edit_keluar_sip = $pangkat->keluar_sip;
        $this->edit_str = $pangkat->str;
        $this->edit_keluar_str = $pangkat->keluar_str;
        $this->edit_tmt_pangkat = $pangkat->tmt_pangkat;
        $this->edit_fungsional = $pangkat->fungsional;
        $this->edit_tmt_fungsional = $pangkat->tmt_fungsional;
        $this->edit_sk_jabatan = $pangkat->sk_jabatan;

        $this->edit_angka_kredit = $pangkat->angka_kredit;
        $this->edit_golongan = $pangkat->golongan;
        $this->edit_status = $pangkat->status;
        $this->edit_pegawai_id = $pangkat->pegawai_id;
        $this->old_dokumen = $pangkat->dokumen;
    }

    public function update($id)
    {
        $pangkat = Pangkat::findOrFail($id);
        $this->validate([
            'edit_angka_kredit' => 'required',
            'edit_golongan' => 'required',
            'edit_bln_masuk' => 'nullable',
            'edit_jabatan' => 'nullable',
            'edit_status_pangkat' => 'nullable',
            'edit_masa_kerja' => 'nullable',
            'edit_sip' => 'nullable',
            'edit_berlaku_sip' => 'nullable',
            'edit_keluar_sip' => 'nullable',
            'edit_str' => 'nullable',
            'edit_keluar_str' => 'nullable',
            'edit_tmt_pangkat' => 'nullable',
            'edit_fungsional' => 'nullable',
            'edit_tmt_fungsional' => 'nullable',
            'edit_sk_jabatan' => 'nullable',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $pangkat->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }


        $pangkat->angka_kredit = $this->edit_angka_kredit;
        $pangkat->golongan = $this->edit_golongan;
        $pangkat->bln_masuk = $this->edit_bln_masuk;
        $pangkat->jabatan = $this->edit_jabatan;
        $pangkat->status_pangkat = $this->edit_status_pangkat;
        $pangkat->masa_kerja = $this->edit_masa_kerja;
        $pangkat->sip = $this->edit_sip;
        $pangkat->berlaku_sip = $this->edit_berlaku_sip;
        $pangkat->keluar_sip = $this->edit_keluar_sip;
        $pangkat->str = $this->edit_str;
        $pangkat->keluar_str = $this->edit_keluar_str;
        $pangkat->tmt_pangkat = $this->edit_tmt_pangkat;
        $pangkat->fungsional = $this->edit_fungsional;
        $pangkat->tmt_fungsional = $this->edit_tmt_fungsional;
        $pangkat->sk_jabatan = $this->edit_sk_jabatan;

        $pangkat->pegawai_id = $this->edit_pegawai_id;
        $pangkat->dokumen = $filename;
        // $pangkat->created_by = Auth::user()->id;
        $pangkat->status = $this->edit_status == true ? '1' : '0';
        $result = $pangkat->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($pangkat_id)
    {
        $this->pangkat_id = $pangkat_id;
    }

    public function destroy()
    {
        $pangkat = Pangkat::findOrFail($this->pangkat_id);
        $destination = public_path('storage\\' . $pangkat->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $pangkat->delete();


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
        $pegawai = Pegawai::all();

        $pangkat = Pangkat::all();

        return view('livewire.admin.pangkat.index', ['pangkat' => $pangkat, 'pegawai' => $pegawai]);
    }
}
