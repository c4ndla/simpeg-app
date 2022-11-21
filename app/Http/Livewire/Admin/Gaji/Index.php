<?php

namespace App\Http\Livewire\Admin\Gaji;

use App\Models\Gaji;
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

    public $gaji_pokok, $pot_bpjs, $pajak, $dokumen, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_gaji_pokok;
    public $edit_pot_bpjs;
    public $edit_status;
    public $edit_pajak;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;


    public $search = '';


    public function resetField()
    {
        $this->gaji_pokok = "";
        $this->pot_bpjs = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->pajak = "";
        $this->status = "";
        $this->edit_gaji_pokok = "";
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
        $this->gaji_pokok = NULL;
        $this->pot_bpjs = NULL;
        $this->dokumen = NULL;
        $this->pajak = NULL;
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
        $gaji = new Gaji();
        $this->validate([
            'gaji_pokok' => 'nullable',
            'pajak' => 'nullable',
            'pot_bpjs' => 'nullable',
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

        $gaji->gaji_pokok = $this->gaji_pokok;
        $gaji->pajak = $this->pajak;
        $gaji->pot_bpjs = $this->pot_bpjs;
        $gaji->pegawai_id = $this->pegawai_id;
        $gaji->dokumen = $filename;
        $gaji->created_by = Auth::user()->id;
        $gaji->status = $this->status == true ? '1' : '0';
        $result = $gaji->save();
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
        $gaji = Gaji::findOrFail($id);
        $this->edit_id = $gaji->id;
        $this->edit_gaji_pokok = $gaji->gaji_pokok;
        $this->edit_pajak = $gaji->pajak;
        $this->edit_pot_bpjs = $gaji->pot_bpjs;
        $this->edit_status = $gaji->status;
        $this->edit_pegawai_id = $gaji->pegawai_id;
        $this->old_dokumen = $gaji->dokumen;
    }

    public function update($id)
    {
        $gaji = Gaji::findOrFail($id);
        $this->validate([
            'edit_pot_bpjs' => 'nullable',
            'edit_gaji_pokok' => 'nullable',
            'edit_pajak' => 'nullable',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $gaji->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }


        $gaji->pot_bpjs = $this->edit_pot_bpjs;
        $gaji->gaji_pokok = $this->edit_gaji_pokok;
        $gaji->pajak = $this->edit_pajak;
        $gaji->pegawai_id = $this->edit_pegawai_id;
        $gaji->dokumen = $filename;

        $gaji->status = $this->edit_status == true ? '1' : '0';
        $result = $gaji->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($gaji_id)
    {
        $this->gaji_id = $gaji_id;
    }

    public function destroy()
    {
        $gaji = Gaji::findOrFail($this->gaji_id);
        $destination = public_path('storage\\' . $gaji->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $gaji->delete();


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

        $gaji = Gaji::all();

        return view('livewire.admin.gaji.index', ['pegawai' => $pegawai, 'gaji' => $gaji]);
    }
}
