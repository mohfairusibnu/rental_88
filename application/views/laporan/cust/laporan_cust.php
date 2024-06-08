<div class="content-wrapper">
    <div class="content-header">
        <div class="row m-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><strong><?= $judul; ?></strong></h2>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat Customer</th>
                                    <th>Email Customer</th>
                                    <th>Jadi Customer Sejak</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $n = 1;
                                foreach ($cust as $c) { ?>
                                    <tr>
                                        <td scope="row"><?= $n++; ?></td>
                                        <td><?= $c->nama_lengkap_cust; ?></td>
                                        <td><?= $c->jenis_kelamin_cust; ?></td>
                                        <td><?= $c->alamat_cust; ?></td>
                                        <td><?= $c->email_cust; ?></td>
                                        <td><?=
                                            $c->tanggal_input_cust; ?></td>
                                        <td>
                                            <picture>
                                                <source srcset="" type="image/svg+xml">
                                                <img src="<?= base_url('assets/img/profile/') . $c->image_cust; ?>" class="img-fluid img-thumbnail" alt="...">
                                            </picture>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <a href="<?= base_url('laporan/print_laporan_cust'); ?>" class="btn btn-dark ml-3 mt-3"><i class="fas fa-print"></i> Print</a>
                    <a href="<?= base_url('laporan/pdf_laporan_cust'); ?>" class="btn btn-dark ml-3 mt-3"><i class="far fa-file-pdf"></i> Pdf</a>
                    <a href="<?= base_url('laporan/excel_laporan_cust'); ?>" class="btn btn-dark ml-3 mt-3"><i class="far fa-file-excel"></i> Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>