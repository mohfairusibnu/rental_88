<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental 88 | <?= $judul; ?></title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/LTE/'); ?>dist/img/logo1.png">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(''); ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('dashboard_home') ?>">Rental 88</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_home') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_home/about') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_home/contac') ?>">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Selamat Datang <b> <?= $this->session->nama_panggilan_cust; ?> </b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('cust') ?>">Profil Saya</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('sewa/detail_sewa/') ?>">Riwayat Sewa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('autentifikasi_cust/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="card" style="margin-top: 80px; margin-bottom: 50px">
            <div class="card-header">
                Form Sewa Mobil
            </div>

            <div class="card-body">
                <form action="<?= base_url('sewa/tambah_sewa_aksi') ?>" method="post">
                    <div class="form-group">
                        <label style="margin-top: 5px">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-user" id="nama_lengkap_cust" name="nama_lengkap_cust" placeholder="Masukkan Nama Lengkap">
                    </div>

                    <div class="form-group mt-3">
                        <label>Merk Mobil</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $mobil->id_mobil; ?>">
                        <input type="text" name="merk_mobil" class="form-control" value="<?php echo $mobil->merk_mobil ?>" readonly>
                    </div>

                    <div class="form-group mt-3">

                        <label>Nama Mobil</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $mobil->id_mobil; ?>">
                        <input type="text" name="nama_mobil" class="form-control" value="<?php echo $mobil->nama_mobil ?>" readonly>
                    </div>

                    <div class="form-group mt-3">

                        <label>Harga Sewa /Hari</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $mobil->id_mobil; ?>">
                        <input type="text" name="harga_sewa" class="form-control" value="<?php echo $mobil->harga_sewa; ?>" readonly>
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Tanggal Sewa</label>
                        <input type="date" name="tgl_sewa" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Metode Pembayaran</label>
                        <select name="nama_mp" class="form-control form-control-user">
                            <option value="">Pilih Metode Pembayaran </option>
                            <?php foreach ($met_pem as $key => $mp) { ?>
                                <option value="<?= $mp->nama_mp ?>"><?= $mp->nama_mp ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark float-right mr-3 mt-3"><i class="fas fa-plus-circle"></i> Simpan</button>
                    <button type="reset" class="btn btn-secondary float-right mr-3 mt-3"><i class="fas fa-ban"></i> Reset</button>
                    <a href="<?= base_url('dashboard_cust') ?>" class="btn btn-default mt-3 float-right"><i class="fas fa-reply"></i> Kembali</a>
            </div>
            </form>
        </div>
    </div>
    </div>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Rental 88 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(''); ?>assets/js/scripts.js"></script>

</body>

</html>