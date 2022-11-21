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
            <div class="modal-header">

                <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <form action="{{ url('admin/agama') }}" method="POST" enctype="multipart/form-data"> --}}
                <form wire:submit.prevent="create">
                    <div class="modal-body">

                        <div class="row col-md-12">
                            <div class="col-md-12">
                                <label for="">Nama Pegawai</label>
                                <select name="pegawai_id" class="form-control" wire:model.defer="pegawai_id">
                                    <option value="">= Pilih Nama Pegawai =</option>

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
                            <div class="form-group mb-3 col-md-6">
                                <label for="">Hubungan Keluarga</label>
                                <select class="form-select" id="basicSelect" name="hubungan"
                                    wire:model.defer="hubungan">
                                    <option>-Pilih Hubungan Keluarga-</option>
                                    <option>Ayah</option>
                                    <option>Ibu</option>
                                    <option>Suami</option>
                                    <option>Istri</option>
                                    <option>Anak</option>
                                </select>
                                @error('hubungan')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Nama</label>
                                <input type="text" name="nama" wire:model.defer="nama" class="form-control" />
                                @error('nama')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>

                        <div class="row col-md-12">
                            <div class="form-group mb-3 col-md-6">
                                <label for="">Jenis Kelamin</label>
                                <select class="form-select" id="basicSelect" name="jenis_kelamin"
                                    wire:model.defer="jenis_kelamin">
                                    <option>-Pilih Jenis Kelamin-</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>

                                </select>
                                @error('jenis_kelamin')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="">Dokumen/Foto</label>
                                <input type="file" name="dokumen" wire:model.defer="dokumen" class="form-control" />
                            </div>
                            {{-- @if ($dokumen)
                            <img src="{{$dokumen->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                            @endif --}}

                            {{-- <div class="col-md-6">
                                <label for="">BPJS</label>
                                <input type="file" name="bpjs" wire:model.defer="bpjs" class="form-control" />
                            </div>
                            @if ($bpjs)
                            <img src="{{$bpjs->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                            @endif --}}
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
                        <div class="col-md-12">
                            <select name="pegawai_id" class="form-control" wire:model.defer="edit_pegawai_id">
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

                        <div class="form-group mb-3 col-md-6">
                            <label for="">Hubungan Keluarga</label>
                            <select class="form-select" id="basicSelect" name="hubungan"
                                wire:model.defer="edit_hubungan">

                                <option>Ayah</option>
                                <option>Ibu</option>
                                <option>Suami</option>
                                <option>Istri</option>
                                <option>Anak</option>
                            </select>
                            @error('hubungan')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama</label>
                            <input type="text" name="nama" wire:model.defer="edit_nama" class="form-control" />
                            @error('nama')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>


                    <div class="row col-md-12">

                        <div class="form-group mb-3 col-md-6">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-select" id="basicSelect" name="jenis_kelamin"
                                wire:model.defer="edit_jenis_kelamin">

                                <option>Laki-laki</option>
                                <option>Perempuan</option>

                            </select>
                            @error('jenis_kelamin')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="">Dokumen/Foto</label>
                            <input type="file" name="dokumen" wire:model="new_dokumen" class="form-control" />
                        </div>
                        {{-- @if ($new_dokumen)
                        <img src="{{$new_dokumen->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                        @else
                        <img src="{{ asset('storage') }}/{{$old_dokumen}}" style="width: 150px;height:150px;" alt="">
                        @endif
                        <input type="hidden" wire:model='old_dokumen' name="" id=""> --}}

                        {{-- <div class="col-md-6">
                            <label for="">BPJS</label>
                            <input type="file" name="bpjs" wire:model="new_bpjs" class="form-control" />
                        </div>
                        @if ($new_bpjs)
                        <img src="{{$new_bpjs->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                        @else
                        <img src="{{ asset('storage') }}/{{$old_bpjs}}" style="width: 150px;height:150px;" alt="">
                        @endif
                        <input type="hidden" wire:model='old_bpjs' name="" id=""> --}}


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