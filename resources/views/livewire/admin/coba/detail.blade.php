<!-- Modal DETAIL-->
<div wire:ignore.self class="modal fade" id="DetailModal" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>





            <div class="modal-body">

                <div class="row col-md-12">
                    <div class="col-md-6">
                        <label for="">Nama</label>
                        <input type="text" name="nama" wire:model.defer="sub_nama" class="form-control" />
                    </div>




                    @if ($new_foto)
                    <img src="{{$new_foto->temporaryUrl()}}" style="width: 200px;height:200px;" alt="">
                    @else
                    <img src="{{ asset('storage') }}/{{$old_foto}}" style="width: 200px;height:200px;" alt="">
                    @endif
                    <input type="hidden" wire:model='old_foto' name="" id="">



                </div>
            </div>





        </div>
    </div>
</div>