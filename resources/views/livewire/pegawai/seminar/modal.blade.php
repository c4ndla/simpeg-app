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
                                <div class="form-body">
                                    <h3 class="card-title">1. Info Pelatihan</h3>
                                    <hr>
                                    <div class="row col-md-12 p-t-20">
                                        <div class="col-md-12">
                                            <label for="">Nama Pegawai</label>
                                            <select name="pegawai_id" class="form-control"
                                                wire:model.defer="pegawai_id">
                                                <option value="">= Pilih Nama Pegawai =</option>
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
                                            <label for="">Nama Pelatihan</label>
                                            <input type="text" name="nama" wire:model.defer="nama"
                                                class="form-control" />
                                            @error('nama')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Nomor Sertifikat</label>
                                            <input type="text" name="tempat" wire:model.defer="tempat"
                                                class="form-control" />
                                            @error('tempat')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">


                                        <div class="col-md-6">
                                            <label for="">Sertifikat</label>
                                            <input type="file" name="sertifikat" wire:model.defer="sertifikat"
                                                class="form-control" />
                                        </div>
                                        {{-- @if ($sertifikat)
                                        <img src="{{$sertifikat->temporaryUrl()}}" style="width: 150px;height:150px;"
                                            alt="">
                                        @endif --}}

                                        @error('sertifikat')
                                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                        @enderror
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
                                <div class="form-body">
                                    <h3 class="card-title">1. Info Pelatihan</h3>
                                    <hr>
                                    <div class="row col-md-12 p-t-20">

                                        <select name="pegawai_id" class="form-control"
                                            wire:model.defer="edit_pegawai_id">
                                            @foreach ($pegawai as $item)

                                            @if ($item->user->id == Auth::user()->id)

                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                            @else

                                            @endif

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Nama Pelatihan</label>
                                            <input type="text" name="nama" wire:model.defer="edit_nama"
                                                class="form-control" />

                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Nomor Sertifikat</label>
                                            <input type="text" name="tempat" wire:model.defer="edit_tempat"
                                                class="form-control" />
                                        </div>

                                    </div>


                                    <div class="row col-md-12">

                                        <div class="col-md-6">
                                            <label for="">Sertifikat</label>
                                            <input type="file" name="sertifikat" wire:model="new_sertifikat"
                                                class="form-control" />
                                        </div>
                                        {{-- @if ($new_sertifikat)
                                        <img src="{{$new_sertifikat->temporaryUrl()}}"
                                            style="width: 150px;height:150px;" alt="">
                                        @else
                                        <img src="{{ asset('storage') }}/{{$old_sertifikat}}"
                                            style="width: 150px;height:150px;" alt="">
                                        @endif
                                        <input type="hidden" wire:model='old_sertifikat' name="" id=""> --}}


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