<!-- Begin Page Content -->
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
                            <tr>
                                <th>Kode Sewa</th>
                                <th>Nama Customer</th>
                                <th>Merk /Nama Mobil</th>
                                <th>Harga Sewa</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Metode Pembayaran</th>
                                <th>Denda/Hari/Kerusakan</th>
                                <th>Status</th>
                                <th>Total Bayar</th>
                            </tr>
                            <?php
                            foreach ($sewa as $s) {
                            ?>
                                <tr>
                                    <td><?= $s->kode_sewa ?></td>
                                    <td><?= $s->nama_lengkap_cust ?></td>
                                    <td><?= $s->merk_mobil ?> <?= $s->nama_mobil ?></td>
                                    <td><?= $s->harga_sewa ?></td>
                                    <td><?= $s->tgl_sewa ?></td>
                                    <td><?= $s->tgl_kembali ?></td>
                                    <td><?= $s->tgl_pengembalian ?></td>
                                    <td><?= $s->nama_mp ?></td>
                                    <td><?= $s->denda ?></td>
                                    <?php if ($s->status == "Disewa")
                                        $status = "info";
                                    else
                                        $status = "secondary";
                                    ?>
                                    <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $s->status; ?></i></td>
                                    <td><?= $s->total_bayar ?></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <a href="<?= base_url('laporan/print_laporan_sewa'); ?>" class="btn btn-dark ml-3"><i class="fas fa-print"></i> Print</a>
                    <a href="<?= base_url('laporan/pdf_laporan_sewa'); ?>" class="btn btn-dark ml-3"><i class="far fa-file-pdf"></i> Pdf</a>
                    <a href="<?= base_url('laporan/excel_laporan_sewa'); ?>" class="btn btn-dark ml-3"><i class="far fa-file-excel"></i> Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>