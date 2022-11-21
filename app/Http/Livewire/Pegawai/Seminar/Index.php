<?php

namespace App\Http\Livewire\Pegawai\Seminar;

use App\Models\Pegawai;
use App\Models\Seminar;
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

    public $nama, $tempat, $dokumen, $sertifikat, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_nama;
    public $edit_tempat;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;
    public $old_sertifikat;
    public $new_sertifikat;

    public $search = '';

    public function rules()
    {
        return [
            'nama' => 'nullable|string',
            'tempat' => 'nullable|string',
            'dokumen' => 'nullable|string',
            'sertifikat' => 'nullable|string',

        ];
    }

    public function resetField()
    {
        $this->nama = "";
        $this->tempat = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->sertifikat = "";
        $this->status = "";
        $this->edit_nama = "";
        $this->edit_status = "";
        $this->new_dokumen = "";
        $this->old_dokumen = "";
        $this->new_sertifikat = "";
        $this->old_sertifikat = "";
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
        $this->tempat = NULL;
        $this->dokumen = NULL;
        $this->sertifikat = NULL;
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
        $seminar = new Seminar();
        $this->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'dokumen' => 'nullable',
            'sertifikat' => 'nullable',
            'pegawai_id' => 'required',
            'status' => 'nullable',
        ]);

        $filename = "";
        if ($this->dokumen) {
            $filename = $this->dokumen->store('dokumen', 'public');
        } else {
            $filename = Null;
        }


        if ($this->sertifikat) {
            $filesertifikat = $this->sertifikat->store('sertifikat', 'public');
        } else {
            $filesertifikat = Null;
        }

        $seminar->nama = $this->nama;
        $seminar->tempat = $this->tempat;
        $seminar->pegawai_id = $this->pegawai_id;
        $seminar->dokumen = $filename;
        $seminar->sertifikat = $filesertifikat;
        $seminar->created_by = Auth::user()->id;
        $seminar->status = $this->status == true ? '1' : '0';
        $result = $seminar->save();
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
        $seminar = Seminar::findOrFail($id);
        $this->edit_id = $seminar->id;
        $this->edit_nama = $seminar->nama;
        $this->edit_tempat = $seminar->tempat;
        $this->edit_nama = $seminar->nama;
        $this->edit_status = $seminar->status;
        $this->edit_pegawai_id = $seminar->pegawai_id;
        $this->old_dokumen = $seminar->dokumen;
        $this->old_sertifikat = $seminar->sertifikat;
    }

    public function update($id)
    {
        $seminar = Seminar::findOrFail($id);
        $this->validate([
            'edit_tempat' => 'required',
            'edit_nama' => 'required',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $seminar->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }

        $filesertifikat = "";
        $destination = public_path('storage\\' . $seminar->sertifikat);
        if ($this->new_sertifikat != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filesertifikat = $this->new_sertifikat->store('sertifikat', 'public');
        } else {
            $filesertifikat = $this->old_sertifikat;
        }

        $seminar->tempat = $this->edit_tempat;
        $seminar->nama = $this->edit_nama;
        $seminar->pegawai_id = $this->edit_pegawai_id;
        $seminar->dokumen = $filename;
        $seminar->sertifikat = $filesertifikat;
        $seminar->created_by = Auth::user()->id;
        $seminar->status = $this->edit_status == true ? '1' : '0';
        $result = $seminar->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($seminar_id)
    {
        $this->seminar_id = $seminar_id;
    }

    public function destroy()
    {
        $seminar = Seminar::findOrFail($this->seminar_id);
        $destination = public_path('storage\\' . $seminar->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination = public_path('storage\\' . $seminar->sertifikat);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $seminar->delete();


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

        $seminar = Seminar::all();

        return view('livewire.pegawai.seminar.index', ['seminar' => $seminar, 'pegawai' => $pegawai]);
    }
}
