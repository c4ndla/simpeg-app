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
                        <div class="col-md-6">
                            <label for="">Nama Ruangan</label>
                            <input type="text" name="nama" wire:model.defer="nama" class="form-control" />
                            @error('nama')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">deskripsi</label>
                            <input type="text" name="deskripsi" wire:model.defer="deskripsi" class="form-control" />
                            @error('deskripsi')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>

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
                    <button id="" type="submit" class="btn btn-primary">Simpan Data</button>
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
                        <div class="col-md-6">
                            <label for="">Nama Ruangan</label>
                            <input type="text" name="nama" wire:model.defer="edit_nama" class="form-control" />
                        </div>

                        <div class="col-md-6">
                            <label for="">deskripsi</label>
                            <input type="text" name="deskripsi" wire:model.defer="edit_deskripsi"
                                class="form-control" />
                        </div>



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
                    <button id="" type="submit" class="btn btn-primary">Ubah Data</button>
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
                    <button id="" type="submit" class="btn btn-danger">Hapus</button>
                </div>

            </form>


        </div>
    </div>
</div>