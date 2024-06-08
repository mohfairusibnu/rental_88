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
                                <form action="<?= base_url('mobil/update_transmisi'); ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="hidden" name="id_transmisi" id="id_transmisi" value="<?= $tr->id_transmisi ?>">
                                        <input type="text" class="form-control" id="jenis_transmisi" name="jenis_transmisi" value="<?= $tr->jenis_transmisi ?>" placeholder="Masukkan Transmisi Mobil">
                                        <?= form_error(
                                            'jenis_transmisi',
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
                                <h2 class="card-title"><strong>Daftar Transmisi Mobil</strong></h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Transmisi Mobil</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($transmisi as $tr) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $tr->jenis_transmisi ?></td>
                                                <td>
                                                    <a href="<?= base_url('mobil/edit_transmisi/') . $tr->id_transmisi ?>" class="btn  btn-sm btn-dark"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('mobil/hapus_transmisi/') . $tr->id_transmisi ?>" onclick="return confirm('Yakin Menghapus Transmisi <?= $tr->jenis_transmisi ?> ?')" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
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