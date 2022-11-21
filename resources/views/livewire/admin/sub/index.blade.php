<div class="row">
    @include('livewire.admin.sub.modal')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Coba</h3>
                <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i data-feather="plus" class="me-25"></i><span>Tambah Baru</span>
                </a>
                <input type="search" wire:model="search">
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
                            <th>Nama Coba</th>
                            <th>Nama Sub</th>
                            <th>Foto</th>
                            <th>KTP</th>

                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($sub as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->coba_nama }}</td>
                                {{-- <td>{{ ucfirst($item->coba->nama) }}</td> --}}
                                <td>{{ $item->nama }}</td>
                                <td><img src="{{asset('storage')}}/{{$item->foto}}" style="width: 70px;height:70px;"
                                        alt="">
                                </td>
                                <td><img src="{{asset('storage')}}/{{$item->ktp}}" style="width: 70px;height:70px;"
                                        alt="">
                                </td>
                                <td><a href="#" wire:click="edit({{ $item->id }})" class="btn btn-success"
                                        data-bs-toggle="modal" data-bs-target="#editModal">Ubah</a>
                                    <a href="#" wire:click="detail({{ $item->id }})" class="btn btn-success"
                                        data-bs-toggle="modal" data-bs-target="#DetailModal">DETAIL</a>
                                    <a href="#" wire:click="delete({{ $item->id }})" class="btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</a>
                                </td>


                            </tr>
                            @empty
                            <h3>Record Not Found</h3>
                            @endforelse
                        </tbody>

                    </table>
                    <div>
                        {{ $sub->links() }}
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