<div class="row">
    @include('livewire.admin.gaji.modal')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Riwayat Gaji Pegawai</h3>
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
                            <th>No.</th>
                            <th>Action</th>
                            <th>Nama Pegawai</th>
                            <th>Gaji Pokok</th>
                            <th>Potongan BPJSKES</th>
                            <th>Potongan Pajak</th>
                            <th>SK GAJI BERKALA</th>

                        </thead>
                        <tbody>

                            @forelse ($gaji as $item)


                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td align="center"><a href="{{ url('admin/detail-gaji/'.$item->id) }}"
                                        class="badge bg-primary"><i class="fas fa-address-card"></i></a>&nbsp;

                                    <a href="#" wire:click="edit({{ $item->id }})" class="badge bg-success"
                                        data-bs-toggle="modal" data-bs-target="#editModal"><i
                                            class="far fa-edit"></i></a>&nbsp;

                                    <a href="#" wire:click="delete({{ $item->id }})" class="badge bg-danger"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td>
                                <td>{{ $item->pegawai->nama }}</td>

                                <td> {{ 'Rp. ' . number_format($item->gaji_pokok ?? '', 0, ',', '.') }}</td>
                                <td> {{ 'Rp. ' . number_format($item->pot_bpjs ?? '', 0, ',', '.') }}</td>
                                <td>{{ $item->pajak}}</td>
                                <td>{{ $item->pajak}}</td>

                                <td>
                                    @if($item->dokumen)
                                    <span class="badge bg-info">Ada</span>
                                    @else
                                    <span class="badge bg-danger">Belum</span>
                                    @endif

                                </td>





                            </tr>
                            @empty
                            <h3>Record Not Found</h3>
                            @endforelse
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