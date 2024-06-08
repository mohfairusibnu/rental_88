<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mt-4">
                <a href="<?= base_url('admin/tambah_datacust') ?>" class="btn btn-dark ml-5"><i class="fas fa-user"></i> Tambah Customer</a>
            </div>
        </div><!-- /.container-fluid -->

        <div class="row ml-5 mt-5">
            <?= $this->session->flashdata('pesan') ?>
        </div>

        <div class="row m-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><strong><?= $judul; ?></strong></h2>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat Customer</th>
                                    <th>Email Customer</th>
                                    <th>Jadi Customer Sejak</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $n = 1;
                                foreach ($cust as $c) { ?>
                                    <tr>
                                        <td scope="row"><?= $n++; ?></td>
                                        <td><?= $c->nama_lengkap_cust ?></td>
                                        <td><?= $c->jenis_kelamin_cust ?></td>
                                        <td><?= $c->alamat_cust ?></td>
                                        <td><?= $c->email_cust ?></td>
                                        <td><?=
                                            $c->tanggal_input_cust; ?></td>
                                        <td>
                                            <picture>
                                                <source srcset="" type="image/svg+xml">
                                                <img src="<?= base_url('assets/img/profile/') . $c->image_cust ?>" class="img-fluid img-thumbnail" alt="...">
                                            </picture>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/edit_datacust/') . $c->id_cust ?>" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url('admin/hapus_datacust/') . $c->id_cust ?>" onclick="return confirm('Kamu yakin akan menghapus Data Mobil <?= $c->nama_lengkap_cust ?> ?');" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>