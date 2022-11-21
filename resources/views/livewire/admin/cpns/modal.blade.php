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

                                    <div class="form-body">
                                        <h3 class="card-title">1. Data CPNS & PNS</h3>
                                        <hr>
                                        <div class="row col-md-12 ">
                                            <div class="col-md-12">
                                                <label for="">Nama Pegawai</label>
                                                <select class="select2 form-control form-select"
                                                    style="width: 100%; height:36px;" name="pegawai_id"
                                                    wire:model.defer="pegawai_id">
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
                                                <label for="">NO KARTU PEGAWAI</label>
                                                <input type="text" name="no_sk" wire:model.defer="no_sk"
                                                    class="form-control" />
                                                @error('no_sk')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">NO KARTU PEGAWAI ELEKTRONIK (KPE)</label>
                                                <input type="text" name="no_kpe" wire:model.defer="no_kpe"
                                                    class="form-control" />
                                                @error('no_kpe')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                                @enderror
                                            </div>


                                        </div>

                                        <div class="row col-md-12">

                                            <div class="col-md-6">
                                                <label for="">NO KARIS / KARSU</label>
                                                <input type="text" name="no_kk" wire:model.defer="no_kk"
                                                    class="form-control" />
                                                @error('no_kk')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">NO KARTU TASPEN</label>
                                                <input type="text" name="no_taspen" wire:model.defer="no_taspen"
                                                    class="form-control" />
                                                @error('no_taspen')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <h3 class="card-title p-t-20">2. Upload Dokumen</h3>
                                        <hr>
                                        <div class="row col-md-12 ">
                                            <div class="row col-md-12">
                                                <div class="col-md-6">
                                                    <label for="">KARTU PEGAWAI</label>
                                                    <input type="file" name="dokumen" wire:model.defer="dokumen"
                                                        class="form-control" />
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">KARTU PEGAWAI ELEKTRONIK (KPE)</label>
                                                    <input type="file" name="kpe" wire:model.defer="kpe"
                                                        class="form-control" />
                                                </div>

                                            </div>

                                            <div class="row col-md-12">
                                                <div class="col-md-6">
                                                    <label for="">KARIS / KARSU</label>
                                                    <input type="file" name="kk" wire:model.defer="kk"
                                                        class="form-control" />
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">KARTU TASPEN</label>
                                                    <input type="file" name="taspen" wire:model.defer="taspen"
                                                        class="form-control" />
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row col-md-12">
                                            <div class="col-md-3 mb-3">
                                                <label for="">Status</label>
                                                <input type="checkbox" name="status" wire:model.defer="status">
                                            </div>
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
                                <div class="form-body">
                                    <h3 class="card-title">1. Data CPNS & PNS</h3>
                                    <hr>
                                    <div class="row col-md-12 ">
                                        <div class="col-md-12">
                                            <label for="">Nama Pegawai</label>
                                            <select class="select2 form-control form-select"
                                                style="width: 100%; height:36px;" name="pegawai_id"
                                                wire:model.defer="edit_pegawai_id">
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
                                            <label for="">NO KARTU PEGAWAI</label>
                                            <input type="text" name="no_sk" wire:model.defer="edit_no_sk"
                                                class="form-control" />
                                            @error('no_sk')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">NO KARTU PEGAWAI ELEKTRONIK (KPE)</label>
                                            <input type="text" name="no_kpe" wire:model.defer="edit_no_kpe"
                                                class="form-control" />
                                            @error('no_kpe')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="row col-md-12">

                                        <div class="col-md-6">
                                            <label for="">NO KARIS / KARSU</label>
                                            <input type="text" name="no_kk" wire:model.defer="edit_no_kk"
                                                class="form-control" />
                                            @error('no_kk')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">NO KARTU TASPEN</label>
                                            <input type="text" name="no_taspen" wire:model.defer="edit_no_taspen"
                                                class="form-control" />
                                            @error('no_taspen')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <h3 class="card-title p-t-20">2. Upload Dokumen</h3>
                                    <hr>
                                    <div class="row col-md-12 ">
                                        <div class="row col-md-12">
                                            <div class="col-md-6">
                                                <label for="">KARTU PEGAWAI</label>
                                                <input type="file" name="dokumen" wire:model.defer="new_dokumen"
                                                    class="form-control" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">KARTU PEGAWAI ELEKTRONIK (KPE)</label>
                                                <input type="file" name="kpe" wire:model.defer="new_kpe"
                                                    class="form-control" />
                                            </div>

                                        </div>

                                        <div class="row col-md-12">
                                            <div class="col-md-6">
                                                <label for="">KARIS / KARSU</label>
                                                <input type="file" name="kk" wire:model.defer="new_kk"
                                                    class="form-control" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">KARTU TASPEN</label>
                                                <input type="file" name="taspen" wire:model.defer="new_taspen"
                                                    class="form-control" />
                                            </div>

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