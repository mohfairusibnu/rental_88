<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ml-5 mt-3">
                <?= $this->session->flashdata('pesan') ?>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-12 ml-2 mt-3">
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
                                <th>Tanggal Ambil</th>
                                <th>Tanggal Kembali</th>
                                <th>Metode Pembayaran</th>
                                <th>Status</th>
                                <th>Denda/Hari/Kerusakan</th>
                                <th>Opsi</th>
                            </tr>
                            <?php
                            foreach ($daftar_sewa as $ds) {
                            ?>
                                <tr>
                                    <td><a class=" btn-link" href="<?= base_url('sewa/detail_daftarsewa/' . $ds->kode_sewa); ?>"><?= $ds->kode_sewa; ?></a></td>
                                    <td><?= $ds->nama_lengkap_cust ?></td>
                                    <td><?= $ds->merk_mobil ?> <?= $ds->nama_mobil ?></td>
                                    <td><?= $ds->harga_sewa ?></td>
                                    <td><?= $ds->tgl_sewa ?></td>
                                    <td><?= $ds->batas_ambil ?></td>
                                    <td><?= $ds->tgl_kembali ?></td>
                                    <td><?= $ds->nama_mp ?></td>
                                    <?php if ($ds->status == "Dibooking")
                                        $status = "warning";
                                    else
                                        $status = "info";
                                    ?>
                                    <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $ds->status; ?></i></td>
                                    <form action="<?= base_url('sewa/sewaAct/' . $ds->kode_sewa); ?>" method="post">
                                        <td>
                                            <input class="form-check-user rounded-sm" style="width:100px" type="text" name="denda" id="denda" value="Rp. ">
                                            <?= form_error(); ?>
                                        </td>
                                        <td nowrap>
                                            <button type="submit" class="btn btn-sm btn-outline-dark"><i class="fas fa-fw fa-cart-plus"></i> SEWA</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>