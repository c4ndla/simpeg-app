@extends('layouts.admin')

@section('content')

<!-- BEGIN: Content-->
@php
$personal = App\Models\Personal::where('id', $personal->id)->get();
@endphp
<section class="app-user-view-account">


    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card">
                <div class="card-body">

                    @foreach ($personal as $personalitem)
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded mt-3 mb-2"
                                src="{{ asset('uploads/foto/'.$personalitem->foto) }}" height="110" width="110"
                                alt="User avatar" />
                            <div class="user-info text-center">
                                <h4>{{ $personalitem->nama_depan }} {{
                                    $personalitem->nama_belakang }}</h4>
                                <span class="badge bg-light-secondary">{{ $personalitem->jabatan_struktural }}</span>
                            </div>
                        </div>
                    </div>

                    <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Nama Lengkap:</span>
                                <span>{{ $personalitem->gelar_depan }}. {{ $personalitem->nama_depan }} {{
                                    $personalitem->nama_belakang }}, {{
                                    $personalitem->gelar_belakang }}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">NIP:</span>
                                <span>{{ $personalitem->NIP }}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Status:</span>
                                <span>{{ $personalitem->status == '1' ? 'Tidak Aktif':'Aktif'
                                    }}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Jabatan Struktural:</span>
                                <span>{{ $personalitem->jabatan_struktural }}</span>

                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Jenis Kelamin:</span>
                                <span>{{ $personalitem->jenis_kelamin }}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Status Pegawai:</span>
                                <span>{{ $personalitem->status_pegawai }}</span>
                            </li>
                            <li class="mb-75">
                                <span class="fw-bolder me-25">Status Nikah:</span>
                                <span>{{ $personalitem->status_nikah }}</span>
                            </li>

                            <li class="mb-75">

                                <span class="fw-bolder me-25">Agama:</span>
                                {{-- <span>{{ ucfirst($personalitem->agama['nama']) }}</span> --}}
                                <span>{{ ucfirst($personalitem->agama->nama) }}</span>

                            </li>
                        </ul>
                        <div class="d-flex justify-content-center pt-2">
                            <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser"
                                data-bs-toggle="modal">
                                Download
                            </a>
                            <a href="javascript:;" class="btn btn-outline-danger suspend-user">Non-Aktif</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /User Card -->

        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-fill" data-bs-toggle="pill" href="#home-fill"
                        aria-expanded="true">Data Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-fill" data-bs-toggle="pill" href="#profile-fill"
                        aria-expanded="false">Riwayat Pangkat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tes-tab-fill" data-bs-toggle="pill" href="#tes-fill"
                        aria-expanded="false">Riwayat Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-tab-fill" data-bs-toggle="pill" href="#about-fill"
                        aria-expanded="false">Berkas</a>
                </li>
            </ul>
            <!--/ User Pills -->

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home-fill" aria-labelledby="home-tab-fill"
                    aria-expanded="true">
                    <!-- Billing Address -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-50">DATA PERSONAL PEGAWAI</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-7 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 fw-bolder mb-1">Company Name:</dt>
                                        <dd class="col-sm-8 mb-1">PIXINVENT</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Billing Email:</dt>
                                        <dd class="col-sm-8 mb-1">themeselection@ex.com</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Tax ID:</dt>
                                        <dd class="col-sm-8 mb-1">TAX-357378</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">VAT Number:</dt>
                                        <dd class="col-sm-8 mb-1">SDF754K77</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Billing Address:</dt>
                                        <dd class="col-sm-8 mb-1">100 Water Plant Avenue, Building 1303 Wake Island</dd>
                                    </dl>
                                </div>
                                <div class="col-xl-5 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 fw-bolder mb-1">Contact:</dt>
                                        <dd class="col-sm-8 mb-1">+1 (605) 977-32-65</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Country:</dt>
                                        <dd class="col-sm-8 mb-1">Wake Island</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">State:</dt>
                                        <dd class="col-sm-8 mb-1">Capholim</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Zipcode:</dt>
                                        <dd class="col-sm-8 mb-1">403114</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Billing Address -->

                    <!-- Billing Address -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-50">INFORMASI TEMPAT TINGGAL PEGAWAI</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-7 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 fw-bolder mb-1">Company Name:</dt>
                                        <dd class="col-sm-8 mb-1">PIXINVENT</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Billing Email:</dt>
                                        <dd class="col-sm-8 mb-1">themeselection@ex.com</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Tax ID:</dt>
                                        <dd class="col-sm-8 mb-1">TAX-357378</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">VAT Number:</dt>
                                        <dd class="col-sm-8 mb-1">SDF754K77</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Billing Address:</dt>
                                        <dd class="col-sm-8 mb-1">100 Water Plant Avenue, Building 1303 Wake Island</dd>
                                    </dl>
                                </div>
                                <div class="col-xl-5 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 fw-bolder mb-1">Contact:</dt>
                                        <dd class="col-sm-8 mb-1">+1 (605) 977-32-65</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Country:</dt>
                                        <dd class="col-sm-8 mb-1">Wake Island</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">State:</dt>
                                        <dd class="col-sm-8 mb-1">Capholim</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Zipcode:</dt>
                                        <dd class="col-sm-8 mb-1">403114</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Billing Address -->

                    <!-- Billing Address -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-50">STATUS KEPEGAWAIAN</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-7 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 fw-bolder mb-1">Company Name:</dt>
                                        <dd class="col-sm-8 mb-1">PIXINVENT</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Billing Email:</dt>
                                        <dd class="col-sm-8 mb-1">themeselection@ex.com</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Tax ID:</dt>
                                        <dd class="col-sm-8 mb-1">TAX-357378</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">VAT Number:</dt>
                                        <dd class="col-sm-8 mb-1">SDF754K77</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Billing Address:</dt>
                                        <dd class="col-sm-8 mb-1">100 Water Plant Avenue, Building 1303 Wake Island</dd>
                                    </dl>
                                </div>
                                <div class="col-xl-5 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 fw-bolder mb-1">Contact:</dt>
                                        <dd class="col-sm-8 mb-1">+1 (605) 977-32-65</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Country:</dt>
                                        <dd class="col-sm-8 mb-1">Wake Island</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">State:</dt>
                                        <dd class="col-sm-8 mb-1">Capholim</dd>

                                        <dt class="col-sm-4 fw-bolder mb-1">Zipcode:</dt>
                                        <dd class="col-sm-8 mb-1">403114</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Billing Address -->


                </div>

                <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill"
                    aria-expanded="false">

                    <!-- Activity Timeline -->
                    <div class="card">
                        <h4 class="card-header">User Activity Timeline</h4>
                        <div class="card-body pt-1">
                            <ul class="timeline ms-50">
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>User login</h6>
                                            <span class="timeline-event-time me-1">12 min ago</span>
                                        </div>
                                        <p>User login at 2:12pm</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Meeting with john</h6>
                                            <span class="timeline-event-time me-1">45 min ago</span>
                                        </div>
                                        <p>React Project meeting with john @10:15am</p>
                                        <div class="d-flex flex-row align-items-center mb-50">
                                            <div class="avatar me-50">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                    alt="Avatar" width="38" height="38" />
                                            </div>
                                            <div class="user-info">
                                                <h6 class="mb-0">Leona Watkins (Client)</h6>
                                                <p class="mb-0">CEO of pixinvent</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Create a new react project for client</h6>
                                            <span class="timeline-event-time me-1">2 day ago</span>
                                        </div>
                                        <p>Add files to new design folder</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Create Invoices for client</h6>
                                            <span class="timeline-event-time me-1">12 min ago</span>
                                        </div>
                                        <p class="mb-0">Create new Invoices and send to Leona Watkins</p>
                                        <div class="d-flex flex-row align-items-center mt-50">
                                            <img class="me-1" src="../../../app-assets/images/icons/pdf.png"
                                                alt="data.json" height="25" />
                                            <h6 class="mb-0">Invoices.pdf</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Activity Timeline -->

                </div>

                <div class="tab-pane" id="tes-fill" role="tabpanel" aria-labelledby="tes-tab-fill"
                    aria-expanded="false">
                    <!-- Activity Timeline -->
                    <div class="card">
                        <h4 class="card-header">User Activity Timeline</h4>
                        <div class="card-body pt-1">
                            <ul class="timeline ms-50">
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>User login</h6>
                                            <span class="timeline-event-time me-1">12 min ago</span>
                                        </div>
                                        <p>User login at 2:12pm</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Meeting with john</h6>
                                            <span class="timeline-event-time me-1">45 min ago</span>
                                        </div>
                                        <p>React Project meeting with john @10:15am</p>
                                        <div class="d-flex flex-row align-items-center mb-50">
                                            <div class="avatar me-50">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                    alt="Avatar" width="38" height="38" />
                                            </div>
                                            <div class="user-info">
                                                <h6 class="mb-0">Leona Watkins (Client)</h6>
                                                <p class="mb-0">CEO of pixinvent</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Create a new react project for client</h6>
                                            <span class="timeline-event-time me-1">2 day ago</span>
                                        </div>
                                        <p>Add files to new design folder</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Create Invoices for client</h6>
                                            <span class="timeline-event-time me-1">12 min ago</span>
                                        </div>
                                        <p class="mb-0">Create new Invoices and send to Leona Watkins</p>
                                        <div class="d-flex flex-row align-items-center mt-50">
                                            <img class="me-1" src="../../../app-assets/images/icons/pdf.png"
                                                alt="data.json" height="25" />
                                            <h6 class="mb-0">Invoices.pdf</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Activity Timeline -->

                    <!-- Activity Timeline -->
                    <div class="card">
                        <h4 class="card-header">User Activity Timeline</h4>
                        <div class="card-body pt-1">
                            <ul class="timeline ms-50">
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>User login</h6>
                                            <span class="timeline-event-time me-1">12 min ago</span>
                                        </div>
                                        <p>User login at 2:12pm</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Meeting with john</h6>
                                            <span class="timeline-event-time me-1">45 min ago</span>
                                        </div>
                                        <p>React Project meeting with john @10:15am</p>
                                        <div class="d-flex flex-row align-items-center mb-50">
                                            <div class="avatar me-50">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                    alt="Avatar" width="38" height="38" />
                                            </div>
                                            <div class="user-info">
                                                <h6 class="mb-0">Leona Watkins (Client)</h6>
                                                <p class="mb-0">CEO of pixinvent</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Create a new react project for client</h6>
                                            <span class="timeline-event-time me-1">2 day ago</span>
                                        </div>
                                        <p>Add files to new design folder</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div
                                            class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>Create Invoices for client</h6>
                                            <span class="timeline-event-time me-1">12 min ago</span>
                                        </div>
                                        <p class="mb-0">Create new Invoices and send to Leona Watkins</p>
                                        <div class="d-flex flex-row align-items-center mt-50">
                                            <img class="me-1" src="../../../app-assets/images/icons/pdf.png"
                                                alt="data.json" height="25" />
                                            <h6 class="mb-0">Invoices.pdf</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Activity Timeline -->






                </div>


                <div class="tab-pane" id="about-fill" role="tabpanel" aria-labelledby="about-tab-fill"
                    aria-expanded="false">
                    <!-- notifications -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-50">Notifications</h4>
                            <p class="mb-0">Change to notification settings, the user will get the update</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-nowrap text-center border-bottom">
                                <thead>
                                    <tr>
                                        <th class="text-start">Type</th>
                                        <th>✉️ Email</th>
                                        <th>🖥 Browser</th>
                                        <th>👩🏻‍💻 App</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-start">New for you</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck1"
                                                    checked />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck2" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck3" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">Account activity</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck4" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck5"
                                                    checked />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck6"
                                                    checked />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">A new browser used to sign in</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck7"
                                                    checked />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck8"
                                                    checked />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck9"
                                                    checked />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">A new device is linked</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck10" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck11"
                                                    checked />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center">
                                                <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary me-1">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                        </div>
                    </div>
                    @endforeach

                    <!--/ notifications -->
                </div>
            </div>





        </div>
        <!--/ User Content -->

    </div>

</section>
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Edit User Information</h1>
                    <p>Updating user details will receive a privacy audit.</p>
                </div>
                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                            class="form-control" placeholder="John" value="Gertrude"
                            data-msg="Please enter your first name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control"
                            placeholder="Doe" value="Barton" data-msg="Please enter your last name" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserName">Username</label>
                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                            value="gertrude.dev" placeholder="john.doe.007" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserEmail">Billing Email:</label>
                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control"
                            value="gertrude@gmail.com" placeholder="example@domain.com" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserStatus">Status</label>
                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                            aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Suspended</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Tax ID</label>
                        <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                            class="form-control modal-edit-tax-id" placeholder="Tax-8894" value="Tax-8894" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserPhone">Contact</label>
                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                            class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22"
                            value="+1 (609) 933-44-22" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLanguage">Language</label>
                        <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select"
                            multiple>
                            <option value="english">English</option>
                            <option value="spanish">Spanish</option>
                            <option value="french">French</option>
                            <option value="german">German</option>
                            <option value="dutch">Dutch</option>
                            <option value="hebrew">Hebrew</option>
                            <option value="sanskrit">Sanskrit</option>
                            <option value="hindi">Hindi</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserCountry">Country</label>
                        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select">
                            <option value="">Select Value</option>
                            <option value="Australia">Australia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center mt-1">
                            <div class="form-check form-switch form-check-primary">
                                <input type="checkbox" class="form-check-input" id="customSwitch10" checked />
                                <label class="form-check-label" for="customSwitch10">
                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                </label>
                            </div>
                            <label class="form-check-label fw-bolder" for="customSwitch10">Use as a billing
                                address?</label>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
<!-- upgrade your plan Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-upgrade-plan">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-2">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Upgrade Plan</h1>
                    <p>Choose the best plan for user.</p>
                </div>
                <form id="upgradePlanForm" class="row pt-50" onsubmit="return false">
                    <div class="col-sm-8">
                        <label class="form-label" for="choosePlan">Choose Plan</label>
                        <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                            <option selected>Choose Plan</option>
                            <option value="standard">Standard - $99/month</option>
                            <option value="exclusive">Exclusive - $249/month</option>
                            <option value="Enterprise">Enterprise - $499/month</option>
                        </select>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <button type="submit" class="btn btn-primary mt-2">Upgrade</button>
                    </div>
                </form>
            </div>
            <hr />
            <div class="modal-body px-5 pb-3">
                <h6>User current plan is standard plan</h6>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex justify-content-center me-1 mb-1">
                        <sup class="h5 pricing-currency pt-1 text-primary">$</sup>
                        <h1 class="fw-bolder display-4 mb-0 text-primary me-25">99</h1>
                        <sub class="pricing-duration font-small-4 mt-auto mb-2">/month</sub>
                    </div>
                    <button class="btn btn-outline-danger cancel-subscription mb-1">Cancel
                        Subscription</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ upgrade your plan Modal -->

<!-- END: Content-->


@endsection