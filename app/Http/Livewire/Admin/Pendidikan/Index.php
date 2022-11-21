<?php

namespace App\Http\Livewire\Admin\Pendidikan;

use App\Models\Pegawai;
use Livewire\Component;
use App\Models\Pendidikan;
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

    public $tingkat, $nama_sekolah, $th_lulus, $no_ijazah, $ijazah, $no_transkrip, $transkrip, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_tingkat;
    public $edit_no_transkrip;
    public $edit_no_ijazah;
    public $edit_nama_sekolah;
    public $edit_th_lulus;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_ijazah;
    public $new_ijazah;
    public $old_transkrip;
    public $new_transkrip;

    public $search = '';


    public function resetField()
    {
        $this->tingkat = "";
        $this->no_ijazah = "";
        $this->th_lulus = "";
        $this->no_transkrip = "";
        $this->nama_sekolah = "";
        $this->pegawai_id = "";
        $this->ijazah = "";
        $this->transkrip = "";
        $this->status = "";
        $this->edit_nama = "";
        $this->edit_status = "";
        $this->new_ijazah = "";
        $this->old_ijazah = "";
        $this->new_transkrip = "";
        $this->old_transkrip = "";
        $this->edit_id = "";
    }

    public function showForm()
    {
        $this->showData = false;
        $this->createData = true;
    }



    public function resetInput()
    {
        $this->tingkat = NULL;
        $this->th_lulus = NULL;
        $this->no_transkrip = NULL;
        $this->nama_sekolah = NULL;
        $this->ijazah = NULL;
        $this->transkrip = NULL;
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
        $pendidikan = new Pendidikan();
        $this->validate([
            'tingkat' => 'required',
            'nama_sekolah' => 'required',
            'th_lulus' => 'required',
            'ijazah' => 'nullable',
            'no_ijazah' => 'nullable',
            'transkrip' => 'nullable',
            'pegawai_id' => 'required',
            'status' => 'nullable',
            'no_transkrip' => 'nullable',
        ]);

        $filename = "";
        if ($this->ijazah) {
            $filename = $this->ijazah->store('ijazah', 'public');
        } else {
            $filename = Null;
        }

        if ($this->transkrip) {
            $filetranskrip = $this->transkrip->store('transkrip', 'public');
        } else {
            $filetranskrip = Null;
        }

        $pendidikan->tingkat = $this->tingkat;
        $pendidikan->th_lulus = $this->th_lulus;
        $pendidikan->no_transkrip = $this->no_transkrip;
        $pendidikan->no_ijazah = $this->no_ijazah;
        $pendidikan->nama_sekolah = $this->nama_sekolah;
        $pendidikan->pegawai_id = $this->pegawai_id;
        $pendidikan->ijazah = $filename;
        $pendidikan->transkrip = $filetranskrip;
        $pendidikan->created_by = Auth::user()->id;
        $pendidikan->status = $this->status == true ? '1' : '0';
        $result = $pendidikan->save();
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
        $pendidikan = Pendidikan::findOrFail($id);
        $this->edit_id = $pendidikan->id;
        $this->edit_nama = $pendidikan->nama;
        $this->edit_no_transkrip = $pendidikan->no_transkrip;
        $this->edit_th_lulus = $pendidikan->th_lulus;
        $this->edit_no_ijazah = $pendidikan->no_ijazah;
        $this->edit_nama_sekolah = $pendidikan->nama_sekolah;
        $this->edit_tingkat = $pendidikan->tingkat;
        $this->edit_status = $pendidikan->status;
        $this->edit_pegawai_id = $pendidikan->pegawai_id;
        $this->old_ijazah = $pendidikan->ijazah;
        $this->old_transkrip = $pendidikan->transkrip;
    }

    public function update($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $this->validate([
            'edit_nama_sekolah' => 'required',
            'edit_tingkat' => 'required',
            'th_lulus' => 'required',
            'no_ijazah' => 'nullable',
            'no_transkrip' => 'nullable',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $pendidikan->ijazah);
        if ($this->new_ijazah != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_ijazah->store('ijazah', 'public');
        } else {
            $filename = $this->old_ijazah;
        }

        $filetranskrip = "";
        $destination = public_path('storage\\' . $pendidikan->transkrip);
        if ($this->new_transkrip != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filetranskrip = $this->new_transkrip->store('transkrip', 'public');
        } else {
            $filetranskrip = $this->old_transkrip;
        }

        $pendidikan->nama_sekolah = $this->edit_nama_sekolah;
        $pendidikan->th_lulus = $this->edit_th_lulus;
        $pendidikan->no_transkrip = $this->edit_no_transkrip;
        $pendidikan->no_ijazah = $this->edit_no_ijazah;
        $pendidikan->tingkat = $this->edit_tingkat;
        $pendidikan->pegawai_id = $this->edit_pegawai_id;
        $pendidikan->ijazah = $filename;
        $pendidikan->transkrip = $filetranskrip;

        $pendidikan->status = $this->edit_status == true ? '1' : '0';
        $result = $pendidikan->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($pendidikan_id)
    {
        $this->pendidikan_id = $pendidikan_id;
    }

    public function destroy()
    {
        $pendidikan = Pendidikan::findOrFail($this->pendidikan_id);
        $destination = public_path('storage\\' . $pendidikan->ijazah);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination = public_path('storage\\' . $pendidikan->transkrip);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $pendidikan->delete();


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

        $pendidikan = Pendidikan::all();

        return view('livewire.admin.pendidikan.index', ['pendidikan' => $pendidikan, 'pegawai' => $pegawai]);
    }
}
