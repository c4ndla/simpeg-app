<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pegawai</h3>
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

                            <th>Nama Pegawai</th>
                            <th>NIP</th>


                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    {{ $pegawai->keluarga_nama }}
                                    {{ $pegawai->nama }}

                                </td>
                            </tr>












                        </tbody>




                    </table>

                    @foreach ($keluarga as $item)
                    {{ $item->nama }}

                    @endforeach
                    <div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>