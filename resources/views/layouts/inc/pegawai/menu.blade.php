<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><img src="{{ asset('assets/images/users/1.jpg') }}" alt="user-img"
                            class="img-circle"><span class="hide-menu">{{
                            Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>



                <li class="nav-small-cap">--- Pegawai</li>
                <li> <a class="waves-effect waves-dark" href="{{ url('pegawai/dashboard') }}" aria-expanded="false"><i
                            class="icon-speedometer"></></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Data Pegawai</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/personal') }}">Pegawai</a></li>
                        <li><a href="{{ url('pegawai/keluarga') }}">Keluarga</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-ruler-pencil"></i><span class="hide-menu">Data Pendidikan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/pendidikan') }}">Riwayat Pendidikan</a></li>
                        <li><a href="{{ url('pegawai/seminar') }}">Riwayat Pelatihan</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-medall"></i><span class="hide-menu">Data Karir</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/pangkat') }}">Riwayat Karir</a></li>
                        {{-- <li><a href="{{ url('pegawai/jabatan') }}">Riwayat Jabatan</a></li> --}}

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-bookmark-alt"></i><span class="hide-menu">Data CPNS & PNS</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/cpns') }}">Riwayat CPNS</a></li>

                    </ul>
                </li>

                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="ti-harddrives"></i><span class="hide-menu">Data
                            Ruangan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/ruangan') }}">List Ruangan</a></li>

                    </ul>
                </li> --}}

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-envelope"></i><span class="hide-menu">Data Gaji</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/gaji') }}">Gaji Pegawai</a></li>

                    </ul>
                </li>

                <li class="nav-small-cap">--- Laporan</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Form Laporan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('pegawai/laporan') }}">Riwayat Laporan</a></li>

                    </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->