<div class="row">
    @include('livewire.admin.agama.modal')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Agama</h3>
                <a href="{{ url('admin/add')}}" class="btn btn-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#addModal">
                    <i data-feather="plus" class="me-25"></i><span>Tambah Baru</span>
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                        width="100%">

                        <thead>
                            <th>No.</th>
                            <th>Nama Agama</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($agama as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->status == '1' ? 'Non-Aktif':'Aktif' }}</td>
                                <td>
                                    <a href="#" wire:click="edit({{ $item->id }})" class="btn btn-success"
                                        data-bs-toggle="modal" data-bs-target="#editModal">Ubah</a>
                                    <a href="#" wire:click="delete({{ $item->id }})" class="btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div>
                        {{ $agama->links() }}
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
    })
</script>



@endpush