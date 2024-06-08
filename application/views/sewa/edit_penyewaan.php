<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="row m-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Form <?= $judul; ?> - <?= $sewa->kode_sewa ?></strong></h2>
                        </div>

                        <div class="card-body">

                            <form action="<?= base_url('sewa/update_dataSewa'); ?>" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa" placeholder="Kode Sewa" readonly>
                                            <?= form_error(
                                                'kode_sewa',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->nama_lengkap_cust ?>" id="nama_lengkap_cust" name="nama_lengkap_cust" placeholder="Nama Customer" readonly>
                                            <?= form_error(
                                                'nama_lengkap_cust',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->merk_mobil ?>" id="merk_mobil" name="merk_mobil" placeholder="Merk Mobil" readonly>
                                            <?= form_error(
                                                'merk_mobil',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->nama_mobil ?>" id="nama_mobil" name="nama_mobil" placeholder="Nama Mobil" readonly>
                                            <?= form_error(
                                                'nama_mobil',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->harga_sewa ?>" id="harga_sewa" name="harga_sewa" placeholder="Harga Sewa" readonly>
                                            <?= form_error(
                                                'harga_sewa',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->tgl_sewa ?>" id="tgl_sewa" name="tgl_sewa" placeholder="Tanggal Sewa" readonly>
                                            <?= form_error(
                                                'tgl_sewa',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->tgl_kembali ?>" id="tgl_kembali" name="tgl_kembali" placeholder="Tanggal Kembali" readonly>
                                            <?= form_error(
                                                'tgl_kembali',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type="date" class="form-control " name="tgl_pengembalian">
                                            <?= form_error(
                                                'tgl_pengembalian',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input type=" text" class="form-control form-control-user" value="<?= $sewa->nama_mp ?>" id="nama_mp" name="nama_mp" placeholder="Metode Pembayaran" readonly>
                                            <?= form_error(
                                                'nama_mp',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input class="form-check-user rounded-sm" style="width:100px" type="text" name="denda" id="denda" value="<?= $sewa->denda ?>">
                                            <?= form_error(
                                                'denda',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" value="<?= $sewa->kode_sewa ?>" id="kode_sewa" name="kode_sewa">
                                            <input class="form-check-user rounded-sm" style="width:100px" type="text" name="total_bayar" id="total_bayar" value="Rp. ">
                                            <?= form_error(
                                                'total_bayar',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <a href="<?= base_url('sewa') ?>" class="btn btn-default float-right"><i class="fas fa-reply"></i> Kembali</a>
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