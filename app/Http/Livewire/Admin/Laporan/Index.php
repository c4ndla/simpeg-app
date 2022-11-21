<?php

namespace App\Http\Livewire\Admin\Laporan;

use App\Models\Laporan;
use App\Models\Pegawai;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $judul, $tindakan, $isi, $dokumen, $pegawai_id, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_judul;
    public $edit_isi;
    public $edit_tindakan;
    public $edit_status;
    public $edit_pegawai_id;
    public $old_dokumen;
    public $new_dokumen;


    public $search = '';

    public function rules()
    {
        return [
            'judul' => 'nullable|string',
            'isi' => 'nullable|string',
            'dokumen' => 'nullable|string',
            'tindakan' => 'nullable|string',


        ];
    }

    public function resetField()
    {
        $this->judul = "";
        $this->isi = "";
        $this->pegawai_id = "";
        $this->dokumen = "";
        $this->tindakan = "";
        $this->status = "";
        $this->edit_judul = "";
        $this->edit_status = "";
        $this->edit_tindakan = "";
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
        $this->judul = NULL;
        $this->isi = NULL;
        $this->dokumen = NULL;
        $this->pegawai_id = NULL;
        $this->status = NULL;
        $this->tindakan = NULL;
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
        $laporan = new Laporan();
        $this->validate([
            'judul' => 'required',
            'isi' => 'required',
            'dokumen' => 'nullable',
            'pegawai_id' => 'required',
            'status' => 'nullable',
            'tindakan' => 'nullable',
        ]);

        $filename = "";
        if ($this->dokumen) {
            $filename = $this->dokumen->store('dokumen', 'public');
        } else {
            $filename = Null;
        }

        $laporan->judul = $this->judul;
        $laporan->isi = $this->isi;
        $laporan->pegawai_id = $this->pegawai_id;
        $laporan->dokumen = $filename;
        $laporan->created_by = Auth::user()->id;
        $laporan->status = $this->status == true ? '1' : '0';
        $result = $laporan->save();
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
        $laporan = laporan::findOrFail($id);
        $this->edit_id = $laporan->id;
        $this->edit_judul = $laporan->judul;
        $this->edit_isi = $laporan->isi;
        $this->edit_judul = $laporan->judul;
        $this->edit_status = $laporan->status;
        $this->edit_tindakan = $laporan->tindakan;
        $this->edit_pegawai_id = $laporan->pegawai_id;
        $this->old_dokumen = $laporan->dokumen;
    }

    public function update($id)
    {
        $laporan = Laporan::findOrFail($id);
        $this->validate([
            'edit_isi' => 'required',
            'edit_judul' => 'required',

        ]);

        $filename = "";
        $destination = public_path('storage\\' . $laporan->dokumen);
        if ($this->new_dokumen != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_dokumen->store('dokumen', 'public');
        } else {
            $filename = $this->old_dokumen;
        }


        $laporan->isi = $this->edit_isi;
        $laporan->judul = $this->edit_judul;
        $laporan->tindakan = $this->edit_tindakan;
        $laporan->pegawai_id = $this->edit_pegawai_id;
        $laporan->dokumen = $filename;

        $laporan->status = $this->edit_status == true ? '1' : '0';
        $result = $laporan->save();
        if ($result) {
            Session::flash('message', 'Add Successfully');

            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($laporan_id)
    {
        $this->laporan_id = $laporan_id;
    }

    public function destroy()
    {
        $laporan = Laporan::findOrFail($this->laporan_id);
        $destination = public_path('storage\\' . $laporan->dokumen);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $laporan->delete();


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

        $laporan = Laporan::all();

        return view('livewire.admin.laporan.index', ['laporan' => $laporan, 'pegawai' => $pegawai]);
    }
}
