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
                                <form action="<?= base_url('mobil/update_merk'); ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="hidden" name="id_merk" id="id_merk" value="<?= $mrk->id_merk ?>">
                                        <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" value="<?= $mrk->merk_mobil ?>" placeholder="Masukkan Merk Mobil">
                                        <?= form_error(
                                            'merk_mobil',
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
                                <h2 class="card-title"><strong>Daftar Merk Mobil</strong></h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Merk Mobil</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($merk as $m) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $m->merk_mobil ?></td>
                                                <td>
                                                    <a href="<?= base_url('mobil/edit_merk/') . $m->id_merk ?>" class="btn  btn-sm btn-dark"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('mobil/hapus_merk/') . $m->id_merk ?>" onclick="return confirm('Yakin Menghapus Merk <?= $m->merk_mobil ?> ?')" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
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