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
                                <form action="<?= base_url('mobil/update_kapasitas'); ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="hidden" name="id_kapasitas" id="id_kapasitas" value="<?= $kp->id_kapasitas ?>">
                                        <input type="text" class="form-control" id="jumlah_kapasitas" name="jumlah_kapasitas" value="<?= $kp->jumlah_kapasitas ?>" placeholder="Masukkan kapasitas Mobil">
                                        <?= form_error(
                                            'jumlah_kapasitas',
                                            '<small class="text-danger pl-2">',
                                            '</small>'
                                        ); ?>
                                    </div>
                                    <button type="reset" class="btn btn-secondary float-right mr-2"><i class="fas fa-ban"></i> Reset</button>
                                    <button type="submit" class="btn btn-dark float-right mr-2"><i class="fas fa-plus-circle"></i> Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 m-5">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title"><strong>Daftar Kapasitas Mobil</strong></h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kapasitas Mobil</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($kapasitas as $kp) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $kp->jumlah_kapasitas ?></td>
                                                <td>
                                                    <a href="<?= base_url('mobil/edit_kapasitas/') . $kp->id_kapasitas ?>" class="btn  btn-sm btn-dark"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('mobil/hapus_kapasitas/') . $kp->id_kapasitas ?>" onclick="return confirm('Yakin Menghapus Kapasitas <?= $kp->jumlah_kapasitas ?> ?')" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
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