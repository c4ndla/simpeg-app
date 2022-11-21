<?php

namespace App\Http\Livewire\Admin\Ruang;

use App\Models\Ruang;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $deskripsi, $status;

    public $showData = true;
    public $createData = false;
    public $updateData = false;

    public $edit_id;
    public $edit_nama;
    public $edit_deskripsi;
    public $edit_status;


    public $search = '';

    public function rules()
    {
        return [
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string',


        ];
    }

    public function resetField()
    {
        $this->nama = "";
        $this->deskripsi = "";
        $this->status = "";
        $this->edit_nama = "";
        $this->edit_status = "";
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
        $this->deskripsi = NULL;
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
        $ruang = new Ruang();
        $this->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'status' => 'nullable',
        ]);


        $ruang->nama = $this->nama;
        $ruang->deskripsi = $this->deskripsi;
        $ruang->status = $this->status == true ? '1' : '0';
        $result = $ruang->save();
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
        $ruang = Ruang::findOrFail($id);
        $this->edit_id = $ruang->id;
        $this->edit_nama = $ruang->nama;
        $this->edit_deskripsi = $ruang->deskripsi;
        $this->edit_nama = $ruang->nama;
        $this->edit_status = $ruang->status;
    }

    public function update($id)
    {
        $ruang = Ruang::findOrFail($id);
        $this->validate([
            'edit_deskripsi' => 'nullable',
            'edit_nama' => 'required',

        ]);

        $ruang->deskripsi = $this->edit_deskripsi;
        $ruang->nama = $this->edit_nama;
        $ruang->status = $this->edit_status == true ? '1' : '0';
        $result = $ruang->save();
        if ($result) {
            $this->dispatchBrowserEvent('info');

            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
        } else {
            session()->flash('error', 'Not Update Successfully');
        }
    }

    public function delete($ruang_id)
    {
        $this->ruang_id = $ruang_id;
    }

    public function destroy()
    {
        $ruang = Ruang::findOrFail($this->ruang_id);

        $result = $ruang->delete();


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

        $ruang = Ruang::all();

        return view('livewire.admin.ruang.index', ['ruang' => $ruang]);
    }
}
