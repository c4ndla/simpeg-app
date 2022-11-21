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
                <center class="m-t-30"> <img src="{{asset('storage')}}/{{$pendidikan->ijazah}}" class="img-circle"
                        width="150" />
                    <h4 class="card-title m-t-10">{{ $pendidikan->nama_sekolah }}</h4>
                    <h6 class="card-subtitle">Jl. Kol. Sugiono V/19</h6>
                    <div class="row text-center justify-content-md-center">

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
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab">Data
                        Pendidikan</a> </li>

            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <!--First tab-->
                <div class="tab-pane active" id="tab1" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">

                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$pendidikan->ijazah}}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-6">
                                                <small class="text-dark">Tingkat</small>
                                                <h6 class="card-title">{{$pendidikan->tingkat}}</h6>
                                                <small class="text-dark">Nama Pendidikan</small>
                                                <h6 class="card-title">{{$pendidikan->nama_sekolah}}</h6>
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
                                                    src="{{asset('storage')}}/{{$pendidikan->ijazah}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$pendidikan->ijazah}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>

                                            <div class="col-lg-3 col-md-6 m-b-20">Transkrip<img
                                                    src="{{asset('storage')}}/{{$pendidikan->transkrip}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$pendidikan->transkrip}}"><button
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