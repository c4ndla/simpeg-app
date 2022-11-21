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
                            <div class="col-md-4">
                                <label for="">Kualifikasi</label>
                                <input type="text" name="tingkat" wire:model.defer="tingkat" class="form-control" />
                                @error('tingkat')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="">Pendidikan</label>
                                <input type="text" name="nama_sekolah" wire:model.defer="nama_sekolah"
                                    class="form-control" />
                                @error('nama_sekolah')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="">Tahun Lulus</label>
                                <input type="text" name="th_lulus" wire:model.defer="th_lulus" class="form-control" />
                                @error('th_lulus')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row col-md-12">

                            <div class="col-md-4">
                                <label for="">Nomor Ijazah</label>
                                <input type="text" name="no_ijazah" wire:model.defer="no_ijazah" class="form-control" />
                                @error('no_ijazah')
                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="">Ijazah</label>
                                <input type="file" name="ijazah" wire:model.defer="ijazah" class="form-control" />
                            </div>
                            {{-- @if ($ijazah)
                            <img src="{{$ijazah->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                            @endif --}}

                            @error('ijazah')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror

                            <div class="col-md-4">
                                <label for="">Transkrip</label>
                                <input type="file" name="transkrip" wire:model.defer="transkrip" class="form-control" />
                            </div>
                            {{-- @if ($transkrip)
                            <img src="{{$transkrip->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                            @endif --}}

                            @error('transkrip')
                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                            @enderror

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
    <div class="modal-dialog modal-xl">
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
                            <label for="">Kualifikasi</label>
                            <input type="text" name="tingkat" wire:model.defer="edit_tingkat" class="form-control" />

                        </div>

                        <div class="col-md-6">
                            <label for="">Pendidikan</label>
                            <input type="text" name="nama_sekolah" wire:model.defer="edit_nama_sekolah"
                                class="form-control" />
                        </div>

                        <div class="col-md-6">
                            <label for="">Tahun Lulus</label>
                            <input type="text" name="th_lulus" wire:model.defer="edit_th_lulus" class="form-control" />
                        </div>

                    </div>

                    <div class="row col-md-12">
                        <div class="col-md-4">
                            <label for="">Nomor Ijazah</label>
                            <input type="text" name="no_ijazah" wire:model.defer="edit_no_ijazah"
                                class="form-control" />

                        </div>

                        <div class="col-md-4">
                            <label for="">Ijazah</label>
                            <input type="file" name="ijazah" wire:model="new_ijazah" class="form-control" />
                        </div>
                        {{-- @if ($new_ijazah)
                        <img src="{{$new_ijazah->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                        @else
                        <img src="{{ asset('storage') }}/{{$old_ijazah}}" style="width: 150px;height:150px;" alt="">
                        @endif
                        <input type="hidden" wire:model='old_ijazah' name="" id=""> --}}

                        <div class="col-md-4">
                            <label for="">Transkrip</label>
                            <input type="file" name="transkrip" wire:model="new_transkrip" class="form-control" />
                        </div>
                        {{-- @if ($new_transkrip)
                        <img src="{{$new_transkrip->temporaryUrl()}}" style="width: 150px;height:150px;" alt="">
                        @else
                        <img src="{{ asset('storage') }}/{{$old_transkrip}}" style="width: 150px;height:150px;" alt="">
                        @endif
                        <input type="hidden" wire:model='old_transkrip' name="" id=""> --}}

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