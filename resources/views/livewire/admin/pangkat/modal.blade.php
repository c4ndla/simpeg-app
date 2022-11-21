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
                                    <h3 class="card-title">1. Data Karir</h3>
                                    <hr>
                                    <div class="row col-md-12 p-t-20">
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
                                            <label for="">Jabatan</label>
                                            <select class="form-select" id="basicSelect" name="jabatan"
                                                wire:model.defer="jabatan">

                                                <option>-Pilih Jabatan-</option>
                                                <option>Direktur</option>
                                                <option>Kabid Yanmed</option>
                                                <option>Kabid Pelayanan Penunjang</option>
                                                <option>Kabag Umum & Keuangan</option>
                                                <option>Kabid Pelayanan Keperawatan</option>
                                                <option>Kasie Pelayanan Medik Rajal</option>
                                                <option>Kasie Keperawatan Rajal</option>
                                                <option>Kasie Pelayanan Penunjang Non-Medik</option>
                                                <option>Kasubag Tata Usaha & Sumber Daya Manusia</option>
                                                <option>Kasie Pelayanan Penunjang Medik</option>
                                                <option>Kasubag Aset dan Keuangan </option>
                                                <option>Kasie Pelayanan Medik Ranap</option>
                                                <option>Kasie Keperawatan Ranap</option>
                                                <option>Kasubag Perencanaan & Pelaporan</option>
                                                <option>Dokter Spesialis Anak</option>
                                                <option>Dokter Spesialis Paru</option>
                                                <option>Dokter Umum</option>
                                                <option>Dokter Spesialis Obgyn</option>
                                                <option>Dokter Spesialis Anestesi</option>
                                                <option>Dokter Gigi</option>
                                                <option>Perawat</option>
                                                <option>Perawat Gigi</option>
                                                <option>Penata Anastesi Ahli Pertama</option>
                                                <option>Bidan</option>
                                                <option>Sanitarian</option>
                                                <option>Apoteker</option>
                                                <option>Asisten Apoteker</option>
                                                <option>Pranata Laboratorium</option>
                                                <option>Fisioterapi</option>
                                                <option>Kepala Instalasi CSSD & Laundry</option>
                                                <option>Radiografer</option>
                                                <option>Nutrisionis</option>
                                                <option>Teknisi Elektromedis Terampil </option>
                                                <option>Kasir</option>
                                                <option>Penyimpan dan Pengurus Barang Pembantu</option>
                                                <option>Rekam Medis</option>
                                                <option>CSSD</option>
                                                <option>Dokter Spesialis</option>
                                                <option>Administrasi</option>
                                                <option>Entryer</option>
                                                <option>Gas Medis</option>
                                                <option>IPS Non Medis</option>
                                                <option>PDE</option>
                                                <option>Kasir</option>
                                                <option>Laundry</option>
                                                <option>Pramusaji</option>
                                                <option>Pengemudi</option>
                                                <option>Petugas Keamanan RS</option>
                                                <option>PORTER</option>
                                                <option>Cleaning Service</option>
                                                <option>Petugas Parkir</option>
                                                <option>Pemelihara Taman</option>
                                                <option>Marbot</option>
                                                <option>Fungsional Umum</option>


                                            </select>
                                            @error('jabatan')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Status</label>
                                            <select class="form-select" id="basicSelect" name="status_pangkat"
                                                wire:model.defer="status_pangkat">
                                                <option>-Pilih Status-</option>
                                                <option>PNS</option>
                                                <option>CPNS</option>
                                                <option>THL/BLUD</option>
                                                <option>PKWT</option>
                                                <option>Kontrak Daerah</option>
                                            </select>
                                            @error('status_pangkat')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Bulan Masuk</label>
                                            <input type="text" name="bln_masuk" wire:model.defer="bln_masuk"
                                                class="form-control" />
                                            @error('bln_masuk')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Masa Kerja (Tahun)</label>
                                            <input type="text" name="masa_kerja" wire:model.defer="masa_kerja"
                                                class="form-control" />
                                            @error('masa_kerja')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <h3 class="card-title p-t-20">2. Data Karir Profesi</h3>
                                    <hr>
                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label for="">SIP / SIK</label>
                                            <input type="text" name="sip" wire:model.defer="sip" class="form-control" />
                                            @error('sip')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Berlaku (SIP/SK)</label>
                                            <input type="text" name="berlaku_sip" wire:model.defer="berlaku_sip"
                                                class="form-control" />
                                            @error('berlaku_sip')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">Dikeluarkan (SIP/SK)</label>
                                            <input type="text" name="keluar_sip" wire:model.defer="keluar_sip"
                                                class="form-control" />
                                            @error('keluar_sip')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label for="">STR</label>
                                            <input type="text" name="str" wire:model.defer="str" class="form-control" />
                                            @error('str')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Dikeluarkan (STR)</label>
                                            <input type="text" name="keluar_str" wire:model.defer="keluar_str"
                                                class="form-control" />
                                            @error('keluar_str')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">Angka Kredit</label>
                                            <input type="text" name="angka_kredit" wire:model.defer="angka_kredit"
                                                class="form-control" />
                                            @error('angka_kredit')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <h3 class="card-title p-t-20">3. Data Karir PNS</h3>
                                    <hr>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Pangkat/Gol.Ruang</label>
                                            <select class="form-select" id="basicSelect" name="golongan"
                                                wire:model.defer="golongan">
                                                <option>-Pilih Pangkat/Gol.Ruang-</option>
                                                <option>Penata Muda - III/a</option>
                                                <option>Penata Muda Tingkat I - III/b</option>
                                                <option>Penata - III/c</option>
                                                <option>Penata Tingkat I - III/d</option>
                                                <option>Pembina - IV/a</option>
                                                <option>Pembina Tingkat I - IV/b</option>
                                                <option>Pembina Utama Muda - IV/c</option>
                                                <option>Pembina Utama Madya - IV/d</option>
                                                <option>Pembina - IV/e</option>
                                            </select>
                                            @error('golongan')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Jabatan Fungsional</label>
                                            <select class="form-select" id="basicSelect" name="fungsional"
                                                wire:model.defer="fungsional">
                                                <option>-Pilih Jabatan Fungsional-</option>
                                                <option>Struktural</option>
                                                <option>Dokter Muda</option>
                                                <option>Dokter Pertama</option>
                                                <option>Dokter Gigi Ahli Pertama</option>
                                                <option>Dokter Spesialis Anestesi</option>
                                                <option>Dokter Spesialis Bedah</option>
                                                <option>Dokter Spesialis Penyakit Dalam</option>
                                                <option>Dokter Spesialis Patologi Klinik</option>
                                                <option>Dokter Spesialis Orthopedi dan Traumatologi</option>
                                                <option>Dokter Spesialis Mata</option>
                                                <option>Dokter Spesialis Syaraf</option>
                                                <option>Dokter Spesialis Bedah</option>
                                                <option>Dokter Spesialis THT</option>
                                                <option>Dokter Spesialis Bedah Mulut dan Maksilofacial</option>
                                                <option>Perawat</option>
                                                <option>Perawat Muda</option>
                                                <option>Perawat Penyelia</option>
                                                <option>Perawat Mahir</option>
                                                <option>Perawat Ahli Pertama</option>
                                                <option>Perawat Terampil</option>
                                                <option>Perawat Gigi Mahir</option>
                                                <option>Penata Anastesi</option>
                                                <option>Bidan Penyelia</option>
                                                <option>Bidan Pelaksana Lanjutan</option>
                                                <option>Bidan Terampil</option>
                                                <option>Bidan Ahli Pertama</option>
                                                <option>Sanitarian Madya</option>
                                                <option>Apoteker Madya</option>
                                                <option>Apoteker Ahli Pertama</option>
                                                <option>Asisten Apoteker Mahir</option>
                                                <option>Asisten Apoteker Penyelia</option>
                                                <option>Asisten Apoteker Pelaksana Lanjutan</option>
                                                <option>Asisten Apoteker Terampil</option>
                                                <option>Pranata Laborat Mahir</option>
                                                <option>Pranata Laborat Penyelia</option>
                                                <option>Pranata Laborat Terampil</option>
                                                <option>Fisioterapis Pelaksana Lanjutan</option>
                                                <option>Fisioterapis Terampil</option>
                                                <option>Radiografer Mahir</option>
                                                <option>Radiografer Terampil</option>
                                                <option>Nutrisionis Pelaksana Lanjutan</option>
                                                <option>Teknisi Elektromedis Terampil</option>
                                                <option>Fungsional Umum</option>

                                            </select>
                                            @error('fungsional')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">TMT Pangkat</label>
                                            <input type="text" name="tmt_pangkat" wire:model.defer="tmt_pangkat"
                                                class="form-control" />
                                            @error('tmt_pangkat')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">TMT JABATAN FUNGSIONAL</label>
                                            <input type="text" name="tmt_fungsional" wire:model.defer="tmt_fungsional"
                                                class="form-control" />
                                            @error('tmt_fungsional')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">SK ALIH TUGAS MUTASI</label>
                                            <input type="text" name="sk_jabatan" wire:model.defer="sk_jabatan"
                                                class="form-control" />
                                            @error('sk_jabatan')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <label for="">Dokumen</label>
                                            <input type="file" name="dokumen" wire:model.defer="dokumen"
                                                class="form-control" />
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
                                    <h3 class="card-title">1. Data Karir</h3>
                                    <hr>
                                    <div class="row col-md-12 p-t-20">
                                        <div class="col-md-12">
                                            <label for="">Nama Pegawai</label>
                                            <select class="select2 form-control form-select"
                                                style="width: 100%; height:36px;" name="edit_pegawai_id"
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
                                            <label for="">Jabatan</label>
                                            <select class="form-select" id="basicSelect" name="jabatan"
                                                wire:model.defer="edit_jabatan">
                                                <option>-Pilih Jabatan-</option>
                                                <option>Direktur</option>
                                                <option>Kabid Yanmed</option>
                                                <option>Kabid Pelayanan Penunjang</option>
                                                <option>Kabag Umum & Keuangan</option>
                                                <option>Kabid Pelayanan Keperawatan</option>
                                                <option>Kasie Pelayanan Medik Rajal</option>
                                                <option>Kasie Keperawatan Rajal</option>
                                                <option>Kasie Pelayanan Penunjang Non-Medik</option>
                                                <option>Kasubag Tata Usaha & Sumber Daya Manusia</option>
                                                <option>Kasie Pelayanan Penunjang Medik</option>
                                                <option>Kasubag Aset dan Keuangan </option>
                                                <option>Kasie Pelayanan Medik Ranap</option>
                                                <option>Kasie Keperawatan Ranap</option>
                                                <option>Kasubag Perencanaan & Pelaporan</option>
                                                <option>Dokter Spesialis Anak</option>
                                                <option>Dokter Spesialis Paru</option>
                                                <option>Dokter Umum</option>
                                                <option>Dokter Spesialis Obgyn</option>
                                                <option>Dokter Spesialis Anestesi</option>
                                                <option>Dokter Gigi</option>
                                                <option>Perawat</option>
                                                <option>Perawat Gigi</option>
                                                <option>Penata Anastesi Ahli Pertama</option>
                                                <option>Bidan</option>
                                                <option>Sanitarian</option>
                                                <option>Apoteker</option>
                                                <option>Asisten Apoteker</option>
                                                <option>Pranata Laboratorium</option>
                                                <option>Fisioterapi</option>
                                                <option>Kepala Instalasi CSSD & Laundry</option>
                                                <option>Radiografer</option>
                                                <option>Nutrisionis</option>
                                                <option>Teknisi Elektromedis Terampil </option>
                                                <option>Kasir</option>
                                                <option>Penyimpan dan Pengurus Barang Pembantu</option>
                                                <option>Rekam Medis</option>
                                                <option>CSSD</option>
                                                <option>Dokter Spesialis</option>
                                                <option>Administrasi</option>
                                                <option>Entryer</option>
                                                <option>Gas Medis</option>
                                                <option>IPS Non Medis</option>
                                                <option>PDE</option>
                                                <option>Kasir</option>
                                                <option>Laundry</option>
                                                <option>Pramusaji</option>
                                                <option>Pengemudi</option>
                                                <option>Petugas Keamanan RS</option>
                                                <option>PORTER</option>
                                                <option>Cleaning Service</option>
                                                <option>Petugas Parkir</option>
                                                <option>Pemelihara Taman</option>
                                                <option>Marbot</option>
                                                <option>Fungsional Umum</option>
                                            </select>
                                            @error('jabatan')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Status</label>
                                            <select class="form-select" id="basicSelect" name="status_pangkat"
                                                wire:model.defer="edit_status_pangkat">
                                                <option>-Pilih Status-</option>
                                                <option>PNS</option>
                                                <option>CPNS</option>
                                                <option>THL/BLUD</option>
                                                <option>PKWT</option>
                                                <option>Kontrak Daerah</option>
                                            </select>
                                            @error('status_pangkat')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Bulan Masuk</label>
                                            <input type="text" name="bln_masuk" wire:model.defer="edit_bln_masuk"
                                                class="form-control" />
                                            @error('bln_masuk')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Masa Kerja (Tahun)</label>
                                            <input type="text" name="masa_kerja" wire:model.defer="edit_masa_kerja"
                                                class="form-control" />
                                            @error('masa_kerja')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <h3 class="card-title p-t-20">2. Data Karir Profesi</h3>
                                    <hr>
                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label for="">SIP / SIK</label>
                                            <input type="text" name="sip" wire:model.defer="edit_sip"
                                                class="form-control" />
                                            @error('sip')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Berlaku (SIP/SK)</label>
                                            <input type="text" name="berlaku_sip" wire:model.defer="edit_berlaku_sip"
                                                class="form-control" />
                                            @error('berlaku_sip')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">Dikeluarkan (SIP/SK)</label>
                                            <input type="text" name="keluar_sip" wire:model.defer="edit_keluar_sip"
                                                class="form-control" />
                                            @error('keluar_sip')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label for="">STR</label>
                                            <input type="text" name="str" wire:model.defer="edit_str"
                                                class="form-control" />
                                            @error('str')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Dikeluarkan (STR)</label>
                                            <input type="text" name="keluar_str" wire:model.defer="edit_keluar_str"
                                                class="form-control" />
                                            @error('keluar_str')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">Angka Kredit</label>
                                            <input type="text" name="angka_kredit" wire:model.defer="edit_angka_kredit"
                                                class="form-control" />
                                            @error('angka_kredit')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <h3 class="card-title p-t-20">3. Data Karir PNS</h3>
                                    <hr>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">Pangkat/Gol.Ruang</label>
                                            <select class="form-select" id="basicSelect" name="golongan"
                                                wire:model.defer="edit_golongan">

                                                <option>Penata Muda - III/a</option>
                                                <option>Penata Muda Tingkat I - III/b</option>
                                                <option>Penata - III/c</option>
                                                <option>Penata Tingkat I - III/d</option>
                                                <option>Pembina - IV/a</option>
                                                <option>Pembina Tingkat I - IV/b</option>
                                                <option>Pembina Utama Muda - IV/c</option>
                                                <option>Pembina Utama Madya - IV/d</option>
                                                <option>Pembina - IV/e</option>
                                            </select>
                                            @error('golongan')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror



                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Jabatan Fungsional</label>
                                            <select class="form-select" id="basicSelect" name="fungsional"
                                                wire:model.defer="edit_fungsional">

                                                <option>Struktural</option>
                                                <option>Dokter Muda</option>
                                                <option>Dokter Pertama</option>
                                                <option>Dokter Gigi Ahli Pertama</option>
                                                <option>Dokter Spesialis Anestesi</option>
                                                <option>Dokter Spesialis Bedah</option>
                                                <option>Dokter Spesialis Penyakit Dalam</option>
                                                <option>Dokter Spesialis Patologi Klinik</option>
                                                <option>Dokter Spesialis Orthopedi dan Traumatologi</option>
                                                <option>Dokter Spesialis Mata</option>
                                                <option>Dokter Spesialis Syaraf</option>
                                                <option>Dokter Spesialis Bedah</option>
                                                <option>Dokter Spesialis THT</option>
                                                <option>Dokter Spesialis Bedah Mulut dan Maksilofacial</option>
                                                <option>Perawat</option>
                                                <option>Perawat Muda</option>
                                                <option>Perawat Penyelia</option>
                                                <option>Perawat Mahir</option>
                                                <option>Perawat Ahli Pertama</option>
                                                <option>Perawat Terampil</option>
                                                <option>Perawat Gigi Mahir</option>
                                                <option>Penata Anastesi</option>
                                                <option>Bidan Penyelia</option>
                                                <option>Bidan Pelaksana Lanjutan</option>
                                                <option>Bidan Terampil</option>
                                                <option>Bidan Ahli Pertama</option>
                                                <option>Sanitarian Madya</option>
                                                <option>Apoteker Madya</option>
                                                <option>Apoteker Ahli Pertama</option>
                                                <option>Asisten Apoteker Mahir</option>
                                                <option>Asisten Apoteker Penyelia</option>
                                                <option>Asisten Apoteker Pelaksana Lanjutan</option>
                                                <option>Asisten Apoteker Terampil</option>
                                                <option>Pranata Laborat Mahir</option>
                                                <option>Pranata Laborat Penyelia</option>
                                                <option>Pranata Laborat Terampil</option>
                                                <option>Fisioterapis Pelaksana Lanjutan</option>
                                                <option>Fisioterapis Terampil</option>
                                                <option>Radiografer Mahir</option>
                                                <option>Radiografer Terampil</option>
                                                <option>Nutrisionis Pelaksana Lanjutan</option>
                                                <option>Teknisi Elektromedis Terampil</option>
                                                <option>Fungsional Umum</option>
                                            </select>
                                            @error('fungsional')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">TMT Pangkat</label>
                                            <input type="text" name="tmt_pangkat" wire:model.defer="edit_tmt_pangkat"
                                                class="form-control" />
                                            @error('tmt_pangkat')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">TMT JABATAN FUNGSIONAL</label>
                                            <input type="text" name="tmt_fungsional"
                                                wire:model.defer="edit_tmt_fungsional" class="form-control" />
                                            @error('tmt_fungsional')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label for="">SK ALIH TUGAS MUTASI</label>
                                            <input type="text" name="sk_jabatan" wire:model.defer="edit_sk_jabatan"
                                                class="form-control" />
                                            @error('sk_jabatan')
                                            <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <label for="">Dokumen</label>
                                            <input type="file" name="dokumen" wire:model.defer="edit_dokumen"
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