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
                            <h2 class="mb-1 text-white">DATA KELUARGA PEGAWAI</h2>

                        </div>
                    </a>

                    <form action="{{ url('admin/update-keluarga/'.$keluarga->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <!-- single file upload starts -->
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">DOKUMEN BPJS</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <code>Format file harus .jpg atau .png</code>
                                            <br>
                                            <code>Maksimum ukuran File: 1 Mb</code>
                                        </p>

                                        <input type="file" name="dokumen" class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">DATA DOKUMEN KARTU KELUARGA</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <code>Format file harus .jpg atau .png</code>
                                            <br>
                                            <code>Maksimum ukuran File: 1 Mb</code>
                                        </p>
                                        <input type="file" name="kk" class="form-control">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single file upload ends -->
                        <div class="mb-1 col-md-6">
                            <!-- Basic Select -->
                            <div class="mb-1">
                                <label class="form-label" for="basicSelect">Nama Pegawai</label>
                                <select class="form-select" id="basicSelect" name="personal_id">
                                    @foreach ($personal as $personalitem)

                                    <option value="{{ $personalitem->id }}">{{ $personalitem->nama_depan }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6 ">
                                <label class="form-label" for="modern-username">NO BPJS</label>
                                <input type="text" id="modern-username" name="no_bpjs" class="form-control"
                                    placeholder="NO BPJS" />
                            </div>
                            <div class="mb-1 col-md-6 ">
                                <label class="form-label" for="basicSelect">Pilih Hubungan Keluarga</label>
                                <select class="form-select" id="basicSelect" name="hubungan">
                                    <option>-Pilih Hubungan Keluarga-</option>
                                    <option>Ayah</option>
                                    <option>Ibu</option>
                                    <option>Istri</option>
                                    <option>Suami</option>
                                    <option>Anak</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Nama</label>
                                <input type="text" id="modern-username" name="nama" class="form-control"
                                    placeholder="Nama" />
                            </div>

                        </div>

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">NIK</label>
                                <input type="text" id="modern-username" name="nik" class="form-control"
                                    placeholder="NIK" />
                            </div>

                            <div class="mb-1 col-md-6">

                                <label class="form-label" for="basicSelect">Agama</label>
                                <select class="form-select" id="basicSelect" name="agama">
                                    <option>-Pilih Agama-</option>
                                    <option>Islam</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>

                                </select>

                            </div>
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

                        <div class="row">
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="basicSelect">Pendidikan Terakhir</label>
                                <select class="form-select" id="basicSelect" name="pendidikan">
                                    <option>-Pendidikan Terakhir-</option>
                                    <option>SD</option>
                                    <option>SMP</option>
                                    <option>SMA</option>
                                    <option>D3</option>
                                    <option>D4</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                            <div class="mb-1 col-md-6">
                                <label class="form-label" for="modern-username">Pekerjaan</label>
                                <input type="text" id="modern-username" class="form-control" placeholder="Pekerjaan"
                                    name="pekerjaan" />
                            </div>

                        </div>

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