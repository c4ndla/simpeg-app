@extends('layouts.pegawai')

@section('content')

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row" style="padding-top: 20px">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{asset('storage')}}/{{$laporan->dokumen}}" class="img-circle"
                        width="150" />
                    <h4 class="card-title m-t-10">Golongan : {{ $laporan->golongan }}</h4>
                    <h6 class="card-subtitle">Angka Kredit : {{ $laporan->angka_kredit }}</h6>
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

        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Riwayat
                        laporan</a> </li>

            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">

                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$laporan->dokumen}}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-6">
                                                <small class="text-dark">Golongan</small>
                                                <h6 class="card-title">{{$laporan->golongan}}</h6>
                                                <small class="text-dark">Angka Kredit</small>
                                                <h6 class="card-title">{{$laporan->angka_kredit}}</h6>
                                                <small class="text-muted p-t-30 db">Nomor SK</small>
                                                <h6 class="card-title">6579854.2565</h6>
                                                <small class="text-muted p-t-30 db">Tanggal SK</small>
                                                <h6 class="card-title">25 Oktober 2022</h6>

                                            </div>

                                            <div class="col-6">
                                                <small class="text-dark">SK Jabatan</small>
                                                <h6 class="card-title">12345678.565</h6>
                                                <small class="text-dark">TMT laporan</small>
                                                <h6 class="card-title">20 Oktober 2022</h6>
                                                <small class="text-muted p-t-30 db">Status laporan</small>
                                                <h6 class="card-title">Kepala Bajak Laut</h6>



                                            </div>

                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$laporan->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$laporan->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>


                                        </div>
                                        <hr>

                                    </div>
                                </div>
                            </div>

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