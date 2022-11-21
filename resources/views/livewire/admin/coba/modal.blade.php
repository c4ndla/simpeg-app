<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <form action="{{ url('admin/agama') }}" method="POST" enctype="multipart/form-data"> --}}
                <form wire:submit.prevent="create">
                    <div class="modal-body">

                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label for="">Nama</label>
                                <input type="text" name="nama" wire:model.defer="nama" class="form-control" />
                            </div>

                            <div class="col-md-6">
                                <label for="">Foto</label>
                                <input type="file" name="foto" wire:model.defer="foto" class="form-control" />
                            </div>

                            @if ($foto)
                            <img src="{{$foto->temporaryUrl()}}" style="width: 200px;height:200px;" alt="">
                            @endif



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
            {{-- <form action="{{ url('admin/agama') }}" method="POST" enctype="multipart/form-data"> --}}
                <form wire:submit.prevent="update({{$edit_id}})">
                    <div class="modal-body">

                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <label for="">Nama</label>
                                <input type="text" name="nama" wire:model.defer="edit_nama" class="form-control" />
                            </div>

                            <div class="col-md-6">
                                <label for="">foto</label>
                                <input type="file" name="foto" wire:model="new_foto" class="form-control" />
                            </div>
                            @if ($new_foto)
                            <img src="{{$new_foto->temporaryUrl()}}" style="width: 200px;height:200px;" alt="">
                            @else
                            <img src="{{ asset('storage') }}/{{$old_foto}}" style="width: 200px;height:200px;" alt="">
                            @endif
                            <input type="hidden" wire:model='old_foto' name="" id="">



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
            {{-- <form action="{{ url('admin/agama') }}" method="POST" enctype="multipart/form-data"> --}}
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