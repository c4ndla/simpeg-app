@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Keluarga Pegawai</h3>
                <a href="{{ url('admin/add-keluarga') }}" class="btn btn-primary btn-sm float-end">
                    <i data-feather="plus" class="me-25"></i><span>Tambah Baru</span>
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0" width="100%">
                        <thead style="text-align:center">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama Pegawai</th>
                                <th colspan="3">Detail</th>
                                <th colspan="2">Dokumen</th>
                                <th rowspan="2">Aksi</th>


                            </tr>

                            <tr>
                                <th>Nama Keluarga</th>
                                <th>Hubungan</th>
                                <th>Jenis Kelamin</th>
                                <th>Kartu Keluarga</th>
                                <th>Dokumen</th>


                            </tr>
                        </thead>
                        <tbody style="text-align:center; font-weight: 400;">
                            @php
                            $keluarga = App\Models\Keluarga::get();
                            @endphp

                            @foreach ($keluarga as $keluargaitem)
                            <tr>
                                <td style="width:5%">{{ $loop->iteration }}</td>
                                <td style="width:25%">{{
                                    ucfirst($keluargaitem->personal->gelar_depan) }} {{
                                    ucfirst($keluargaitem->personal->nama_depan) }} {{
                                    ucfirst($keluargaitem->personal->nama_belakang) }} {{
                                    ucfirst($keluargaitem->personal->gelar_belakang) }}</td>
                                <td style="width:20%">{{ $keluargaitem->nama }}</td>
                                <td>{{ $keluargaitem->hubungan }}</td>
                                <td>{{ $keluargaitem->jenis_kelamin }}</td>
                                {{-- <td>{{ $item->foto == '1' ? 'Tidak Ada':'Ada' }}
                                </td>
                                <td>{{ $item->ktp == '1' ? 'Tidak Ada':'Ada' }}</td> --}}
                                <td><img src="{{ asset('uploads/kk/'.$keluargaitem->kk) }}" width="50px" height="50px" alt="img"></td>
                                <td><img src="{{ asset('uploads/dokumen/'.$keluargaitem->dokumen) }}" width="50px" height="50px" alt="img"></td>


                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a class="dropdown-item" href="{{ url('admin/edit-keluarga/'.$keluargaitem->id)}}">
                                                <i data-feather="edit-2" class="me-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ url('admin/del-keluarga/'.$keluargaitem->id) }}">
                                                <i data-feather="trash" class="me-50"></i>
                                                <span>Delete</span>

                                            </a>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
    </div>
</div>
</div>

@endsection