<div class="container-fluid">
    <!-- content -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data alumni
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Komp.Keahlian</th>
                        <th>Aksi</th>
                    </thead>
                    <?php $i = 1 ?>
                    <?php foreach ($alumni as $al) : ?>
                        <tr>
                            <input type="hidden" name="nama" value="<? $al['nama'] ?>">
                            <input type="hidden" name="jenis_kealmin" value="<? $al['jenis_kelamin'] ?>">
                            <input type="hidden" name="tempat_lahir" value="<? $al['tempat_lahir'] ?>">
                            <input type="hidden" name="tanggal_lahir" value="<? $al['tanggal_lahir'] ?>">
                            <input type="hidden" name="kompetensi" value="<? $al['kompetensi'] ?>">
                            <td><?= $i ?></td>
                            <td><?= $al['nama'] ?></td>
                            <td><?= $al['jenis_kelamin'] ?></td>
                            <td><?= $al['tempat_lahir'] ?></td>
                            <td><?= $al['tanggal_lahir'] ?></td>
                            <td><?= $al['kompetensi'] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal<?php echo $al['id']; ?>"> Edit</button>
                                <a class="btn btn-warning" href="<?= base_url('c_yusuf_admin/detailalumni/') . $al['id']; ?>">Detail</a>
                                <a class="btn btn-danger" href="<?= base_url('c_yusuf_admin/delete_DataAlumni/' . $al['id'] . '/') . $tahun; ?>" onclick="return confirm('Apakah Anda Yakin?');">Delete</a>
                            </td>
                        </tr>
                        <!-- modal edit -->
                        <div class="modal fade" id="edit_kp_Modal<?php echo $al['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Alumni</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url('c_yusuf_admin/edit_alumni/' . $al['id'] . '/' . $tahun) ?>" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $al['nama'] ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select type="text" name='jenis_kelamin' class="form-control" id="jenis_kelamin" value="<?= $al['jenis_kelamin'] ?>">
                                                            <option value="L">Laki-Laki</option>
                                                            <option value="P">Permpuan</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $al['tempat_lahir'] ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tahun_lulus">Tahun Lulus</label>
                                                        <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus" value="<?= $al['tahun_lulus'] ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="emailHelp" value="<?= $al['tanggal_lahir'] ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="nik">NIK</label>
                                                        <input type="text" class="form-control" name="nik" id="nik" value="<?= $al['nik'] ?>">
                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="nis">NIS</label>
                                                        <input type="text" class="form-control" name="nis" id="nis" aria-describedby="emailHelp" value="<?= $al['nis'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?= $al['email'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telepon">Telepon</label>
                                                        <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="emailHelp" value="<?= $al['telepon'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="emailHelp" value="<?= $al['alamat'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kompetensi">Kompetensi Keahlian</label>
                                                        <select type="text" name='kompetensi' class="form-control" name="kompetensi" id="kompetensi" value="<?= $al['kompetensi'] ?>">
                                                            <option value="<?= $al['kompetensi'] ?>">Pilih Kompetensi</option>
                                                            <?php foreach ($kompetensi as $kp) : ?>
                                                                <option value=" <?= $kp['kompetensi'] ?>">
                                                                    <?= $kp['kompetensi'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="agama">Agama</label>
                                                        <select type="text" name='agama' value="<?= $al['agama'] ?>" class="form-control" name="agama" id="agama">
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Budha">Budha</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                            <option value="Atheis">Atheis</option>
                                                            <option value="Agnostik">Agnostik</option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal edit -->
                    <?php $i++;
                    endforeach ?>

                    <!-- modal tambah data -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="<?php echo base_url('c_wisang_admin/booking') ?>" method="post">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <select type="text" name='jenis_kelamin' class="form-control" id="jenis_kelamin">
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Permpuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tahun_lulus">Tahun Lulus</label>
                                                    <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" name="nik" id="nik" aria-describedby="emailHelp">
                                                </div>

                                        </div>
                                        <div class="col-md-6">


                                            <div class="form-group">
                                                <label for="nis">NIS</label>
                                                <input type="text" class="form-control" name="nis" id="nis" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="telepon">Telepon</label>
                                                <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="kompetensi">Kompetensi Keahlian</label>
                                                <select type="text" name='kompetensi' class="form-control" name="kompetensi" id="kompetensi">
                                                    <option value="">Pilih Kompetensi</option>
                                                    <?php foreach ($kompetensi as $kp) : ?>
                                                        <option value=" <?= $kp['kompetensi'] ?>"><?= $kp['kompetensi'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select type="text" name='agama' value='' class="form-control" name="agama" id="agama">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                    <option value="Atheis">Atheis</option>
                                                    <option value="Agnostik">Agnostik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
            </table>
        </div>
    </div>
</div>
</div>
</div>