<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mt-4">
                <a href="<?= base_url('mobil/tambah_mobil') ?>" class="btn btn-dark ml-5"><i class="fas fa-car"></i> Mobil Baru</a>
            </div>
        </div><!-- /.container-fluid -->

        <div class="row ml-5 mt-5">
            <?= $this->session->flashdata('pesan') ?>
        </div>

        <div class="row mt-3 ml-5 mr-5">
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
                                    <th>Status</th>
                                    <th>Gambar</th>
                                    <th>Opsi</th>
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
                                        <td><?php
                                            if ($mb->stok == "0") {
                                                echo "<span class='badge badge-danger'> TIDAK TERSEDIA </span>";
                                            } else {
                                                echo "<span class='badge badge-success'> TERSEDIA </span>";
                                            } ?></td>
                                        <td>
                                            <picture>
                                                <source srcset="" type="image/svg+xml">
                                                <img src="<?= base_url('assets/img/upload/') . $mb->image ?>" class="img-fluid img-thumbnail" alt="...">
                                            </picture>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('mobil/edit_mobil/') . $mb->id_mobil ?>" class="btn  btn-sm btn-dark"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('mobil/hapus_mobil/') . $mb->id_mobil ?>" onclick="return confirm('Yakin Menghapus Data Mobil <?= $mb->nama_mobil ?> ?')" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                                            <a href="<?= base_url('mobil/detail_mobil/') . $mb->id_mobil ?>" class="btn  btn-sm btn-default"><i class="fas fa-eye"></i></a>
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