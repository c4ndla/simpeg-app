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
                <center class="m-t-30">

                    @if($keluarga->dokumen)
                    <img src="{{asset('storage')}}/{{$keluarga->dokumen}}" class="img-circle" width="150" />
                    @else
                    <span class="badge bg-danger">Tidak ada Foto</span>
                    @endif

                    <h4 class="card-title m-t-10">{{ $keluarga->nama }}</h4>
                    <h6 class="card-subtitle">{{ $keluarga->hubungan }}</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                <font class="font-medium">254</font>
                            </a></div>
                        <div class="col-6"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                <font class="font-medium">2</font>
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
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="tab1" role="tab">Data
                        Keluarga</a> </li>

            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <!--First tab-->
                <div class="tab-pane active" id="tab1" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">

                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$keluarga->dokumen}}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-12">
                                                <small class="text-dark">Nama Lengkap</small>
                                                <h6 class="card-title">{{$keluarga->nama}}</h6>
                                                <small class="text-dark">Hubungan Keluarga</small>
                                                <h6 class="card-title">{{$keluarga->hubungan}}</h6>
                                                <small class="text-muted p-t-30 db">Jenis Kelamin</small>
                                                <h6 class="card-title">{{$keluarga->jenis_kelamin}}</h6>
                                                {{-- <small class="text-muted p-t-30 db">Alamat</small>
                                                <h6 class="card-title">Jl.Kol.Sugiono V/19</h6> --}}

                                            </div>

                                            {{-- <div class="col-6">
                                                <small class="text-dark">No.BPJS</small>
                                                <h6 class="card-title">12345678</h6>
                                                <small class="text-dark">Pendidikan Terakhir</small>
                                                <h6 class="card-title">SMA</h6>
                                                <small class="text-muted p-t-30 db">Pekerjaan</small>
                                                <h6 class="card-title">Ibu Rumah Tangga</h6>
                                            </div> --}}

                                        </div>


                                        {{-- <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20">Dokumen<img
                                                    src="{{asset('storage')}}/{{$keluarga->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$keluarga->dokumen}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>

                                            <div class="col-lg-3 col-md-6 m-b-20">BPJS<img
                                                    src="{{asset('storage')}}/{{$keluarga->bpjs}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$keluarga->bpjs}}"><button
                                                        class="btn btn-success m-t-10"
                                                        type="button">Download</button></a>
                                            </div>
                                        </div> --}}
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