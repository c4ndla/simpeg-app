<div class="row">
    @include('livewire.pegawai.personal.modal')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pegawai</h3>
                <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i data-feather="plus" class="me-25"></i><span>Tambah Baru</span>
                </a>
            </div>


            <div class="card-body">
                <div class="table-responsive m-t-40">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        <strong>{{session('success')}}</strong>
                    </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <strong>{{session('error')}}</strong>
                    </div>
                    @endif
                    <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                        width="100%">

                        <thead>

                            <th>Action</th>
                            <th>foto</th>
                            <th>Nama Pegawai</th>
                            <th>NIP</th>
                            <th>NIK</th>

                            <th>Tgl Lahir</th>
                            <th>Nama Ruangan</th>
                            <th>ktp</th>
                            <th>npwp</th>
                            <th>ktp</th>
                            <th>npwp</th>

                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)

                            @if ($item->user->id == Auth::user()->id)
                            <tr>

                                <td align="center"><a href="{{ url('pegawai/detail-personal/'.$item->id) }}"
                                        class="badge bg-primary"><i class="fas fa-address-card"></i></a>&nbsp;

                                    <a href="{{ url('pegawai/pdf-personal/'.$item->id) }}" class="badge bg-info"><i
                                            class="fas fa-download"></i></a>&nbsp;


                                    <a href="#" wire:click="edit({{ $item->id }})" class="badge bg-success"
                                        data-bs-toggle="modal" data-bs-target="#editModal"><i
                                            class="far fa-edit"></i></a>&nbsp;


                                </td>
                                <td>@if($item->foto)
                                    <img src="{{asset('storage')}}/{{$item->foto}}" style="width: 70px;height:70px;"
                                        alt="">
                                    @else
                                    <span class="badge bg-danger">Belum</span>
                                    @endif
                                </td>
                                <td>{{$item->gelar_depan}} {{$item->nama}} {{$item->gelar_belakang}}</td>

                                <td>{{$item->nip}}</td>
                                <td>{{$item->nik}}</td>


                                <td>{{ tgl_indo($item->tgl_lahir ?? '') }}</td>

                                <td>{{$item->nama_ruang}}</td>
                                <td>
                                    @if($item->ktp)
                                    <span class="badge bg-info">Ada</span>
                                    @else
                                    <span class="badge bg-danger">Belum</span>
                                    @endif

                                </td>

                                <td>
                                    @if($item->npwp)
                                    <span class="badge bg-info">Ada</span>
                                    @else
                                    <span class="badge bg-danger">Belum</span>
                                    @endif

                                </td>

                                <td>
                                    @if($item->kerja)
                                    <span class="badge bg-info">Ada</span>
                                    @else
                                    <span class="badge bg-danger">Belum</span>
                                    @endif

                                </td>

                                <td>
                                    @if($item->bpjs)
                                    <span class="badge bg-info">Ada</span>
                                    @else
                                    <span class="badge bg-danger">Belum</span>
                                    @endif

                                </td>



                                {{-- @empty
                                <td>Record Not Found</td> --}}
                            </tr>
                            @else

                            @endif

                            @endforeach


                        </tbody>

                    </table>
                    <div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event =>{
        $('#addModal').modal('hide');
        $('#editModal').modal('hide');
        $('#deleteModal').modal('hide');
    });

     // Add the following code if you want the name of the file appear on select
     $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
</script>



@endpush