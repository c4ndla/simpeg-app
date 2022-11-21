@extends('layouts.admin')

@section('content')

<!-- BEGIN: Content-->


<!-- Modern Horizontal Wizard -->
<section class="modern-horizontal-wizard">
    <div class="bs-stepper wizard-modern modern-wizard-example">

        <div class="bs-stepper-content">

            <div id="account-details-modern" class="content" role="tabpanel"
                aria-labelledby="account-details-modern-trigger">


                <div class="list-group">

                    <a href="#" class="list-group-item list-group-item-action active">
                        <div class="d-flex w-100 justify-content-between">
                            <h2 class="mb-1 text-white">DATA PERSONAL PEGAWAI</h2>

                        </div>
                    </a>

                    <form action="{{ url('admin/add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- single file upload starts -->
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">PROFILE PICTURE</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <code>Format file harus .jpg atau .png</code>
                                            <br>
                                            <code>Maksimum ukuran File: 1 Mb</code>
                                        </p>

                                        <input type="file" name="foto" class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">DATA DOKUMEN KARTU PENDUDUK</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <code>Format file harus .jpg atau .png</code>
                                            <br>
                                            <code>Maksimum ukuran File: 1 Mb</code>
                                        </p>
                                        <input type="file" name="ktp" class="form-control">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single file upload ends -->


                        <div class="row">
                            <div class="mb-1 col-md-12 ">
                                <label class="form-label" for="modern-username">NIP</label>
                                <input type="text" id="modern-username" name="NIP" class="form-control"
                                    placeholder="NIP" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Nama Depan</label>
                                <input type="text" id="modern-username" name="nama_depan" class="form-control"
                                    placeholder="Nama Depan" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Nama Belakang</label>
                                <input type="text" id="modern-username" name="nama_belakang" class="form-control"
                                    placeholder="Nama Belakang" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Gelar Depan</label>
                                <input type="text" id="modern-username" name="gelar_depan" class="form-control"
                                    placeholder="Gelar Depan" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Gelar Belakang</label>
                                <input type="text" id="modern-username" name="gelar_belakang" class="form-control"
                                    placeholder="Gelar Belakang" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <!-- Basic Select -->
                                <div class="mb-1">
                                    <label class="form-label" for="basicSelect">Pilih Jenis Kelamin</label>
                                    <select class="form-select" id="basicSelect" name="jenis_kelamin">
                                        <option>-Pilih Jenis Kelamin-</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-1 col-md-6">
                                <!-- Basic Select -->
                                <div class="mb-1">
                                    <label class="form-label" for="basicSelect">Agama</label>
                                    <select class="form-select" id="basicSelect" name="agama_id">
                                        @foreach ($agama as $agamaitem)

                                        <option value="{{ $agamaitem->id }}">{{ $agamaitem->nama }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Tempat Lahir</label>
                                <input type="text" id="modern-username" class="form-control" placeholder="Tempat Lahir"
                                    name="tempat" />
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="form-label" for="fp-default">Tanggal Lahir</label>
                                <input type="text" id="fp-default" class="form-control flatpickr-basic"
                                    placeholder="YYYY-MM-DD" name="tgl_lahir" />
                            </div>
                        </div>

                        <a href="#" class="list-group-item list-group-item-action active">
                            <div class="d-flex w-100 justify-content-between">
                                <h2 class="mb-1 text-white">INFORMASI TEMPAT TINGGAL PEGAWAI</h2>

                            </div>
                        </a>

                        <div class="row pt-1">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat"
                                        rows="3" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Provinsi</label>
                                <input type="text" id="modern-username" class="form-control" name="provinsi"
                                    placeholder="Provinsi" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Kota</label>
                                <input type="text" id="modern-username" class="form-control" name="kota"
                                    placeholder="Kota" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="modern-username">Kecamatan</label>
                                <input type="text" id="modern-username" class="form-control" name="kecamatan"
                                    placeholder="Kecamatan" />
                            </div>
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="modern-username">RT</label>
                                <input type="text" id="modern-username" class="form-control" name="rt"
                                    placeholder="RT" />
                            </div>
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="modern-username">RW</label>
                                <input type="text" id="modern-username" class="form-control" name="rw"
                                    placeholder="RW" />
                            </div>
                            <div class="mb-1 col-md-3">
                                <label class="form-label" for="modern-username">Kode Pos</label>
                                <input type="text" id="modern-username" class="form-control" name="kode_pos"
                                    placeholder="Kode Pos" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">No. Telepon</label>
                                <input type="text" id="modern-username" class="form-control" name="no_telp"
                                    placeholder="No. Telepon" />
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">No. Handphone</label>
                                <input type="text" id="modern-username" class="form-control" name="no_hp"
                                    placeholder="No. Handphone" />
                            </div>
                        </div>


                        <a href="#" class="list-group-item list-group-item-action active">
                            <div class="d-flex w-100 justify-content-between">
                                <h2 class="mb-1 text-white">STATUS KEPEGAWAIAN</h2>

                            </div>
                        </a>
                        <div class="row pt-1">
                            <!-- Basic Select -->
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Status Pernihakan</label>
                                <select class="form-select" id="basicSelect" name="status_nikah">
                                    <option>-Status Pernihakan-</option>
                                    <option>Menikah</option>
                                    <option>Belum Menikah</option>
                                    <option>Janda / Duda</option>
                                </select>
                            </div>

                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Status Pegawai</label>
                                <select class="form-select" id="basicSelect" name="status_pegawai">
                                    <option>-Status Pegawai-</option>
                                    <option>CPNS</option>
                                    <option>PNS</option>
                                    <option>THL</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <!-- Basic Select -->
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Status Jabatan Pegawai</label>
                                <select class="form-select" id="basicSelect" name="status_jabatan">
                                    <option>-Status Jabatan Pegawai-</option>
                                    <option>Status Jabatan A</option>
                                    <option>Status Jabatan B</option>
                                    <option>Status Jabatan C</option>
                                </select>
                            </div>

                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Status Keahlian</label>
                                <select class="form-select" id="basicSelect" name="status_keahlian">
                                    <option>-Status Keahlian-</option>
                                    <option>Status Keahlian A</option>
                                    <option>Status Keahlian B</option>
                                    <option>Status Keahlian C</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Tingkat Keahlian</label>
                                <select class="form-select" id="basicSelect" name="tingkat_keahlian">
                                    <option>-Tingkat Keahlian-</option>
                                    <option>Tingkat Keahlian A</option>
                                    <option>Tingkat Keahlian B</option>
                                    <option>Tingkat Keahlian C</option>
                                </select>
                            </div>

                            <div class="mb-1 col-md-6">

                                <label class="form-label" for="basicSelect">Jabatan Struktural</label>
                                <select class="form-select" id="basicSelect" name="jabatan_struktural">
                                    <option>-Jabatan Struktural-</option>
                                    <option>Jabatan Struktural 1</option>
                                    <option>Jabatan Struktural 2</option>
                                    <option>Jabatan Struktural 3</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <div class="mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status">
                                </div>
                            </div>
                            <div class="col-md-6 py-3">
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                            </div>
                        </div>



                    </form>

                </div>
            </div>













        </div>
    </div>
</section>
<!-- /Modern Horizontal Wizard -->






@endsection