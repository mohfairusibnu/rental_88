<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="row m-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Form <?= $judul; ?></strong></h2>
                        </div>

                        <div class="card-body">

                            <form action="<?= base_url('admin/simpan_datacust_baru'); ?>" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama_lengkap_cust" name="nama_lengkap_cust" placeholder="Masukkan Nama Customer">
                                            <?= form_error(
                                                'nama_lengkap_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <select name="jenis_kelamin_cust" class="form-control form-control-user">
                                                <option value="">- Pilih Jenis Kelamin -</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?= form_error(
                                                'jenis_kelamin_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="alamat_cust" name="alamat_cust" placeholder="Masukkan ALamat Lengkap">
                                            <?= form_error(
                                                'alamat_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email_cust" name="email_cust" placeholder="Masukkan Email Customer">
                                            <?= form_error(
                                                'email_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="password_cust" name="password_cust" placeholder="Masukkan Password Customer">
                                            <?= form_error(
                                                'password_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="confirm_password_cust" name="confirm_password_cust" placeholder="Ulangi Password Customer">
                                            <?= form_error(
                                                'confirm_password_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-user" id="image_cust" name="image_cust">
                                        </div>

                                        <a href="<?= base_url('admin/datacust') ?>" class="btn btn-default float-right"><i class="fas fa-reply"></i> Kembali</a>
                                        <button type="reset" class="btn btn-secondary float-right mr-2"><i class="fas fa-ban"></i> Reset</button>
                                        <button type="submit" class="btn btn-dark float-right mr-2"><i class="fas fa-plus-circle"></i> Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>