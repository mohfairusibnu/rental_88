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
                                <form action="<?= base_url('mobil/update_tipe'); ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="hidden" name="id_tipe" id="id_tipe" value="<?= $tp->id_tipe ?>">
                                        <input type="text" class="form-control" id="nama_tipe" name="nama_tipe" value="<?= $tp->nama_tipe ?>" placeholder="Masukkan Tipe Mobil">
                                        <?= form_error(
                                            'nama_tipe',
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
                                <h2 class="card-title"><strong>Daftar Tipe Mobil</strong></h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe Mobil</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tipe as $tp) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $tp->nama_tipe ?></td>
                                                <td>
                                                    <a href="<?= base_url('mobil/edit_tipe/') . $tp->id_tipe ?>" class="btn  btn-sm btn-dark"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('mobil/hapus_tipe/') . $tp->id_tipe ?>" onclick="return confirm('Yakin Menghapus tipe <?= $tp->nama_tipe ?> ?')" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
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