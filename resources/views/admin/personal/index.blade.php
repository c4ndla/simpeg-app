@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Personal Pegawai</h3>
                <a href="{{ url('admin/add') }}" class="btn btn-primary btn-sm float-end">
                    <i data-feather="plus" class="me-25"></i><span>Tambah Baru</span>
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                        width="100%">
                        <thead style="text-align:center">
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Nama</th>
                                <th colspan="3">Jabatan</th>
                                <th colspan="2">Image</th>
                                {{-- <th rowspan="2">Status</th> --}}
                                <th rowspan="2">Aksi</th>
                            </tr>

                            <tr>
                                <th>NIP</th>
                                <th>Struktural</th>
                                <th>Status Pegawai</th>
                                <th>Foto</th>
                                <th>KTP</th>
                            </tr>
                        </thead>


						
                        <tbody style="text-align:center; font-weight: 400;">
                            @foreach ($personal as $item)
                            <tr>
                                <td style="width:5%">{{ $loop->iteration }}</td>
                                <td style="width:25%">{{ $item->gelar_depan }}. {{ $item->nama_depan }} {{
                                    $item->nama_belakang }}, {{
                                    $item->gelar_belakang }}</td>
                                <td style="width:20%">{{ $item->NIP }}</td>
                                <td>{{ $item->jabatan_struktural }}</td>
                                <td>{{ $item->status_pegawai }}</td>

                                {{-- <td>{{ $item->foto == '1' ? 'Tidak Ada':'Ada' }}
                                </td>
                                <td>{{ $item->ktp == '1' ? 'Tidak Ada':'Ada' }}</td> --}}
                                <td><img src="{{ asset('uploads/foto/'.$item->foto) }}" width="50px" height="50px"
                                        alt="img"></td>
                                <td><img src="{{ asset('uploads/ktp/'.$item->ktp) }}" width="50px" height="50px"
                                        alt="img"></td>


                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                            data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('admin/view/') }}">
                                                <i data-feather="search" class="me-50"></i>
                                                <span>Review</span>
                                            </a>
                                            <a class="dropdown-item"
                                                href="{{ url('admin/detail-personal/'.$item->id) }}">
                                                <i data-feather="search" class="me-50"></i>
                                                <span>Detail</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ url('admin/edit-personal/'.$item->id)}}">
                                                <i data-feather="edit-2" class="me-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ url('admin/del-personal/'.$item->id) }}">
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