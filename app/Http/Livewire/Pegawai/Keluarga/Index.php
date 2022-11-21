<?php

namespace App\Http\Livewire\Pegawai\Keluarga;

use App\Models\Pegawai;
use Livewire\Component;
use App\Models\Keluarga;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $hubungan, $jenis_kelamin, $dokumen, $bpjs, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_nama;
    public $edit_hubungan;
    public $edit_jenis_kelamin;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;
    public $old_bpjs;
    public $new_bpjs;

    public $search = '';

    public function resetField()
    {
        $this->nama = "";
        $this->hubungan = "";
        $this->jenis_kelamin = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->bpjs = "";
        $this->status = "";
        $this->edit_nama = "";
        $this->edit_status = "";
        $this->new_dokumen = "";
        $this->old_dokumen = "";
        $this->new_bpjs = "";
        $this->old_bpjs = "";
        $this->edit_id = "";
    }

    public function showForm()
    {
        $this->showData = false;
        $this->createData = true;
    }



    public function resetInput()
    {
        $this->nama = NULL;
        $this->hubungan = NULL;
        $this->jenis_kelamin = NULL;
        $this->dokumen = NULL;
        $this->bpjs = NULL;
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
        $keluarga = new Keluarga();
        $this->validate([
            'nama' => 'required',
            'hubungan' => 'required',
            'jenis_kelamin' => 'required',
            'dokumen' => 'nullable',
            'bpjs' => 'nullable',
            'pegawai_id' => 'required',
            'status' => 'nullable',
        ]);

        $filename = "";
        if ($this->dokumen) {
            $filename = $this->dokumen->store('dokumen', 'public');
        } else {
            $filename = Null;
        }


        if ($this->bpjs) {
            $filebpjs = $this->bpjs->store('bpjs', 'public');
        } else {
            $filebpjs = Null;
        }

        $keluarga->nama = $this->nama;
        $keluarga->hubungan = $this->hubungan;
        $keluarga->jenis_kelamin = $this->jenis_kelamin;
        $keluarga->pegawai_id = $this->pegawai_id;
        $keluarga->dokumen = $filename;
        $keluarga->bpjs = $filebpjs;
        $keluarga->created_by = Auth::user()->id;
        $keluarga->status = $this->status == true ? '1' : '0';
        $result = $keluarga->save();
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
        $keluarga = Keluarga::findOrFail($id);
        $this->edit_id = $keluarga->id;
        $this->edit_nama = $keluarga->nama;
        $this->edit_hubungan = $keluarga->hubungan;
        $this->edit_jenis_kelamin = $keluarga->jenis_kelamin;
        $this->edit_status = $keluarga->status;
        $this->edit_pegawai_id = $keluarga->pegawai_id;
        $this->old_dokumen = $keluarga->dokumen;
        $this->old_bpjs = $keluarga->bpjs;
    }

    public function update($id)
    {
        $keluarga = Keluarga::findOrFail($id);
        $this->validate([
            'edit_nama' => 'required',
            'edit_hubungan' => 'required',
            'edit_jenis_kelamin' => 'required',
        ]);

        $filename = "";
        $destination = public_path('storage\\' . $keluarga->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }

        $filebpjs = "";
        $destination = public_path('storage\\' . $keluarga->bpjs);
        if ($this->new_bpjs != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filebpjs = $this->new_bpjs->store('bpjs', 'public');
        } else {
            $filebpjs = $this->old_bpjs;
        }

        $keluarga->nama = $this->edit_nama;
        $keluarga->hubungan = $this->edit_hubungan;
        $keluarga->jenis_kelamin = $this->edit_jenis_kelamin;
        $keluarga->pegawai_id = $this->edit_pegawai_id;
        $keluarga->dokumen = $filename;
        $keluarga->bpjs = $filebpjs;
        $keluarga->created_by = Auth::user()->id;
        $keluarga->status = $this->edit_status == true ? '1' : '0';
        $result = $keluarga->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($keluarga_id)
    {
        $this->keluarga_id = $keluarga_id;
    }

    public function destroy()
    {
        $keluarga = Keluarga::findOrFail($this->keluarga_id);
        $destination = public_path('storage\\' . $keluarga->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination = public_path('storage\\' . $keluarga->bpjs);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $keluarga->delete();


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

        $keluarga = Keluarga::all();

        return view('livewire.pegawai.keluarga.index', ['keluarga' => $keluarga, 'pegawai' => $pegawai]);
    }
}
