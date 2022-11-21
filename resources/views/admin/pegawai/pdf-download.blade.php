<html>

<head>
    <title>DATA PERSONAL PEGAWAI</title>

    <style>
        h5 {
            padding: 0px;
            margin: 0px;
        }

        h3 {
            padding: 0px;
            margin: 0px;
        }
    </style>

</head>

<body>



    <img src="img1.png" alt="" align="left" width="60" height="70" style="padding-left: 10px">
    <img src="img2.png" alt="" align="right" width="80" height="75" style="padding-right: 10px">
    {{-- <img src="{{ public_path('admin/uploads/ktp/' . $item->ktp) }}" align="left" width="60" height="70"
        style="padding-left: 10px">
    <img src="{{ public_path('admin/uploads/ktp/' . $item->ktp) }}" align="right" width="60" height="70"
        style="padding-right: 10px"> --}}
    {{-- <img src="{{ storage_path('app/public/img1.png') }}" align="left" width="60" height="70"
        style="padding-left: 10px">
    <img src="{{ public_path('img1.png') }}" align="right" width="60" height="70" style="padding-right: 10px"> --}}

    <div class="row col-md-12">
        <h5 align=center>PEMERINTAH KABUPATEN PASURUAN</h5>
        <h3 align=center>RUMAH SAKIT UMUM DAERAH GRATI</h3>
        <h5 align=center>Jalan Raya Grati No.199 Ranu Klindungan Grati, Pasuruan 67184,Telp.(0343)4508999</h5>
        <h5 align=center>Website : http://rsudgrati.pasuruankab.go.id, Email : rsudgrati@yahoo.com</h5>
    </div>

    <hr style="height: 2px;
    background: black;">

    <h2 align=center style="text-decoration: underline">DAFTAR RIWAYAT HIDUP</h2>

    <!--INFORMASI DATA DIRI-->

    <h3 style="padding-left: 100px; padding-top: 10px">1. KETERANGAN PERORANGAN</h3>
    <hr>

    <img src="{{ public_path('storage')}}/{{$pegawai->foto}} " style="padding-right: 5px; padding-top: 10px"
        align="right" width="130" height="180" alt="img">
    <table style="width:100%">
        <!--FOTO-->

        <tr>

            <th></th>

        </tr>

        <tr>
            <td style="width: 30%">1. Nama Lengkap</td>
            <td>: {{ $pegawai->nama }} </td>
        </tr>

        <tr>
            <td>2. NIP / NIK</td>
            <td>: {{ $pegawai->nip }}</td>
        </tr>

        <tr>
            <td>3. No. HP (Aktif dan WA) </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>

        <tr>
            <td>4. Jabatan </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>

        <tr>
            <td>5. Status Kepegawaian </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>


        <tr>
            <td>6. Tanggal Lahir </td>
            <td>: {{ $pegawai->tgl_lahir }} </td>
        </tr>

        <tr>
            <td>7. Tempat Lahir </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>

        <tr>
            <td>8. Jenis Kelamin </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>

        <tr>
            <td>9. Agama </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>

        <tr>
            <td>10. Status Perkawinan </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>

        <tr>
            <td>11. Alamat Rumah </td>
            <td>: {{ $pegawai->nip }} </td>
        </tr>




    </table>
    <!--RIWAYAT PENDIDIKAN FORMAL-->
    <br>
    <br>
    <br>

    <hr>
    <h3 style="padding-left: 100px">2. PENDIDIKAN</h3>
    <hr>
    <table style="width:180%">
        <tr>

            <td>No. &nbsp; &nbsp; &nbsp; &nbsp;Tingkat Pendidikan &nbsp; &nbsp; &nbsp; &nbsp; Nama Pendidikan
                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Tahun Lulus&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; No.Ijazah</td>

        </tr>
        <br>
        @foreach ($pendidikan as $item)

        <tr>
            <td>{{ $loop->iteration }}. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{ $item->tingkat
                }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item->nama_sekolah
                }}</td>

        </tr>

        @endforeach
    </table>


    <br>
    <br>
    <!--RIWAYAT PENGALAMAN BEKERJA-->
    <hr>
    <h3 style="padding-left: 100px">3. RIWAYAT PENGALAMAN PEKERJAAN</h3>
    <hr>
    <table style="width:180%">
        <tr>

            <td>No. &nbsp; &nbsp; &nbsp; &nbsp; Pengalaman Bekerja &nbsp; &nbsp; &nbsp; &nbsp; Jabatan
                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Mulai dan Sampai&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;</td>

        </tr>
        <br>
        @foreach ($jabatan as $item)

        <tr>
            <td>{{ $loop->iteration }}. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ $item->unit_kerja
                }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item->jenis_jabatan
                }}</td>

        </tr>

        @endforeach

    </table>
    <br>
    <br>
    <!-- RIWAYAT ORGANISASI-->
    <hr>

    <h3 style="padding-left: 100px">4. RIWAYAT SEMINAR</h3>
    <hr>
    <table style="width:180%">
        <tr>

            <td>No. &nbsp; &nbsp; &nbsp; &nbsp; Nama &nbsp; &nbsp; &nbsp; &nbsp; Kedudukan/Peranan
                &nbsp; &nbsp; &nbsp; &nbsp; Penyelenggaraan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; Instansi Penyelenggara &nbsp; &nbsp; &nbsp; &nbsp; Tempat</td>

        </tr>
        <br>
        @foreach ($seminar as $item)

        <tr>
            <td>{{ $loop->iteration }}. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ $item->nama
                }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item->nama_sekolah
                }}</td>

        </tr>

        @endforeach
    </table>
    <br>
    <br>
    <!--KEAHLIAN YANG DIMILIKI-->
    <hr>

    <h3 style="padding-left: 100px">5. ANGGOTA KELUARGA</h3>
    <hr>
    <table style="width:180%">
        <tr>

            <td>No. &nbsp; &nbsp; &nbsp; &nbsp; Nama &nbsp; &nbsp; &nbsp; &nbsp; Hubungan Keluarga
                &nbsp; &nbsp; &nbsp; &nbsp; Tempat Tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; Jenis Kelamin &nbsp; &nbsp; &nbsp; &nbsp; Pekerjaan</td>

        </tr>
        <br>
        @foreach ($keluarga as $item)

        <tr>
            <td>{{ $loop->iteration }}. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ $item->nama
                }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item->nama_sekolah
                }}</td>

        </tr>

        @endforeach
    </table>
    <hr>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>

</html>