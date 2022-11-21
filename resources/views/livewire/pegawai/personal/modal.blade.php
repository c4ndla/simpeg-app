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
                                    <h3 class="card-title">1. Info Personal</h3>
                                    <hr>
                                    <div class="row col-md-12 p-t-20">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Nama</label>
                                            <input type="text" name="nama" wire:model.defer="nama"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Gelar Depan</label>
                                            <input type="text" name="gelar_depan" wire:model.defer="gelar_depan"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Gelar Belakang</label>
                                            <input type="text" name="gelar_belakang" wire:model.defer="gelar_belakang"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">NIP</label>
                                            <input type="text" name="nip" wire:model.defer="nip" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">NIK</label>
                                            <input type="text" name="nik" wire:model.defer="nik" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Nama Ruangan</label>
                                            <select class="form-select" id="basicSelect" name="nama_ruang"
                                                wire:model.defer="nama_ruang">
                                                <option>-Pilih Ruang-</option>
                                                <option>AGD</option>
                                                <option>BROMO</option>
                                                <option>CS</option>
                                                <option>CSSD</option>
                                                <option>FARMASI</option>
                                                <option>FISIOTERAPI</option>
                                                <option>Garden</option>
                                                <option>Gas Medis</option>
                                                <option>GIZI</option>
                                                <option>GRAHA</option>
                                                <option>GUDANG BARANG</option>
                                                <option>GUDANG FARMASI</option>
                                                <option>HCU</option>
                                                <option>IGD</option>
                                                <option>IGD/IKJ</option>
                                                <option>IKJ</option>
                                                <option>IPS MEDIS</option>
                                                <option>IPS NON MEDIS</option>
                                                <option>KABER</option>
                                                <option>KASIR</option>
                                                <option>KEPEGAWAIAN</option>
                                                <option>KESLING</option>
                                                <option>KEUANGAN</option>
                                                <option>KLINIK ORTHOPAEDI</option>
                                                <option>KLINIK ANAK</option>
                                                <option>KLINIK BEDAH</option>
                                                <option>KLINIK BEDAH MULUT</option>
                                                <option>KLINIK GIGI</option>
                                                <option>KLINIK MATA</option>
                                                <option>KLINIK OBGYN</option>
                                                <option>KLINIK PARU</option>
                                                <option>KLINIK PENYAKIT DALAM</option>
                                                <option>KLINIK PINERE</option>
                                                <option>KLINIK SYARAF</option>
                                                <option>KLINIK THT</option>
                                                <option>KLINIK UMUM</option>
                                                <option>KOMDIK</option>
                                                <option>LABORATORIUM</option>
                                                <option>LAUNDRY</option>
                                                <option>MANAJEMEN</option>
                                                <option>MNE IGD</option>
                                                <option>Mushollah</option>
                                                <option>KAMAR OPERASI (OK)</option>
                                                <option>Parkiran</option>
                                                <option>PDE</option>
                                                <option>PENJAMINAN</option>
                                                <option>PINERE</option>
                                                <option>PKRS</option>
                                                <option>POLI ANAK</option>
                                                <option>RADIOLOGI</option>
                                                <option>RANU</option>
                                                <option>RANU & ROMO</option>
                                                <option>REKAM MEDIS</option>
                                                <option>RUANG PERINATOLOGI</option>
                                                <option>SATPAM</option>
                                                <option>SUNGRAM</option>
                                                <option>TUBEL</option>
                                            </select>

                                            {{-- <select class="select2 form-control form-select"
                                                style="width: 100%; height:36px;" name="ruang_id"
                                                wire:model.defer="ruang_id">
                                                <option>= Pilih Nama Ruangan =</option>

                                                @foreach ($ruang as $item)

                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                                @endforeach
                                            </select> --}}
                                            @error('nama_ruang')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">No. Handphone</label>
                                            <input type="text" name="no_hp" wire:model.defer="no_hp"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">No. Telepon</label>
                                            <input type="text" name="no_telp" wire:model.defer="no_telp"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Email</label>
                                            <input type="text" name="email" wire:model.defer="email"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Jenis Kelamin</label>
                                            <select class="form-select" id="basicSelect" name="kelamin"
                                                wire:model.defer="kelamin">
                                                <option>-Pilih Jenis Kelamin-</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Golongan Darah</label>
                                            <select class="form-select" id="basicSelect" name="darah"
                                                wire:model.defer="darah">
                                                <option>-Pilih Golongan Darah-</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>AB</option>
                                                <option>O</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Agama</label>
                                            <select class="form-select" id="basicSelect" name="agama"
                                                wire:model.defer="agama">
                                                <option>-Pilih Agama-</option>
                                                <option>Islam</option>
                                                <option>Kristen Katolik</option>
                                                <option>Kristen Protestan</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" id="modern-username" class="form-control"
                                                placeholder="Tempat Lahir" name="tempat" wire:model.defer="tempat" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" class="form-control flatpickr-basic"
                                                placeholder="YYYY-MM-DD" name="tgl_lahir"
                                                wire:model.defer="tgl_lahir" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Nama Pasangan</label>
                                            <input type="text" name="nama_pasangan" wire:model.defer="nama_pasangan"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Status Pernikahan</label>
                                            <select class="form-select" id="basicSelect" name="status_nikah"
                                                wire:model.defer="status_nikah">
                                                <option>-Pilih Status-</option>
                                                <option>Belum Nikah</option>
                                                <option>Nikah</option>
                                                <option>Cerai Hidup</option>
                                                <option>Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>

                                    <h3 class="card-title">2. Info Alamat</h3>
                                    <hr>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Provinsi</label>
                                            <input type="text" name="provinsi" wire:model.defer="provinsi"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Kota</label>
                                            <input type="text" name="kota" wire:model.defer="kota"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Kecamatan</label>
                                            <input type="text" name="kecamatan" wire:model.defer="kecamatan"
                                                class="form-control" />
                                        </div>

                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">RT</label>
                                            <input type="text" name="rt" wire:model.defer="rt" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">RW</label>
                                            <input type="text" name="rw" wire:model.defer="rw" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Kode Pos</label>
                                            <input type="text" name="kode_pos" wire:model.defer="kode_pos"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <h3 class="card-title">3. Info Nomor Dokumen & Upload</h3>
                                    <hr>
                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. BPJS Kesehatan</label>
                                            <input type="text" name="no_bpjs_sehat" wire:model.defer="no_bpjs_sehat"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. BPJS Ketenagakerjaan</label>
                                            <input type="text" name="no_bpjs_kerja" wire:model.defer="no_bpjs_kerja"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. NPWP</label>
                                            <input type="text" name="no_npwp" wire:model.defer="no_npwp"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. Rekening BPD</label>
                                            <input type="text" name="rek_bpd" wire:model.defer="rek_bpd"
                                                class="form-control" />
                                        </div>
                                    </div>



                                    <h3 class="card-title">4. Upload Dokumen/Foto</h3>
                                    <hr>
                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto" wire:model.defer="foto"
                                                class="form-control" />
                                            {{-- @if ($foto)
                                            <img src="{{$foto->temporaryUrl()}}" style="width: 150px;height:150px;"
                                                alt="">
                                            @endif --}}

                                            @error('foto')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">KTP</label>
                                            <input type="file" name="ktp" wire:model.defer="ktp" class="form-control" />
                                            {{-- @if ($ktp)
                                            <img src="{{$ktp->temporaryUrl()}}" style="width: 150px;height:150px;"
                                                alt="">
                                            @endif --}}
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">NPWP</label>
                                            <input type="file" name="npwp" wire:model.defer="npwp"
                                                class="form-control" />
                                            {{-- @if ($npwp)
                                            <img src="{{$npwp->temporaryUrl()}}" style="width: 150px;height:150px;"
                                                alt="">
                                            @endif --}}
                                        </div>
                                    </div>

                                    <div class="row col-md-12">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">BPJS Ketenagakerjaan</label>
                                            <input type="file" name="kerja" wire:model.defer="kerja"
                                                class="form-control" />
                                            {{-- @if ($kerja)
                                            <img src="{{$kerja->temporaryUrl()}}" style="width: 150px;height:150px;"
                                                alt="">
                                            @endif --}}
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">BPJS Kesehatan</label>
                                            <input type="file" name="bpjs" wire:model.defer="bpjs"
                                                class="form-control" />
                                            {{-- @if ($bpjs)
                                            <img src="{{$bpjs->temporaryUrl()}}" style="width: 150px;height:150px;"
                                                alt="">
                                            @endif --}}
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
                                    <h3 class="card-title">Info Personal</h3>
                                    <hr>
                                    <div class="row col-md-12 p-t-20">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Nama</label>
                                            <input type="text" name="nama" wire:model.defer="edit_nama"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Gelar Depan</label>
                                            <input type="text" name="gelar_depan" wire:model.defer="edit_gelar_depan"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Gelar Belakang</label>
                                            <input type="text" name="gelar_belakang"
                                                wire:model.defer="edit_gelar_belakang" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">NIP</label>
                                            <input type="text" name="nip" wire:model.defer="edit_nip"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">NIK</label>
                                            <input type="text" name="nik" wire:model.defer="edit_nik"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Nama Ruangan</label>
                                            <select class="form-select" id="basicSelect" name="nama_ruang"
                                                wire:model.defer="edit_nama_ruang">
                                                <option>-Pilih Ruang-</option>
                                                <option>AGD</option>
                                                <option>BROMO</option>
                                                <option>CS</option>
                                                <option>CSSD</option>
                                                <option>FARMASI</option>
                                                <option>FISIOTERAPI</option>
                                                <option>Garden</option>
                                                <option>Gas Medis</option>
                                                <option>GIZI</option>
                                                <option>GRAHA</option>
                                                <option>GUDANG BARANG</option>
                                                <option>GUDANG FARMASI</option>
                                                <option>HCU</option>
                                                <option>IGD</option>
                                                <option>IGD/IKJ</option>
                                                <option>IKJ</option>
                                                <option>IPS MEDIS</option>
                                                <option>IPS NON MEDIS</option>
                                                <option>KABER</option>
                                                <option>KASIR</option>
                                                <option>KEPEGAWAIAN</option>
                                                <option>KESLING</option>
                                                <option>KEUANGAN</option>
                                                <option>KLINIK ORTHOPAEDI</option>
                                                <option>KLINIK ANAK</option>
                                                <option>KLINIK BEDAH</option>
                                                <option>KLINIK BEDAH MULUT</option>
                                                <option>KLINIK GIGI</option>
                                                <option>KLINIK MATA</option>
                                                <option>KLINIK OBGYN</option>
                                                <option>KLINIK PARU</option>
                                                <option>KLINIK PENYAKIT DALAM</option>
                                                <option>KLINIK PINERE</option>
                                                <option>KLINIK SYARAF</option>
                                                <option>KLINIK THT</option>
                                                <option>KLINIK UMUM</option>
                                                <option>KOMDIK</option>
                                                <option>LABORATORIUM</option>
                                                <option>LAUNDRY</option>
                                                <option>MANAJEMEN</option>
                                                <option>MNE IGD</option>
                                                <option>Mushollah</option>
                                                <option>KAMAR OPERASI (OK)</option>
                                                <option>Parkiran</option>
                                                <option>PDE</option>
                                                <option>PENJAMINAN</option>
                                                <option>PINERE</option>
                                                <option>PKRS</option>
                                                <option>POLI ANAK</option>
                                                <option>RADIOLOGI</option>
                                                <option>RANU</option>
                                                <option>RANU & ROMO</option>
                                                <option>REKAM MEDIS</option>
                                                <option>RUANG PERINATOLOGI</option>
                                                <option>SATPAM</option>
                                                <option>SUNGRAM</option>
                                                <option>TUBEL</option>
                                            </select>

                                            {{-- <select class="select2 form-control form-select"
                                                style="width: 100%; height:36px;" name="ruang_id"
                                                wire:model.defer="edit_ruang_id">
                                                <option>= Pilih Nama Ruangan =</option>

                                                @foreach ($ruang as $item)

                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                                @endforeach
                                            </select> --}}
                                            @error('nama_ruang')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">No. Handphone</label>
                                            <input type="text" name="no_hp" wire:model.defer="edit_no_hp"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">No. Telepon</label>
                                            <input type="text" name="no_telp" wire:model.defer="edit_no_telp"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Email</label>
                                            <input type="text" name="email" wire:model.defer="edit_email"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Jenis Kelamin</label>
                                            <select class="form-select" id="basicSelect" name="kelamin"
                                                wire:model.defer="edit_kelamin">
                                                <option>-Pilih Jenis Kelamin-</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Golongan Darah</label>
                                            <select class="form-select" id="basicSelect" name="darah"
                                                wire:model.defer="edit_darah">
                                                <option>-Pilih Golongan Darah-</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>AB</option>
                                                <option>O</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Agama</label>
                                            <select class="form-select" id="basicSelect" name="agama"
                                                wire:model.defer="edit_agama">
                                                <option>-Pilih Agama-</option>
                                                <option>Islam</option>
                                                <option>Kristen Katolik</option>
                                                <option>Kristen Protestan</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" id="modern-username" class="form-control"
                                                placeholder="Tempat Lahir" name="tempat"
                                                wire:model.defer="edit_tempat" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" class="form-control flatpickr-basic"
                                                placeholder="YYYY-MM-DD" name="tgl_lahir"
                                                wire:model.defer="edit_tgl_lahir" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Nama Pasangan</label>
                                            <input type="text" name="nama_pasangan"
                                                wire:model.defer="edit_nama_pasangan" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">Status Pernikahan</label>
                                            <select class="form-select" id="basicSelect" name="status_nikah"
                                                wire:model.defer="edit_status_nikah">
                                                <option>-Pilih Status-</option>
                                                <option>Belum Nikah</option>
                                                <option>Nikah</option>
                                                <option>Cerai Hidup</option>
                                                <option>Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>

                                    <h3 class="card-title">Info Alamat</h3>
                                    <hr>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Provinsi</label>
                                            <input type="text" name="provinsi" wire:model.defer="edit_provinsi"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Kota</label>
                                            <input type="text" name="kota" wire:model.defer="edit_kota"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Kecamatan</label>
                                            <input type="text" name="kecamatan" wire:model.defer="edit_kecamatan"
                                                class="form-control" />
                                        </div>

                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">RT</label>
                                            <input type="text" name="rt" wire:model.defer="edit_rt"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">RW</label>
                                            <input type="text" name="rw" wire:model.defer="edit_rw"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Kode Pos</label>
                                            <input type="text" name="kode_pos" wire:model.defer="edit_kode_pos"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <h3 class="card-title">Info Nomor Dokumen & Upload</h3>
                                    <hr>
                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. BPJS Kesehatan</label>
                                            <input type="text" name="no_bpjs_sehat"
                                                wire:model.defer="edit_no_bpjs_sehat" class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. BPJS Ketenagakerjaan</label>
                                            <input type="text" name="no_bpjs_kerja"
                                                wire:model.defer="edit_no_bpjs_kerja" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. NPWP</label>
                                            <input type="text" name="no_npwp" wire:model.defer="edit_no_npwp"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group mb-3 col-md-6">
                                            <label for="">No. Rekening BPD</label>
                                            <input type="text" name="rek_bpd" wire:model.defer="edit_rek_bpd"
                                                class="form-control" />
                                        </div>
                                    </div>



                                    <h3 class="card-title">Upload Dokumen/Foto</h3>
                                    <hr>
                                    <div class="row col-md-12">
                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto" wire:model.defer="new_foto"
                                                class="form-control" />


                                            @error('foto')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">KTP</label>
                                            <input type="file" name="ktp" wire:model.defer="new_ktp"
                                                class="form-control" />

                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">NPWP</label>
                                            <input type="file" name="npwp" wire:model.defer="new_npwp"
                                                class="form-control" />

                                        </div>
                                    </div>

                                    <div class="row col-md-12">

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">BPJS Ketenagakerjaan</label>
                                            <input type="file" name="kerja" wire:model.defer="new_kerja"
                                                class="form-control" />

                                        </div>

                                        <div class="form-group mb-3 col-md-4">
                                            <label for="">BPJS Kesehatan</label>
                                            <input type="file" name="bpjs" wire:model.defer="new_bpjs"
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            {{-- <form action="{{ url('pegawai/agama') }}" method="POST" enctype="multipart/form-data">
                --}}
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