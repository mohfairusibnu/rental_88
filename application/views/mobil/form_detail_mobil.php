<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="row m-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><strong><?= $judul; ?> - <?= $mobil->merk_mobil ?> <?= $mobil->nama_mobil ?></strong></h2>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?= base_url('assets/img/upload/') . $mobil->image ?>" alt="<?= $mobil->nama_mobil ?>" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-head-fixed text-nowrap">
                                        <tr>
                                            <td>Nama Mobil</td>

                                            <td>:</td>
                                            <td>
                                                <?= $mobil->nama_mobil ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Merk Mobil</td>
                                            <td>:</td>
                                            <td><?= $mobil->merk_mobil ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Rilis</td>
                                            <td>:</td>
                                            <td><?= $mobil->no_polisi ?></td>
                                        </tr>
                                        <tr>
                                            <td>No Plat</td>
                                            <td>:</td>
                                            <td><?= $mobil->jumlah_kapasitas ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Tipe Mobil</td>
                                            <td>:</td>
                                            <td><?= $mobil->nama_tipe ?></td>
                                        </tr>
                                        <tr>
                                            <td>Warna</td>
                                            <td>:</td>
                                            <td><?= $mobil->warna ?></td>
                                        </tr>
                                        <tr>
                                            <td>Transmisi</td>
                                            <td>:</td>
                                            <td><?= $mobil->jenis_transmisi ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bahan Bakar</td>
                                            <td>:</td>
                                            <td><?= $mobil->bahan_bakar ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas</td>
                                            <td>:</td>
                                            <td><?= $mobil->jumlah_kapasitas ?></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Sewa</td>
                                            <td>:</td>
                                            <td><?= $mobil->harga_sewa ?></td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td><?= $mobil->stok ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td><?php
                                                if ($mobil->stok == "0") {
                                                    echo "<span class='badge badge-danger'> TIDAK TERSEDIA </span>";
                                                } else {
                                                    echo "<span class='badge badge-success'> TERSEDIA </span>";
                                                } ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <td>
                                <a href="<?= base_url('mobil') ?>" class="btn btn-sm btn-default float-right"><i class="fa fa-reply"></i> Kembali</a>
                                <a href="<?= base_url('mobil/hapus_mobil/' . $mobil->id_mobil) ?>" class="btn btn-sm btn-secondary float-right mr-2" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                                <a href="<?= base_url('mobil/edit_mobil/' . $mobil->id_mobil) ?>" class="btn btn-sm btn-dark float-right mr-2"><i class="fa fa-edit"></i> Ubah</a>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>