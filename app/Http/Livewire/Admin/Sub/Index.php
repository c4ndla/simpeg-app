<?php

namespace App\Http\Livewire\Admin\Sub;

use App\Models\Sub;
use App\Models\Coba;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $foto, $ktp, $coba_id;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_nama;
    public $edit_coba_id;
    public $old_foto;
    public $new_foto;
    public $old_ktp;
    public $new_ktp;

    public $search = '';

    public function rules()
    {
        return [
            'nama' => 'nullable|string',
            'foto' => 'nullable|string',
            'ktp' => 'nullable|string',

        ];
    }

    public function resetField()
    {
        $this->nama = "";
        $this->coba_id = "";
        $this->foto = "";
        $this->ktp = "";
        $this->edit_nama = "";
        $this->new_foto = "";
        $this->old_foto = "";
        $this->new_ktp = "";
        $this->old_ktp = "";
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
        $this->foto = NULL;
        $this->ktp = NULL;
        $this->coba_id = NULL;
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
        $sub = new Sub();
        $this->validate([
            'nama' => 'required',
            'foto' => 'required',
            'ktp' => 'required',
            'coba_id' => 'nullable',
        ]);

        $filename = "";
        if ($this->foto) {
            $filename = $this->foto->store('foto', 'public');
        } else {
            $filename = Null;
        }

        if ($this->ktp) {
            $filektp = $this->ktp->store('ktp', 'public');
        } else {
            $filektp = Null;
        }

        $sub->nama = $this->nama;
        $sub->coba_id = $this->coba_id;
        $sub->foto = $filename;
        $sub->ktp = $filektp;
        $result = $sub->save();
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
        $sub = Sub::findOrFail($id);
        $this->edit_id = $sub->id;
        $this->edit_nama = $sub->nama;
        $this->edit_coba_id = $sub->coba_id;
        $this->old_foto = $sub->foto;
        $this->old_ktp = $sub->ktp;
    }

    public function update($id)
    {
        $sub = Sub::findOrFail($id);
        $this->validate([
            'edit_nama' => 'required',
        ]);

        $filename = "";
        $destination = public_path('storage\\' . $sub->foto);
        if ($this->new_foto != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_foto->store('foto', 'public');
        } else {
            $filename = $this->old_foto;
        }

        $filektp = "";
        $destination = public_path('storage\\' . $sub->ktp);
        if ($this->new_ktp != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filektp = $this->new_ktp->store('ktp', 'public');
        } else {
            $filektp = $this->old_ktp;
        }

        $sub->nama = $this->edit_nama;
        $sub->coba_id = $this->edit_coba_id;
        $sub->foto = $filename;
        $sub->ktp = $filektp;
        $result = $sub->save();
        if ($result) {
            session()->flash('success', 'Add Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($sub_id)
    {
        $this->sub_id = $sub_id;
    }

    public function destroy()
    {
        $sub = Sub::findOrFail($this->sub_id);
        $destination = public_path('storage\\' . $sub->foto);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination = public_path('storage\\' . $sub->ktp);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $sub->delete();


        if ($result) {
            session()->flash('success', 'Delete Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Delete Successfully');
        }
    }


    public function detail($id)
    {

        $sub = Sub::findOrFail($id);

        $this->edit_id = $sub->id;
        $this->edit_nama = $sub->nama;
        $this->edit_coba_id = $sub->coba_id;
        $this->old_foto = $sub->foto;
        $this->old_ktp = $sub->ktp;
    }


    public function render()
    {
        $coba = Coba::all();
        // $sub = Sub::orderBy('id', 'DESC')->paginate(10);
        // return view('livewire.admin.sub.index', ['sub' => $sub, 'coba' => $coba]);

        $sub = DB::table('sub')
            ->join('coba', 'coba.id', '=', 'sub.coba_id')
            ->select('sub.*', 'coba.nama as coba_nama')
            ->where('coba.nama', 'like', '%' . $this->search . '%')
            ->orWhere('sub.nama', 'like', '%' . $this->search . '%')
            ->paginate(5);

        $result = $sub;


        return view('livewire.admin.sub.index', ['sub' => $result, 'coba' => $coba]);
    }
}
