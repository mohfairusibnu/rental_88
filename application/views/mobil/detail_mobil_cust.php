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
                        <a class="nav-link" href="<?= base_url('dashboard_cust/about') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_cust/contac') ?>">Kontak</a>
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

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">

                <div class="row m-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title"><strong><?= $judul; ?> - <?= $mobil->merk_mobil ?> <?= $mobil->nama_mobil ?></strong></h2>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?= base_url('assets/img/upload/') . $mobil->image ?>" alt="<?= $mobil->nama_mobil ?>" class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-head-fixed text-nowrap">
                                            <tr>
                                                <td>Nama Mobil</td>
                                                <td>:</td>
                                                <td>
                                                    <?= $mobil->nama_mobil ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Merk Mobil</td>
                                                <td>:</td>
                                                <td><?= $mobil->merk_mobil ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Rilis</td>
                                                <td>:</td>
                                                <td><?= $mobil->tahun_rilis ?></td>
                                            </tr>
                                            <tr>
                                                <td>No Plat</td>
                                                <td>:</td>
                                                <td><?= $mobil->no_polisi ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Tipe Mobil</td>
                                                <td>:</td>
                                                <td><?= $mobil->nama_tipe ?></td>
                                            </tr>
                                            <tr>
                                                <td>Warna</td>
                                                <td>:</td>
                                                <td><?= $mobil->warna ?></td>
                                            </tr>
                                            <tr>
                                                <td>Transmisi</td>
                                                <td>:</td>
                                                <td><?= $mobil->jenis_transmisi ?></td>
                                            </tr>
                                            <tr>
                                                <td>Bahan Bakar</td>
                                                <td>:</td>
                                                <td><?= $mobil->bahan_bakar ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kapasitas</td>
                                                <td>:</td>
                                                <td><?= $mobil->jumlah_kapasitas ?></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Sewa</td>
                                                <td>:</td>
                                                <td><?= $mobil->harga_sewa ?></td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>:</td>
                                                <td><?= $mobil->stok ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td><?php
                                                    if ($mobil->stok == "0") {
                                                        echo "<span ='badge badge-danger'> TIDAK TERSEDIA </span>";
                                                    } else {
                                                        echo "<span ='badge badge-success'> TERSEDIA </span>";
                                                    } ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <td>
                                    <a href="<?= base_url('sewa/tambah_sewa/' . $mobil->id_mobil) ?>" class="btn  btn-dark float-right"><i class="fa fa-reply"></i> Sewa</a>
                                    <a href="<?= base_url('dashboard_cust') ?>" class="btn  btn-default float-right"><i class="fa fa-reply"></i> Kembali</a>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
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