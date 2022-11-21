<?php

namespace App\Http\Livewire\Admin\Jabatan;

use App\Models\Jabatan;
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

    public $jenis_jabatan, $unit_kerja, $dokumen, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_jenis_jabatan;
    public $edit_unit_kerja;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;


    public $search = '';

    public function rules()
    {
        return [
            'jenis_jabatan' => 'nullable|string',
            'unit_kerja' => 'nullable|string',
            'dokumen' => 'nullable|string',


        ];
    }

    public function resetField()
    {
        $this->jenis_jabatan = "";
        $this->unit_kerja = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->status = "";
        $this->edit_jenis_jabatan = "";
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
        $this->jenis_jabatan = NULL;
        $this->unit_kerja = NULL;
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
        $jabatan = new Jabatan();
        $this->validate([
            'jenis_jabatan' => 'required',
            'unit_kerja' => 'required',
            'dokumen' => 'nullable',
            'pegawai_id' => 'required',
            'status' => 'nullable',
        ]);

        $filename = "";
        if ($this->dokumen) {
            $filename = $this->dokumen->store('dokumen', 'public');
        } else {
            $filename = Null;
        }

        $jabatan->jenis_jabatan = $this->jenis_jabatan;
        $jabatan->unit_kerja = $this->unit_kerja;
        $jabatan->pegawai_id = $this->pegawai_id;
        $jabatan->dokumen = $filename;
        $jabatan->created_by = Auth::user()->id;
        $jabatan->status = $this->status == true ? '1' : '0';
        $result = $jabatan->save();
        if ($result) {
            session()->flash('success', 'Add Successfully');
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
        $jabatan = Jabatan::findOrFail($id);
        $this->edit_id = $jabatan->id;
        $this->edit_jenis_jabatan = $jabatan->jenis_jabatan;
        $this->edit_unit_kerja = $jabatan->unit_kerja;
        $this->edit_jenis_jabatan = $jabatan->jenis_jabatan;
        $this->edit_status = $jabatan->status;
        $this->edit_pegawai_id = $jabatan->pegawai_id;
        $this->old_dokumen = $jabatan->dokumen;
    }

    public function update($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $this->validate([
            'edit_unit_kerja' => 'required',
            'edit_jenis_jabatan' => 'required',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $jabatan->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }


        $jabatan->unit_kerja = $this->edit_unit_kerja;
        $jabatan->jenis_jabatan = $this->edit_jenis_jabatan;
        $jabatan->pegawai_id = $this->edit_pegawai_id;
        $jabatan->dokumen = $filename;
        $jabatan->created_by = Auth::user()->id;
        $jabatan->status = $this->edit_status == true ? '1' : '0';
        $result = $jabatan->save();
        if ($result) {
            Session::flash('message', 'Add Successfully');

            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($jabatan_id)
    {
        $this->jabatan_id = $jabatan_id;
    }

    public function destroy()
    {
        $jabatan = Jabatan::findOrFail($this->jabatan_id);
        $destination = public_path('storage\\' . $jabatan->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $jabatan->delete();


        if ($result) {
            session()->flash('success', 'Delete Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Delete Successfully');
        }
    }


    public function render()
    {
        $pegawai = Pegawai::all();

        $jabatan = Jabatan::all();

        return view('livewire.admin.jabatan.index', ['jabatan' => $jabatan, 'pegawai' => $pegawai]);
    }
}
