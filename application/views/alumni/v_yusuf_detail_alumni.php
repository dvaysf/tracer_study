<div class="container-fluid">
    <!-- content -->
    <div class="row">
    </div>
    <div class="col-6">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Identitas</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="formGroupExampleInput">NIS</label>
                <input type="text" class="form-control" id="nis" value="<?= $alumni['nis']?>" readonly>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Nama</label>
                <input type="text" class="form-control" id="nama" value="<?= $alumni['nama']?>" readonly>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Jurusan</label>
                <input type="text" class="form-control" id="kompetensi" value="<?= $alumni['kompetensi']?>" readonly>
            </div>
        </div>
    </div>

    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Alumni
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Detail</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Status</th>
                        <th>Instansi</th>
                        <th>Departemen</th>
                        <th>Ket.</th>
                    </thead>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama</label>
                            <input type="text" class="form-control" id="nama" value="<?= $alumni['nama']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Status</label>
                            <select type="text" class="form-control" id="nama" value="" >
                                <option>Pilih Status</option>
                                <option>Bekerja</option>
                                <option>Melanjutkan</option>
                                <option>Wirausaha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Instansi/universitas</label>
                            <input type="text" class="form-control" id="nama" value="" >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Departemen/Jurusan</label>
                            <input type="text" class="form-control" id="nama" value="" >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Alamat</label>
                            <input type="text" class="form-control" id="nama" value="" >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Salari</label>
                            <select type="text" class="form-control" id="nama" value="" >
                                <option>Salari</option>
                                <option value="1">Kurang dari 1.000.000</option>
                                <option value="2">1.000.000 s.d. 2.000.000</option>
                                <option value="3">2.000.000 s.d. 3.000.000</option>
                                <option value="4">Diatas 3.000.000</option>
                            </select>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </table>
                <button onclick="history.back()" class="btn btn-sm btn-primary">Kembali</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>