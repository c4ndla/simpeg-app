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
                <center class="m-t-30"> <img src="{{asset('storage')}}/{{$gaji->dokumen}}" class="img-circle"
                        width="150" />
                    <h4 class="card-title m-t-10">{{ 'Rp. ' . number_format($gaji->gaji_pokok ?? '', 0, ',', '.') }}
                    </h4>
                    <h6 class="card-subtitle">Nomor Rekening : 4000 56598 5656</h6>
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
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Detail
                        Gaji</a> </li>

            </ul>
            <!-- Tab panes -->

            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">

                            <div class="sl-item">

                                <div class="sl-left"> <img src="{{asset('storage')}}/{{$gaji->dokumen}}" alt="user"
                                        class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div>
                                        <div class="row justify-content-md-center">
                                            <div class="col-12">
                                                <small class="text-dark">Gaji Pokok</small>
                                                <h6 class="card-title">{{ 'Rp. ' . number_format($gaji->gaji_pokok ??
                                                    '', 0, ',', '.') }}</h6>
                                                <small class="text-dark">Potongan BPJSKES</small>
                                                <h6 class="card-title">{{ 'Rp. ' . number_format($gaji->pot_bpjs ??
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
                                                    src="{{asset('storage')}}/{{$gaji->dokumen}}"
                                                    class="img-responsive radius" />
                                                <a href="{{asset('storage')}}/{{$gaji->dokumen}}"><button
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