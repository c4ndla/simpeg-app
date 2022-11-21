@extends('layouts.admin')

@section('content')

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row" style="padding-top: 20px">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{asset('storage')}}/{{$pegawai->foto}}" class="img-circle"
                        width="150" />
                    <h4 class="card-title m-t-10">{{ $pegawai->nama }}</h4>
                    <h4 class="card-title badge bg-info text-white">Apoteker Ahli Madya - Pembina IV a</h4>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                <font class="font-medium">254</font>
                            </a></div>
                        <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                <font class="font-medium">9</font>
                            </a></div>
                    </div>
                </center>
            </div>
            <div>
                <hr>
            </div>
            <div class="row text-center justify-content-md-center">
                <div class="col-md-12">
                    <small class="text-dark">Status Jabatan</small>
                    <h6 class="card-title">Struktural - Kabid Pelayanan Penunjang</h6>
                    <small class="text-dark">Status Pegawai</small>
                    <h6 class="card-title" id="status_jabatan">PNS - Dokter Muda</h6>
                    <small class="text-muted p-t-30 db">Ruang</small>
                    <h6 class="card-title" id="status_keahlian">MANAJEMEN</h6>
                    <small class="text-muted p-t-30 db">Kualifikasi</small>
                    <h6 class="card-title" id="tingkat_keahlian">S1 Apoteker</h6>

                </div>
                <div>
                    <hr>
                </div>


            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active card-title" data-bs-toggle="tab" href="#tab0"
                        role="tab">Personal</a> </li>
                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab1"
                        role="tab">Keluarga</a>
                </li>
                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab2"
                        role="tab">Pendidikan</a>
                </li>
                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab3"
                        role="tab">Seminar & Diklat</a>
                </li>
                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab4"
                        role="tab">Pangkat</a>
                </li>
                {{-- <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab5"
                        role="tab">Jabatan</a>
                </li> --}}
                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab6" role="tab">CPNS &
                        PNS</a>
                </li>
                {{-- <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab7"
                        role="tab">Ruangan</a>
                </li> --}}
                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab8"
                        role="tab">Gaji</a>

                <li class="nav-item"> <a class="nav-link card-title" data-bs-toggle="tab" href="#tab9"
                        role="tab">Laporan</a>
                </li>
            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <!--Zero tab-->
                <div class="tab-pane active" id="tab0" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Nama Lengkap</strong>
                                <br>
                                <p class="text-muted">{{ $pegawai->nama }}</p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>No. Telepon</strong>
                                <br>
                                <p class="text-muted">0812-1613-9255</p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>No. HP</strong>
                                <br>
                                <p class="text-muted">0812-1613-9255</p>
                            </div>
                            <div class="col-md-3 col-xs-6"> <strong>Domisili</strong>
                                <br>
                                <p class="text-muted">Malang</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-md-center">
                            <div class="col-4">
                                <small class="text-dark">Jenis Kelamin</small>
                                <h6 class="card-title">Laki-laki</h6>
                                <small class="text-dark">Agama</small>
                                <h6 class="card-title">Islam</h6>
                                <small class="text-muted p-t-30 db">Tempat Lahir</small>
                                <h6 class="card-title">Malang</h6>
                                <small class="text-muted p-t-30 db">Tanggal Lahir</small>
                                <h6 class="card-title">12 Mei 2022</h6>

                            </div>

                            <div class="col-4">
                                <small class="text-dark">Alamat Lengkap</small>
                                <h6 class="card-title">Jl.Kol.Sugiono V/19</h6>
                                <small class="text-dark">Kota</small>
                                <h6 class="card-title">Malang</h6>
                                <small class="text-muted p-t-30 db">Kecamatan</small>
                                <h6 class="card-title">Kedungkandang</h6>
                                <small class="text-muted p-t-30 db">Kode Pos</small>
                                <h6 class="card-title">65134</h6>

                            </div>

                            <div class="col-4">
                                <small class="text-dark">RT</small>
                                <h6 class="card-title">08</h6>
                                <small class="text-dark">RW</small>
                                <h6 class="card-title">03</h6>
                            </div>
                            <hr>

                        </div>

                        <h4 class="font-medium m-t-20">Foto & Dokumen</h4>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 m-b-20">
                                <h6 class="card-title">FOTO</h6><img src="{{asset('storage')}}/{{$pegawai->foto}}"
                                    class="img-responsive radius" />
                                <a href="{{asset('storage')}}/{{$pegawai->foto}}"><button class="btn btn-success m-t-10"
                                        type="button">Download</button></a>
                            </div>

                            <div class="col-lg-3 col-md-6 m-b-20">
                                <h6 class="card-title">KTP</h6><img src="{{asset('storage')}}/{{$pegawai->ktp}}"
                                    class="img-responsive radius" />
                                <a href="{{asset('storage')}}/{{$pegawai->ktp}}"><button class="btn btn-success m-t-10"
                                        type="button">Download</button></a>
                            </div>

                            <div class="col-lg-3 col-md-6 m-b-20">
                                <h6 class="card-title">NPWP</h6><img src="{{asset('storage')}}/{{$pegawai->npwp}}"
                                    class="img-responsive radius" />
                                <a href="{{asset('storage')}}/{{$pegawai->npwp}}"><button class="btn btn-success m-t-10"
                                        type="button">Download</button></a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--First tab-->
                <div class="tab-pane" id="tab1" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($keluarga as $keluargaitem)
                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$keluargaitem->dokumen}}"
                                        alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row col-md-12 justify-content-md-center">
                                            <div class="col-6 m-b-20">
                                                <small class="text-dark">Nama Lengkap</small>
                                                <h6 class="card-title">{{$keluargaitem->nama}}</h6>
                                                <small class="text-dark">Hubungan Keluarga</small>
                                                <h6 class="card-title">{{$keluargaitem->hubungan}}</h6>
                                                <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                                                <h6 class="card-title">{{$keluargaitem->jenis_kelamin}}</h6>
                                                <small class="text-muted p-t-30 db">Alamat</small>
                                                <h6 class="card-title">Jl.Kol.Sugiono V/19</h6>

                                            </div>

                                            {{-- <div class="col-6">
                                                <small class="text-dark">No.BPJS</small>
                                                <h6 class="card-title">12345678</h6>
                                                <small class="text-dark">Pendidikan Terakhir</small>
                                                <h6 class="card-title">SMA</h6>
                                                <small class="text-muted p-t-30 db">Pekerjaan</small>
                                                <h6 class="card-title">Ibu Rumah Tangga</h6>


                                            </div> --}}

                                            <div class="col-4 m-b-20">Foto<img
                                                    src="{{asset('storage')}}/{{$keluargaitem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$keluargaitem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>

                                        </div>
                                        <hr>

                                        <div class="row">


                                            {{-- <div class="col-lg-3 col-md-6 m-b-20">BPJS<img
                                                    src="{{asset('storage')}}/{{$keluargaitem->bpjs}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$keluargaitem->bpjs}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div> --}}
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>

                <!--Second tab-->
                <div class="tab-pane" id="tab2" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($pendidikan as $pendidikanitem)

                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$pendidikanitem->ijazah}}"
                                        alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-6">
                                                <small class="text-dark">Tingkat</small>
                                                <h6 class="card-title">{{$pendidikanitem->tingkat}}</h6>
                                                <small class="text-dark">Nama Pendidikan</small>
                                                <h6 class="card-title">{{$pendidikanitem->nama_sekolah}}</h6>
                                                <small class="text-muted p-t-30 db">Nama Kepala Sekolah/Dekan</small>
                                                <h6 class="card-title">Mr. John</h6>
                                                <small class="text-muted p-t-30 db">Alamat</small>
                                                <h6 class="card-title">Jl.Kol.Sugiono V/19</h6>

                                            </div>

                                            <div class="col-6">
                                                <small class="text-dark">No. STTB / Ijazah</small>
                                                <h6 class="card-title">12345678</h6>
                                                <small class="text-dark">Tgl STTB / Ijazah</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>
                                                <small class="text-muted p-t-30 db">Tahun Lulus</small>
                                                <h6 class="card-title">2022</h6>
                                                <small class="text-muted p-t-30 db">Biaya</small>
                                                <h6 class="card-title">Beasiswa</h6>


                                            </div>

                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Ijazah<img
                                                    src="{{asset('storage')}}/{{$pendidikanitem->ijazah}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$pendidikanitem->ijazah}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>

                                            <div class="col-lg-3 col-md-6 m-b-20">Transkrip<img
                                                    src="{{asset('storage')}}/{{$pendidikanitem->transkrip}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$pendidikanitem->transkrip}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>


                <!--third tab-->
                <div class="tab-pane" id="tab3" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($seminar as $seminaritem)

                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$seminaritem->dokumen}}"
                                        alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-6">
                                                <small class="text-dark">Nama Seminar/Diklat</small>
                                                <h6 class="card-title">{{$seminaritem->nama}}</h6>
                                                <small class="text-dark">Tempat</small>
                                                <h6 class="card-title">{{$seminaritem->tempat}}</h6>
                                                <small class="text-muted p-t-30 db">Kedudukan/Peranan</small>
                                                <h6 class="card-title">Ketua Bajak Laut</h6>
                                                <small class="text-muted p-t-30 db">Bulan/Tahun Penyelenggaraan</small>
                                                <h6 class="card-title">22 Oktober 2022</h6>

                                            </div>

                                            <div class="col-6">
                                                <small class="text-dark">Instansi Penyelenggara</small>
                                                <h6 class="card-title">BUMN Negara Bidang Pertanian</h6>



                                            </div>

                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$seminaritem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$seminaritem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>

                                            <div class="col-lg-3 col-md-6 m-b-20">Sertifikat<img
                                                    src="{{asset('storage')}}/{{$seminaritem->sertifikat}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$seminaritem->sertifikat}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>


                <!--fourth tab-->
                <div class="tab-pane" id="tab4" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($pangkat as $pangkatitem)
                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$pangkatitem->dokumen}}"
                                        alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-6">
                                                <small class="text-dark">Golongan</small>
                                                <h6 class="card-title">{{$pangkatitem->golongan}}</h6>
                                                <small class="text-dark">Angka Kredit</small>
                                                <h6 class="card-title">{{$pangkatitem->angka_kredit}}</h6>
                                                <small class="text-muted p-t-30 db">Nomor SK</small>
                                                <h6 class="card-title">6579854.2565</h6>
                                                <small class="text-muted p-t-30 db">Tanggal SK</small>
                                                <h6 class="card-title">25 Oktober 2022</h6>

                                            </div>

                                            <div class="col-6">
                                                <small class="text-dark">SK Jabatan</small>
                                                <h6 class="card-title">12345678.565</h6>
                                                <small class="text-dark">TMT Pangkat</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>
                                                <small class="text-muted p-t-30 db">Status Pangkat</small>
                                                <h6 class="card-title">Kepala Bajak Laut</h6>



                                            </div>

                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$pangkatitem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$pangkatitem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>


                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>


                <!--fifth tab-->
                {{-- <div class="tab-pane" id="tab5" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($jabatan as $jabatanitem)
                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$jabatanitem->dokumen}}"
                                        alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-4">
                                                <small class="text-dark">Jenis Jabatan</small>
                                                <h6 class="card-title">{{$jabatanitem->jenis_jabatan}}</h6>
                                                <small class="text-dark">Unit Kerja</small>
                                                <h6 class="card-title">{{$jabatanitem->unit_kerja}}</h6>
                                                <small class="text-muted p-t-30 db">Jabatan</small>
                                                <h6 class="card-title">Kepala Bajak Laut</h6>
                                                <small class="text-muted p-t-30 db">SK Jabatan</small>
                                                <h6 class="card-title">456.5659898</h6>

                                            </div>

                                            <div class="col-4">
                                                <small class="text-dark">No. SK</small>
                                                <h6 class="card-title">12345678</h6>
                                                <small class="text-dark">Tgl SK</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>
                                                <small class="text-muted p-t-30 db">PAK</small>
                                                <h6 class="card-title">2022</h6>
                                                <small class="text-muted p-t-30 db">TMT</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>

                                            </div>

                                            <div class="col-4">
                                                <small class="text-dark">Tgl Pelantikan</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>
                                                <small class="text-dark">No. Pelantikan</small>
                                                <h6 class="card-title">45645</h6>
                                                <small class="text-muted p-t-30 db">Penyumpah</small>
                                                <h6 class="card-title">Gold D. Roger</h6>
                                                <small class="text-muted p-t-30 db">No BA</small>
                                                <h6 class="card-title">565656</h6>
                                                <small class="text-dark">Tgl BA</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>

                                            </div>

                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$jabatanitem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$jabatanitem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>


                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div> --}}


                <!--Sixth tab-->
                <div class="tab-pane" id="tab6" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($cpns as $cpnsitem)
                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$cpnsitem->dokumen}}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-12">
                                                <small class="text-dark">Unit Kerja</small>
                                                <h6 class="card-title">{{$cpnsitem->unit_kerja}}</h6>
                                                <small class="text-dark">Nomor SK</small>
                                                <h6 class="card-title">{{$cpnsitem->no_sk}}</h6>
                                                <small class="text-muted p-t-30 db">Tgl SK</small>
                                                <h6 class="card-title">22 Oktober 2022</h6>
                                                <small class="text-muted p-t-30 db">Tamat CPNS</small>
                                                <h6 class="card-title">22 Oktober 2022</h6>

                                            </div>



                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$cpnsitem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$cpnsitem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>


                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>

                <!--Seventh tab-->
                {{-- <div class="tab-pane" id="tab7" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($ruangan as $ruanganitem)
                            <div class="sl-left"> <img src="{{asset('storage')}}/{{$ruanganitem->dokumen}}" alt="user"
                                    class="img-circle" /> </div>
                            <div class="sl-right">
                                <div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-12">
                                            <small class="text-dark">Nama Ruangan</small>
                                            <h6 class="card-title">{{$ruanganitem->nama_ruangan}}</h6>
                                            <small class="text-dark">Status Ruangan</small>
                                            <h6 class="card-title">{{$ruanganitem->status_ruangan}}</h6>


                                        </div>



                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                src="{{asset('storage')}}/{{$ruanganitem->dokumen}}"
                                                class="img-responsive radius" />
                                            <a href="{{asset('storage')}}/{{$ruanganitem->dokumen}}"><button
                                                    class="btn btn-success m-t-10" type="button">Download</button></a>
                                        </div>


                                    </div>
                                    <hr>

                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div> --}}

                <!--Eight tab-->
                <div class="tab-pane" id="tab8" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($gaji as $gajiitem)
                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$gajiitem->dokumen}}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-12">
                                                <small class="text-dark">Gaji Pokok</small>
                                                <h6 class="card-title">{{ 'Rp. ' . number_format($gajiitem->gaji_pokok
                                                    ??
                                                    '', 0, ',', '.') }}</h6>
                                                <small class="text-dark">Potongan BPJSKES</small>
                                                <h6 class="card-title">{{ 'Rp. ' . number_format($gajiitem->pot_bpjs
                                                    ??
                                                    '', 0, ',', '.') }}</h6>
                                                <small class="text-muted p-t-30 db">Nomor Rekening</small>
                                                <h6 class="card-title">4000 56598 5656</h6>
                                                <small class="text-muted p-t-30 db">Kenaikan Gaji</small>
                                                <h6 class="card-title">22 Oktober 2022</h6>

                                            </div>



                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$gajiitem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$gajiitem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>


                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>






                <!--ninth tab-->
                <div class="tab-pane" id="tab9" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            @foreach ($laporan as $laporanitem)
                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$laporanitem->dokumen}}"
                                        alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-6">
                                                <small class="text-dark">Judul Laporan</small>
                                                <h6 class="card-title">{{ $laporanitem->judul }}</h6>

                                                <small class="text-dark">Kronologis</small>
                                                <h6 class="card-title">{{ $laporanitem->isi }}
                                                </h6>



                                            </div>
                                            <div class="col-6">
                                                <small class="text-dark">Laporan dibuat Oleh</small>
                                                <h6 class="card-title">{{ $laporanitem->user->name }}
                                                </h6>

                                                <small class="text-dark">Laporan dibuat Pada</small>
                                                <h6 class="card-title">{{
                                                    tgl_indo($laporanitem->created_at ?? '') }}
                                                </h6>



                                            </div>



                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumentasi<img
                                                    src="{{asset('storage')}}/{{$laporanitem->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$laporanitem->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>

                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->

@endsection