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

                            <form action="<?= base_url('mobil/simpan_mobil_baru'); ?>" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <select name="merk_mobil" class="form-control form-control-user">
                                                <option value="">- Pilih Merk Mobil -</option>
                                                <?php foreach ($merk as $key => $m) { ?>
                                                    <option value="<?= $m->merk_mobil ?>"><?= $m->merk_mobil ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= form_error(
                                                'merk_mobil',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama_mobil" name="nama_mobil" placeholder="Masukkan Nama Mobil">
                                            <?= form_error(
                                                'nama_mobil',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <select name="tahun_rilis" class="form-control form-control-user">
                                                <option value="">- Pilih Tahun Rilis -</option>
                                                <?php
                                                for ($i = date('Y'); $i > 1000; $i--) {
                                                ?>
                                                    <option value="<?= $i; ?>"><?=
                                                                                $i; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= form_error(
                                                'tahun_rilis',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="no_polisi" name="no_polisi" placeholder="Masukkan No Plat Mobil">
                                            <?= form_error(
                                                'no_polisi',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <select name="nama_tipe" class="form-control form-control-user">
                                                <option value="">- Pilih Tipe Mobil -</option>
                                                <?php foreach ($tipe as $key => $tp) { ?>
                                                    <option value="<?= $tp->nama_tipe ?>"><?= $tp->nama_tipe ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= form_error(
                                                'nama_tipe',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="warna" name="warna" placeholder="Masukkan Warna Mobil">
                                            <?= form_error(
                                                'warna',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <select name="jenis_transmisi" class="form-control form-control-user">
                                                <option value="">- Pilih Transmisi Mobil -</option>
                                                <?php foreach ($transmisi as $key => $tr) { ?>
                                                    <option value="<?= $tr->jenis_transmisi ?>"><?= $tr->jenis_transmisi ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= form_error(
                                                'transmisi',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="bahan_bakar" name="bahan_bakar" placeholder="Masukkan Bahan Bakar Mobil">
                                            <?= form_error(
                                                'bahan_bakar',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <select name="jumlah_kapasitas" class="form-control form-control-user">
                                                <option value="">- Pilih Kapasitas Mobil -</option>
                                                <?php foreach ($kapasitas as $key => $kp) { ?>
                                                    <option value="<?= $kp->jumlah_kapasitas ?>"><?= $kp->jumlah_kapasitas ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= form_error(
                                                'kapasitas',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="harga_sewa" name="harga_sewa" placeholder="Masukkan Harga Sewa Mobil (Rp.)">
                                            <?= form_error(
                                                'harga_sewa',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan Jumlah Stok Mobil">
                                            <?= form_error(
                                                'stok',
                                                '<small class="text-danger pl-2">',
                                                '</small>'
                                            ); ?>
                                        </div>


                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-user" id="image" name="image">
                                        </div>

                                        <a href="<?= base_url('mobil') ?>" class="btn btn-default float-right"><i class="fas fa-reply"></i> Kembali</a>
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