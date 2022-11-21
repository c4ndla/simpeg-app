<?php

namespace App\Http\Livewire\Admin\Coba;

use App\Models\Sub;
use App\Models\Coba;
use App\Models\Crud;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $foto;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_nama;
    public $old_foto;
    public $new_foto;

    public function rules()
    {
        return [
            'nama' => 'nullable|string',
            'foto' => 'nullable|string',

        ];
    }

    public function resetField()
    {
        $this->nama = "";
        $this->foto = "";
        $this->edit_nama = "";
        $this->new_foto = "";
        $this->old_foto = "";
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
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }




    use WithFileUploads;
    public function create()
    {
        $coba = new Coba();
        $this->validate([
            'nama' => 'required',
            'foto' => 'required'
        ]);

        $filename = "";
        if ($this->foto) {
            $filename = $this->foto->store('posts', 'public');
        } else {
            $filename = Null;
        }

        $coba->nama = $this->nama;
        $coba->foto = $filename;
        $result = $coba->save();
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
        $coba = Coba::findOrFail($id);
        $this->edit_id = $coba->id;
        $this->edit_nama = $coba->nama;
        $this->old_foto = $coba->foto;
    }

    public function update($id)
    {
        $coba = Coba::findOrFail($id);
        $this->validate([
            'edit_nama' => 'required',
        ]);

        $filename = "";
        $destination = public_path('storage\\' . $coba->foto);
        if ($this->new_foto != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_foto->store('posts', 'public');
        } else {
            $filename = $this->old_foto;
        }

        $coba->nama = $this->edit_nama;
        $coba->foto = $filename;
        $result = $coba->save();
        if ($result) {
            session()->flash('success', 'Add Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($coba_id)
    {
        $this->coba_id = $coba_id;
    }

    public function destroy()
    {
        $coba = Coba::findOrFail($this->coba_id);
        $destination = public_path('storage\\' . $coba->foto);
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $result = $coba->delete();


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
        $sub = Sub::all();
        $coba = Coba::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.coba.index', ['coba' => $coba, 'sub' => $sub]);
    }
}
