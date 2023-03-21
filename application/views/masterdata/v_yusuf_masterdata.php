<div class="container-fluid">
    <div class="row">
    <div class="col-md-6">
        <!-- content -->

        <!-- User Access -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Access</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Aksi</th>
                            <?php $i = 1 ?>
                            <?php foreach ($user_access as $kp) : ?>
                                <tr>
                                    <th><?= $i ?></th>
                                    <td><?= $kp['name']?></td>
                                    <td><?= $kp['role_id']?></td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_u_modal<?php echo $kp['id'] ?>"> Edit</button>
                                    <a class="btn btn-danger" href="<?= base_url('c_yusuf_admin/useracces_delete/') . $kp['id']; ?>" 
                                    onclick="return confirm('Apakah Anda Yakin?');">Delete</a></td>
                                </tr>
                                <!-- modal edit user -->
                                <div class="modal fade" id="edit_u_modal<?php echo $kp['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url('c_yusuf_admin/useraccess_update/') ?>" method="post">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="edit_name" class="form-control" value="<?= $kp['name'] ?>">
                                                    <input type="hidden" name="edit_id" value="<?= $kp['id']?>">
                                                    <br>
                                                    <label>Role</label>
                                                    <select type="text" name="edit_role" class="form-control" value="<?= $kp['role_id'] ?>">
                                                        <option value="1">ADMIN</option>
                                                        <option value="2">MEMBER</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir modal edit user -->
                            <?php $i++; endforeach ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- akhir user access -->
            
        <!-- angkatan -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tahun Angkatan</h6>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <th>No</th>
                            <th>Tahun Lulus</th>
                            <th>Aksi</th>
                            <?php $i = 1 ?>
                            <?php foreach ($angkatan as $kp) : ?>
                                <tr>
                                    <th><?= $i ?></th>
                                    <td><?= $kp['angkatan_tahun']?></td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_ak_modal<?php echo $kp['angkatan_id'] ?>"> Edit</button>
                                    <a class="btn btn-danger" href="<?= base_url('c_yusuf_admin/angkatan_delete/') . $kp['angkatan_id']; ?>"
                                    onclick="return confirm('Apakah Anda Yakin?');">Delete</a></td>
                                </tr>

                                <!-- modal edit angkatan -->
                                <div class="modal fade" id="edit_ak_modal<?php echo $kp['angkatan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url('c_yusuf_admin/edit_angkatan/'.$kp['angkatan_id']) ?>" method="post">
                                                <div class="form-group">
                                                    <label>Angkatan</label>
                                                    <input type="text" name="edit_angkatan" class="form-control" value="<?= $kp['angkatan_tahun'] ?>">
                                                    <input type="hidden" name="edit_id" value="<?= $kp['angkatan_id']?>"
                                                    onclick="return confirm('Apakah Anda Yakin?');">Delete</a>>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir modal edit tahun -->

                                <!-- tambah tahun -->
                                <div class="modal fade" id="tambah_angkatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url('c_yusuf_admin/tambah_angkatan/') ?>" method="post">
                                                <div class="form-group">
                                                    <label for="angkatan_tahun">Tahun</label>
                                                    <input type="text" class="form-control" name="angkatan_tahun" id="angkatan_tahun" aria-describedby="emailHelp">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir tambah tahun -->
                            <?php $i++; endforeach ?>
                        </thead>
                    </table>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_angkatan">Tambah
                    </button>
                </div>
            </div>
        </div>
        <!-- akhir angkatan -->

        </div>
        <div class="col-md-6">

        <!-- Kompetensi -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kompetensi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <th>No</th>
                            <th>Alias</th>
                            <th>Kompetensi</th>
                            <th>Aksi</th>
                            <?php $i = 1 ?>
                            <?php foreach ($kompetensi as $kp) : ?>
                                <tr>
                                    <input type="hidden" name="alias" value="<?= $kp['alias']?>">
                                    <input type="hidden" name="kompetensi" value="<?= $kp['kompetensi']?>">
                                    <td><?= $i ?></td>
                                    <td><?= $kp['alias']?></td>
                                    <td><?= $kp['kompetensi']?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal<?php echo $i?>">EDIT</button>
                                        <a class="btn btn-danger" href="<?= base_url('c_yusuf_admin/deletekompetensi/').$kp['id']; ?>" 
                                        onclick="return confirm('Apakah Anda Yakin?');">HAPUS</a>
                                    </td>
                                    <!-- edit Modal -->
                                    <div class="modal fade" id="edit_kp_Modal<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo base_url('c_yusuf_admin/editKompetensi') ?>" method="post">
                                                <div class="form-group">
                                                    <label>Alias</label>
                                                    <input type="text" name="edit_alias" class="form-control" value="<?= $kp['alias'] ?>">
                                                    <input type="hidden" name="edit_id" value="<?= $kp['id']?>">

                                                    <label>Kompetensi</label>
                                                    <input type="text" name="edit_kp" class="form-control" value="<?= $kp['kompetensi'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- akhir edit Modal -->
                                </tr>
                            <?php $i++; endforeach?>
                        </thead>
                    </table>
                    <!-- Tombol Tambah Data -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahData">Tambah</button>
                    <!-- Modal Tambah Data -->
                        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tammbah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url('c_yusuf_admin/tambahkompetensi') ?>" method="post">
                                        <div class="form-group">
                                            <label>Alias</label>
                                            <input type="text" name="alias" class="form-control">
    
                                            <label>Kompetensi</label>
                                            <input type="text" name="kompetensi" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        </form>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- akhir Modal Tambah Data -->
                </div>
            </div>
        </div>
        <!-- akhir content -->
</div>
</div>
</div>
</div>