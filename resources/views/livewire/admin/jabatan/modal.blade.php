<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="create">
                <div class="modal-body">

                    <div class="row col-md-12">
                        <div class="col-md-12">
                            <label for="">Nama Pegawai</label>
                            <select class="select2 form-control form-select" style="width: 100%; height:36px;"
                                name="pegawai_id" wire:model.defer="pegawai_id">
                                <option>= Pilih Nama Pegawai =</option>

                                @foreach ($pegawai as $item)

                                <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                @endforeach
                            </select>
                            @error('pegawai_id')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="">jenis_jabatan</label>
                            <input type="text" name="jenis_jabatan" wire:model.defer="jenis_jabatan"
                                class="form-control" />
                            @error('jenis_jabatan')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Unit Kerja</label>
                            <input type="text" name="unit_kerja" wire:model.defer="unit_kerja" class="form-control" />
                            @error('unit_kerja')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="">Dokumen</label>
                            <input type="file" name="dokumen" wire:model.defer="dokumen" class="form-control" />
                        </div>
                        {{-- @if ($dokumen)
                        <img src="{{$dokumen->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                        @endif

                        @error('dokumen')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                        @enderror --}}


                    </div>

                    <div class="row col-md-12">
                        <div class="col-md-3 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" wire:model.defer="status">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="sa-success" type="submit" class="btn btn-primary">Simpan Data</button>
                </div>

            </form>


        </div>
    </div>
</div>


<!-- Modal EDIT-->
<div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="update({{$edit_id}})">
                <div class="modal-body">



                    <div class="row col-md-12">

                        <select name="pegawai_id" class="form-control" wire:model.defer="edit_pegawai_id">
                            @foreach ($pegawai as $item)

                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                            @endforeach
                        </select>

                    </div>

                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <label for="">Jenis Jabatan</label>
                            <input type="text" name="jenis_jabatan" wire:model.defer="edit_jenis_jabatan"
                                class="form-control" />

                        </div>

                        <div class="col-md-6">
                            <label for="">Unit Kerja</label>
                            <input type="text" name="unit_kerja" wire:model.defer="edit_unit_kerja"
                                class="form-control" />
                        </div>

                    </div>


                    <div class="row col-md-12">

                        <div class="col-md-6">
                            <label for="">Dokumen</label>
                            <input type="file" name="dokumen" wire:model="new_dokumen" class="form-control" />
                        </div>
                        {{-- @if ($new_dokumen)
                        <img src="{{$new_dokumen->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                        @else
                        <img src="{{ asset('storage') }}/{{$old_dokumen}}" style="width: 150px;height:150px;" alt="">
                        @endif
                        <input type="hidden" wire:model='old_dokumen' name="" id=""> --}}


                    </div>

                    <div class="row col-md-12">
                        <div class="col-md-3 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" wire:model.defer="edit_status">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button id="sa-success1" type="submit" class="btn btn-primary">Ubah Data</button>
                </div>

            </form>


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
                    <button id="sa-success2" type="submit" class="btn btn-danger">Hapus</button>
                </div>

            </form>


        </div>
    </div>
</div>