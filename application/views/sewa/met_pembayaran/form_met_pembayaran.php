<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            <section class="content">
                <div class="row m-5">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title"><strong>Form <?= $judul; ?></strong></h2>
                            </div>

                            <div class="card-body">
                                <form action="<?= base_url('sewa/simpan_met_pembayaran'); ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama_mp" name="nama_mp" placeholder="Masukkan Metode Pembayaran">
                                        <?= form_error(
                                            'nama_mp',
                                            '<small class="text-danger pl-2">',
                                            '</small>'
                                        ); ?>
                                    </div>

                                    <button type="reset" class="btn btn-secondary float-right mr-2"><i class="fas fa-ban"></i> Reset</button>
                                    <button type="submit" class="btn btn-dark float-right mr-2"><i class="fas fa-plus-circle"></i> Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 m-5">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title"><strong>Daftar <?= $judul; ?></strong></h2>
                            </div>
                            <div class="card-body">

                                <?= $this->session->flashdata('pesan') ?>
                                <?= $this->session->flashdata('hapus') ?>

                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($met_pembayaran as $mp) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $mp->nama_mp ?></td>
                                                <td>
                                                    <a href="<?= base_url('sewa/edit_met_pembayaran/') . $mp->id_mp ?>" class="btn  btn-sm btn-dark"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('sewa/hapus_met_pembayaran/') . $mp->id_mp ?>" onclick="return confirm('Yakin Menghapus Metode Pembayaran <?= $mp->nama_mp ?> ?')" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>