<?php

namespace App\Http\Livewire\Admin\Agama;

use App\Models\Agama;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama, $deskripsi, $status, $agama_id;

    public function rules()
    {
        return [
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'status' => 'nullable'
        ];
    }

    public function resetInput()
    {
        $this->nama = NULL;
        $this->deskripsi = NULL;
        $this->status = NULL;
        $this->agama_id = NULL;
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function store()
    {
        // $this->validate();
        Agama::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Berhasil ditambah');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function edit(int $agama_id)
    {
        $this->agama_id = $agama_id;
        $agama = Agama::findOrFail($agama_id);
        $this->nama = $agama->nama;
        $this->deskripsi = $agama->deskripsi;
        $this->status = $agama->status;
    }

    public function update()
    {

        // $this->validate();
        Agama::findOrFail($this->agama_id)->update([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Berhasil diubah');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function delete($agama_id)
    {
        $this->agama_id = $agama_id;
    }

    public function destroy()
    {
        Agama::findOrFail($this->agama_id)->delete();
        session()->flash('message', 'Berhasil dihapus');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $agama = Agama::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.agama.index', ['agama' => $agama]);
    }
}
