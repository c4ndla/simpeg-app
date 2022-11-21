<?php

namespace App\Http\Livewire\Admin\Cpns;

use App\Models\Cpns;
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

    public $no_sk, $dokumen, $no_kpe, $kpe, $no_kk, $kk, $no_taspen, $taspen, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_no_kpe;
    public $edit_no_kk;
    public $edit_no_taspen;
    public $edit_no_sk;

    public $edit_status;
    public $edit_pegawai_id;


    public $old_kpe;
    public $new_kpe;

    public $old_kk;
    public $new_kk;

    public $old_taspen;
    public $new_taspen;

    public $old_dokumen;
    public $new_dokumen;


    public $search = '';


    public function resetField()
    {
        $this->no_sk = "";

        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->no_kpe = "";
        $this->no_kk = "";
        $this->no_taspen = "";
        $this->status = "";
        $this->edit_no_sk = "";
        $this->edit_status = "";
        $this->edit_no_kk = "";
        $this->edit_no_kpe = "";
        $this->edit_no_taspen = "";

        $this->new_kpe = "";
        $this->old_kpe = "";

        $this->new_kk = "";
        $this->old_kk = "";

        $this->new_taspen = "";
        $this->old_taspen = "";

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
        $this->no_sk = NULL;
        $this->dokumen = NULL;
        $this->pegawai_id = NULL;
        $this->status = NULL;
        $this->no_kpe = NULL;
        $this->no_kk = NULL;
        $this->no_taspen = NULL;
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
        $cpns = new Cpns();
        $this->validate([
            'no_sk' => 'nullable',
            'no_kpe' => 'nullable',
            'no_kk' => 'nullable',
            'no_taspen' => 'nullable',
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

        $filekpe = "";
        if ($this->kpe) {
            $filekpe = $this->kpe->store('kpe', 'public');
        } else {
            $filekpe = Null;
        }

        $filekk = "";
        if ($this->kk) {
            $filekk = $this->kk->store('kk', 'public');
        } else {
            $filekk = Null;
        }

        $filetaspen = "";
        if ($this->taspen) {
            $filetaspen = $this->taspen->store('taspen', 'public');
        } else {
            $filetaspen = Null;
        }

        $cpns->no_sk = $this->no_sk;
        $cpns->no_kpe = $this->no_kpe;
        $cpns->no_kk = $this->no_kk;
        $cpns->no_taspen = $this->no_taspen;

        $cpns->pegawai_id = $this->pegawai_id;
        $cpns->dokumen = $filename;
        $cpns->kpe = $filekpe;
        $cpns->kk = $filekk;
        $cpns->taspen = $filetaspen;
        $cpns->created_by = Auth::user()->id;
        $cpns->status = $this->status == true ? '1' : '0';
        $result = $cpns->save();
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
        $cpns = Cpns::findOrFail($id);
        $this->edit_id = $cpns->id;
        $this->edit_no_sk = $cpns->no_sk;
        $this->edit_no_kpe = $cpns->no_kpe;
        $this->edit_no_kk = $cpns->no_kk;
        $this->edit_no_taspen = $cpns->no_taspen;

        $this->edit_status = $cpns->status;
        $this->edit_pegawai_id = $cpns->pegawai_id;
        $this->old_dokumen = $cpns->dokumen;
        $this->old_kpe = $cpns->kpe;
        $this->old_kk = $cpns->kk;
        $this->old_taspen = $cpns->taspen;
    }

    public function update($id)
    {
        $cpns = Cpns::findOrFail($id);
        $this->validate([
            'edit_no_sk' => 'nullable',
            'edit_no_kpe' => 'nullable',
            'edit_no_kk' => 'nullable',
            'edit_no_taspen' => 'nullable',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $cpns->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }

        $filekpe = "";
        $destination = public_path('storage\\' . $cpns->kpe);
        if ($this->new_kpe != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filekpe = $this->new_kpe->store('kpe', 'public');
        } else {
            $filekpe = $this->old_kpe;
        }

        $filekk = "";
        $destination = public_path('storage\\' . $cpns->kk);
        if ($this->new_kk != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filekk = $this->new_kk->store('kk', 'public');
        } else {
            $filekk = $this->old_kk;
        }


        $filetaspen = "";
        $destination = public_path('storage\\' . $cpns->taspen);
        if ($this->new_taspen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filetaspen = $this->new_taspen->store('taspen', 'public');
        } else {
            $filetaspen = $this->old_taspen;
        }



        $cpns->no_sk = $this->edit_no_sk;
        $cpns->no_kpe = $this->edit_no_kpe;
        $cpns->no_kk = $this->edit_no_kk;
        $cpns->no_taspen = $this->edit_no_taspen;
        $cpns->pegawai_id = $this->edit_pegawai_id;
        $cpns->dokumen = $filename;
        $cpns->kpe = $filekpe;
        $cpns->kk = $filekk;
        $cpns->taspen = $filetaspen;

        $cpns->status = $this->edit_status == true ? '1' : '0';
        $result = $cpns->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($cpns_id)
    {
        $this->cpns_id = $cpns_id;
    }

    public function destroy()
    {
        $cpns = Cpns::findOrFail($this->cpns_id);

        $destination = public_path('storage\\' . $cpns->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $cpns->kpe);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $cpns->kk);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $destination = public_path('storage\\' . $cpns->taspen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $cpns->delete();

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

        $cpns = Cpns::all();

        return view('livewire.admin.cpns.index', ['cpns' => $cpns, 'pegawai' => $pegawai]);
    }
}
