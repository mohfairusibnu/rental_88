<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="row m-5">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><strong><?= $judul; ?> - <?= $daftar_sewa->kode_sewa ?></strong></h2>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-head-fixed text-nowrap">
                                        <tr>
                                            <td>Kode Sewa</td>
                                            <td>:</td>
                                            <td>
                                                <?= $daftar_sewa->kode_sewa ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Customer</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->nama_lengkap_cust ?></td>
                                        </tr>
                                        <tr>
                                            <td>Merk Mobil</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->merk_mobil ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Mobil</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->nama_mobil ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Harga Sewa</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->harga_sewa ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Sewa</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->tgl_sewa ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Ambil</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->batas_ambil ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Kembali</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->tgl_kembali ?></td>
                                        </tr>
                                        <tr>
                                            <td>Denda/Hari/Kerusakan</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->denda ?></td>
                                        </tr>
                                        <tr>
                                            <td>Metode Pembayaran</td>
                                            <td>:</td>
                                            <td><?= $daftar_sewa->nama_mp ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Pembayaran</td>
                                            <td>:</td>
                                            <td><?php
                                                if ($daftar_sewa->status == "Dikembalikan") {
                                                    echo "<span class='badge badge-success'> SUDAH LUNAS </span>";
                                                } else {
                                                    echo "<span class='badge badge-danger'> BELUM LUNAS </span>";
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Penyewaan</td>
                                            <td>:</td>
                                            <?php if ($daftar_sewa->status == "Dibooking")
                                                $status = "warning";
                                            else
                                                $status = "info";
                                            ?>
                                            <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $daftar_sewa->status; ?></i>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <td><a href="#" onclick="window.history.go(-1)" class="btn btn-default float-right"><i class="fas fa-fw fa-reply"></i> Kembali</a></td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>