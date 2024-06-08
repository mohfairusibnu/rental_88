<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

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
                                        <th>Merk Mobil</th>
                                        <th>Nama Mobil</th>
                                        <th>Tahun Rilis</th>
                                        <th>No Plat</th>
                                        <th>Tipe Mobil</th>
                                        <th>Warna</th>
                                        <th>Transmisi</th>
                                        <th>Bahan Bakar</th>
                                        <th>Kapasitas</th>
                                        <th>Harga Sewa</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($mobil as $mb) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $mb->merk_mobil ?></td>
                                            <td><?= $mb->nama_mobil ?></td>
                                            <td><?= $mb->tahun_rilis ?></td>
                                            <td><?= $mb->no_polisi ?></td>
                                            <td><?= $mb->nama_tipe ?></td>
                                            <td><?= $mb->warna ?></td>
                                            <td><?= $mb->jenis_transmisi ?></td>
                                            <td><?= $mb->bahan_bakar ?></td>
                                            <td><?= $mb->jumlah_kapasitas ?></td>
                                            <td><?= $mb->harga_sewa ?></td>
                                            <td><?= $mb->stok ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="<?= base_url('laporan/print_laporan_mobil'); ?>" class="btn btn-dark ml-3 mt-3"><i class="fas fa-print"></i> Print</a>
                    <a href="<?= base_url('laporan/pdf_laporan_mobil'); ?>" class="btn btn-dark ml-3 mt-3"><i class="far fa-file-pdf"></i> Pdf</a>
                    <a href="<?= base_url('laporan/excel_laporan_mobil'); ?>" class="btn btn-dark ml-3 mt-3"><i class="far fa-file-excel"></i> Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>