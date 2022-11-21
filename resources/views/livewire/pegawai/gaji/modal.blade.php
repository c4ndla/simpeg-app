<style>
    @media (min-width: 768px) {
        .modal-xl {
            width: 100%;
            max-width: 1000px;
        }
    }
</style>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form wire:submit.prevent="create">
                                <div class="modal-body">

                                    <div class="row col-md-12">
                                        <div class="col-md-12">
                                            <label for="">Nama Pegawai</label>
                                            <select class="select2 form-control form-select"
                                                style="width: 100%; height:36px;" name="pegawai_id"
                                                wire:model.defer="pegawai_id">
                                                <option>= Pilih Nama Pegawai =</option>

                                                @foreach ($pegawai as $item)

                                                @if ($item->user->id == Auth::user()->id)

                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                                @else

                                                @endif

                                                @endforeach
                                            </select>
                                            @error('pegawai_id')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Gaji Pokok</label>
                                            <input type="text" name="gaji_pokok" wire:model.defer="gaji_pokok"
                                                class="form-control" />
                                            @error('gaji_pokok')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Potongan BPJSKES</label>
                                            <input type="text" name="pot_bpjs" wire:model.defer="pot_bpjs"
                                                class="form-control" />
                                            @error('pot_bpjs')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Potongan Pajak</label>
                                            <input type="text" name="pajak" wire:model.defer="pajak"
                                                class="form-control" />
                                            @error('pajak')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">SK GAJI BERKALA</label>
                                            <input type="file" name="dokumen" wire:model.defer="dokumen"
                                                class="form-control" />
                                        </div>

                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button id="" type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal EDIT-->
<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form wire:submit.prevent="update({{$edit_id}})">
                                <div class="modal-body">

                                    <div class="row col-md-12">
                                        <div class="col-md-12">
                                            <label for="">Nama Pegawai</label>
                                            <select class="select2 form-control form-select"
                                                style="width: 100%; height:36px;" name="edit_pegawai_id"
                                                wire:model.defer="pegawai_id">
                                                <option>= Pilih Nama Pegawai =</option>

                                                @foreach ($pegawai as $item)

                                                @if ($item->user->id == Auth::user()->id)

                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                                @else

                                                @endif

                                                @endforeach
                                            </select>
                                            @error('pegawai_id')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Gaji Pokok</label>
                                            <input type="text" name="gaji_pokok" wire:model.defer="edit_gaji_pokok"
                                                class="form-control" />
                                            @error('gaji_pokok')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Potongan BPJSKES</label>
                                            <input type="text" name="pot_bpjs" wire:model.defer="edit_pot_bpjs"
                                                class="form-control" />
                                            @error('pot_bpjs')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Potongan Pajak</label>
                                            <input type="text" name="pajak" wire:model.defer="edit_pajak"
                                                class="form-control" />
                                            @error('pajak')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">SK GAJI BERKALA</label>
                                            <input type="file" name="dokumen" wire:model.defer="new_dokumen"
                                                class="form-control" />
                                        </div>

                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button id="" type="submit" class="btn btn-primary">Ubah Data</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal DELETE-->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="destroy">
                <div class="modal-body">

                    <h4>Yakin ingin Menghapus? </h4>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button id="" type="submit" class="btn btn-danger">Hapus</button>
                </div>

            </form>


        </div>
    </div>
</div>