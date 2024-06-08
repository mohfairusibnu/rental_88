<div class="content-wrapper">
    <div class="content-header">
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
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Admin</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat Admin</th>
                                    <th>Email Admin</th>
                                    <th>Jadi Admin Sejak</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $n = 1;
                                foreach ($admin as $a) { ?>
                                    <tr>
                                        <td scope="row"><?= $n++; ?></td>
                                        <td><?= $a->nama_lengkap_admin; ?></td>
                                        <td><?= $a->jenis_kelamin_admin; ?></td>
                                        <td><?= $a->alamat_admin; ?></td>
                                        <td><?= $a->email_admin; ?></td>
                                        <td><?=
                                            $a->tanggal_input_admin; ?></td>
                                        <td>
                                            <picture>
                                                <source srcset="" type="image/svg+xml">
                                                <img src="<?= base_url('assets/img/upload/') . $a->image_admin; ?>" class="img-fluid img-thumbnail" alt="...">
                                            </picture>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>