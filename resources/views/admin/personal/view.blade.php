@extends('layouts.admin')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
        font-weight: bolder;
    }

    .h6 {
        font-family: 'Montserrat', sans-serif;
        font-weight: bolder;
    }



    .card-body {
        background: white;
        font-weight: bolder;
    }

    .card-body .hr {
        color: black
    }

    .card-header h4,
    .card-header .h4 {
        text-align: center;
        font-weight: bolder
    }

    .card-title {

        color: black;
        font-weight: bolder;
    }

    .card-text {
        color: black;
    }
</style>
<!-- Row -->
<div class="row">
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{ asset('assets/images/users/5.jpg') }}" class="img-circle"
                        width="150" />
                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                    <h6 class="card-title">Pembina/IV.a</h6>
                    <h6 class="card-title">19690519 199302 2 001</h6>

                    <div class="row text-center justify-content-md-center">
                        <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                <font class="font-medium">254</font>
                            </a></div>
                        <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                <font class="font-medium">54</font>
                            </a></div>
                    </div>
                </center>
            </div>
            <div>
                <hr>
            </div>

            <div class="card-body">
                <div class="row text-center justify-content-md-center">
                    <div class="col-6">
                        <small class="card-title p-t-30 db">Jabatan</small>
                        <h6 class="card-title">Dokter Umum</h6>
                        <small class="text-dark">Jabatan Fungsional </small>
                        <h6 class="card-title">Dokter Muda</h6>
                        <small class="text-muted p-t-30 db">Status</small>
                        <h6 class="card-title">PNS</h6>
                        <small class="text-muted p-t-30 db">Agama</small>
                        <h6 class="card-title">Islam</h6>

                    </div>

                    <div class="col-6">
                        <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                        <h6 class="card-title">Laki-laki</h6>
                        <small class="text-muted p-t-30 db">Tempat Tanggal Lahir</small>
                        <h6 class="card-title">Malang, 12 Mei 2022</h6>
                        <small class="text-muted p-t-30 db">No. Telp</small>
                        <h6 class="card-title">08126564878</h6>
                        <small class="text-muted p-t-30 db">Status Pernihakan</small>
                        <h6 class="card-title">Menikah</h6>
                    </div>
                    <hr>
                    <div class="col-6">
                        <small class="text-muted p-t-30 db">Alamat</small>
                        <h6 class="card-title">Jl. Kol. Sugiono V/19</h6>
                        <small class="text-muted p-t-30 db">Provinsi</small>
                        <h6 class="card-title">Jawa Timur</h6>
                        <small class="text-muted p-t-30 db">Kota</small>
                        <h6 class="card-title">Malang</h6>

                    </div>

                    <div class="col-6">
                        <small class="text-muted p-t-30 db">Kecamatan</small>
                        <h6 class="card-title">Kedungkandang</h6>
                        <small class="text-muted p-t-30 db">Kelurahan</small>
                        <h6 class="card-title">Mergosono</h6>
                        <small class="text-muted p-t-30 db">Kode Pos</small>
                        <h6 class="card-title">65134</h6>
                    </div>
                </div>

                <div class="map-box">
                    <iframe src="https://maps.google.com/maps?q=matos%20malang&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <br />

                <div class="form-group">

                    <div class="col-sm-12 mx-2">
                        <button class="btn btn-success text-white float-end"> <i class="fas fa-download text-white"></i>
                            Export</button>
                    </div>


                </div>

                <div class="like-comm"><i class="fas fa-download text-success"></i> <a href="javascript:void(0)"
                        class="link m-r-10">Dokumen
                        BPJS</a> <a href="javascript:void(0)" class="link m-r-10"><i
                            class="fas fa-download text-success"></i> KTP</a> </div>


            </div>
        </div>
    </div>
    <!-- Column -->

    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                        role="tab">Keluarga</a> </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab">Pendidikan</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3" role="tab">Riwayat
                        Jabatan</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab">Riwayat
                        Diklat</a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab5" role="tab">Riwayat
                        Pelatihan</a>
                </li>
            </ul>


            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            <div class="sl-item">
                                <div class="sl-left"> <img src="{{ asset('assets/images/users/d5.jpg') }}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link" style="font-weight: bolder">1.
                                            Lamar
                                            Dunn</a>
                                        <hr>
                                        <h6 style="font-weight: 500">Hubungan Keluarga : Ayah Kandung</h6>
                                        <h6 style="font-weight: 500">Pendidikan Terakhir : SMA</h6>
                                        <h6 style="font-weight: 500">Pekerjaan : WIBU</h6>
                                        <h6 style="font-weight: 500">Agama : Islam</h6>
                                        <h6 style="font-weight: 500">Jenis Kelamin : Laki-laki</h6>


                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img1.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img2.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>

                                        </div>
                                        <div class="like-comm"><i class="fas fa-download text-success"></i> <a
                                                href="javascript:void(0)" class="link m-r-10">Dokumen
                                                BPJS</a> <a href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-download text-success"></i> Dokumen KK</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="{{ asset('assets/images/users/d3.jpg') }}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link" style="font-weight: bolder">2.
                                            Ayva
                                            Almond
                                            Doe</a>
                                        <hr>
                                        <h6 style="font-weight: 500">Hubungan Keluarga : Ibu Kandung</h6>
                                        <h6 style="font-weight: 500">Pendidikan Terakhir : SMA</h6>
                                        <h6 style="font-weight: 500">Pekerjaan : WIBU</h6>
                                        <h6 style="font-weight: 500">Agama : Islam</h6>
                                        <h6 style="font-weight: 500">Jenis Kelamin : Perempuan</h6>


                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img1.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img2.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>

                                        </div>
                                        <div class="like-comm"><i class="fas fa-download text-success"></i> <a
                                                href="javascript:void(0)" class="link m-r-10">Dokumen
                                                BPJS</a> <a href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-download text-success"></i> Dokumen KK</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="{{ asset('assets/images/users/4.jpg') }}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link" style="font-weight: bolder">3.
                                            Lily
                                            Haworth</a>
                                        <hr>
                                        <h6 style="font-weight: 500">Hubungan Keluarga : Kakak Kandung</h6>
                                        <h6 style="font-weight: 500">Pendidikan Terakhir : SMP</h6>
                                        <h6 style="font-weight: 500">Pekerjaan : Pilot</h6>
                                        <h6 style="font-weight: 500">Agama : Islam</h6>
                                        <h6 style="font-weight: 500">Jenis Kelamin : Perempuan</h6>


                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img1.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img2.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>

                                        </div>
                                        <div class="like-comm"><i class="fas fa-download text-success"></i> <a
                                                href="javascript:void(0)" class="link m-r-10">Dokumen
                                                BPJS</a> <a href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-download text-success"></i> Dokumen KK</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="{{ asset('assets/images/users/d2.jpg') }}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link" style="font-weight: bolder">4.
                                            Cosmo
                                            Villanueva</a>
                                        <hr>
                                        <h6 style="font-weight: 500">Hubungan Keluarga : Adik Kandung</h6>
                                        <h6 style="font-weight: 500">Pendidikan Terakhir : SMA</h6>
                                        <h6 style="font-weight: 500">Pekerjaan : WIBU</h6>
                                        <h6 style="font-weight: 500">Agama : Islam</h6>
                                        <h6 style="font-weight: 500">Jenis Kelamin : Laki-laki</h6>


                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img1.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img
                                                    src="{{ asset('assets/images/big/img2.jpg') }}"
                                                    class="img-responsive radius" />
                                            </div>

                                        </div>
                                        <div class="like-comm"><i class="fas fa-download text-success"></i> <a
                                                href="javascript:void(0)" class="link m-r-10">Dokumen
                                                BPJS</a> <a href="javascript:void(0)" class="link m-r-10"><i
                                                    class="fas fa-download text-success"></i> Dokumen KK</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="tab2" role="tabpanel">
                    <div class="card-body">
                        <h6>TAB Riwayat Pendidikan</h6>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="tab3" role="tabpanel">
                    <div class="card-body">
                        <h6>TAB Riwayat Jabatan</h6>
                    </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel">
                    <div class="card-body">
                        <h6>TAB Riwayat Diklat</h6>
                    </div>
                </div>
                <div class="tab-pane" id="tab5" role="tabpanel">
                    <div class="card-body">
                        <h6>TAB Riwayat Pelatihan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->

@endsection