<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="row m-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Form <?= $judul; ?> - <?= $customer->nama_lengkap_cust ?></strong></h2>
                        </div>

                        <div class="card-body">

                            <form action="<?= base_url('admin/update_datacust'); ?>" method="post" enctype="multipart/form-data">

                                <div class="row">

                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $customer->id_cust ?>" id="id_cust" name="id_cust">
                                            <input type=" text" class="form-control form-control-user" value="<?= $customer->nama_lengkap_cust ?>" id="nama_lengkap_cust" name="nama_lengkap_cust" placeholder="Masukkan Nama Lengkap Customer">
                                            <?= form_error(
                                                'nama_lengkap_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $customer->id_cust ?>" id="id_cust" name="id_cust">
                                            <input type=" text" class="form-control form-control-user" value="<?= $customer->jenis_kelamin_cust ?>" id="jenis_kelamin_cust" name="jenis_kelamin_cust" placeholder="Pilih Jenis Kelamin" readonly>
                                            <?= form_error(
                                                'nama_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $customer->id_cust ?>" id="id_cust" name="id_cust">
                                            <input type=" text" class="form-control form-control-user" value="<?= $customer->alamat_cust ?>" id="alamat_cust" name="alamat_cust" placeholder="Masukkan Alamat Lengkap Customer">
                                            <?= form_error(
                                                'nama_lengkap_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $customer->id_cust ?>" id="id_cust" name="id_cust">
                                            <input type=" text" class="form-control form-control-user" value="<?= $customer->email_cust ?>" id="email_cust" name="email_cust" placeholder="Masukkan Email Customer" readonly>
                                            <?= form_error(
                                                'nama_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" value="<?=
                                                                                                                $customer->tanggal_input_cust; ?>" id="tanggal_input_cust" name="tanggal_input_cust" placeholder="Tanggal Bergabung" readonly>
                                            <?= form_error(
                                                'tanggal_input_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3" align="center">
                                                    <img src="<?= base_url('assets/img/upload/') . $customer->image_cust ?>" class="img-thumbnail" alt="">
                                                </div>
                                                <input type="hidden" name="old_img" value="<?= $customer->image_cust ?>">
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control form-control-user" id="image_cust" name="image_cust">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?= base_url('admin/datacust') ?>" class="btn btn-default float-right mr-2"><i class="fas fa-reply"></i> Kembali</a>
                                        <button type="reset" class="btn btn-secondary float-right mr-2"><i class="fas fa-ban"></i> Reset</button>
                                        <button type="submit" class="btn btn-dark float-right mr-2"><i class="fas fa-plus-circle"></i> Simpan</button>
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