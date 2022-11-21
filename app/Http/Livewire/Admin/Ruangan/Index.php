<?php

namespace App\Http\Livewire\Admin\Ruangan;

use App\Models\Pegawai;
use App\Models\Ruangan;
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

    public $nama_ruangan, $status_ruangan, $dokumen, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_nama_ruangan;
    public $edit_status_ruangan;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;


    public $search = '';

    public function rules()
    {
        return [
            'nama_ruangan' => 'nullable|string',
            'status_ruangan' => 'nullable|string',
            'dokumen' => 'nullable|string',


        ];
    }

    public function resetField()
    {
        $this->nama_ruangan = "";
        $this->status_ruangan = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->status = "";
        $this->edit_nama_ruangan = "";
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
        $this->nama_ruangan = NULL;
        $this->status_ruangan = NULL;
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
        $ruangan = new Ruangan();
        $this->validate([
            'nama_ruangan' => 'required',
            'status_ruangan' => 'required',
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

        $ruangan->nama_ruangan = $this->nama_ruangan;
        $ruangan->status_ruangan = $this->status_ruangan;
        $ruangan->pegawai_id = $this->pegawai_id;
        $ruangan->dokumen = $filename;
        $ruangan->created_by = Auth::user()->id;
        $ruangan->status = $this->status == true ? '1' : '0';
        $result = $ruangan->save();
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
        $ruangan = Ruangan::findOrFail($id);
        $this->edit_id = $ruangan->id;
        $this->edit_nama_ruangan = $ruangan->nama_ruangan;
        $this->edit_status_ruangan = $ruangan->status_ruangan;
        $this->edit_nama_ruangan = $ruangan->nama_ruangan;
        $this->edit_status = $ruangan->status;
        $this->edit_pegawai_id = $ruangan->pegawai_id;
        $this->old_dokumen = $ruangan->dokumen;
    }

    public function update($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $this->validate([
            'edit_status_ruangan' => 'required',
            'edit_nama_ruangan' => 'required',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $ruangan->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }


        $ruangan->status_ruangan = $this->edit_status_ruangan;
        $ruangan->nama_ruangan = $this->edit_nama_ruangan;
        $ruangan->pegawai_id = $this->edit_pegawai_id;
        $ruangan->dokumen = $filename;

        $ruangan->status = $this->edit_status == true ? '1' : '0';
        $result = $ruangan->save();
        if ($result) {
            Session::flash('message', 'Add Successfully');

            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($ruangan_id)
    {
        $this->ruangan_id = $ruangan_id;
    }

    public function destroy()
    {
        $ruangan = Ruangan::findOrFail($this->ruangan_id);
        $destination = public_path('storage\\' . $ruangan->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $ruangan->delete();


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

        $ruangan = Ruangan::all();

        return view('livewire.admin.ruangan.index', ['ruangan' => $ruangan, 'pegawai' => $pegawai]);
    }
}
